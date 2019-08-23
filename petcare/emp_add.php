<!DOCTYPE HTML>

<html>
	<head>
		<title>Employee form</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body class="landing">

		<!-- Four -->
			<section id="four" class="wrapper style2 special">
				<div class="inner">
					<header class="major narrow">
						<h3>Add Employee</h3>

					</header>
					<form action="" method="POST">
						<div class="container 75%">
							<div class="row uniform 50%">
								<div class="6u 12u$(xsmall)">
									<input name="ename" placeholder="Name" type="text"required />
								</div>
								<div class="6u$ 12u$(xsmall)">
									<input name="eemail" placeholder="Email" type="email" required  />
								</div>
								
								    <div class="12u$">
									<input name="ephone" placeholder="Phone" type="text" pattern="[6789]{1}[0-9]{9}" title="enter valid 10 digit" required ></textarea>
								</div>
								
								
								<div class="12u$">
									<textarea name="eaddress" placeholder="Your Address"required ></textarea>
								</div>
								
								<div class="12u$">
									<textarea name="eservice" placeholder="Enter alloted service." required ></textarea>
								</div>
								
							
							
								    <div class="12u$">
									<input name="epassword" placeholder="Password" type="password" required ></textarea>
								</div>
							</div>
						</div>
						<ul class="actions">
							<li><input type="submit" class="special" value="Submit" name="Submit" /></li>
							<li>
							  
<input type="button" color="black" value="Back" onclick="fun1()"/>
<script> function fun1() { window.location="admin_home.html"; } </script></li>
							
						</ul>
					</form>
				</div>
				
				
				
				<?php

$con=mysql_connect("localhost","root","");
mysql_select_db("petcare") or die("cannot connect to the database");

if(isset($_POST['Submit']))
{
 
 $ename=$_POST['ename'];
   $eemail=$_POST['eemail'];
      $ephone=$_POST['ephone'];
  $eaddress=$_POST['eaddress'];
  $eservice=$_POST['eservice'];
$epassword=$_POST['epassword'];
$query= "insert into employee(ename,eemail,ephone,eaddress,eservice,epassword) values ('$ename','$eemail','$ephone','$eaddress','$eservice','$epassword')";

if(mysql_query($query))
{
//echo "<script> alert('successfully registered')</script>";
header("location: admin_home.html?id=".$ename);

}


}


?>
							
			</section>
	<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>