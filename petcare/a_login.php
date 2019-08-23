<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="cs/bootstrap.min.css">
    <title>Issue-form</title>
	<style>
	.bg{
	background:url("images/c12.jpg")center center no-repeat;
	background-size:cover;
}
</style>
</head>
<form name="form1" action="" method="POST">
<body class="bg">
    <section class="my-5">
        <div class="container">
            <div class="row">
                    <div class="col-12 col-md-6 mx-auto">
                            <form action="">


                            <div class="form-group">
                                <label for="validationDefault01">Name</label>
                                <input type="text" name="a_name"  step="1" class="form-control" id="validationDefault01" placeholder="username" required>
                        </div> 
  

							 <div class="form-group">
                                <label for="validationDefault01">PASSWORD</label>
                                <input type="password" name="a_password" min="1" step="1" class="form-control" id="validationDefault01" placeholder="password" required>
                        </div>       
					
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT"  /> </br>
<span class="text-Italic" style="color:black" >
Click here for &nbsp&nbsp
<input type="button" color="black"  value="BACK" onclick="fun1()"/>
<script> function fun1() { window.location="index.php"; } </script></br>
                      
         </form>   
                              

                                   
                    </div>
            </div>
        </div>
    </section>
	                              

    </form>
	
	


<?php
session_start();
if(isset($_POST['submit']))
{
mysql_connect("localhost","root","");
mysql_select_db("petcare") or die("cannot connect to the database");
$a_name=$_POST['a_name'];
 $a_password=$_POST['a_password'];
 

if($a_name =='')
{
echo "<script> alert('Please enter your name')</script>";
exit();
}

if($a_password =='')
{
echo "<script> alert('Please enter your password')</script>";
exit();
}


$query=mysql_query("select * from admin where a_name='$a_name' and a_password='$a_password'") or die(mysql_error());
   
   if(mysql_num_rows($query)>0)
   {
   $_SESSION['a_name']=$a_name;
   

	header("location: admin_home.html?id=".$a_name);
	
   }
   else
   {
    echo "<script> alert('Invalid Login')</script>";
   }
}

?>
</body>
</html>
