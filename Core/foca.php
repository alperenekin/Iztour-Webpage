<?php
session_start();
include 'comment.php';
$dbServername= "localhost";
$dbUsername= "root";
$dbPassword ="";
$dbName="login";
$conn =mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
date_default_timezone_set('Europe/Istanbul')
?>
<html>
<head>
	<title>Foça</title>
	<link href="places.css" rel="stylesheet" type="text/css" />
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
	
	<div class="sideright">
	<h2 style="color:black">Where is Foça?</h2>

		<div id="googleMap" style="width:500px; height:500px; margin-left:-10px;"></div>

		<script>
		function myMap() {
		var mapProp= {
  		center:new google.maps.LatLng(38.6704, 26.7579),
  		zoom:11,
		};
		var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
		}
		</script>

		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA48ujgPqVK-K-eVposxhnN1AyR68408L8&callback=myMap"></script>
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
		<div id="images" align="center">
		<img src="foça.jpg" alt="foça" style="width:1250px; height:600px;"  />	
		</div>
	<h1>FOÇA</h1>
	<p>Foça is a coastal town in the north of Izmir. When the city emerged as an Ionian settlement in Antiquity, it was named Phokaia because of the seals living in the sea and it has come to our day as Foça.</p>
	<div id="title">
		<h2>History Of Foça</h2>
	</div>
	<p>Phokaia, named after the seals that live on the island of Foça, was founded by Aiollar in the 11th century BC. At that time, the Ionian settlement began in the 9th century BC in Phokaia, one of the most important settlements in Ionia. Phokaians, known as masters in history, have also established numerous colonies in the Aegean,
	the Mediterranean and the Black Sea with their development and success in engineering.</p>
	<p>Foca, in the 13th century, it was ruled by Çaka Bey and later by the Saruhanoğulları Principality. In 1455, the Ottoman Sultan II. Mehmed took Foça and added it to Ottoman lands after the great conquest.</p>
	<p>Foça has become an important archaeological center for these civilizations and communities.</p>
	
	<h2 style="color:black";>Where To Visit in Foça?</h2>
	<div id="title">
		<h2>1.Five Gates Fortress</h2>
	</div>
	<div id="images" style="float:left; margin:20px 20px 20px 0px; clear:left">
		<img src="beş-kapılar.jpg" alt="beş kapılar" style="width:800px; height:500px;"  />	
	</div>
	<p>This castle, built in a rectangular structure against the sea and supported by rectangular towers, has a long history. The castle, consisting of five doors, was used for the entrance of the city. The castle, which was repaired in time of the Ottoman Empire, has survived to our day.
	The castle, which has a fascinating beauty, has many historical places from the Byzantine period. With its imposing appearance against the sea, the Five Gates Fortress, has succeeded in entering the list of UNESCO World Cultural Heritage candidate.
	We recommend that you see this magnificent castle and the historic city walls surrounding Foça.</p>
	
	<div id="title">
		<h2>2.Phokaia Ancient City</h2>
	</div>
	<div id="images" style="float:left; margin:20px 20px 20px 0px; clear:left">
		<img src="Phokaia-Antik-Kenti.jpg" alt="Phokaia Antik Kenti" style="width:800px; height:500px;"  />	
	</div>
	<p>It is an ancient city on the highway connecting Old Foça to New Foça. As a result of the archaeological studies conducted in the ancient city, many historical works have been reached. The Temple of Athena, the oldest temple of the Ionian world, is here for the Mother Goddess Athena.
	In addition, the Kybele Open Air Temple is one of the historical monuments that must be seen. This open-air temple has statues and reliefs of the Goddess Kybele.</p>
	
	<div id="title">
		<h2>3.Siren Rocks</h2>
	</div>
	<div id="images" style="float:left; margin:20px 20px 20px 0px; clear:left">
		<img src="siren-rocks.jpg" alt="siren rocks" style="width:800px; height:500px;"  />	
	</div>
	<p>One of the must-see places in Foça is the Siren Rocks which are identified with the town. The Siren Rocks mentioned in the epic of Homeros are the main living areas of the famous seal fish that gave their name to Foça. In order not to harm the natural life, it is forbidden to swim here; but even to watch this beauty from a distance is great.</p>
	<br><br>
	<div id="title">
		<h2>4.Foça Islands</h2>
	</div>
	<div id="images" style="float:left; margin:20px 20px 20px 0px; clear:left">
		<img src="foça-islands.jpg" alt="foça islands" style="width:800px; height:500px;"  />	
	</div>
	<p>Orak Island is the largest of the island group consisting of six uninhabited islands located just in front of Foça. Other islands are İncir Island, Kartdere Island, Fener Island, Hayırsız Island and Metalik Island. There is a long sandy beach on the south coast of Orak Island. There are still steep slopes of Orak, Hayırsız and Kartdere islands with a height of 80 meters.
	Incir Island is used as a picnic area and beach especially by tourists and locals. Islands and surrounding bays, harbour one of the last Mediterranean monk seal colonies in Turkey.</p>
	
	<div id="title">
		<h2>5.Devil's Bath</h2>
	</div>
	<div id="images" style="float:left; margin:20px 20px 20px 0px; clear:left">
		<img src="şeytan-hamamı.jpg" alt="şeytan hamamı" style="width:800px; height:500px;"  />	
	</div>
	<p>It is located within the military area, around 2 km from Foça district center, around the Çan hill. This place, which was built as a family grave in ancient times and referred to as the Devil's Bath, consists of a long road and two graves. This structure with interesting architecture is one of the historical places to visit.</p>
	<br><br>
	
	<div id="title">
		<h2>Our Trip Plan In Foça</h2>
	</div>
	<p> Our trip plan is:<blockquote> The trip day is Sunday while sundays are the best day to see Seferihisar. After meeting in İzmir center, we are going to move 
	to Sığacık first.Walk around the streets and of course Sığacık Castle.After walking dont worry we are going to eat best pastry in the county. 
	So we are going to eat lunch in <a href="https://www.tripadvisor.com.tr/Restaurant_Review-g12215785-d12882712-Reviews-Radika-Sigacik_Izmir_Province_Turkish_Aegean_Coast.html">
	Radika</a>. Then we are planning to move through Teos side of the Seferihisar.After 2 hours of visit of the Teos Ancient city. We are planning to see Seferihisar beaches such as 
	Akkum.After long trip all day we are going to have dinner in <a href="http://www.milosbalik.com">Milos Restaurant </a> and finally the way back to city ! </blockquote></p>
	<div id="title">
	
		<h2>How to go Foça?</h2>
	</div>
	<ol>
 		<li><b>By car </b> : You can use the İzmir-Çeşme highway and follow the signboards.</li>
  		<li><b>By minibus</b>:From İzmir Üçkuyular station you can take the Seferihisar-İzmir minibus.</li>
 		<li><b>By bus</b>:You can use number 730 to go from İzmir to Seferihisar.</li>
	</ol> 
	<?php
	if(isset($_SESSION['u_id'])){
		echo "<form method='POST' action='".setComment($conn)."'>
			<input type='hidden' name='uid'  value='".$_SESSION['u_id']."'>
			<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
			<textarea name='message'></textarea> <br>
			<button type='submit' name='commentSubmit' > Comment </button>
		</form>";
		getComment($conn);
	}
	?>
	<address>
      		IZTOUR &nbsp;&#9728;&nbsp;
     		Gülbahçe Campus 35430 Urla-İzmir/TURKEY &nbsp;&#9728;&nbsp;
	</address>	

	</div>
	
	
</div>
</body>
</html>