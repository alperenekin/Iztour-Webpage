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
	<title>Ödemiş</title>
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
	<h2 style="color:black">Where is Ödemiş?</h2>

		<div id="googleMap" style="width:500px; height:500px; margin-left:-10px;"></div>

		<script>
		function myMap() {
		var mapProp= {
  		center:new google.maps.LatLng(38.219006, 27.971762),
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
		<img src="odemis1.jpg" alt="ödemiş" style="width:1250px; height:600px;"  />	
		</div>
	<h1>ÖDEMİŞ</h1>
	<p>Ödemiş, 114 km from İzmir, is a peaceful and beautiful district with a quiet life. Situated on a fertile plain surrounded by mountains on all four sides, which waters of Küçük Menderes River extending between Bozdağlar and Aydın Mountains is a beautiful Aegean town.
	The district, which is on the list of places to visit around İzmir, has many beautiful places that start to announce its name slowly. Gölcük Lake with its natural beauties, Birgi village which has been the capital of Aydınoğullari with its historical and cultural history and the most beautiful ski resort in the Aegean region, Bozdağ are some of the places to visit.</p>
	<div id="title">
		<h2>History Of Ödemiş</h2>
	</div>
	<p>Ödemiş, Turkey's most fertile land owners keeps growing until about 5000 years of history. It has been home to many civilizations from the Anatolian civilizations since the people of Luwian. Especially with the heroism shown in the National Struggle, it is known that this region and its people are subject to many games and stories.</p>

	<h2 style="color:black";>Where To Visit in Ödemiş?</h2>
	<div id="title">
		<h2>1.Ödemiş Museum</h2>
	</div>
	<div id="images" style="float:left; margin:20px 20px 20px 0px; clear:left">
		<img src="ödemiş-museum.jpg" alt="ödemiş museum" style="width:800px; height:500px;"  />	
	</div>
	<p>Ödemiş Museum consists of two floors in total. In the beginning, ethnographic artifacts were exhibited and archaeological artifacts were also included. Most of the works exhibited here belong to the Old Bronze Age, Archaic, Classical and Byzantine periods, while the majority of the remains are ornaments, small sculptures, bronze, glass and ceramic products. Odemis Museum exhibits a total of 16 thousand works. The museum is located at the entrance of Birgi, see if you have time.</p>
	
	<div id="title">
		<h2>2.Ödemiş 125th Year Cultural Park</h2>
	</div>
	<div id="images" style="float:left; margin:20px 20px 20px 0px; clear:left">
		<img src="Odemis-Kultur-Park.jpg" alt="Ödemiş Kültür Park" style="width:800px; height:500px;"  />	
	</div>
	<p>125th Year Cultural Park is located on a quite wide area and can be reached easily on Ödemiş-Birgi highway. In Cultural Park; there are many areas such as an artificial pond, 2 waterfalls on this place, a swimming pool, a facility, a wedding hall, business centers, a pier tea garden, hiking trails, children's parks. The park, which also has a mini golf course and gymnastic facilities, is the center of attention for everyone, and is one of the district's breathing centers.</p>
	
	<div id="title">
		<h2>3.İlk kurşun Monument</h2>
	</div>
	<div id="images" style="float:left; margin:20px 20px 20px 0px; clear:left">
		<img src="ilk-kurşun.jpg" alt="ilk kurşun" style="width:800px; height:500px;"  />	
	</div>
	<p>İlk Kurşun Monument, which is 13 km away from the town center, is located in the village entrance in 1925. İlk kurşun Village, formerly known as Hacıilyas Village, has an important place for the people of Ödemiş to respond against the Greek occupation forces in an organized manner. For this reason, every year in the village in the last week of May, people do some celebrations under the name of İlk kurşun Festival.</p>
	
	<div id="title">
		<h2>4.Birgi</h2>
	</div>
	<div id="images" style="float:left; margin:20px 20px 20px 0px; clear:left">
		<img src="birgi.jpg" alt="birgi" style="width:800px; height:500px;"  />	
	</div>
	<p>Birgi is like an open air museum. Once upon a time it was the capital of the Aydınoğulları Principality. It is also one of the most beautiful villages in the Aegean. In 1333, the famous Arabian traveler Ibn Battuta came to Birgi and he talked about Aydınoğlu Mehmet Bey's plateau in Bozdağ, Birgi palace and Birgi madrasah. Çakırağa and Sandıkoğlu mansions, Ulu Mosque, İmam-ı Birgi Tomb are places to see.</p>
	
	<div id="title">
		<h2>5.Gölcük</h2>
	</div>
	<div id="images" style="float:left; margin:20px 20px 20px 0px; clear:left">
		<img src="gölcük.jpg" alt="gölcük" style="width:800px; height:500px;"  />	
	</div>
	<p>It is one of the oldest settlements in history with its century-old trees, medicinal plants and large pine forests. Located in the foothills of Bozdağ, this neighborhood is used as a plateau by the surrounding regions due to the cool breeze. This place in nature is very suitable for those who want a quiet holiday and who love taking photos. If you go in the autumn, you can see the most beautiful colors of nature.</p>
	
	<div id="title">
		<h2>6.Bozdağ Ski Resort</h2>
	</div>
	<div id="images" style="float:left; margin:20px 20px 20px 0px; clear:left">
		<img src="bozdağ.jpg" alt="bozdağ" style="width:800px; height:500px;"  />	
	</div>
	<p>Bozdağ Ski Resort located within the boundaries of Bozdağ Village of Ödemiş is one of the places where winter sports enthusiasts are interested. It is possible to ski between December and March in Bozdağ, which is visited by many people every winter thanks to its proximity to İzmir. The center, which has 2 teleskies in total, manages to reach a snow thickness of about 120 cm despite the Mediterranean climate.</p>
	
	
	<div id="title">
		<h2>Our Trip Plan In Ödemiş</h2>
	</div>
	<p> Our trip plan is:<blockquote> Be prepared to have fun in the Bozdağ Ski Center with its snow border that is not melting despite the lack of season. First we will visit the museums and then take a nice break in the cultural park where the sea and the landscape look so beautiful.
	Before we go to Bozdağ Ski Center, after having a nice feast at <a href="https://www.tripadvisor.com.tr/Restaurant_Review-g3237718-d15030648-Reviews-Birgi_SofrasI_Restorant-Odemis_Izmir_Province_Turkish_Aegean_Coast.html">Birgi Sofrası Restaurant</a>, a place of tradition, we can enjoy the snow!</blockquote></p>
	<div id="title">
	
		<h2>How to go Ödemiş?</h2>
	</div>
	<ol>
 		<li>You can reach directly from Izmir Bus Terminal by bus companies and minibus lines.</li>
  		<li>You can also take a trip from Basmane train station.</li>
	</ol> 

	<address>
      		IZTOUR &nbsp;&#9728;&nbsp;
     		Gülbahçe Campus 35430 Urla-İzmir/TURKEY &nbsp;&#9728;&nbsp;
	</address>	

	</div>
	
	
</div>
</body>
</html>