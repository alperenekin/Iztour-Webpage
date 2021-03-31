<?php 
session_start();
$dbServername= "localhost";
$dbUsername= "root";
$dbPassword ="";
$dbName="login";
$conn =mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
$id=$_SESSION['u_id'];
if(isset($_POST['submit'])){
	$file =$_FILES['file'];
	$fileName=$file['name'];
	$fileTmpName =$file['tmp_name'];
	$fileSize = $file['size'];
	$fileError=$file['error'];
	$fileType= $file['type'];

	$fileExt=explode('.',$fileName);
	$fileActualExt =strtolower(end($fileExt));

	$fileNameNew ="profile".$id.".".$fileActualExt;
	$fileDestination='uploads/'.$fileNameNew;
	move_uploaded_file($fileTmpName,$fileDestination);
	$sql="UPDATE users SET image=0 WHERE  user_id='$id';";
	$result=mysqli_query($conn,$sql);

	header("Location:register.php?uploadsuccess");
}