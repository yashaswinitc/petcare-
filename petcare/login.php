<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="cs/bootstrap.min.css">
    <title>login form</title>
	<style>
	.bg{
	background:url("images/c3.jpg")center center no-repeat;
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
                                <label for="validationDefault01" style="color:white">Name</label>
                                <input type="text" name="uname"  step="1" class="form-control" id="validationDefault01" placeholder="username" required>
                        </div> 
  

							 <div class="form-group">
                                <label for="validationDefault01" style="color:white">PASSWORD</label>
                                <input type="password" name="upassword" min="1" step="1" class="form-control" id="validationDefault01" placeholder="password" required>
                        </div>       
<style="color:white">					
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="SUBMIT"  /> </br>
<span class="text-Italic" style="color:black" >
Click here for &nbsp&nbsp
<input type="button" color="black"  value="BACK" onclick="fun1()"/>
<script> function fun1() { window.location="index.php"; } </script></br>
IF NOT REGISTERED&nbsp&nbsp
<input type="button" color="black"  value="REGISTER" onclick="fun2()"/>
<script> function fun2() { window.location="register.php"; } </script></br>
                      
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
$uname=$_POST['uname'];
 $upassword=$_POST['upassword'];
 



$query=mysql_query("select * from user where uname='$uname' and upassword='$upassword'") or die(mysql_error());
   
   if(mysql_num_rows($query)>0)
   {
   

	header("location: user_home.php?id=".$uname);
	
   }
   else
   {
    echo "<script> alert('Invalid Login')</script>";
   }
}

?>
</body>
</html>
