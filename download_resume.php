<?php
require_once "admin/db.php";

// Assuming you pass the resume ID as a parameter in the URL
if (isset($_GET['resume_id'])) {
    $resumeId = $_GET['resume_id'];

    // Fetch the resume data from the database
    $query = "SELECT resume_file FROM resumes WHERE id = $resumeId";
    $result = $dbcon->query($query);

    if ($result) {
        $row = $result->fetch_assoc();

        // Set the appropriate headers for file download
        header("Content-Type: " . $row['file_type']);
        header("Content-Disposition: attachment; filename=your_resume.pdf");
        header("Content-Length: " . strlen($row['resume_file']));

        // Output the BLOB data
        echo $row['resume_file'];
        exit;
    } else {
        echo "Error fetching resume: " . $dbcon->error;
    }
} else {
    echo "Resume ID not provided.";
}
?>
