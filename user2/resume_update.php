<?php
require_once "user_auth.php";
$title = "profile";
require_once "header.php";
require_once "db.php";

$email = $_SESSION['user_email'];

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    // Handle file upload
    $uploadDir = __DIR__ . '/resume/';
    $uploadFile = $uploadDir . basename($_FILES['resume']['name']);

    // Remove existing resume file
    $query = "SELECT resume_file FROM resumes WHERE email='$email'";
    $result = $dbcon->query($query);
    $row = $result->fetch_assoc();
    $existingResumeFile = $row['resume_file'];
    $existingResumePath = $uploadDir . $existingResumeFile;
    
    if (file_exists($existingResumePath)) {
        unlink($existingResumePath);
    }

    if (move_uploaded_file($_FILES['resume']['tmp_name'], $uploadFile)) {
        // File upload successful, update the database with the new filename
        $newResumeFile = basename($_FILES['resume']['name']);
        $query = "UPDATE resumes SET resume_file='$newResumeFile' WHERE email='$email'";
        $result = $dbcon->query($query);

        if ($result) {
            echo "Resume updated successfully!";
            echo "File Size: " . $_FILES['resume']['size'] . " bytes";
        } else {
            echo "Error updating resume: " . $dbcon->error;
        }
    } else {
        echo "Error uploading file.";
    }
}

// Fetch the updated resume filename from the database
$query = "SELECT resume_file FROM resumes WHERE email='$email'";
$result = $dbcon->query($query);
$row = $result->fetch_assoc();
$resumeFile = $row['resume_file'];
$resumeFilePath = 'user2/resume/' . $resumeFile; // Construct the file path

?>

<!-- Start Page content -->
<div class="card text-dark mb-3">
    <div class="card-header bg-success text-center"><h2>Resume</h2></div>
    <div class="card-body">
        <form action="resume_update.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="resume">Choose a file</label>
                <input type="file" class="form-control-file" name="resume" accept=".pdf, .doc, .docx">
            </div>

            <div class="form-group">
                <input class="btn btn-block btn-success" type="submit" value="Update Resume" name="submit">
            </div>
        </form>

        
      
    </div>
</div>

<!-- ============ footer content =============== -->
<?php
require_once "footer.php";
?>
