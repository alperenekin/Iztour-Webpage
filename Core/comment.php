<?php

function setComment($conn){
	if(isset($_POST['commentSubmit'])){
		$uid=$_POST['uid'];
		$date=$_POST['date'];
		$message=$_POST['message'];
		
		$sql="INSERT INTO comment (uid,comment,date) VALUES('$uid','$message','$date')";
		$result=mysqli_query($conn,$sql);
	}
}
function getComment($conn){
	$sql="SELECT * FROM comment c,users u WHERE c.uid=u.user_id";
	$result=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_assoc($result)){
		echo "<div id='commentbox'>";
			echo $row['user_uid']."<br>";
			echo $row['date']."<br>";
			echo $row['comment'];
		echo "</div>";
	}
}
?>