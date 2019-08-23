
<html>
<head>
<title> view</title>

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
	background:url("images/d19.jpeg");
	background-size:cover;
}
</style>
 <body class="bg">
<body background="bg17.jpg" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form action="" method="post">
<!--<table width='800' align='center border='5'>-->
		<table class="table2excel table2excel_with_colors" data-tableName="Test Table 3" border="4"  align="left" width="200" height="200">

<tr bgcolor="black">

                 <th>USER ID</th>
				<th> PET NAME</th>
				<th> PET CATEGORY</th>
				<th> PET SERVICE</th>
				<th> DURATION</th>
				<th> USER PHONE NO</th>
				<th> USER ADDRESS</th>
				<th> USER ADDRESS</th>
		

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

$query="select * from user_reg";
$run=mysql_query($query);


	?>	
<?php

//$run=mysql_query($query);

while($row=mysql_fetch_array($run))
{
  $ureg_id=$row[0];
 
 $upet_name=$row[1];

      $upet_category=$row[2];
    $uservice=$row[3];
	 $uduration=$row[4];
	  $uphone=$row[5];
	   $uaddress=$row[6];
       $uemail=$row[7];

?>

<tr align='center'>
				<td>  <?php echo $ureg_id; ?></td>
						<td>  <?php echo $upet_name; ?></td>
								<td>  <?php echo $upet_category; ?></td>
								<td>  <?php echo $uservice; ?></td>
																
						<td>  <?php echo $uduration; ?></td>
									<td>  <?php echo $uphone; ?></td>
							<td>  <?php echo $uaddress; ?></td>
										<td>  <?php echo $uemail; ?></td>
				
				
				
</tr>

<?php  }
?>
</html>