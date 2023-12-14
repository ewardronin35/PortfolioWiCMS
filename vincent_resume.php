<?php
require_once "user2/db.php";

// Assuming you pass the resume ID as a parameter in the URL
if (isset($_GET['resume_id'])) {
    $resumeId = $_GET['resume_id'];

    // Fetch the resume data from the database using prepared statements
    $query = "SELECT resume_file, file_type FROM resumes WHERE id = ?";
    $stmt = $dbcon->prepare($query);
    
    if ($stmt) {
        $stmt->bind_param("i", $resumeId);
        $stmt->execute();
        $stmt->bind_result($resumeFile, $fileType);
        
        if ($stmt->fetch()) {
            // Set the appropriate headers for file download
            header("Content-Type: $fileType");
            header("Content-Disposition: attachment; filename=your_resume.pdf");
            header("Content-Length: " . strlen($resumeFile));

            // Output the BLOB data
            echo $resumeFile;
            exit;
        } else {
            echo "Resume not found.";
        }

        $stmt->close();
    } else {
        echo "Error preparing statement: " . $dbcon->error;
    }
} else {
    echo "Resume ID not provided.";
}
?>
