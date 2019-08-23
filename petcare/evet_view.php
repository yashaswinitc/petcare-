
<html>
<head>
<title> help view</title>

</head>

<style>

div {
    height: 550px;
    width: 550px;
	position:absolute;
    top: 300px;
    right: 600px;
	border-radius: 10px;
	font-weight:bold;
	font-size:20;
    
    padding: 20px;
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

.bg{
	background:url("images/c17.jpg") center center no-repeat;
	background-size:cover;
}
</style>
 <body class="bg">
<body background="bg17.jpg" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form action="" method="post">
<!--<table width='800' align='center border='5'>-->
		<table class="table2excel table2excel_with_colors" data-tableName="Test Table 3" border="4"  align="left" width="200" height="200">

<tr bgcolor="black">

                 <th>VETERINARY HELP ID</th>
				<th>NAME</th>
				<th>EMAIL</th>
				<th>PHONE NUMBER</th>
				<th>ADDRESS</th>
				<th>PROBLEM</th>


</tr>
<div>




</br></br></br></br></br></br>


Click here for &nbsp&nbsp

<input type="button" color="black"  value="BACK" onclick="fun1()"/>
<script> function fun1() { window.location="emp_home.html"; } </script></br>

</form>
</div>
</body>







<body background="13.jpg" ></body>


<?php
mysql_connect("localhost","root","");
mysql_select_db("petcare") or die("cannot connect to the database");

$query="select * from vet_help";
$run=mysql_query($query);


	?>	
<?php

//$run=mysql_query($query);

while($row=mysql_fetch_array($run))
{
  $v_id=$row[0];
 
 $vname=$row[1];
   $vemail=$row[2];
      $vphone=$row[3];
  $vaddress=$row[4];
  $vproblem=$row[5];


?>

<tr align='center'>
				<td>  <?php echo $v_id; ?></td>
				<td>   <?php echo $vname; ?> </td>
				<td>   <?php echo $vemail; ?> </td>
				 <td>   <?php echo $vphone; ?> </td>
				<td>   <?php echo $vaddress; ?> </td>
				<td>   <?php echo $vproblem; ?> </td>
</tr>

<?php  }
?>
</html>