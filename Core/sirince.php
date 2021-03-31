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
	<title>Şirince</title>
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
	<h2 style="color:black">Where is Şirince?</h2>

		<div id="googleMap" style="width:500px; height:500px; margin-left:-10px;"></div>

		<script>
		function myMap() {
		var mapProp= {
  		center:new google.maps.LatLng(37.944099,27.431625),
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
		<img src="şirince.jpg" alt="şirince" style="width:1250px; height:600px;"  />	
		</div>
	<h1>ŞİRİNCE</h1>
	<p>It carries the traces of Greek culture and makes you feel like you are cruising in Europe. The village of Şirince, which hosted both Greek people and Turks at the time, is seen as the pearl of the region and 
	deserves to be discovered for at least two days. It is 83 km to İzmir city center and 8 km to Selçuk town center.</p>
	<div id="title">
		<h2>History Of Şirince</h2>
	</div>
	<p>It is reported that the original name of Kırkınca was given to forty people in a legendary age. This name, which takes forms such as Kirkice, Kirkince and finally Çirkince in the Greek pronunciation,
	was formalized in the first years of the Republic as Şirince by the order of Kazım Dirik, the governor of İzmir.</p>
	<p>It was a 1,800 multi-dwelling building Greek town famous for its fig production in the 19th century. Population exchange between Greece and Turkey in 1923 with the separation of the results of the Greeks,
	were settled by emigrants from some villages. There are two Greek churches in the neighborhood. In Şirince, no house closes the view of the other. There is a high level of wine production in the village.</p>

	<h2 style="color:black";>Where To Visit in Şirince?</h2>
	<div id="title">
		<h2>1.Şirince Streets</h2>
	</div>
	<div id="images" style="float:left; margin:20px 20px 20px 0px; clear:left">
		<img src="şirince-streets.jpg" alt="şirince streets" style="width:800px; height:500px;"  />	
	</div>
	<p>Şirince hosts to very hilly and narrow streets because of being a mountain village. However, one of the details that make your Şirince trip enjoyable is to walk on these chirping stone roads between historical Greek houses!
	 As you walk along the streets of Şirince, you will want to take a photo of the Şirince view, which looks like a painting.</p>
	<br><br>
	<div id="title">
		<h2>2.St. John the Baptist Church</h2>
	</div>
	<div id="images" style="float:left; margin:20px 20px 20px 0px; clear:left">
		<img src="St-John-the-Baptist-Church.jpg" alt="St. John the Baptist Church" style="width:800px; height:500px;"  />	
	</div>
	<p>St. John the Baptist Church, which was built in 1832 in order to be dedicated to St. John, is one of the historical buildings in the village and certainly deserves to be included in Sirince's list of places to visit.
	Another detail that makes the church special is that it hosts a wine cellar. This church, where you can make wine tasting and buy your favorite wines, is also used as a stylish background for newlywed couples.	</p>
	
	<div id="title">
		<h2>3.Nesin Mathematics Village</h2>
	</div>
	<div id="images" style="float:left; margin:20px 20px 20px 0px; clear:left">
		<img src="nesin-matematics-village.jpg" alt="nesin matematics village" style="width:800px; height:500px;"  />	
	</div>
	<p>As its name suggests, Nesin Mathematics Village, which covers almost everything about mathematics, brings together children and people with mathematic educations, seminars, lectures and camps since 2007, when it was founded.
	In this village, where activities are held every year, it is aimed to contribute to the next generation by making regular meetings, symposiums and interviews, and to instill mathematics and science. Şirince, the home of Nesin Math Village, shows its difference in this sense.</p>
	
	<div id="title">
		<h2>4.Theater Madrasah</h2>
	</div>
	<div id="images" style="float:left; margin:20px 20px 20px 0px; clear:left">
		<img src="theater-madrasah.jpg" alt="theater madrasah" style="width:800px; height:500px;"  />	
	</div>
	<p>This new architecture, integrated with the historical texture of Şirince, is not only a theater; referring to every branch of art, it has the distinction of being a madrasah which includes all kinds of artistic activities that will be benefit for people.
	Theater Madrasa, which we can see as a gift of humanity to Şirince, no doubt has the power to change the way you look to the world.</p>
	
	<div id="title">
		<h2>5.Şirince Stone School Museum</h2>
	</div>
	<div id="images" style="float:left; margin:20px 20px 20px 0px; clear:left">
		<img src="stone-school.jpg" alt="stone school" style="width:800px; height:500px;"  />	
	</div>
	<p>The stone building, which is a historical Greek school, but operated under the name of "Şirince Artemis Restaurant", has been one of the most visited buildings of the village since 2012, when it was built as Şirince Taş Mektep Museum. Thanks to this museum, which reflects the history of education in Şirince village,
	many visitors witness the history of education that has existed since the Greeks who lived in the village in the past.</p>
	
	
	<div id="title">
		<h2>Our Trip Plan In Şirince</h2>
	</div>
	<p> Our trip plan is:<blockquote> This trip will be more of a historical trip. History lovers, don't forget to bring your camera! At the beginning of the day, we will take you to the streets of Sirince for peace and quiet. Then we will visit the most famous museums of Sirince.
	At the end of the day, after having a visit to the Nesin mathematics village, it is inevitable to have a pleasant conversation accompanied by a nice meal with our friends.	</blockquote></p>
	<div id="title">
	
		<h2>How to go Şirince?</h2>
	</div>
	<ol>
 		<li>There are several ways to go from Izmir to Sirince. To reach the village which is 8 km away from Selcuk, you need to go to Selçuk district first. Therefore, you can go to the village of Sirince with the vehicles mentioned in our Selçuk trip page.</li>
  		
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