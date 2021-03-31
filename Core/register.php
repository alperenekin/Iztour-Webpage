r<?php
session_start(); 
$dbServername= "localhost";
$dbUsername= "root";
$dbPassword ="";
$dbName="login";

$conn =mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

?>
<html>

<head>
	<title>IZTOUR Register </title>
	<link href="gezi.css" rel="stylesheet" type="text/css" />
</head	>
<body >
<div id="container">
	<div id="header" align="center">
		<img src="iztour.jpg" alt="logo" height:100 />	
	</div>
	<div id="button" >
		<ul> 
			<li><a href="Homepage.php">Home</a></li>
			<li><a>Routes</a>
				<ul>
					<li><a href="seferihisar.php">Seferihisar</a></li>
					<li><a href="selcuk.php">Selçuk</a></li>
					<li><a href="cesme.php">Çeşme</a></li>
					<li><a href="sirince.php">Şirince</a></li>
					<li><a href="ödemis.php">Ödemiş</a></li>
					<li><a href="bergama.php">Bergama</a></li>
					<li><a href="dikili.php">Dikili</a></li>
					<li><a href="foca.php">Foça</a></li>
	    			</ul>
			</li>
			<li><a>Galery</a></li>
			<li><a href="trip-registeration.php">Trip Registration</a></li>
			<li><a>Contact Us</a>
				<ul>
					<li>Gülbahçe/Urla</li>
					<li>+90 232 740 50 00</li>
					<li><a href="mailto:info@iztour.edu.tr?Subject=Hello%20again">info@iztour.edu.tr</a></li>
	    			</ul>
			</li>
		</ul>
	</div>

	<div id="wrapper">
	<div class="sideleft">
		<div class="login">
			<?php
				if(isset($_SESSION['u_id'])){
					$tid=$_SESSION['u_id'];
					$sql ="SELECT * FROM users WHERE user_id=$tid";
					$result=mysqli_query($conn,$sql);
					if(mysqli_num_rows($result)>0){
						while($row=mysqli_fetch_assoc($result)){
							$id=$row['user_id'];
							$img=$row['image'];
							if($img==0){
								echo "<img src ='uploads/profile".$id.".jpg' width='400px' height='300px'> ";
							}
							else{
								echo "<img src ='uploads/profiledefault.jpg' width='400px' height='300px'>";
							}
						}	
					}
				}
				echo '<br><br>';
			?>	
			<?php
				if(isset($_SESSION['u_id'])){
					echo '<form action="upload.php" method="POST" enctype="multipart/form-data">
							<input type="file" name="file">
							<button type="submit" name="submit">UPLOAD</button>
						</form>';
					echo '<form action="logout.php" method="POST">
				<button type="submit" name="submit">Logout</button>
			</form>';
				}
				else{
					echo '<form action="login.php" method="POST">
					<input type="text" name ="uid" placeholder="Username/e-mail"> <br>
					<input type ="password" name="pwd" placeholder="password"> <br>
					<button type="submit" name="submit">Login</button>
					<a href="register.php">Sign Up</a>
					</form>';
				}

			?>
		</div>
	</div>
	</div>
	<div class="main">
	    	<?php
	    		if(isset($_GET['signup'])){
	    			if($_GET['signup']=="empty"){
	    				echo '<p class="signuperror" style="text-align:center; color:red";>Fill in All Fields!</p>';
	    			}
	    			elseif($_GET['signup']=="invalidentry"){
	    				echo '<p class="signuperror" style="text-align:center; color:red";>Invalid Characters!</p>';
	    			}
	    			elseif($_GET['signup']=="invalidemail"){
	    				echo '<p class="signuperror" style="text-align:center; color:red";>Invalid Email!</p>';
	    			}
	    			elseif($_GET['signup']=="usertaken"){
	    				echo '<p class="signuperror" style="text-align:center; color:red";>Username is taken!</p>';
	    			}
	    			elseif($_GET['signup']=="SUCCESS"){
	    				echo '<p class="signuperror" style="text-align:center; color:green";>Registration is Sucessful</p>';
	    			}
	    		}
	    	?>
		<h1 style="color:white; background-color:green; width:939px; height:100px; text-align:center; margin-bottom:0; margin-left:150px;">Registration</h1>
		<form class="signup-form" action="signup.php" method="POST">
			<input type="text" name ="first" placeholder="First name"> <br>
			<input type="text" name ="last" placeholder="Last name"> <br>
			<input type="text" name ="email" placeholder="E-mail"> <br>
			<input type="text" name ="uid" placeholder="Username"> <br>
			<input type ="password" name="pwd" placeholder="password"> <br>
			<button type="submit" name="submit">Sign Up</button>
		</form>	
	    </div>
	</div>
	
</div>
</body>
</html>