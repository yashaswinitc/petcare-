
<html>
<head>
<title>Register Form</title>

</head>

<style>
input[type=text], select {
    width: 100%;
    padding: 3px 5px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
}
input[type=text]:focus {
    border: 1px solid #555;
}
input[type=email], select {
    width: 100%;
    padding: 3px 5px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
}
input[type=email]:focus {
    border: 1px solid #555;
}

input[type=password], select {
    width: 100%;
    padding: 3px 5px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
}
input[type=password]:focus {
    border: 1px solid #555;
}

input[type=number], select {
    width: 100%;
    padding: 3px 5px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
}
input[type=number]:focus {
    border: 1px solid #555;
}
input[type=submit] {
    width: 60%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
	border: 1px solid #ccc;
    border-radius: 8px;
    cursor: pointer;
	}

input[type=submit]:hover{
background-color: grey;
    border: none;
    color: black;
	}
	input[type=button] {
    width: 30%;
	position:right;
	font-weight:bold;
    background-color: grey;
    color: white;
    padding: 5px 10px;
    margin: 8px 0;
    border: none;
	border: 1px solid #ccc;
    border-radius: 8px;
    cursor: pointer;
	}
	
	input[type=button]:hover{
background-color: #4CAF50;
    border: none;
    color: black;
	}
	
div {
    height: 400px;
    width: 400px;
	position:absolute;
    top: 80px;
    right: 200px;
	border-radius: 10px;
	font-weight:bold;
	font-size:20;
    background-color: #1234;
    padding: 20px;
}
.bg{
	background:url("images/c13.jpg")center center no-repeat;
	background-size:cover;
}
</style>
<body class="bg">

</body>
<body>


<div>
<form method="post" action="">

<label for="uname"><b>NAME</b></label> 
<input placeholder="Enter your name" type="text" name="uname" required /></br>

<label for="uemail"><b>EMAIL:</b></label> 
<input placeholder="Enter your email" type="text" name="uemail" required /></br>

<label for="uphone"><b>PHONE NUMBER:</b></label> 
<input placeholder="Enter your phone num" type="text" name="uphone" pattern="[6789]{1}[0-9]{9}" title="enter valid 10 digit" required /></br>

<label for="upassword"><b>PASSWORD</b></label> 
<input placeholder="Enter owner password" type="password" name="upassword" required /></br>


&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT" required /> </br>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="BACK" onclick="fun2()"/>
<script> function fun2() { window.location="index.php"; } </script></br>

</form>
</div>


<?php

session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("petcare") or die("cannot connect to the database");

if(isset($_POST['submit']))
{
 $uname=$_POST['uname'];
 $uemail=$_POST['uemail'];
 $uphone=$_POST['uphone'];
 $upassword=$_POST['upassword'];
     
    

 

$query= "insert into user(uname,uemail,uphone,upassword) values ('$uname','$uemail','$uphone','$upassword')";

if(mysql_query($query))
{

//echo "<script> alert('User Successfully registered')</script>";
header("location: login.php?id=".$uname);
}


}


?>
</body>


</html>
