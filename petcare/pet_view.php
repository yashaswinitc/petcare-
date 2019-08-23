<!DOCTYPE html>
<html>


<style type='text/css'>
body {
	background : url{""};
	background-repeat:no-repeat;
	background-size:100%;
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
input[type=submit] {
    width: 80%;
    background-color: gray;
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
background-color: gray;
    border: none;
    color: black;
	}
	
div {
    height: 550px;
    width: 450px;
	position:absolute;
    top: 80px;
    right: 500px;
	border-radius: 10px;
	font-weight:bold;
	font-size:20;
    <!--background-color: #1234;-->
    padding: 20px;
}
.bg{
	background:url("images/d13.jpeg");
	background-size:cover;
}
</style>
<body class="bg" >
</body>


<form action="" method="get"><br/><br/>
<div>




<b>Search Here: </b><input type="text" id="search-value" name="p_no" placeholder="Enter the pet number" style="width:150px;height:35px;font:bold 15px Times New Roman;">&nbsp &nbsp<br>
<input type="submit" name="search" value="SEARCH NOW" style="width:150px;height:35px;font:bold 16px Times New Roman;"></br>

Click here for &nbsp&nbsp
<input type="button" color="black"  value="BACK" onclick="fun1()"/>
<script> function fun1() { window.location="pet_home.html"; } </script></br>

</form>











<?php

mysql_connect("localhost","root","");
mysql_select_db("petcare") or die("cannot connect to the database");

if(isset($_GET['search']))
{
$search_value=$_GET['p_no'];
$query=mysql_query("select * from pet_i where p_no like '$search_value' ")or die(mysql_error());
 if(mysql_num_rows($query)>0)
	 
 {

?>

		
<?php

//$run=mysql_query($query);

while($row=mysql_fetch_array($query))
{
  $p_no=$row[0];
 $p_name=$row[1];
   $p_category=$row[2];
 $p_service=$row[3];
   $p_age=$row[4];
 $o_name=$row[5];
 $o_address=$row[6];
      $o_phone=$row[7];
    $o_email=$row[8];



?>
<head>
		<title>page search</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src="../dist/jquery.table2excel.js"></script>
	</head>
	<body>
		<table class="table2excel" data-tableName="Test Table 1">
			
		
			

		<table class="table2excel table2excel_with_colors" data-tableName="Test Table 3" border="4"  align="left" width="400" height="300">
		
			<tbody>
					<tr><td>PET CONTENTS</td>    <td>DETAILS</td></tr>
                 <tr><td>PET NUMBER</td><td>   <?php echo $p_no; ?></td></tr>
				<tr><td>PET NAME</td> <td>   <?php echo $p_name; ?> </td></tr>
				<tr><td>PET CATEGORY</td> <td>   <?php echo $p_category; ?> </td></tr>
				<tr><td>PET SERVICE</td> <td>   <?php echo $p_service; ?> </td></tr>
				<tr><td>PET AGE</td>  <td>   <?php echo $p_age; ?> </td></tr>
				<tr><td>OWNER NAME</td>  <td>   <?php echo $o_name; ?> </td></tr>
				<tr><td>OWNER ADDRESS</td>  <td>   <?php echo $o_address; ?> </td></tr>
				
				<tr><td>OWNER PHONE NUMBER</td>   <td>   <?php echo $o_phone; ?> </td></tr>
				<tr><td>OWNER EMAIL</td>   <td>   <?php echo $o_email; ?> </td></tr>
				
   </tbody>

		</table>
	</body>
	
	
	
	
	<?php
}
}

else
{
	echo "<script> alert(' not found...!') </script>";
}

}
?>
</html>
