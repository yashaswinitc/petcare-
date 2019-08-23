
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
    height: 550px;
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

<label for="p_no"><b>PET NUMBER:</b></label> 
<input placeholder="Enter pet number" type="text" name="p_no" required /></br>

<label for="p_name"><b>PET NAME:</b></label> 
<input placeholder="Enter pet name" type="text" name="p_name" required /></br>





    <label for="p_category">PET CATEGORY</label>
    <select class="form-control" id="exampleFormControlSelect1" name="p_category">
      <option>DOG</option>
      <option>CAT</option>

    </select>


    <label for="p_service">SERVICES :</label>
    <select class="form-control" id="exampleFormControlSelect1" name="p_service">
      <option>ALL</option>
      <option>WALKING</option>
      <option>GROOMING</option>
      <option>VETARINARY HELP</option>
      <option>DAYCARE</option>
    </select>


<!--
<label for="p_category"><b>PET CATEGORY:</b></label> 
<input placeholder="Enter pet category" type="text" name="p_category" required /></br>

<label for="p_service"><b>SERVICES:</b></label> 
<input placeholder="Enter service needed" type="text" name="p_service" required /></br>-->



<label for="p_age"><b>PET AGE:</b></label> 
<input placeholder="Enter pet age" type="number" name="p_age"  required /></br>

<label for="o_name"><b>OWNER NAME:</b></label> 
<input placeholder="Enter pet owner name" type="text" name="o_name" required /></br>

<label for="o_address"><b>OWNER ADDRESS:</b></label> 
<input placeholder="Enter owner address" type="text" name="o_address" required /></br>

<label for="o_phone"><b>PHONE NUMBER:</b></label> 
<input placeholder="Enter your phone num" type="text" name="o_phone" pattern="[6789]{1}[0-9]{9}" title="enter valid 10 digit" required /></br>

<label for="o_email"><b>EMAIL:</b></label> 
<input placeholder="Enter owner email" type="text" name="o_email" required /></br>


&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT" required /> </br>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="HOME" onclick="fun2()"/>
<script> function fun2() { window.location="emp_home.html"; } </script></br>

</form>
</div>


<?php

session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("petcare") or die("cannot connect to the database");

if(isset($_POST['submit']))
{
 
  $p_no=$_POST['p_no'];
 $p_name=$_POST['p_name'];
   $p_category=$_POST['p_category'];
 $p_service=$_POST['p_service'];
   $p_age=$_POST['p_age'];
 $o_name=$_POST['o_name'];
 $o_address=$_POST['o_address'];
      $o_phone=$_POST['o_phone'];
    $o_email=$_POST['o_email'];


 

$query= "insert into pet_i(p_no,p_name,p_category,p_service,p_age,o_name,o_address,o_phone,o_email) values ('$p_no','$p_name','$p_category','$p_service','$p_age'
,'$o_name','$o_address','$o_phone','$o_email')";

if(mysql_query($query))
{

//echo "<script> alert('Engineer is Succussfully registered')</script>";
header("location: emp_home.html?id=".$p_name);
}


}


?>
</body>


</html>
