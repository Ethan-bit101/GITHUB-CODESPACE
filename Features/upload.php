<!DOCTYPE html>
<html>
<?php
$targetDir = "images/";   // The directory where you want to save the uploaded images
$fileName = basename($_FILES["imageFile"]["name"]);
$targetPath = $targetDir . $fileName;

// Check if a file was actually selected for upload
if ($_FILES["imageFile"]["error"] === UPLOAD_ERR_NO_FILE) {
  echo "Please select a file to upload.";
} else {
  // Check if the file was uploaded successfully
  if ($_FILES["imageFile"]["error"] === UPLOAD_ERR_OK) {
    // Check if the directory exists or create it if it doesn't
    if (!is_dir($targetDir)) {
      mkdir($targetDir, 0777, true);
    }
    
    if (move_uploaded_file($_FILES["imageFile"]["tmp_name"], $targetPath)) {
      // The file upload was successful
      // You can now redirect the user to the Home.html page
      header("Location: Home.html");
      exit;  // Make sure to exit the script after the redirect
    } else {
      // Handle the case where the file upload failed
      echo "Sorry, there was an error uploading your file.";
    }
  } else {
    // Handle other possible errors during file upload
    echo "Sorry, there was an error uploading your file.";
  }
}
?>
</html>
