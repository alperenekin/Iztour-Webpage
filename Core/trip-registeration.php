<?php
session_start();
$dbServername= "localhost";
$dbUsername= "root";
$dbPassword ="";
$dbName="login";
$conn =mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
?>
<html>
<head>
	<title>IZTOUR Trip-Register </title>
	<link href="register.css" rel="stylesheet" type="text/css" />
</head>
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
	    	<table>
	    		<caption>TRIP SCHEDULE</caption>
	    		<tr>
	    			<th>Seferihisar</th>
	    			<th>Selçuk</th>
	    			<th>Şirince</th>
	    			<th>Çeşme</th>
	    			<th>Foça</th>
	    			<th>Ödemiş</t>
	    			<th>Dikili</th>
	    			<th>Bergama</th>
	    		</tr>
	    		<tr>
	    			<td>01/05/2019</td>
	    			<td>05/05/2019</td>
	    			<td>10/05/2019</td>
	    			<td>15/05/2019</td>
	    			<td>20/05/2019</td>
	    			<td>25/05/2019</td>
	    			<td>30/05/2019</td>
	    			<td>31/05/2019</td>
	    		</tr>
	    		<tr>
	    			<td>01/06/2019</td>
	    			<td>05/06/2019</td>
	    			<td>10/06/2019</td>
	    			<td>15/06/2019</td>
	    			<td>20/06/2019</td>
	    			<td>25/06/2019</td>
	    			<td>30/06/2019</td>
	    			<td>31/06/2019</td>
	    		</tr>
	    		<tr>
	    			<td>01/07/2019</td>
	    			<td>05/07/2019</td>
	    			<td>10/07/2019</td>
	    			<td>15/07/2019</td>
	    			<td>20/07/2019</td>
	    			<td>25/07/2019</td>
	    			<td>30/07/2019</td>
	    			<td>31/07/2019</td>
	    		</tr>
	    		<tr>
	    			<td>01/08/2019</td>
	    			<td>05/08/2019</td>
	    			<td>10/08/2019</td>
	    			<td>15/08/2019</td>
	    			<td>20/08/2019</td>
	    			<td>25/08/2019</td>
	    			<td>30/08/2019</td>
	    			<td>31/08/2019</td>
	    		</tr>
	    	</table>
	    	<br>
	    	<?php
				if(isset($_SESSION['u_id'])){
			echo '<form class="register-form" action="registeration.php" method="POST">
	    				<font size="200%"> Choose the place you would like to visit :</font> <br>
						<input type="radio" id="seferihisar" value="seferihisar" name ="place">
						<label for="seferihisar">Seferihisar</label><br>				
						<input type="radio" id="selçuk" value="selcuk" name ="place">
						<label for="selcuk">Selçuk</label><br>
						<input type="radio" id="cesme" value="cesme" name ="place">
						<label for="cesme">Çeşme</label><br>
						<input type="radio" id="sirince" value="sirince" name ="place">
						<label for="sirince">Şirince</label><br>
						<input type="radio" id="foca" value="foca" name="place">
						<label for="foça">Foça</label><br>
						<input type="radio" id="ödemis"value="ödemis" name ="place">
						<label for="ödemis">Ödemiş</label><br>
						<input type="radio" id="dikili" name ="place" value="dikili">
						<label for="dikili">Dikili</label><br>
						<input type="radio" id="bergama" name ="place" value="bergama">
						<label for="bergama">Bergama</label><br><br>
					<font size="200%">Choose the date for your trip:</font> <br>
					<input type="text" name="date" placeholder="2019-01-30" style="height: 50px ; width300px; font-size:40px;"><br>
					<font size="200%">Your Phone number:</font> <br>
						<input  type="text" name="phone" placeholder="5xxxxxxxxx"  style="height: 50px; width:300px; font-size:40px;"> <br>
						<button type="submit" name="submit" > Submit </button>
					</form>	';
				}
				if(isset($_GET['register'])){
	    			if($_GET['register']=="empty"){
	    				echo '<p class="signuperror" style="text-align:center; color:red";>Fill in All Fields!</p>';
	    			}
	    			elseif($_GET['register']=="invalidentry"){
	    				echo '<p class="signuperror" style="text-align:center; color:red";>Invalid Phone number!</p>';
	    			}
	    			elseif($_GET['register']=="SUCCESS"){
	    				echo '<p class="signuperror" style="text-align:center; color:GREEN";>You are registered for the trip</p>';
	    			}
	    		}
			?>
	    	

</div>
</body>
</html>