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
	<title>Dikili</title>
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
	<h2 style="color:black">Where is Dikili?</h2>

		<div id="googleMap" style="width:500px; height:500px; margin-left:-10px;"></div>

		<script>
		function myMap() {
		var mapProp= {
  		center:new google.maps.LatLng(39.0749,26.8892),
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
		<img src="dikili1.jpg" alt="dikili" style="width:1250px; height:600px;"  />	
		</div>
	<h1>DİKİLİ</h1>
	<p>Dikili is one of the most beautiful places to visit around İzmir with its deep blue sea, long beaches, a cute harbor filled with fishing boats, thermal springs, natural beauty and cultural richness.  The city center is 120 km away from Izmir city center and welcomes thousands of visitors in summer with its 40 km coastline.
	Although it has a distorted layout, it is a suitable district for İzmir.</p>
	<div id="title">
		<h2>History Of Dikili</h2>
	</div>
	<p>As a result of archaeological studies conducted in the district, Dikili has a history dating back to 5000 BC. As a result of archaeological findings, it was revealed that Akalar lived in this region and the city was called Aternagus. Lydians, Iranians, Frikians, Mysians and Romans and Pergamans in Ancient Age; In the Middle Ages, the Byzantines, the Genoese, the Seljuks and the Ottomans dominated Dikili.
	Famous people such as Aristotle, Hermos, August and Alexander lived in the historical process in Dikili, where there were so many civilizations. The cities and sites such as Aterneus, Astria, and Teutronia were inhabited.</p>
	<p>The town which was named as "Dikmelik" with farming in the region and growing of a sine of Karaosmanoğulları, then it was named as "Dikili".</p>

	<h2 style="color:black";>Where To Visit in Dikili?</h2>
	<div id="title">
		<h2>1.Dikili Town Center</h2>
	</div>
	<div id="images" style="float:left; margin:20px 20px 20px 0px; clear:left">
		<img src="dikili-center.jpg" alt="dikili center" style="width:800px; height:500px;"  />	
	</div>
	<p>Especially in the summer months, the visitor has been flocked to the blue-flag beaches in Dikili town center, with a length of more than 5 km. It is possible to swim at the different points of the town center, to spend time on the coastline and to enjoy the tranquility in a classic holiday resort. Kayra Beach and Dikili Public Beach are among the blue flag beaches which are ideal for swimming.</p>
	
	<div id="title">
		<h2>2.Nebiler Village</h2>
	</div>
	<div id="images" style="float:left; margin:20px 20px 20px 0px; clear:left">
		<img src="nebiler-village.jpg" alt="nebiler village" style="width:800px; height:500px;"  />	
	</div>
	<p>Nebiler Village, 17 km away from Dikili; is famous for its waterfalls, caves and water resources. The waterfall known as Nebiler or Aşıklar Waterfall is the favorite of nature and picnic lovers. There are 4 waterfalls in this area, which also include walking and climbing routes.</p>
	<br><br><br><br>
	<div id="title">
		<h2>3.Bademli Village</h2>
	</div>
	<div id="images" style="float:left; margin:20px 20px 20px 0px; clear:left">
		<img src="bademli.jpg" alt="bademli" style="width:800px; height:500px;"  />	
	</div>
	<p>The green and the beauty of olives in Bademli, an old Greek village, meets the blue of the Aegean Sea. The Bademli Festival is organized by the Almond Culture Art and Development Association. Bademli, one of the most beautiful villages of Dikili, is famous for its hot springs as well as its thermal water resources. Bademli Ilıcası, known as Aiolis Ilıcası in the past, is located in the sea next to Kalem Island.
	The pooled resources within the sea were not exposed to any human intervention due to their presence in the site area. The sea is beautiful, there are fishermen on the beach, there are places to stay.</p>
	
	<div id="title">
		<h2>4.Kalem Island</h2>
	</div>
	<div id="images" style="float:left; margin:20px 20px 20px 0px; clear:left">
		<img src="kalem-island.jpg" alt="kalem island" style="width:800px; height:500px;"  />	
	</div>
	<p>Just across the island of Lesbos, Kalem Island is a unique piece of nature with its pristine waters. Situated opposite the Bademli village, Oliver Hotel is Turkey's only island hotel on the Kalem Island on the mainland 450 meters away. From the turquoise to the blue, there is a very clear sea. You're swimming in the blue flag coast, right in the middle of a turquoise sea unlike the aquarium.
	The sunset view is insatiable. The place is secluded, isolated, quiet.</p>
	
	<div id="title">
		<h2>5.Garip Island</h2>
	</div>
	<div id="images" style="float:left; margin:20px 20px 20px 0px; clear:left">
		<img src="garip-island.jpg" alt="garip island" style="width:800px; height:500px;"  />	
	</div>
	<p>Garip Island, one of the three islands mentioned by the world-famous historian Strabon, is also located behind Kalem Island. In ancient times, its name was Arganussai and in Turkish it means Light-Scattering Islands. The sea around the island, which carries traces of antiquity, is exceptionally clear. The deep blue area between Kalem Island and Strange Island is already called the Aquarium. Sewn boat tours stop here.</p>
	
	<div id="title">
		<h2>6.Atatürk Botanical Garden</h2>
	</div>
	<div id="images" style="float:left; margin:20px 20px 20px 0px; clear:left">
		<img src="atatürk-botanik-bahçesi.jpg" alt="atatürk botanik bahçesi" style="width:800px; height:500px;"  />	
	</div>
	<p>Founded in 30 hectares of land in Dikili, the Atatürk Botanical Garden hosts a wide range of plant species from tropical regions to the Alpine Mountains. The area with approximately 3 thousand varieties of plants is like a visual feast with its colorful texture. The place which has the feature of being the most competent and international botanical garden in our country has succeeded in entering the world literature as well.
	There is also a Herbarium Center where dried plant samples are preserved and scientific studies are carried out.</p>
	
	<div id="title">
		<h2>7.Atarneus Ancient City</h2>
	</div>
	<div id="images" style="float:left; margin:20px 20px 20px 0px; clear:left">
		<img src="atarneus.jpg" alt="atarneus" style="width:800px; height:500px;"  />	
	</div>
	<p>The ancient city of Atarneus, located in the vicinity of Ağılkale and around Dikili, was founded by Akhalılar in the 4th millennium BC. Due to the numerous hot springs around the region, it was named Atarnetus, which means sacred source or source of mother goddess. The number of relics that survived to the present day is very few.</p>
	<br>
	<div id="title">
		<h2>8.Çandarlı</h2>
	</div>
	<div id="images" style="float:left; margin:20px 20px 20px 0px; clear:left">
		<img src="çandarlı.jpg" alt="çandarlı" style="width:800px; height:500px;"  />	
	</div>
	<p>Çandarlı known as the place where amazon female warriors reign. The Çandarlı Castle, which dates back to the Genoese, is the most important symbol of Çandarlı. In the past, most of the castle, which protects the city against external attacks, has survived to its present without being damaged. The castle, which was recently restored in 2016, also offers events such as concerts, theater and festivals.
	The public beach in front of the castle is like a medicine in the hot weather of summer with ice water.</p>
	
	<div id="title">
		<h2>Our Trip Plan In Selçuk</h2>
	</div>
	<p> Our trip plan is:<blockquote> The trip day is Sunday while sundays are the best day to see Seferihisar. After meeting in İzmir center, we are going to move 
	to Sığacık first.Walk around the streets and of course Sığacık Castle.After walking dont worry we are going to eat best pastry in the county. 
	So we are going to eat lunch in <a href="https://www.tripadvisor.com.tr/Restaurant_Review-g12215785-d12882712-Reviews-Radika-Sigacik_Izmir_Province_Turkish_Aegean_Coast.html">
	Radika</a>. Then we are planning to move through Teos side of the Seferihisar.After 2 hours of visit of the Teos Ancient city. We are planning to see Seferihisar beaches such as 
	Akkum.After long trip all day we are going to have dinner in <a href="http://www.milosbalik.com">Milos Restaurant </a> and finally the way back to city ! </blockquote></p>
	<div id="title">
	
		<h2>How to go Şirince?</h2>
	</div>
	<ol>
 		<li><b>By car </b> : You can use the İzmir-Çeşme highway and follow the signboards.</li>
  		<li><b>By minibus</b>:From İzmir Üçkuyular station you can take the Seferihisar-İzmir minibus.</li>
 		<li><b>By bus</b>:You can use number 730 to go from İzmir to Seferihisar.</li>
	</ol> 

	<address>
      		IZTOUR &nbsp;&#9728;&nbsp;
     		Gülbahçe Campus 35430 Urla-İzmir/TURKEY &nbsp;&#9728;&nbsp;
	</address>	

	</div>
	
	
</div>
</body>
</html>