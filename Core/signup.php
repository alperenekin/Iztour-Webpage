<?php 
$dbServername= "localhost";
$dbUsername= "root";
$dbPassword ="";
$dbName="login";

$conn =mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);


if(isset($_POST['submit'])){
	$first=mysqli_real_escape_string($conn,$_POST['first']);
	$last=mysqli_real_escape_string($conn,$_POST['last']);
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	$uid=mysqli_real_escape_string($conn,$_POST['uid']);
	$pwd=mysqli_real_escape_string($conn,$_POST['pwd']);	
	if(empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)){
		header("Location: ../webprojectfinal/register.php?signup=empty");
		exit();
	}
	else{
		if(!preg_match("/^[a-zA-Z]*$/",$first) || !preg_match("/^[a-zA-Z]*$/",$last)){
			header("Location: ../webprojectfinal/register.php?signup=invalidentry");
			exit();
		}
		else{
			if(!filter_var($email,FILTER_VALIDATE_EMAIL)){	
				header("Location: ../webprojectfinal/register.php?signup=invalidemail");
				exit();
			}						
			else{
				$sql = "SELECT * FROM users WHERE user_uid ='$uid' " ;
				$result= mysqli_query($conn,$sql);
				$resultCheck=mysqli_num_rows($result);
				if($resultCheck>0){
					header("Location: ../webprojectfinal/register.php?signup=usertaken");
					exit();
				}
				else{
					$sql ="INSERT INTO users (user_first,user_last,user_email,user_uid,user_pwd,image) VALUES ('$first','$last','$email','$uid','$pwd','1');";		
					mysqli_query($conn,$sql);
					header("Location: ../webprojectfinal/register.php?signup=SUCCESS");
					exit();
				}
			}
		}
	}
}
else{
	
	exit();
	}

?>