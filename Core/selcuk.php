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
	<title>Selçuk</title>
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
	<h2 style="color:black">Where is Selçuk?</h2>

		<div id="googleMap" style="width:500px; height:500px; margin-left:-10px;"></div>

		<script>
		function myMap() {
		var mapProp= {
  		center:new google.maps.LatLng(37.9508,27.3700),
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
		<img src="selçuk.jpg" alt="selçuk" style="width:1250px; height:600px;"  />	
		</div>
	<h1>SELÇUK</h1>
	<p>Selçuk is the southernmost district of Izmir. It is located on the İzmir-Aydın highway and has a seashore. Torbalı to the north, the Aegean Sea to the west, Menderes to the northwest, Tire to the northeast, Germencik to the east and Kuşadası to the south are surrounded. It is 74 km from Izmir city center.</p>
	<div id="title">
		<h2>History Of Selçuk</h2>
	</div>
	<p>Ayasuluk, formerly known as Selçuk, was captured by the Aydınoğulları Principality in 1304 and in 1426 he joined the lands of the Ottoman Empire. In 1914, the name Ayasuluk was changed to Selçuk and after the Independence War in 1957 it was included in the province of Izmir and received the county title.</p>
	<p>Selçuk is one of the world's largest open air museums. It was one of the most important settlements of Antiquity. Most of the historical buildings in Selçuk are standing. Ephesus ruins are a very important center for Turkish and world tourism, Ephesus is visited by approximately 2 million visitors every year.</p>

	<h2 style="color:black";>Where To Visit in Selçuk?</h2>
	<div id="title">
		<h2>1.Ephesus</h2>
	</div>
	<div id="images" style="float:left; margin:20px 20px 20px 0px; clear:left">
		<img src="ephesus.jpg" alt="ephesus" style="width:800px; height:500px;"  />	
	</div>
	<p>Ephesus, which dates back to 6,000 BC, was founded by warrior women known as Amazon, according to legend. Ephesus, named after the city of Apasas in the Arzawa Kingdom, which means the city of mother goddess, hosts the ruins of all the important stages of human history such as Prehistoric, Archaic, 
	Hellenistic, Roman, Byzantine, Selçuk, Aydınoğulları and Ottoman periods. The port of Ephesus, which was a port city during the time it was built, but over the years, filled with alluviums brought by the Marnas Stream and the Küçük Menderes River, has reached its present position. Taking an intensive migration with the presence of the Temple of Artemis,
	a symbol of faith for different religions, Ephesus has become one of the leading centers of trade, culture and art. Ephesus has been accepted as a World Heritage Site by Unesco.</p>
	
	<div id="title">
		<h2>2.Celsus Library</h2>
	</div>
	<div id="images" style="float:left; margin:20px 20px 20px 0px; clear:left">
		<img src="celsus.jpg" alt="celsus" style="width:800px; height:500px;"  />	
	</div>
	<p>Celsus Library; after the death of Celsus Polemeanus, that was the Roman senator, governor of Ephesus and book lover, was built by his son in memory of his father.  This unique building bears the signature of the architect Vitruoya is also a monumental tomb. It is thought to contain 14 thousand books.
	There are four sculptresses in four indentations on the outer wall rising in all its glory. These sculptresses symbolize wisdom (sophia), knowledge (episteme), reason (ennoia) and virtue (arete).	</p>
	
	<div id="title">
		<h2>3.Temple of Hadrian</h2>
	</div>
	<div id="images" style="float:left; margin:20px 20px 20px 0px; clear:left">
		<img src="hadrian.jpg" alt="hadrian" style="width:800px; height:500px;"  />	
	</div>
	<p>The Temple of Hadrian was one of the rare structures of the city which was built to honor the Roman Emperor Hadrian and reached from today to ancient times. In front of the temple, there are inscribed pedestals carrying the bronze statues of Roman emperors Galeius, Maximianus, Diocletianus and Constantius Chlorus.</p>
	<br><br>
	<div id="title">
		<h2>4.Ancient Theater</h2>
	</div>
	<div id="images" style="float:left; margin:20px 20px 20px 0px; clear:left">
		<img src="ancient-theater.jpg" alt="ancient theater" style="width:800px; height:500px;"  />	
	</div>
	<p>Ancient Theater is one of the most beautiful buildings of Ephesus ruins. The theater, which remained quite intact and was also used for some events such as the Ephesus Festival until a while ago, has a capacity of 25 thousand people. Although it is known that it was built during the Hellenistic period, it is known that the theater was rebuilt during the reign of Emperor Claus and completed during the reign of Emperor Trianus.
	The acoustics of the building, which is the biggest theater of the ancient world, but unfortunately the 3-storey stage building has been completely destroyed, is enormous.</p>
	
	<div id="title">
		<h2>5.The Temple of Artemis</h2>
	</div>
	<div id="images" style="float:left; margin:20px 20px 20px 0px; clear:left">
		<img src="artemis.jpg" alt="artemis" style="width:800px; height:500px;"  />	
	</div>
	<p>The Temple of Artemis is the region where the Ephesians lived as the first settlement. The temple, which was then destroyed by an earthquake and rebuilt, is one of the seven wonders of the world. Built by the Lydian king Croesus dedicated to the goddess Artemis, it is located on the southern of the Selçuk Castle. It is estimated to have a length of 125 meters, a width of 65 meters and a height of 25 meters.
	The Temple of Artemis was a religious structure and a market place where the Ephesians both presented their faith to the goddess. From the temple to the present day, only basic remains and a marble column remained.</p>
	
	<div id="title">
		<h2>6.St. John's Basilica</h2>
	</div>
	<div id="images" style="float:left; margin:20px 20px 20px 0px; clear:left">
		<img src="St-John-Basilica.jpg" alt="St. John Basilica" style="width:800px; height:500px;"  />	
	</div>
	<p>St. John's Basilica is located near the Ayasuluk Hill. It was built by Emperor Justinian and his wife Theodora for the author of the Bible. The Basilica of St. John is the largest religious building after the Temple of Artemis in Ephesus. It is believed that under this huge church, there is St. John's tomb. In this area, there is also a monument builted in the name of St. John.</p>
	
	<div id="title">
		<h2>7.House of the Virgin Mary</h2>
	</div>
	<div id="images" style="float:left; margin:20px 20px 20px 0px; clear:left">
		<img src="virgin-mary.jpg" alt="virgin mary" style="width:800px; height:500px;"  />	
	</div>
	<p>House of the Virgin Mary, is located on Mount Bülbül. It is believed that the Virgin Mary spent her last years with St. John in this house. This house is considered sacred by Christians today. It has also become a sacred temple taking a vow by many people. The 15 August rites, which are held every year, attract great attention with the participation of the Vatican representatives.</p>
	
	<div id="title">
		<h2>8.Ephesus Archaeological Museum</h2>
	</div>
	<div id="images" style="float:left; margin:20px 20px 20px 0px; clear:left">
		<img src="efes-muzesi.jpg" alt="efes muzesi" style="width:800px; height:500px;"  />	
	</div>
	<p>Ephesus Archaeological Museum is located in Selçuk town center, it is one of Turkey's most important museums with cultural activities and visitors capacity. The most authentic piece of art exhibited in the museum, which contains about 50 thousand works of many civilizations, is the Artemis Sculpture of Ephesus.</p>
	<br>
	<div id="title">
		<h2>Our Trip Plan In Selçuk</h2>
	</div>
	<p> Our trip plan is:<blockquote> After meeting in the morning, first we will have a nice breakfast in the city center and then we will go to Selcuk. At first, we will visit Ephesus, one of the most important historical places. 
	Then, with short breaks, we will visit all the historical places above. In the evening, before returning to Izmir, we will have a fine banquet in <a href="https://www.tripadvisor.com.tr/Restaurant_Review-g293976-d1110677-Reviews-Selcuk_Koftecisi-Selcuk_Izmir_Province_Turkish_Aegean_Coast.html">Selçuk Köftecisi</a> that will forget the tiredness of the day. In short, we will enjoy both historical places and food.</blockquote></p>
	<div id="title">
	
		<h2>How to go Selçuk?</h2>
	</div>
	<ol>
 		<li>From İzmir, you get to İzban and get off at Tepeköy stop. Then you go to the direction of Selçuk İzban.</li>
  		<li>There is no public bus service from Izmir to Selçuk. To do this, you need to go to Torbalı first. Then you can use the bus number 770 - Torbalı - Selçuk.</li>
 		<li>There are minibuses departing from Izmir Bus Station and leading to Selçuk. They're on the highway directly.</li>
	</ol> 

	<address>
      		IZTOUR &nbsp;&#9728;&nbsp;
     		Gülbahçe Campus 35430 Urla-İzmir/TURKEY &nbsp;&#9728;&nbsp;
	</address>	

	</div>
	
	
</div>
</body>
</html>