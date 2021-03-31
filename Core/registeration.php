<?php 
$dbServername= "localhost";
$dbUsername= "root";
$dbPassword ="";
$dbName="login";

$conn =mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);


if(isset($_POST['submit'])){
	$place=mysqli_real_escape_string($conn,$_POST['place']);
	$date=mysqli_real_escape_string($conn,$_POST['date']);
	$pnum=mysqli_real_escape_string($conn,$_POST['phone']);
	if(empty($place) || empty($date) || empty($pnum)){
		header("Location: ../webprojectfinal/trip-registeration.php?register=empty");
		exit();
	}
	else{
		if(!preg_match("/^[0-9]*$/",$pnum)){
			header("Location: ../webprojectfinal/trip-registeration.php?register=invalidentry");
			exit();
		}
		else{					
				$sql ="INSERT INTO registration (place,date,telno) VALUES ('$place','$date','$pnum');";		
				mysqli_query($conn,$sql);
				header("Location: ../webprojectfinal/trip-registeration.php?register=SUCCESS");
				exit();		
		}
	}	
}
else{
	
	exit();
	}

?>