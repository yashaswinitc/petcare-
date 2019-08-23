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
				<h1><a href="index.php">PETS CARE</a></h1>
			
				<a href="#nav">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="nav">
				<ul class="links">
					<li><a href="index.php">Home</a></li>
					
						<li><a href="elements.html">What we do</a></li>
						
						
								<li><a href="explore.html">Explore More</a></li>
					<!--<li><a href="generic.html">Need More Service</a></li>
					<li><a href="a_login.php">Login as Admin</a></li>
					<li><a href="emplogin.php">Login as Employee</a></li>-->
				</ul>
			</nav>

		<!-- Banner -->
			<section id="banner">

				<h2>PETS CARE</h2>
				<p>DOGS CATS PET STORE</p>
				<ul class="actions">
					<li><a href="elements.html" class="button big special">KNOW MORE</a></li>
				</ul>
			</section>

		<!-- One -->
			<section id="one" class="wrapper style1">
				<div class="inner">
					<article class="feature left">
						<span class="image"><img src="images/d5.jpeg" alt="" /></span>
						<div class="content">
							<h2> WE PROVIDE A PROTECTED AND CLEAN LIVING ENVIRONMENT FOR YOUR DOG</h2>
							<p>Here we provide fresh water , feed a quality diet and prevent obesity . We help to examine your pet by an veterinarian on a regular basis and also provide many more opportunities . </p>
							<ul class="actions">
								<li>
									<a href="elements.html" class="button alt">More</a>
								</li>
							</ul>
						</div>
					</article>
					<article class="feature right">
						<span class="image"><img src="images/c11.jpg" alt="" /></span>
						<div class="content">
							<h2> WE PROVIDE A PROTECTED AND CLEAN LIVING ENVIRONMENT FOR YOUR CAT</h2>
							<p>Here we provide fresh water , feed a quality diet and prevent obesity . We help to examine your pet by an veterinarian on a regular basis and also provide many more opportunities . </p>
							<ul class="actions">
								<li>
									<a href="elements.html" class="button alt">More</a>
								</li>
							</ul>
						</div>
					</article>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper special">
				<div class="inner">
					<header class="major narrow">
						<h2>GALLERY</h2>
						<p>The Beautiful Moments of our Pet Care</p>
					</header>
					<div class="image-grid">
						<a href="#" class="image"><img src="images/d29.jpeg" alt="" /></a>
						<a href="#" class="image"><img src="images/d16.jpeg" alt="" /></a>
						<a href="#" class="image"><img src="images/d13.jpeg" alt="" /></a>
						<a href="#" class="image"><img src="images/d12.jpeg" alt="" /></a>
						<a href="#" class="image"><img src="images/d2.jpg" alt="" /></a>
						<a href="#" class="image"><img src="images/d28.jpeg" alt="" /></a>
						<a href="#" class="image"><img src="images/d27.jpeg" alt="" /></a>
						<a href="#" class="image"><img src="images/d10.jpeg" alt="" /></a>
					</div>
					<ul class="actions">
						<li><a href="#" class="button big alt">BACK</a></li>
					</ul>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper style3 special">
				<div class="inner">
					<header class="major narrow	">
					<h2>PET CARE</h2>
						<p>PET ADOPTION BE PART OF SOMETHING BEAUTIFUL......!!</p>
					</header>
					<!--<ul class="actions">
						<li><a href="#" class="button big alt">Magna feugiat</a></li>
					</ul>-->
				</div>
			</section>

		<!-- Four -->
			<section id="four" class="wrapper style2 special">
				<div class="inner">
					<header class="major narrow">
						<h2>ANY FEEDBACK</h2>

					</header>
					<form action="" method="POST">
						<div class="container 75%">
							<div class="row uniform 50%">
								<div class="6u 12u$(xsmall)">
									<input name="fname" placeholder="Name" type="text" required />
								</div>
								<div class="6u$ 12u$(xsmall)">
									<input name="femail" placeholder="Email" type="email" required />
								</div>
								<div class="12u$">
									<textarea name="fcomment" placeholder="Comment" rows="4" required></textarea>
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
 
 $fname=$_POST['fname'];
   $femail=$_POST['femail'];
  $fcomment=$_POST['fcomment'];


$query= "insert into feedback(fname,femail,fcomment) values ('$fname','$femail','$fcomment')";

if(mysql_query($query))
{

echo "<script> alert('Thank you for your feedback!!!')</script>";

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