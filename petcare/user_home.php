<!DOCTYPE HTML>
<!--
	Retrospect by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>PET CARE</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header" class="alt">
				<h1><a href="user_home.php">PETS CARE</a></h1>
				<a href="#gallery">Gallery</a>
				<a href="#service">Need any service</a>
				
							
				<a color="black" href="logout.php">Logout</a>
				
			</header>

		
<!-- Banner -->
			<section id="banner">

				<h2>PETS CARE</h2>
				<p>DOGS CATS PET STORE</p>

			</section>
	

		

		<!-- Two -->
			<section id="gallery" class="wrapper special">
				<div class="inner">
					<header class="major narrow">
						<h2>GALLERY</h2>
						<p>The Beautiful Moments of our Pet Care</p>
					</header>
					<div class="image-grid">
						<a href="#" class="image"><img src="images/d22.jpeg" alt="" /></a>
						<a href="#" class="image"><img src="images/d20.jpeg" alt="" /></a>
						<a href="#" class="image"><img src="images/d17.jpeg" alt="" /></a>
						<a href="#" class="image"><img src="images/c8.jpg" alt="" /></a>
						<a href="#" class="image"><img src="images/c3.jpg" alt="" /></a>
						<a href="#" class="image"><img src="images/d47.jpg" alt="" /></a>
						<a href="#" class="image"><img src="images/d49.jpg" alt="" /></a>
						<a href="#" class="image"><img src="images/d40.jpg" alt="" /></a>
					</div>
					<ul class="actions">
						<li><a href="#" class="button big alt">BACK</a></li>
					</ul>
				</div>
			</section>



		<!-- Four -->
			<section id="service" class="wrapper style2 special">
				<div class="inner">
					<header class="major narrow">
						<h2>Enter the service</h2>

					</header>
					<form action="" method="POST">
						<div class="container 75%">
							<div class="row uniform 50%">
								<div class="6u$">
									<input name="upet_name" placeholder="Enter Pet Name" type="text" required />
								</div>
															<div class="6u$">

    <select name="upet_category" placeholder="Enter pet category" type="text" required >
      <option style="color:black">Dog</option>
           <option style="color:black">Cat</option>
 
    </select>
  </div>

								<div class="6u$">

    <select name="uservice" placeholder="Services" type="text" required >
      <option style="color:black">Walking service</option>
           <option style="color:black">Grooming service</option>
      <option style="color:black">Daycare service</option>
	  
	        <option style="color:black">Veterinary help service</option>
    </select>
  </div>

								
									<div class="6u$">
									<input name="uduration" placeholder="Enter duration" type="text" required />
								</div>
								
																
								
								<div class="6u$">
									<input name="uphone" placeholder="Enter your phone" type="text" required />
								</div>
								
								<div class="6u$">
									<input name="uaddress" placeholder="Enter your address" type="text" required />
								</div>
								
									<div class="6u$">
									<input name="uemail" placeholder="Enter your Email" type="email" required />
								</div>
								
								
								
								
							</div>
						</div>
						<ul class="actions">
							<li><input type="submit" class="special" value="Submit" name="Submit" required /></li>
							<li><input type="reset" class="alt" value="Reset" /></li>
						</ul>
					</form>
				</div>
				
				
				
				<?php

$con=mysql_connect("localhost","root","");
mysql_select_db("petcare") or die("cannot connect to the database");

if(isset($_POST['Submit']))
{
 
 $upet_name=$_POST['upet_name'];
 $upet_category=$_POST['upet_category'];
 $uservice=$_POST['uservice'];
 $uduration=$_POST['uduration'];
 $uphone=$_POST['uphone'];
  $uaddress=$_POST['uaddress'];
   $uemail=$_POST['uemail'];
 


$query= "insert into user_reg(upet_name,upet_category,uservice,uduration,uphone,uaddress,uemail) values ('$upet_name','$upet_category','$uservice','$uduration','$uphone','$uaddress','$uemail')";

if(mysql_query($query))
{

echo "<script> alert('Thank you for using our petcare!!!')</script>";

}


}


?>
				
				
				
				
			</section>


		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<ul class="icons">
						<li><a href="#" class="icon fa-facebook">
							<span class="label">Facebook</span>
						</a></li>
						<li><a href="#" class="icon fa-twitter">
							<span class="label">Twitter</span>
						</a></li>
						<li><a href="#" class="icon fa-instagram">
							<span class="label">Instagram</span>
						</a></li>
						<li><a href="#" class="icon fa-linkedin">
							<span class="label">LinkedIn</span>
						</a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Softprolang.</li>
						<li>Banashankari.</li>
						<li>Banglore.</li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>