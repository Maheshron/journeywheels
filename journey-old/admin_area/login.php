<?php

session_start();

include("includes/db.php");

?>
<!DOCTYPE HTML>
<html>

<head>

<title>Journey Wheels</title>
 <link rel="shortcut icon" type="image/x-icon" href="product_images/favicon.ico">
<link rel="stylesheet" href="css/bootstrap.min.css" >

<link rel="stylesheet" href="css/login.css" >

</head>

<body style="background-color:black">
    <div class="container " >
 <div class="row ">
     <div class="col-lg-12 text-center">
                   <img style="border-radius:10px " src="product_images/logo1.jpg" alt="logo">
                    </div></div></div>
<div class="container"  ><!-- container Starts -->

<form class="form-login" action="" method="post" style="background-color:black"><!-- form-login Starts -->

<h2 class="form-login-heading" style="color:white;margin-top:-10px">Admin Login</h2>

<input type="text" class="form-control" name="admin_email" placeholder="Email Address" required >

<input type="password" class="form-control" name="admin_pass" placeholder="Password" required >

<button class="btn btn-lg  btn-block" style="background-color:#ffb735" type="submit" name="admin_login" >

Log in

</button>


</form><!-- form-login Ends -->

</div><!-- container Ends -->



</body>

</html>

<?php

if(isset($_POST['admin_login'])){

$admin_email = mysqli_real_escape_string($con,$_POST['admin_email']);

$admin_pass = mysqli_real_escape_string($con,$_POST['admin_pass']);

$get_admin = "select * from admins where admin_email='$admin_email' AND admin_pass='$admin_pass'";

$run_admin = mysqli_query($con,$get_admin);

$count = mysqli_num_rows($run_admin);

if($count==1){

$_SESSION['admin_email']=$admin_email;


echo "<script>window.open('index.php?dashboard','_self')</script>";

}
else {

echo "<script>alert('Email or Password is Wrong')</script>";

}

}

?>