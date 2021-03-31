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
	<title>Bergama</title>
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
	<h2 style="color:black">Where is Pergamon?</h2>

		<div id="googleMap" style="width:500px; height:500px; margin-left:-10px;"></div>

		<script>
		function myMap() {
		var mapProp= {
  		center:new google.maps.LatLng(39.1214, 27.1799 ),
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
		<img src="pergamon.jpg" alt="pergamon" style="width:1250px; height:600px;"  />	
		</div>
	<h1>PERGAMON</h1>
	<p>Pergamon; it is located on the road between İzmir and Çanakkale, is in the lower part of Edremit Bay and slightly inland from the sea. It is one of the important ancient city destinations of the Aegean Region, dating back to V. Century. One of the most important historical and cultural region,
	became the capital of the Kingdom of Pergamon and in 2011 it became the 999th heritage of the UNESCO World Heritage List.</p>
	<div id="title">
		<h2>History Of Pergamon</h2>
	</div>
	<p>Pergamon, which was conquered by the Karesi Bey, remained under the rule of Karesi Principality for a long time and was later connected to the Ottoman Empire.</p>
	<p>Pergamon, which was connected to the Karesi Sanjak, that is the center of Balıkesir between 1337-1868, was connected to the Izmir Sanjak after being connected to Saruhan Sanjak which is the center of Manisa between 1868 and 1877.</p>
	
	<h2 style="color:black";>Where To Visit in Pergamon?</h2>
	<div id="title">
		<h2>1.Pergamon Acropolis </h2>
	</div>
	<div id="images" style="float:left; margin:20px 20px 20px 0px; clear:left">
		<img src="akropol.jpg" alt="akropol" style="width:800px; height:500px;"  />	
	</div>
	<p>Today, when you leave the center of the Pergamon settlement and enter the acropolis road, the curved road will bring you up to the ancient entrance of the acropolis. If you go by car you will proceed by a light ramp. But then you come to an area where the ropeway station is located.
	The cable car ride costs 10 TL and takes you to the Acropolis after about 5 minutes. Cable car can be nice for those who love their journey. It may also be possible to walk on foot, but this may take a while.</p>
	
	<div id="title">
		<h2>2.Red Courtyard (Basilica)</h2>
	</div>
	<div id="images" style="float:left; margin:20px 20px 20px 0px; clear:left">
		<img src="bazilika.jpg" alt="bazilika" style="width:800px; height:500px;"  />	
	</div>
	<p>When the Acropolis trip is finished and you return to Bergama, you will see the Red Courtyard at the entrance of the district center, made of red bricks on the left side of the road. This building, also known as Basilica, is one of the seven churches of the apocalypse.
	In the basilica, the museum card is valid. The reason why it is called the red courtyard is that it was built with the bricks carried from hand to hand at the quarry 40 km away. The Red Courtyard is a temple built in the 2nd century BC in honor of the Egyptian gods. In fact, the first construction is based
	on the Roman period; it was later converted to church. It is one of the first 7 churches in Anatolia. And it should be noted that the Selinos Stream still flows under the temple with a special tunnel system.</p>

	<div id="title">
		<h2>3.Pergamon Museum</h2>
	</div>
	<div id="images" style="float:left; margin:20px 20px 20px 0px; clear:left">
		<img src="pergamon-museum.jpg" alt="pergamon-museum" style="width:800px; height:500px;"  />	
	</div>
	<p>One of the most important points of Bergama are the museums. At this point, the Bergama Museum is one of the places to visit. Archaeological excavations were first made in 1878. Many historical artifacts unearthed in the acropolis and environmental excavations have been preserved in the garden, exhibition halls and warehouses of this museum.</p>
	<br>
	<div id="title">
		<h2>4.Asklepieion: World's First Psychotherapy Center</h2>
	</div>
	<div id="images" style="float:left; margin:20px 20px 20px 0px; clear:left">
		<img src="Asklepion.jpg" alt="Asklepion" style="width:800px; height:500px;"  />	
	</div>
	<p>While you are leaving Bergama, on the right side, when you deviate to the road where the plate of Asklepieion is located, a few kilometers later, you come to Bergama Asklepieion, which is known as the most important health and healing center of the ancient era. According to Pausanisas, the first temple of Asclepius in Pergamon was built in BC IV. century. 
	The world psychotherapy congress is held every year and there is a theater hall for 4,500 people. It should also be noted that healing tunnels are a featured venue with holy water supply. Pergamon Asklepieion was an important health and treatment center in the ancient times, equivalent to the examples in Epidaurus and Kos.</p>

	<div id="title">
		<h2>Our Trip Plan In Pergamon</h2>
	</div>
	<p> Our trip plan is:<blockquote> The trip day is Sunday while sundays are the best day to see Seferihisar. After meeting in İzmir center, we are going to move 
	to Sığacık first.Walk around the streets and of course Sığacık Castle.After walking dont worry we are going to eat best pastry in the county. 
	So we are going to eat lunch in <a href="https://www.tripadvisor.com.tr/Restaurant_Review-g12215785-d12882712-Reviews-Radika-Sigacik_Izmir_Province_Turkish_Aegean_Coast.html">
	Radika</a>. Then we are planning to move through Teos side of the Seferihisar.After 2 hours of visit of the Teos Ancient city. We are planning to see Seferihisar beaches such as 
	Akkum.After long trip all day we are going to have dinner in <a href="http://www.milosbalik.com">Milos Restaurant </a> and finally the way back to city ! </blockquote></p>
	<div id="title">
	
		<h2>How to go Pergamon?</h2>
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