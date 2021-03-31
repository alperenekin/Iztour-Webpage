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
	<title>Çeşme</title>
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
	<h2 style="color:black">Where is Çeşme?</h2>

		<div id="googleMap" style="width:500px; height:500px; margin-left:-10px;"></div>

		<script>
		function myMap() {
		var mapProp= {
  		center:new google.maps.LatLng(38.3243, 26.3032),
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
		<img src="cesme.jpg" alt="cesme" style="width:1250px; height:600px;"  />	
		</div>
	<h1>ÇEŞME</h1>

	<p>Çesme is a district in the west of İzmir Province. It is surrounded by Urla from East, Karaburun from north, Aegean Sea from west and south. Height above sea level is 5 meters. 
	Its surface area is 260 km². As of 2014, the population is 39,243. It is one of the twelve Ionian colonies in history.</p>
	<div id="title">
		<h2>History Of Çeşme</h2>
	</div>
	<p>According to Pausanias, Erythrai (Ildırı) was founded by the Cretans. The city, ruled by the tyrants in the 7th century BC, entered the rule of Lydia in 560 BC. 
	The city remained under Persian rule until it was liberated by Alexander. The walls are surrounded by beautiful stone work. In the archaeological studies conducted in the city, 
	the Temple of Athena and the Theater dated to the 2nd half of the 7th century BC were unearthed.</p>
	<p>The Çeşme region was introduced to the Turkish sovereignty at the end of the 11th century with the great Turkish seaman Çaka Bey. The transition to Ottoman sovereignty was at the end of the 14th century. 
	One of the most striking Ottoman works is the Çeşme Castle. The artifacts in Çeşme and its surroundings are exhibited in the museum in Çeşme Castle. In addition to the castle there is a caravanserai.</p>
	<p>According to the Ottoman census of 1893, the number of people living in Çeşme was 30.702. At this date, 88% of the population of Çesme was composed of 26,826 Greeks. The rate of Turks was 12%.</p>

	<h2 style="color:black";>Where To Visit in Çeşme?</h2>
	<div id="title">
		<h2>1.Çeşme Castle</h2>
	</div>
	<div id="images" style="float:left; margin:20px 20px 20px 0px; clear:left">
		<img src="cesme-kalesi.jpg" alt="cesme-kalesi" style="width:800px; height:500px;"  />	
	</div>
	<p>Çesme Castle, located near the Cumhuriyet Square in the town center, was built in 1508 on the throne of Bayezid II. The Ottoman structure, which welcomes the visitors with the statue of Kaptan-ı Derya Hasan Pasha
	in front of the main gate, can be included in your list of places to visit in Çeşme due to its splendid architecture and panoramic views. In addition to this, in 1965 there is the Çeşme Museum opened for the exhibition 
	of weapons brought from the Topkapı Palace. Today, the museum exhibits historical artifacts from Erythrai Ancient City instead of weapons.</p>
	
	<div id="title">
		<h2>2.Altınkum Beach</h2>
	</div>
	<div id="images" style="float:left; margin:20px 20px 20px 0px; clear:left">
		<img src="cesme-altinkum.jpg" alt="cesme-altinkum" style="width:800px; height:500px;"  />	
	</div>
	<p> Only 10 minutes away from Çeşme town center, Altınkum Beach is waiting for you with its beach clubs located on 500-meter clear beach. The biggest feature of this beach, which takes its name from gold-colored sand, 
	is calm in most of the year and its water is cold compared to other places in Çeşme because of its location. You can easily reach the beach where you can enjoy the cool waters of the Aegean Sea and the sun. </p>
	
	<div id="title">
		<h2>3.Erythrai Ancient City</h2>
	</div>
	<div id="images" style="float:left; margin:20px 20px 20px 0px; clear:left">
		<img src="Erythrai.jpg" alt="Erythrai" style="width:800px; height:500px;"  />	
	</div>
	<p>Erythrai Ancient City is located within the borders of Ildiri Village, 26 kilometers away from Cesme. It is one of the 12 Ion cities in Western Anatolia. You can explore the precious objects in the museum of Çeşme Castle
	such as Acropolis, the Temple of Athena and the theater.</p>
	<br><br><br>
	<div id="title">
		<h2>4.Ilıca Beach</h2>
	</div>
	<div id="images" style="float:left; margin:20px 20px 20px 0px; clear:left">
		<img src="ılıca.jpg" alt="ılıca" style="width:800px; height:500px;"  />	
	</div>
	<p>Ilıca Beach, which can be swim in the spring and autumn months, attracts holidaymakers with its rich content. Due to its hot and abundant mineral waters, the 3-kilometer-long beach makes it possible to surf thanks to its wavy structure. 
	Because the sea is not too deep, families with children can prefer the beach for diving and other water sports activities.</p>
	<br>
	<div id="title">
		<h2>5.Ayayorgi Bay</h2>
	</div>
	<div id="images" style="float:left; margin:20px 20px 20px 0px; clear:left">
		<img src="ayayorgi.jpg" alt="ayayorgi" style="width:800px; height:500px;"  />	
	</div>
	<p>Aya Yorgi Bay is located in the Sakarya neighborhood, which is only 1 kilometer away from the district center. The beach clubs, which are relatively quiet during the day, provide their guests with unforgettable time with its exclusive entertainment programs 
	featuring concerts and DJ performances at night. If you are tired of the content in the bay that we would recommend you to add to your list of fountains due to the calm sea and the recreational activities offered by the facilities on the beach, you can switch
	to another beach by taking advantage of the zodiac boats working as a taxi.</p>
	
	<div id="title">
		<h2>6.Deliklikoy</h2>
		</div>
	<div id="images" style="float:left; margin:20px 20px 20px 0px; clear:left">
		<img src="deliklikoy.jpg" alt="deliklikoy" style="width:800px; height:500px;"  />	
	</div>
	<p>Situated between Alaçatı and Ovacık, which is considered to be the center of surfing tourism, Delikli Koy takes its name from a gap that is caused by natural reasons in a rock. The bay, which is the ideal place for those looking for peace with its calm sea and quiet environment,
	is one of the indispensable areas in Çeşme for the campers.</p>
	<br>
	<div id="title">
		<h2>7.Caravansary </h2>
		</div>
	<div id="images" style="float:left; margin:20px 20px 20px 0px; clear:left">
		<img src="kervansaray.jpg" alt="kervansaray" style="width:800px; height:500px;"  />	
	</div>
	<p>Caravansary, which was used as a hotel today, was built in 1529 by Suleiman the Magnificent.Thanks to the successful restoration work carried out in a 2-storey building reflecting the splendor of Ottoman architecture, the ornament art of the period has been carried to our day in accordance with its original.
	Close to the castle, you can choose the historic building for both accommodation and shopping.</p>
	
	<div id="title">
		<h2>8.Çeşme Bazaar </h2>
		</div>
	<div id="images" style="float:left; margin:20px 20px 20px 0px; clear:left">
		<img src="carsi.jpg" alt="carsi" style="width:800px; height:500px;"  />	
	</div>
	<p>Çesme Bazaar, which is the permanent stop of the excursion routes covering the castle, hosts souvenirs and shops where you can meet your daily needs. If you continue walking towards the castle in this bazaar, you can see the entertainment places and then the fishermen on the seaside.</p>
	<br><br>
	<div id="title">
		<h2>Our Trip Plan In Çeşme</h2>
	</div>
	<p> Our trip plan is:<blockquote> Are you ready to enjoy the summer at Çeşme? We will learn historical places of Çeşme and enjoy the sea, sand and the sun. First of all, we will have breakfast with the sea view at <a href="http://www.cesmesedirkahvalti.com/">Çeşme Sedir</a>, one of the most famous addresses of breakfast. Then we will visit all the historical places registered to our address and give a beautiful sea party in Ayayorgi Bay in the afternoon. 
	After a tour of the Çeşme Bazaar towards the evening, our dinner will be waiting for us at the <a href="http://lagada.com.tr">Lagada</a>, which is one of the most luxurious and delicious places of the fountain! </blockquote></p>
	<div id="title">
	
		<h2>How to go Çeşme?</h2>
	</div>
	<ol>
 		<li>There are HAVAŞ bus services that orginized between Izmir Adnan Menderes Airport and Çeşme. </li>
  		<li>You can also go with Çesme Travel Bus from Izmir Bus Terminal.</li>
 		<li>Üçkuyular Neighborhood Garage is the most used center for travels from İzmir to the district.</li>
		<li>The Fahrettin Altay-Urla bus number 725 runs every half hour between 06.00-00.30 every day of the week. With Urla-Çeşme bus number 760, you can go to Çeşme from Urla.</li>
		<li>If you go by car, there is about 80 km distance with entering Izmir-Çeşme Motorway after Narlıdere tolls.</li>
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