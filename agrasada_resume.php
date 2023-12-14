<?php
// Check if the file parameter is present
if (isset($_POST['file'])) {
    // Get the filename from the POST data
    $filename = basename($_POST['file']);

    // Set the appropriate headers for a file download
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="' . $filename . '"');
    
    // Output the file content
    readfile($_POST['file']);
} else {
    // Handle the case where the file parameter is missing
    echo "File not specified.";
}
?>
