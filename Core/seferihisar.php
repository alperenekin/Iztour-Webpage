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
	<title>Seferihisar</title>
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
	<h2 style="color:black">Where is Seferihisar?</h2>

		<div id="googleMap" style="width:500px; height:500px; margin-left:-10px;"></div>

		<script>
		function myMap() {
		var mapProp= {
  		center:new google.maps.LatLng(38.195290, 26.834249),
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
		<img src="seferihisar1.jpg" alt="seferihisar1" style="width:1250px; height:600px;"  />	
		</div>
	<h1>First "Calm City"(CITTA SLOW) OF TURKEY : SEFERİHİSAR</h1>

	<p>Seferihisar is a town that people who had come before ,suggest their friends and families when they return home.While Seferihisar is the 
	first <a href="http://cittaslowturkiye.org">Citta Slow</a> of Turkey, people who want to have more quality life start to interest in Seferihisar nowadays.</p>
	<div id="title">
		<h2>History Of Seferihisar </h2>
	</div>
	<p>The oldest settlement of Seferihisar is Teos. It had been built in B.C 2000 by Cretan. This area respectively ruled by Lydians, Persians, Athens, Kingdom of Pergamo and Romans.
	 During the reign of Sultan Bayezid I , it was part of Ottoman Empire territory for the first time(1394) however after Ankara War(1402) Seferihisar had ruled by Aydınoğlu Seigniory.
	 In 15th century, it was confirmed that Seferihisar was going to be under the auspices of Ottoman Empire.  During Ottoman Empire , the old name of Seferihisar was <b>Sivrihisar</b>.
	 It became a county in 1884.</p>
	<p>With 40.000 inhabitance Seferihisar is the one of the calmest place in Turkey They have economy based on agriculture and the most important income sources are olive and citrus.
	 Seferihisar offers a lot of options for see and and nature amorous with its enormous coast line There is no doubt you are going to be satisfied by sightseeing in Seferihisar. 
	It is going to make you feel like living in a movie scene with shades of blue and green and pure streets. Dont forget to travel every street and take photo!</p>

	<h2 style="color:black";>Where To Visit in Seferihisar?</h2>
	<div id="title">
		<h2>1.Teos Ancient City</h2>
	</div>
	<div id="images" style="float:left; margin:20px 20px 20px 0px; clear:left">
		<img src="teos.jpg" alt="teos" style="width:800px; height:500px;"  />	
	</div>
	<p>Using museum card, you can enter and visit this amazing ancient city which locate in such a great place and and its nature.It is also know as seaport.
	 In Ancient City you can visit Dionysos Temple, Agora, the theather and people's assembly. Archaeologists have been excavating the bouleterion and the theater.
	 Majority of the reamains of the theater were used by the Ottomans for the construction of a medeaval castle. Therefore the size of theater still not known.
	 The size of the bouleterion was 850 people.
	.Also around the Ancient City there is a path directs you.So it helps you to walk around.</p>
	
	<div id="title">
		<h2>2.Sığacık Castle</h2>
	</div>
	<div id="images" style="float:left; margin:20px 20px 20px 0px; clear:left">
		<img src="kale.jpg" alt="kale" style="width:800px; height:500px;"  />	
	</div>
	<p> Sığacık Castle is placed next to the harbour. It was built by Seljukians. However it was demolished by earthquakes so it was reinovated  copule times by Ottoman Empire. 
	Also the Sığacık part of county is placed around the castle. We can easily observe that. Besides we are suggesting you to go up to marina side and look the castle from that 
	perspective. Also there are 3 doors for entrance to castle named Kuşuadası Aya Suluk and Seferihisar. </p>
	
	<div id="title">
		<h2>3.Sığacık Streets</h2>
	</div>
	<div id="images" style="float:left; margin:20px 20px 20px 0px; clear:left">
		<img src="sokaklar.jpg" alt="sokak" style="width:800px; height:500px;"  />	
	</div>
	<p>Again we should repeat, this place is the one of the most peaceful place in İzmir and Turkey. Sığacık is 5 km away from Seferihisar center. The strees looks 
	adorable with fancy side walks and halls with wooden shutter. This prevented architecture, peaceful habitans and souled air let you feel calm.</p>
	<br><br>
	<div id="title">
		<h2>4.Seferihisar Doğa Okulu(Seferihisar Natura School)</h2>
	</div>
	<div id="images" style="float:left; margin:20px 20px 20px 0px; clear:left">
		<img src="okul.jpg" alt="okul" style="width:800px; height:500px;"  />	
	</div>
	<p>The schoold is sided 24 km away from Orhanlı Village in Sığacık with 6 acres of olive groves and macquis groves. It is the one of the first education center in its area in Turkey
	There is no classroom in the school. The pholosophy behind the school is to learn how to live with nature and understand the nature lives with goodness. 
	You can join so many activities there and also support to school with your donations . Also one of the biggest supporter of the school is famous Turkish singer <b>Tarkan</b>.</p>
	
	<div id="title">
		<h2>5.Seferihisar Mandarin Fest</h2>
	</div>
	<div id="images" style="float:left; margin:20px 20px 20px 0px; clear:left">
		<img src="fest.jpg" alt="fest" style="width:800px; height:500px;"  />	
	</div>
	<p>The fest occurs every year in between September-November. This year 19 th one of the fest is already occured.You can find the World's best Satsuma type mandarin in Seferihisar.  
	 The street is full of fun all day with concerts. Also the best mandarin, the best producer and the best desert contests organize during fest!
	<br><br><br><br>
	<div id="title">
		<h2>Our Trip Plan In Seferihisar</h2>
	</div>
	<p> Our trip plan is:<blockquote> The trip day is Sunday while sundays are the best day to see Seferihisar. After meeting in İzmir center ,we are going to move 
	to Sığacık first.Walk around the streets and of course Sığacık Castle.After walking dont worry we are going to eat best pastry in the county. 
	So we are going to eat lunch in <a href="https://www.tripadvisor.com.tr/Restaurant_Review-g12215785-d12882712-Reviews-Radika-Sigacik_Izmir_Province_Turkish_Aegean_Coast.html">
	Radika</a>. Then we are planning to move through Teos side of the Seferihisar.After 2 hours of visit of the Teos Ancient city. We are planning to see Seferihisar beaches such as 
	Akkum.After long trip all day we are going to have dinner in <a href="http://www.milosbalik.com">Milos Restaurant </a> and finally the way back to city ! </blockquote></p>
	<div id="title">
		<h2>How to go Seferihisar?</h2>
	</div>
	<ol>
 		<li>You can use the İzmir-Çeşme highway and follow the signboards.</li>
  		<li>From İzmir Üçkuyular station you can take the Seferihisar-İzmir minibus.</li>
 		<li>You can use number 730 to go from İzmir to Seferihisar.</li>
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