
<html>
<head>
<title>Employee details</title>

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
	background:url("images/c15.jpg");
	background-size:cover;
}
</style>
 <body class="bg">
<body background="bg17.jpg" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form action="" method="post">
<!--<table width='800' align='center border='5'>-->
		<table class="table2excel table2excel_with_colors" data-tableName="Test Table 3" border="4"  align="left" width="200" height="200">

<tr bgcolor="black">

                 <th>Employee ID</th>
				<th>NAME</th>
				<th>EMAIL</th>
				<th>PHONE</th>
				<th>ADDRESS</th>
				
<th>SERVICE</th>

</tr>
<div>




</br></br></br></br></br></br>


Click here for &nbsp&nbsp

<input type="button" color="black"  value="BACK" onclick="fun1()"/>
<script> function fun1() { window.location="admin_home.html"; } </script></br>

</form>
</div>
</body>







<body background="13.jpg" ></body>


<?php
mysql_connect("localhost","root","");
mysql_select_db("petcare") or die("cannot connect to the database");

$query="select * from employee";
$run=mysql_query($query);


	?>	
<?php

//$run=mysql_query($query);

while($row=mysql_fetch_array($run))
{
  $eid=$row[0];
 
 $ename=$row[1];
   $eemail=$row[2];
      $ephone=$row[3];
     $eaddress=$row[4];
      $eservice=$row[5];


?>

<tr align='center'>
				<td>  <?php echo $eid; ?></td>
				<td>   <?php echo $ename; ?> </td>
				<td>   <?php echo $eemail; ?> </td>
				 <td>   <?php echo $ephone; ?> </td>
				 <td>   <?php echo $eaddress; ?> </td>
				 <td>   <?php echo $eservice; ?> </td>
				 
				
</tr>

<?php  }
?>
</html>