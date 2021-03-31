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
	<title>IZTOUR Homepage </title>
	<link href="gezi.css" rel="stylesheet" type="text/css" />
</head>
<body >
<div id="container">
	<div id="header" align="center">
		<img src="iztour.jpg" alt="logo" />	
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
	<div class="main">
		<h1 style="color:white;">Pearls of İzmir</h1>
		<hr>
	        <a href="seferihisar.php"><img class="pics" src="seferihisar.jpg" alt="seferihisar" style="border-width: 0" height=400px; width=475px;/><a/>
      		<a href="selcuk.php"><img class="pics" src="selcuk.jpg" alt="selcuk" style="border-width: 0" height=400px; width=475px;/></a>
		<blockquote>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <I>Seferihisar</I>
		&nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
		&nbsp &nbsp &nbsp <I>Selçuk</I> 
		</blockquote>
		<br> 
 	        <a href="sirince.php"><img class="pics" src="sirince.jpg" alt="sirince" style="border-width: 0" height=400px; width=475px;/></a>
 	        <a href="cesme.php"><img class="pics" src="cesme.jpg" alt="cesme" style="border-width: 0" height=400px; width=475px;/></a>
		<blockquote> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <I>Şirince</I> 
		&nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp <I>Çeşme </I>
		</blockquote>
      	 	<a href="foca.php"><img class="pics" src="foca.jpg" alt="foca" style="border-width: 0" height=400px; width=475px;/></a>
     		<a href="ödemis.php"><img class="pics" src="odemis.jpg" alt="odemis" style="border-width: 0" height=400px; width=475px;/></a>
		<blockquote>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <I>Foça</I>&nbsp  &nbsp &nbsp
		&nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp <I>Ödemiş</I>
		</blockquote>
      		<a href="dikili.php"><img class="pics" src="dikili.jpg" alt="dikili" style="border-width: 0" height=400px; width=475px;/></a>
     		<a href="bergama.php"><img class="pics" src="bergama.jpg" alt="bergama" style="border-width: 0" height=400px; width=475px;/></a>
		<blockquote>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <I>Dikili</I>&nbsp &nbsp 
		&nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp <I>Bergama </I>
		</blockquote>
		<hr>
		<p>For those who have been wanting to see for a long time and who want to see again, it is possible to go to the beauties of Izmir and the places where you dream. 
		With XXXXXXXXXXXX.com, we can help you visit any place you want. All of our experienced staff is at your service to meet your needs and to offer unique day tours! 
		You can also get information about our tours by using the links on our site, discover the pearls of Izmir and register to our next tours. 
		At the moment, there are 6 different destinations on our site for various sharings and informations. You can reach all of our sites and also find suggestions for new destinations! Start exploring!
		</p>

	</div>
	<address>
      		IZTOUR &nbsp;&#9728;&nbsp;
     		Gülbahçe Campus 35430 Urla-İzmir/TURKEY &nbsp;&#9728;&nbsp;
	</address>	
</div>
</body>
</html>