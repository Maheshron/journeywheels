
<?php
ob_start();
session_start();
if(!isset($_SESSION))
    include ("./includes/db.php");
include("./functions/functions.php");
$email = '';
if(isset($_SESSION["email"])){
    $email = $_SESSION['email'];
    $get_customer = "select * from users WHERE email='$email'";
    $run_customer = mysqli_query($db, $get_customer);
    $row = mysqli_fetch_array($run_customer);
    $name = $row['name'];
     $mobile = $row['mobile'];

}
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $pickupdatetime = $_GET['pickupdatetime'];
    $dropdatetime = $_GET['dropdatetime'];
    $ploc = $_GET['pickaddress'];
    $dloc= $_GET['dropaddress'];
    $get_customer = "select * from products WHERE id='$id'";
    $run_customer = mysqli_query($db, $get_customer);
    $row = mysqli_fetch_array($run_customer);
    $price = $row['price'];
    $product_title = $row['product_title'];
    $product_img = $row['product_img'];


}

?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html lang="en-US">
<head>
    <!-- META -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="View JourneyWheels customers feedback on bike rentals, car rentals and rent a bicycle services. Customers Safe journey to reach their destinations is our top priority.">
    <meta name="keywords" content="JourneyWheels, Bike Rentals, Customers Feedback, bike rentals, car rentals rent a bicycle, Safe journey, destinations, top priority">
    <meta name="author" content="pxtheme-govindsaini">

    <!-- PAGE TITLE -->
    <title>JourneyWheels | Bike Rentals | Customers Feedback</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <!-- style css -->

    <link rel="stylesheet" href="css/style.css">



    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Distance css -->
    <link rel="stylesheet" href="css/distanced.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- modernizr js -->
    <script src="js/modernizr-2.8.3.min.js"></script>
    <style>
    .modal {
            z-index: 9999999999999;
            background: rgba(0,0,0,0.5);
        }
        .closeText:before {
    content: "Close";
}
#check_out{
    background-color:#ffb735;padding:15px;font-weight:bold;box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 1px 5px 0 rgba(0,0,0,0.12), 0 3px 1px -2px rgba(0,0,0,0.2);
}
#card_check{
    border:solid 1px #e2e2e2;border-radius:5px
}
#img_check{
    margin-top: 10px;height:100px;width:200px;
}
#hr_check {
    margin-top: 0px;
    margin-bottom: 10px;
    border: 0;
 margin-left: 5px;
 margin-right: 5px;
    border-top: 1px solid #8e4747;
}
.card{
    box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 1px 5px 0 rgba(0,0,0,0.12), 0 3px 1px -2px rgba(0,0,0,0.2);
}
div.ex3 {
    
    width: auto;
    height: 250px;
    overflow: auto;
}
.testmi-txt-bg
{
    background-color:#7b716138;
    float:left;
   height:500px;
    padding:20px;
    margin-bottom:30px;
    border-radius:10px;
}
.feedback
{
    display:table;
     margin-bottom:30px;
}
.style_img{
    height:100px;
    width:100px;
}
@media only screen and (max-width: 479px) and (min-width: 320px){
   .testmi-txt-bg{
       height:auto;
   } 
}
@media only screen and (max-width: 990px) and (min-width: 768px){
    .testmi-txt-bg{
       height:450px;
   }  
}
    </style>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-135221249-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-135221249-1');
</script>

    
</head><!--<![endif]-->
<br>
<br>
<br> 

<body class="no-scroll">
<!-- WIDE DESKTOP -->
<div id="wide-desktop">
    <!-- LOADER -->
    <?php
    include ("header.php");
    ?>
    <!-- END HEADER -->
     <div class="clearfix"></div>
    <!-- BOOK CAB-->
    <div class="container feedback">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
         <div class="testmi-txt-bg">
             <h4>Jagadish Rao 13th September, 2018</h4>
             <p>Excellent service by Journey Wheels and even good condition vehicles. I just took a rent for up & down to Tirumala, it was an awesome journey, my wife she loved to ride a scooter at a hill station and it was more convenient for roaming. This is very useful for those who are couples & even for friends. Go head, highly recommended. Be safe & ride safely.</p>
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" ><img src="images/person.png" class="img-responsive"></div>  
         <h4 style="text-align:right;">Jagadish Rao </h4>
         <div class="pull-right">
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#fff;"></i>
         </div>
<div class="col-lg-6"></div>
         </div>
         </div>
        <div class="col-md-4 col-md-4 col-sm-6 col-xs-12">
          <div class="testmi-txt-bg">
              <h4>Siva sai Krishna 23rd September, 2018</h4>
              <p>Good service</p>
          <br>
          <br>
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><img src="images/person.png" class="img-responsive"></div>  
         <h4 style="text-align:right;">Siva sai Krishna </h4>
         <div class="pull-right">
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#fff;"></i>
         </div>
<div class="col-md-6"></div>
         </div>
        </div>
        <div class="col-md-4 col-md-4 col-sm-6 col-xs-12">
          <div class="testmi-txt-bg">
              <h4>Prathap 20th September, 2018</h4>
              <p>Excellent service</p>
              <br>
              <br>
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><img src="images/person.png" class="img-responsive"></div>  
         <h4 style="text-align:right;">Prathap </h4>
         <div class="pull-right">
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#fff;"></i>
         </div>
<div class="col-md-6"></div>
         </div>
        </div>
        <div class="col-md-4 col-md-4 col-sm-6 col-xs-12">
         <div class="testmi-txt-bg">
             <h4>Tharun 19th September, 2018</h4>
             <p>Good</p>
             <br>
             <br>
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><img src="images/person.png" class="img-responsive"></div>  
         <h4 style="text-align:right;">Tharun</h4>
         <div class="pull-right">
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#fff;"></i>
         </div>
<div class="col-md-6"></div>
         </div>
         </div>
        <div class="col-md-4 col-md-4 col-sm-6 col-xs-12">
          <div class="testmi-txt-bg">
              <h4>Sravan kumar Katakam 5 months</h4>
              <p>Best Bike Rental for every one who wants to visit Tirupathi & Tirumala on there own, and also less cost compare to other service providers in Tirupathi

</p>
          <br>
          <br>
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><img src="images/person.png" class="img-responsive"></div>  
         <h4 style="text-align:right;">Sravan kumar Katakam</h4>
         <div class="pull-right">
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#fff;"></i>
         </div>
<div class="col-md-6"></div>
         </div>
        </div>
        <div class="col-md-4 col-md-4 col-sm-6 col-xs-12">
          <div class="testmi-txt-bg">
              <h4>Dr.viswanath   6 months</h4>
              <p>Awesome service and awesome people, thanks to them.</p>
              <br>
              <br>
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><img src="images/person.png" class="img-responsive"></div>  
         <h4 style="text-align:right;">Dr.viswanath</h4>
         <div class="pull-right">
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#fff;"></i>
         </div>
<div class="col-md-6"></div>
         </div>
        </div>
        <div class="col-md-4 col-md-4 col-sm-6 col-xs-12">
         <div class="testmi-txt-bg">
             <h4>PRADEEP 9 months</h4>
             <p>Excellent and affordable.</p>
             <br>
             <br>
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><img src="images/person.png" class="img-responsive"></div>  
         <h4 style="text-align:right;">PRADEEP </h4>
         <div class="pull-right">
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#fff;"></i>
         </div>
<div class="col-md-6"></div>
         </div>
         </div>
        
        <div class="col-md-4 col-md-4 col-sm-6 col-xs-12">
          <div class="testmi-txt-bg">
              <h4>Anilroyalkomma 10 months</h4>
              <p>Good service.</p>
          <br>
          <br>
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><img src="images/person.png" class="img-responsive"></div>  
         <h4 style="text-align:right;">Anilroyalkomma</h4>
         <div class="pull-right">
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#fff;"></i>
         </div>
<div class="col-md-6"></div>
         </div>
        </div>
        <div class="col-md-4 col-md-4 col-sm-6 col-xs-12">
          <div class="testmi-txt-bg">
              <h4>M Suresh1 year</h4>
              <p>Nice deal with Journey Wheels, I would like to thank JD for giving details of JOURNEY WHEELS. Overall, nice ride with nice deal.</p>
              <br>
              <br>
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><img src="images/person.png" class="img-responsive"></div>  
         <h4 style="text-align:right;">M Suresh</h4>
         <div class="pull-right">
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#fff;"></i>
         </div>
<div class="col-md-6"></div>
         </div>
        </div>
  
        <div class="col-md-4 col-md-4 col-sm-6 col-xs-12">
         <div class="testmi-txt-bg">
             <h4> Muni sanchi  1 year</h4>
             <p>Amazing journey with Journey Wheels in Tirupati self drive rental company.</p>
             <br>
             <br>
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><img src="images/person.png" class="img-responsive"></div>  
         <h4 style="text-align:right;">Muni sanchi</h4>
         <div class="pull-right">
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#fff;"></i>
         </div>
<div class="col-md-6"></div>
         </div>
         </div>
        
        <div class="col-md-4 col-md-4 col-sm-6 col-xs-12">
          <div class="testmi-txt-bg">
              <h4>SURESH  6 months</h4>
              <p>The bike condition is very good
Low cost and they giving on time delivering the bike to customers.
Good luck :)
</p>
          <br>
          <br>
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><img src="images/person.png" class="img-responsive"></div>  
         <h4 style="text-align:right;">SURESH</h4>
         <div class="pull-right">
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#fff;"></i>
         </div>
<div class="col-md-6"></div>
         </div>
        </div>
        <div class="col-md-4 col-md-4 col-sm-6 col-xs-12">
          <div class="testmi-txt-bg">
              <h4>Krishna Kumar  2 months</h4>
              <p>All bikes are in good maintenance and their support is simply superb.</p>
              <br>
              <br>
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><img src="images/person.png" class="img-responsive"></div>  
         <h4 style="text-align:right;">Krishna Kumar</h4>
         <div class="pull-right">
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#fff;"></i>
         </div>
<div class="col-md-6"></div>
         </div>
        </div>
   
        <div class="col-md-4 col-md-4 col-sm-6 col-xs-12">
         <div class="testmi-txt-bg">
             <h4> Soujanya  2 months</h4>
             <p>Excellent.</p>
             <br>
             <br>
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><img src="images/person.png" class="img-responsive"></div>  
         <h4 style="text-align:right;">Soujanya</h4>
         <div class="pull-right">
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#fff;"></i>
         </div>
<div class="col-md-6"></div>
         </div>
         </div>
        
        <div class="col-md-4 col-md-4 col-sm-6 col-xs-12">
          <div class="testmi-txt-bg">
              <h4>Surendra  2 months</h4>
              <p>Good service
</p>
          <br>
          <br>
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><img src="images/person.png" class="img-responsive"></div>  
         <h4 style="text-align:right;">Surendra</h4>
         <div class="pull-right">
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#fff;"></i>
         </div>
<div class="col-md-6"></div>
         </div>
        </div>
        <div class="col-md-4 col-md-4 col-sm-6 col-xs-12">
          <div class="testmi-txt-bg">
              <h4>Raghu3 months</h4>
              <p>Had a jot of fun. Good service..</p>
              <br>
              <br>
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><img src="images/person.png" class="img-responsive"></div>  
         <h4 style="text-align:right;">Raghu</h4>
         <div class="pull-right">
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#fff;"></i>
         </div>
<div class="col-md-6"></div>
         </div>
        </div>

        <div class="col-md-4 col-md-4 col-sm-6 col-xs-12">
         <div class="testmi-txt-bg">
             <h4> Bharath2 months</h4>
             <p>Execellent.</p>
             <br>
             <br>
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><img src="images/person.png" class="img-responsive"></div>  
         <h4 style="text-align:right;">Bharath</h4>
         <div class="pull-right">
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#fff;"></i>
         </div>
<div class="col-md-6"></div>
         </div>
         </div>
                    
                  
        
        <div class="col-md-4 col-md-4 col-sm-6 col-xs-12">
          <div class="testmi-txt-bg">
              <h4>Kishore3 months</h4>
              <p>Staff is good at arranging bikes on time with pickup and drop facility.Happy with service providers.
</p>
          <br>
          <br>
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><img src="images/person.png" class="img-responsive"></div>  
         <h4 style="text-align:right;">Kishore</h4>
         <div class="pull-right">
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#fff;"></i>
         </div>
<div class="col-md-6"></div>
         </div>
        </div>
        <div class="col-md-4 col-md-4 col-sm-6 col-xs-12">
          <div class="testmi-txt-bg">
              <h4>Sreenivaslu 6 months</h4>
              <p>good service.</p>
              <br>
              <br>
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><img src="images/person.png" class="img-responsive"></div>  
         <h4 style="text-align:right;">Sreenivaslu</h4>
         <div class="pull-right">
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#fff;"></i>
         </div>
<div class="col-md-6"></div>
         </div>
        </div>
  
        <div class="col-md-4 col-md-4 col-sm-6 col-xs-12">
         <div class="testmi-txt-bg">
             <h4>Madhamsetty krishna7 months</h4>
             <p>Excellent service.</p>
             <br>
             <br>
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><img src="images/person.png" class="img-responsive"></div>  
         <h4 style="text-align:right;">Madhamsetty krishna</h4>
         <div class="pull-right">
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#fff;"></i>
         </div>
<div class="col-md-6"></div>
         </div>
         </div>
        
        <div class="col-md-4 col-md-4 col-sm-6 col-xs-12">
          <div class="testmi-txt-bg">
              <h4>Vishnu6 months</h4>
              <p>Execellent
</p>
          <br>
          <br>
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><img src="images/person.png" class="img-responsive"></div>  
         <h4 style="text-align:right;">Vishnu</h4>
         <div class="pull-right">
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#fff;"></i>
         </div>
<div class="col-md-6"></div>
         </div>
        </div>
        <div class="col-md-4 col-md-4 col-sm-6 col-xs-12">
          <div class="testmi-txt-bg">
              <h4>Jagapathi Babu Allam18th September, 2018</h4>
              <p>Well and nice service, I am happy to say that very nice service provided in Tirupati city...</p>
              <br>
              <br>
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><img src="images/person.png" class="img-responsive"></div>  
         <h4 style="text-align:right;">Jagapathi Babu Allam</h4>
         <div class="pull-right">
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#ff9900;"></i>
         <i class="fa fa-star" aria-hidden="true" style="color:#fff;"></i>
         </div>
<div class="col-md-6"></div>
         </div>
        </div>
    </div>
    
    
    
    
    
    </div>
   <div class="modal fade" id="demo-p" tabindex="-1">
    <div class="modal-dialog">
     <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal"><i class="icon-xs-o-md"></i></button>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center caps"><strong>Terms & Conditions</strong></h4>
      </div>
       <div class="modal-body">
         <div class="ex3 text-justify">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore ma
         gna aliquam erat volLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
         magna aliquam erat volLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
         magna aliquam erat volLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
         magna aliquam erat volLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
         magna aliquam erat volLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
         magna aliquam erat volLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
         magna aliquam erat volLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
         magna aliquam erat volLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
         magna aliquam erat volLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
         magna aliquam erat volLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
         magna aliquam erat volutpat.</div>
              </div>
               <div class="modal-footer"> 
             
<!--<button class="btn " type="button" id="btnSubmit" style="background-color:#ffb735"  disabled>Pay Now</button>-->

</div>
     </div>
    </div>
  </div>
<script type="text/javascript">
function goFurther(){
if (document.getElementById("chkAgree").checked == true)
document.getElementById("btnSubmit").disabled = false;

else
document.getElementById("btnSubmit").disabled = true;
}
</script>

<style type="text/css">
input[disabled]
{
   color:Gray; text-decoration:none;
}
</style>
   
   <SCRIPT>    
   function show(select_item) {
       if (select_item == "two") {
          hiddenDiv.style.visibility='visible';
         hiddenDiv.style.display='block';
         Form.fileURL.focus();
      } 
      else{
         hiddenDiv.style.visibility='hidden';
         hiddenDiv.style.display='none';
      }
   }  
</SCRIPT>  
   
   
   
   
    <?php
    include ("footer.php");
    ?>
    <!-- FOOTER END -->
    <!-- SCROLL TOP -->
    <a href="" class="scrolltop"><i class="fa fa-long-arrow-up"></i></a>

<div class="modal fade" id="demo-4" tabindex="-1">
    <div class="modal-dialog">
     <div class="modal-content loginfm">
      <button type="button" class="close" data-dismiss="modal"><i class="icon-xs-o-md"></i></button>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center caps"> Partner With Us</h4>
      </div>
       <div class="modal-body">
          <form class="log"  method="post" >
             <div class="display-error" style="display: none;"></div>

                                           <div class="form-group regnam">
                    <label style="color:#ffcc66;">Name</label>
                    <input type="text" class="form-control" name="p_name" placeholder="Enter Your Name" style="border-radius:5px; height:35px;"   required>
                </div>

                <div class="form-group regmail">
                    <label style="color:#ffcc66;">Email</label>
                    <input type="email" class="form-control el" name="p_email" placeholder="Enter Valid E-mail" style="border-radius:5px; height:35px;"  required>
                </div>
                    <div class="form-group regphn">
                    <label style="color:#ffcc66;">Phone Number</label>
                    <input type="text" class="form-control" name="p_mobile"  maxlength="10" pattern="[0-9]{10}" placeholder="Enter Mobile Number" style="border-radius:5px; height:35px;"   required>
                </div>                       
                                           
               <div class="form-group text-center">                         
            <button type="submit" name="p_submit" class="btn btn-primary" style="background-color:#ffcc66; border-radius:5px;" >Submit</button> </div>
            </form>
            <?php
              if(isset($_POST['p_submit'])){
		$name=$_POST['p_name'];
		$email=$_POST['p_email'];
		$mobile=$_POST['p_mobile'];

		$to='sumithravgs@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Partner With Us';
		$message="Name :".$name."\n"."Mobile Number :".$mobile;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
		
          echo '<script>alert("Sent Successfully!We will Contact You Shortly!")</script>';
          echo '<script>window.location=""</script>';
		}
		else{
			echo "Something Went Wrong!";
		}
	}
?>
              </div>
     </div>
    </div>
  </div>

</div>
<!-- WIDE DESKTOP -->
<!-- All JS START HERE -->
<!-- jQuery Latest Version -->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- jQuery Validation -->
<script src="js/jquery.validate.min.js"></script>
<!-- Google Map API JS -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=true&language=en&libraries=places"></script>

<script>
    $(document).ready(function() {

        // Basic usage
        $("#placepicker").placepicker();

        // Advanced usage
        $(".placepicker").each(function() {

            // find map-element
            var target = this;
            var $collapse = $(this).parents('.form-group').next('.collapse');
            var $map = $collapse.find('.placepicker-map');

            // init placepicker
            var placepicker = $(this).placepicker({
                map: $map.get(0)
            }).data('placepicker');

            // reload map after collapse in
            $collapse.on('show.bs.collapse', function () {

                window.setTimeout(function() {
                    placepicker.resizeMap();
                    placepicker.reloadMap();
                    if (!$(target).prop('value')) {
                        placepicker.geoLocation();
                    }

                }, 0);

            });

        });

    });
</script>
<script type="text/javascript">
    $(function(){
        $('a[title]').tooltip();
    });

</script>

<!-- Gmap3 JS -->
<script type="text/javascript" src="js/map/gmap3.js"></script>
<!-- Geocomplete JS -->
<script src="js/jquery.geocomplete.min.js"></script>
<!-- Bootstrap JS -->
<script src="js/bootstrap-3.3.7/bootstrap.min.js"></script>
<script src="js/bootstrap-3.3.7/bootstrap-select.min.js"></script>
<script src="js/bootstrap-3.3.7/moment-with-locales.js"></script>
<script src="js/bootstrap-3.3.7/bootstrap-datetimepicker.js"></script>
<!-- OwlCarousel JS -->
<script src="js/owl.carousel.min.js"></script>
<!-- Theme JS -->
<script src="js/wow.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/distanced.js"></script>
<script type="text/javascript">
    $('.px-datepicker').datetimepicker({
        format: 'DD/MM/YYYY',
        widgetPositioning: {
            horizontal: 'right',
            vertical: 'bottom'
        }
    });
    $('.styleStitcher').click(function(){
        $('.style_warrper').toggleClass('active')
    })

    $('.style_warrper ul li a').each(function(){

        $(this).click(function(e){
            e.preventDefault();
            var css = $(this).attr('href');
            var link_ = $('#styler')
            var path = $('#styler').data('cssrot')
            var cssLink = path+css;
            link_.attr('href',cssLink)
        })
    })
</script>



<script>
    $(document).ready(function () {
        $("#loginForm").submit(function () {
            var data =$("#loginForm").serialize();
            checkRecords(data);
            return false;
        });
        function checkRecords (data) {
            $.ajax({
                url:'loginProcess.php',
                data : data,
                type:'POST',
                dataType:'json',
                success:function (data) {

                    if(data.code == 200){
                        alert('you have successfully login');
                        window.location='index.php';
                    }else{
                        $(".display-error").html("<ul>"+ data.msg+"</ul>");
                        $(".display-error").css("display","block");
                    }
                },
                error: function () {
                    alert("failed");
                }
            });
        }
    });




    function logFunction() {
        var x = document.getElementById("Login");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    var $menu = $(' nav .menu');
    $(document).mouseup(function (e) {
        if (!$menu.is(e.target) // if the target of the click isn't the container...
            && $menu.has(e.target).length === 0) // ... nor a descendant of the container
        {
            $menu.hide();
        }
    });

</script>
<script>
    $(document).ready(function () {
        $("#loginForm1").submit(function () {
            var data =$("#loginForm1").serialize();
            checkRecords(data);
            return false;
        });
        function checkRecords (data) {
            $.ajax({
                url:'loginProcess.php',
                data : data,
                type:'POST',
                dataType:'json',
                success:function (result) {

                    if(result.code == 200){
                       
                        window.location='';
                    }else{
                        $(".display-error").html("<ul>"+ result.msg+"</ul>");
                        $(".display-error").css("display","block");
                    }
                },
                error: function (error) {
                    console.log(error);
                    alert("Login Failed" );
                }
            });
        }
    });

</script>
<!-- for signup form -->
<script>
    $(document).ready(function () {
        $("#registFrm").submit(function () {
            var data =$("#registFrm").serialize();
            console.log(data);
            signupRecords(data);

            return false;
        });
        function signupRecords (data) {
            $.ajax({
                url:'signupProcess.php',
                data : data,
                type:'POST',
                dataType:'json',
                success:function (data) {

                    if(data.code == 200){
                        alert('You Have Successfully Signup \n Please login now');
                        setTimeout(function () {
                            location.reload();
                        },1000 );

                    }else{
                        $(".display-error").html("<ul>"+ data.msg+"</ul>");
                        $(".display-error").css("display","block");
                    }

                },
                error: function (jqXHR,exception) {
                    console.log(jqXHR);
                }
            });
        }
    });



    //show password
    function regFunction() {
        var x = document.getElementById("Register");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

    function log1Function() {
        var x = document.getElementById("Login1");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
    <script>$(function () {
  $('.datetimepicker').datetimepicker();
});</script>
</body>
</html>