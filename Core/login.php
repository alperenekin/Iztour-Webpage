<?php
session_start();
if (isset($_POST['submit'])){
	$dbServername= "localhost";
	$dbUsername= "root";
	$dbPassword ="";
	$dbName="login";

	$conn =mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
	$uid= mysqli_real_escape_string($conn,$_POST['uid']);
	$pwd= mysqli_real_escape_string($conn,$_POST['pwd']);	

	if(empty($uid) || empty($pwd)){
		header("Location: ../webprojectfinal/Homepage.php?login=empty");
		exit();	
	}
	else{
		$sql ="SELECT * FROM users WHERE  user_uid='$uid' OR user_email='$uid'";
		$result=mysqli_query($conn,$sql);
		$resultCheck=mysqli_num_rows($result);
		if($resultCheck<1){
			header("Location: ../webprojectfinal/Homepage.php?login=error");
			exit();
		}
		else{
			if($row = mysqli_fetch_assoc($result)){
				

				if($pwd !=$row['user_pwd']) {
					header("Location: ../webprojectfinal/Homepage.php?login=wrongpassword");
					exit();
				}
				else{
					$_SESSION['u_id']=$row['user_id'];
					$_SESSION['u_first']=$row['user_first'];
					$_SESSION['u_last']=$row['user_last'];
					$_SESSION['u_email']=$row['user_email'];
					$_SESSION['u_uid']=$row['user_id'];
					header("Location: ../webprojectfinal/Homepage.php?login=SUCCESS");
					exit();
				}
			}
		}
	}
}
else{
	header("Location: ../webprojectfinal/Homepage.php?login=error");
}