<?php
// Include the database configuration file
include 'components/connection.php';
$statusMsg = '';

// File upload path
$targetDir = "uploads/";
$productname = $_POST['name'];
$price = $_POST['price'];
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){

 // Allow certain file formats

 // $allowTypes = array('jpg','png','jpeg','gif','pdf','jfif');
 $allowTypes = array('png','jfif','jpg');
 if(in_array($fileType, $allowTypes)){
 // Upload file to server
 if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){

 // Insert image file name into database

 $insert = $conn->query("INSERT into products (name, price, image) VALUES ('".$productname."','".$price."','".$fileName."')");

 if($insert){
 $statusMsg = "The file ".$fileName. " has been uploaded succes
sfully.";
 }else{
 $statusMsg = "File upload failed, please try again.";
 }
 }else{
 $statusMsg = "Sorry, there was an error uploading your file.";
 }
 }else{
 $statusMsg = 'Sorry, only PNG files are allowe
d to upload.';
 }
}else{
 $statusMsg = 'Please select a file to upload.';
}
// Display status message
echo $statusMsg;
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>

    <form action="" method="post" enctype="multipart/form-data">
         
         Enter the product name: <input type="text" name="name">
         Enter the product price: <input type="text" name="price">
         Select Image File to Upload:
         <input type="file" name="file">
         <input type="submit" name="submit" value="Upload">
    </form>

</body>
</html>