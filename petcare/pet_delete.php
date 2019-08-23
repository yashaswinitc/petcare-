
<html>

<head>
<title>delete pet</title>
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

th {
	display: table-cell;
	font-weight:bold;
	text-align:center;
	color:white;
   }
td {
	display: table-cell;
	font-weight:bold;
	text-align:center;
	color:black;
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
    width: 80%;
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
    height: 450px;
    width: 350px;
	position:absolute;
    top: 80px;
    right: 700px;
	border-radius: 10px;
	font-weight:bold;
	font-size:20;
    
    padding: 20px;
}

.bg{
	background:url("images/c2.jpg");
	background-size:cover;
}
</style>
 <body class="bg">
</body>
<body>

<div>
<form method="post" action="">



<label for="p_no"><span class="text-Italic" style="color:white" ><b>Pet number</b></label> 
<input placeholder="Enter pet number" type="text" name="p_no"/></br>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT"  /> 
<br></br>


<span class="text-Italic" style="color:white" >
Click here for &nbsp&nbsp
<input type="button" color="black"  value="BACK" onclick="fun1()"/>
<script> function fun1() { window.location="pet_home.html"; } </script></br>

</div>
</form>

</body>
</html>

<?php
mysql_connect("localhost","root","");
mysql_select_db("petcare") or die("cannot connect to the database");

if(isset($_POST['submit']))
{
$p_no=$_POST['p_no'];


$q="select * from pet_i where p_no='$p_no' ";
$check=mysql_query($q);


$checkrows=mysql_num_rows($check);

if($checkrows>0){
	
$query="delete from pet_i where p_no='$p_no'";
if(mysql_query($query))
{
echo "<script> alert('deleted Successfully') </script>";

} 
}

else
	{ 
echo "<script> alert('Result not found!!!') </script>"; 
} 
}

?> 


</html>