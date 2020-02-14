<?php
ob_start();
session_start();
include ("./includes/db.php");
include("./functions/functions.php");
$email = '';
$error = '';
if(isset($_SESSION["email"])){
    $email = $_SESSION['email'];
    $get_customer = "select * from users WHERE email='$email'";
    $run_customer = mysqli_query($db, $get_customer);
    $row = mysqli_fetch_array($run_customer);
    $name = $row['name'];

}

                                    if(isset($_POST['bookbikesubmit'])){
                                         $location=$_POST['location'];
                                         $pick_loc=$_POST['pick_loc'];
                                         $pickupdatetime=$_POST['pckup_datetime'];                                         
                                         $drop_loc=$_POST['drop_loc'];
                                         $dropdatetime=$_POST['drop_datetime'];
                                         $phone=$_POST['phone'];
                                         $email=$_POST['email'];
                                         $package=$_POST['package'];
                                         //convering date format          
$pick="$pickupdatetime";
$date = DateTime::createFromFormat('d/m/Y H:i', $pick);
$d1=$date->format('Y-m-d H:i');
$drop="$dropdatetime";
$date = DateTime::createFromFormat('d/m/Y H:i', $drop);
$d2=$date->format('Y-m-d H:i');

                                            function differenceInHours($d1,$d2){
                                            $starttimestamp = strtotime($d1);
                                            $endtimestamp = strtotime($d2);
                                            $difference = abs($endtimestamp - $starttimestamp)/3600;
                                            return $difference;
                                        }
                                      
                                        $hours_difference = differenceInHours($d1,$d2);
                                        $message = $hours_difference;
                                        if ($message >=5) {
                                            if ($package ==1) {
                                                 echo "<script>window.location='products.php?pick_loc=$pick_loc&pick_datetime=$pickupdatetime&drop_loc= $drop_loc&drop_datetime=$dropdatetime&location=$location'</script>";
                                            }elseif ($package ==2) {
                                                 echo "<script>window.location='bicycleproducts.php?pick_loc=$pick_loc&pick_datetime=$pickupdatetime&drop_loc= $drop_loc&drop_datetime=$dropdatetime&location=$location'</script>";
                                            }
                                        }else {
                                          $error="Select Minimum 5 hours For Booking ".$message;
                                      }
                                    
                                           
                                        if ($package ==3) {
                                             if ($message ==12 || $message ==24 ) {
                                                 echo "<script>window.location='carproducts.php?pick_loc=$pick_loc&pick_datetime=$pickupdatetime&drop_loc= $drop_loc&drop_datetime=$dropdatetime&location=$location'</script>";
                                            }else {
                                          $error="Select Minimum 12 OR 24 hours For Booking";
                                      }
                                            
                                    }
                                    }
                                    
                                 
?>
<!DOCTYPE html>

<html lang="en-US">
<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Rent a bike from JourneyWheels and get 10% off on online bookings and reach your destinations safely and happily.">
    <meta name="keywords" content="rent a bike, journeywheels, online bookings, offers, destinations, bike rentals, car rentals, bicycle rentals">
    <meta name="author" content="pxtheme-govindsaini">

    <!-- PAGE TITLE -->
    <title>JourneyWheels Offer - Avail 10% off on online bookings</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <!-- style css -->

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/formstyle.css">
    <link rel="stylesheet" href="css/form-design.css">

		<link rel="stylesheet"
			  href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.10/css/ripples.min.css"/>

		<link rel="stylesheet" href="css/bootstrap-material-datetimepicker.css" />
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

		<script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.10/js/ripples.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.10/js/material.min.js"></script>
		
	<script type="text/javascript" src="http://momentjs.com/downloads/moment-with-locales.min.js"></script>
		<script type="text/javascript" src="js/bootstrap-material-datetimepicker.js"></script>
<script src='https://static.codepen.io/assets/editor/live/console_runner-1df7d3399bdc1f40995a35209755dcfd8c7547da127f6469fd81e5fba982f6af.js'></script>
<script src='https://static.codepen.io/assets/editor/live/css_reload-5619dc0905a68b2e6298901de54f73cefe4e079f65a75406858d92924b4938bf.js'></script>
<meta charset='UTF-8'><meta name="robots" content="noindex">
<link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" />

<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css'>
<script src='https://static.codepen.io/assets/editor/live/console_runner-1df7d3399bdc1f40995a35209755dcfd8c7547da127f6469fd81e5fba982f6af.js'></script>
<script src='https://static.codepen.io/assets/editor/live/css_reload-5619dc0905a68b2e6298901de54f73cefe4e079f65a75406858d92924b4938bf.js'></script>
<meta charset='UTF-8'><meta name="robots" content="noindex">

<link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" />
<link rel="canonical" href="https://codepen.io/gzuzkstro/pen/vzwMBX" />

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css'>
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Distance css -->
    <link rel="stylesheet" href="css/distanced.css">
    
    <!-- modernizr js -->
    <script src="js/modernizr-2.8.3.min.js"></script>
    <style>.modal {
            z-index: 9999999999999;
            background: rgba(0,0,0,0.5);
        }
        .closeText:before {
    content: "Close";
}

.btn-flat{
   background-color:black; 
   border-radius:5px;
   color:white;
}
.btn-flat:hover{
    color:#ffb735;
}
body{
    background-color:white;
}
.navbar-brand img{
    padding:10px;
}
.pkg-item {
    background: #ffb735;
}
.wrapper-800 .form-group{
    padding:5px;
}
#style_img{
    padding-top:50px;
}
.pkg-item.active {
    background: white;
    color: black;
	border-bottom: solid 2px #ffb735;
}
.datetimepicker-widget.dropdown-menu  {
    width: 90px;
    margin-left:-100px ! important;
}

#frm-ele-styl{
    background-color:#ffb735 ! important;
    color:#000 ! important;
    border-bottom:1px solid #8c8c8c;
    font-weight:bold;
}

#frm-ele-styl::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: black;
}
#frm-ele-styl::-moz-placeholder { /* Firefox 19+ */
  color: black;
}
#frm-ele-styl:-ms-input-placeholder { /* IE 10+ */
  color: black;
}
#frm-ele-styl:-moz-placeholder { /* Firefox 18- */
  color: black;
}
  @media only screen and (max-width: 1199px) and (min-width: 992px){
.app-phone {
   
    top: 0px;
}
}
        @media (min-width: 768px)
        {
.navbar-toggle {
    display: block;
}

        }
        label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    color: #777;
            margin-left: 20px;
}
@media only screen and (max-width: 1600px) and (min-width: 320px){
.absulate-pos {
    right: 15px!important;
}
}
@media  (max-width: 479px) and (min-width: 320px){
    .sm_dspy{
        display:none;
    }
    .download-info h2 small{
        color:black;
    }
}

.slick-prev {
    left: -15px;
}
.slick-next {
    right: -15px;
}
    </style>
	<style>
	@media only screen and (max-width: 990px) and (min-width: 768px){
	    .testimonials {
	        display:none;
	    }
	}
	    @media only screen and (min-width: 320px) and (max-width: 1600px) {
	       .dtp-picker-month{
	           display:none;
	       } 
	      .dtp{
	          top:5%;
	         
	      }
	      .dtp-content{
	          border-radius:5px;
	      }
	      .dtp-header{
	      border-top-left-radius:5px;
	       border-top-right-radius:5px;
	      }
	      #dtp-svg-clock{
	          height:200px;
	      }
	      .svg-clock{
	      height:200px;
	      }
	      .dtp table.dtp-picker-days tr > td{
	          padding:0em 0em;
	      }
	      .dtp table.dtp-picker-days tr > th{
	          padding:0em 0em;
	      }
	      .dtp-picker{
	          height:250px;
	      }
	      .year-picker-item {
              padding-top: 0px; 
              font-size: unset; 
	    }
	    .dtp-picker-year .btn{
	        padding: 0px 0px;
	    }
	    }
	    @media only screen and (min-width: 1200px) and (max-width: 1360px) {
	       
	    }
	    @media only screen and (max-width: 1199px) and (min-width: 992px) {
	        
	    }
	    
       @media only screen and (min-width: 768px) and (max-width: 990px) {
       }
       @media only screen and (min-width: 480px) and (max-width: 767px) {
       }
       @media only screen and (min-width: 320px) and (max-width: 479px) {
           .dtp{
	          top:10%;
	      }
       }
       
}

	</style>
	<style class="cp-pen-styles">@import url("https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600,700,800");
* {
  box-sizing: border-box;
}



.blog-slider {
  width: 95%;
  position: relative;
  max-width: 800px;
  margin: auto;
  background: #fff;
  box-shadow: 0px 14px 80px rgba(34, 35, 58, 0.2);
  border-radius: 25px;
  height: 400px;
  padding:25px;
  transition: all .3s;
}
@media screen and (max-width: 992px) {
  .blog-slider {
    max-width: 680px;
    height: 400px;
  }
}
@media screen and (max-width: 768px) {
  .blog-slider {
    min-height: 500px;
    height: auto;
    margin: 180px auto;
  }
}
@media screen and (max-height: 500px) and (min-width: 992px) {
  .blog-slider {
    height: 350px;
  }
}
.blog-slider__item {
  display: flex;
  align-items: center;
}
@media screen and (max-width: 768px) {
  .blog-slider__item {
    flex-direction: column;
  }
}
.blog-slider__item.swiper-slide-active .blog-slider__img img {
  opacity: 1;
  transition-delay: .3s;
}
.blog-slider__item.swiper-slide-active .blog-slider__content > * {
  opacity: 1;
  transform: none;
}
.blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(1) {
  transition-delay: 0.3s;
}
.blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(2) {
  transition-delay: 0.4s;
}
.blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(3) {
  transition-delay: 0.5s;
}
.blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(4) {
  transition-delay: 0.6s;
}
.blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(5) {
  transition-delay: 0.7s;
}
.blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(6) {
  transition-delay: 0.8s;
}
.blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(7) {
  transition-delay: 0.9s;
}
.blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(8) {
  transition-delay: 1s;
}
.blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(9) {
  transition-delay: 1.1s;
}
.blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(10) {
  transition-delay: 1.2s;
}
.blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(11) {
  transition-delay: 1.3s;
}
.blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(12) {
  transition-delay: 1.4s;
}
.blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(13) {
  transition-delay: 1.5s;
}
.blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(14) {
  transition-delay: 1.6s;
}
.blog-slider__item.swiper-slide-active .blog-slider__content > *:nth-child(15) {
  transition-delay: 1.7s;
}
.blog-slider__img {
  width: 300px;
  flex-shrink: 0;
  height: 300px;
  /*background-image: linear-gradient(147deg, #fe8a39 0%, #fe8a39 0%);*/
  box-shadow: 1px 1px 1px 1px rgb(255, 183, 53);
  border-radius: 20px;
  transform: translateX(-80px);
  overflow: hidden;
}
.blog-slider__img:after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  /*background-image: linear-gradient(147deg, #fe8a39 0%, #fe8a39 0%);*/
  border-radius: 20px;
  opacity: 0.8;
}
.blog-slider__img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  opacity: 0;
  border-radius: 20px;
  transition: all .3s;
}
@media screen and (max-width: 768px) {
  .blog-slider__img {
    transform: translateY(-50%);
    width: 90%;
  }
}
@media screen and (max-width: 576px) {
  .blog-slider__img {
    width: 95%;
  }
}
@media screen and (max-height: 500px) and (min-width: 992px) {
  .blog-slider__img {
    height: 270px;
  }
}
.blog-slider__content {
  padding-right: 25px;
}
@media screen and (max-width: 768px) {
  .blog-slider__content {
    margin-top: -80px;
    text-align: center;
    padding: 0 30px;
  }
}
@media screen and (max-width: 576px) {
  .blog-slider__content {
    padding: 0;
  }
}
.blog-slider__content > * {
  opacity: 0;
  transform: translateY(25px);
  transition: all .4s;
}
.blog-slider__code {
  color: #7b7992;
  margin-bottom: 15px;
  display: block;
  font-weight: 500;
}
.blog-slider__title {
  font-size: 24px;
  font-weight: 700;
  color: #0d0925;
  margin-bottom: 20px;
}
.blog-slider__text {
  color: #4e4a67;
  margin-bottom: 30px;
  line-height: 1.5em;
}
.blog-slider__button {
  display: inline-flex;
  background-color: black;
  padding: 15px 35px;
  border-radius: 20px;
  color: #fff;
  /*box-shadow: 0px 14px 80px rgba(252, 56, 56, 0.4);*/
  text-decoration: none;
  font-weight: 500;
  justify-content: center;
  text-align: center;
  letter-spacing: 1px;
}
@media screen and (max-width: 576px) {
  .blog-slider__button {
    width: 100%;
  }
}
.blog-slider .swiper-container-horizontal > .swiper-pagination-bullets, .blog-slider .swiper-pagination-custom, .blog-slider .swiper-pagination-fraction {
  bottom: 10px;
  left: 0;
  width: 100%;
}
.blog-slider__pagination {
  position: absolute;
  z-index: 21;
  right: 20px;
  width: 11px !important;
  text-align: center;
  left: auto !important;
  top: 50%;
  bottom: auto !important;
  transform: translateY(-50%);
}
@media screen and (max-width: 768px) {
  .blog-slider__pagination {
    transform: translateX(-50%);
    left: 50% !important;
    top: 205px;
    width: 100% !important;
    display: flex;
    justify-content: center;
    align-items: center;
  }
}
.blog-slider__pagination.swiper-pagination-bullets .swiper-pagination-bullet {
  margin: 8px 0;
}
@media screen and (max-width: 768px) {
  .blog-slider__pagination.swiper-pagination-bullets .swiper-pagination-bullet {
    margin: 0 5px;
  }
}
.blog-slider__pagination .swiper-pagination-bullet {
  width: 11px;
  height: 11px;
  display: block;
  border-radius: 10px;
  background: #062744;
  opacity: 0.2;
  transition: all .3s;
}
.blog-slider__pagination .swiper-pagination-bullet-active {
  opacity: 1;
  background: #ffb735;
  height: 30px;
  box-shadow: 0px 0px 20px rgba(252, 56, 56, 0.3);
}
@media screen and (max-width: 768px) {
  .blog-slider__pagination .swiper-pagination-bullet-active {
    height: 11px;
    width: 30px;
  }
}
</style>
<style class="cp-pen-styles">@import url("https://fonts.googleapis.com/css?family=Poppins");

*, *::before, *::after {
  box-sizing: border-box;
}

.no-scroll {
  overflow: hidden;
}


.icon {
  display: inline-block;
  width: 1em;
  height: 1em;
  stroke-width: 0;
  stroke: currentColor;
  fill: currentColor;
}

.blend-image, .card__background img {
  /*-webkit-filter: brightness(250%) grayscale(100%);*/
  /*        filter: brightness(250%) grayscale(100%);*/
  mix-blend-mode: screen;
}

.center-image, .card__background img {
  width: 100%;
  min-height: 100%;
  position: absolute;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  -o-object-fit: cover;
     object-fit: cover;
}

.slick-slide {
  padding: 2em .5em;
}

.card-slider {
  margin: auto;
  width: 100%;
}

.card {
  background: #fff;
  display: flex;
  padding: 2em;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-end;
  border-radius: 20px;
  overflow: hidden;
  position: relative;
  z-index: 1;
  height: 350px;
  box-shadow: 0 30px 50px -25px rgba(0, 0, 0, 0.25);
}
.card > * {
  transition: opacity 350ms;
}
.card--opened > * {
  opacity: 0;
}

.card__background {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  overflow: hidden;
  /*background: #2fd4dc;*/
  z-index: -1;
  text-align: left;
}
.card__background::after {
  content: '';
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  /*background: linear-gradient(to top, #fff 0, rgba(255, 255, 255, 0) 70%);*/
}

.card__category {
  text-transform: uppercase;
  color: #fff;
  background: #2fd4dc;
  font-size: 0.85em;
  font-weight: 600;
  padding: 0.2em 0.5em 0.25em;
}

.card__title {
  text-transform: uppercase;
  margin: 0.5em 0;
  color: #2e5f80;
}

.card__duration {
  color: #6f7070;
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

<body class="no-scroll">
<!-- WIDE DESKTOP -->
<div id="wide-desktop">
    <!-- LOADER -->
   <?php
   include("header.php");
   ?>
    <!-- END HEADER -->

    <!-- SLIDER -->
   <section class="slider padding-180" id="slider">
	       
   <div class="blog-slider" >
  <div class="blog-slider__wrp swiper-wrapper">
       <div class="blog-slider__item swiper-slide">
      <div class="blog-slider__img">
        
        <img src="images/ofr_may.png" alt="cheap car and bike rent">
      </div>
      <div class="blog-slider__content">
        
        <div class="blog-slider__title">Discount Coupon</div>
        <span class="blog-slider__code">UP TO 25% OFF</span>
        <div class="blog-slider__text">From May 15th to 25th We Offer 25% OFF on Gear Bikes in Tirupathi</div>
        <a href="#" class="blog-slider__button">JWMAY</a>
      </div>
    </div>
  
    <div class="blog-slider__item swiper-slide">
      <div class="blog-slider__img">
        
        <img src="images/offer_img_new.jpg" alt="cheap car and bike rent">
      </div>
      <div class="blog-slider__content">
        
        <div class="blog-slider__title">Special Offer</div>
        <span class="blog-slider__code">UP TO 10% OFF</span>
        <div class="blog-slider__text">Reach Your Destinations Let's Go Rent A Bike and You will get up to 10% Discount </div>
        <a href="#" class="blog-slider__button">RENT NOW</a>
      </div>
    </div>
    <div class="blog-slider__item swiper-slide">
      <div class="blog-slider__img">
        <img src="images/new_ofr.jpg" alt="">
      </div>
      <div class="blog-slider__content">
      
        <div class="blog-slider__title">Discount Coupon</div>
          <span class="blog-slider__code">USE COUPON CODE</span>
        <div class="blog-slider__text">We Offer Fantastic Deals and Discounts on Rentals.Enter Coupon Code to Receive 15% OFF</div>
        <a href="#" class="blog-slider__button">OFFER15</a>
      </div>
    </div>
    <div class="blog-slider__item swiper-slide">
      <div class="blog-slider__img">
        
        <img src="images/offer_img_new.jpg" alt="">
      </div>
      <div class="blog-slider__content">
        
        <div class="blog-slider__title">Special Offer</div>
        <span class="blog-slider__code">UP TO 10% OFF</span>
        <div class="blog-slider__text">Reach Your Destinations Let's Go Rent A Bike and You will get up to 10% Discount </div>
        <a href="#" class="blog-slider__button">RENT NOW</a>
      </div>
    </div>
    <div class="blog-slider__item swiper-slide">
      <div class="blog-slider__img">
        <img src="images/new_ofr1.jpg" alt="">
      </div>
      <div class="blog-slider__content">
      
        <div class="blog-slider__title">Discount Coupon</div>
          <span class="blog-slider__code">USE COUPON CODE</span>
        <div class="blog-slider__text">We Offer Fantastic Deals and Discounts on Rentals.Enter Coupon Code to Receive 15% OFF</div>
        <a href="#" class="blog-slider__button">JWNEW</a>
      </div>
    </div>
    
  </div>
  <div class="blog-slider__pagination"></div>
</div>
<svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
  <defs>
    <symbol id="icon-cross" viewBox="0 0 32 32">
      <title>close</title>
      <path d="M31.7 25.7L22 16l9.7-9.7a1 1 0 0 0 0-1.4L27.1.3a1 1 0 0 0-1.4 0L16 10 6.3.3a1 1 0 0 0-1.4 0L.3 4.9a1 1 0 0 0 0 1.4L10 16 .3 25.7a1 1 0 0 0 0 1.4l4.6 4.6a1 1 0 0 0 1.4 0L16 22l9.7 9.7a1 1 0 0 0 1.4 0l4.6-4.6a1 1 0 0 0 0-1.4z"/>
    </symbol>
  </defs>
</svg>
   <div class="page" data-modal-state="closed">
  <div class="container">
    <div class="card-slider">
      <div class="card-wrapper"><article class="card">
        <picture class="card__background">
          <img src="images/jo.jpg" alt="cheap rent car and bike deals">
        </picture>
        
        </article></div>
      <div class="card-wrapper"><article class="card">
        <picture class="card__background">
          <img src="images/new_ofr4.jpg">
        </picture>
       
        </article></div>
      <div class="card-wrapper"><article class="card">
        <picture class="card__background">
          <img src="images/new_ofr2.jpg">
        </picture>
       
        </article></div>
      <div class="card-wrapper"><article class="card">
        <picture class="card__background">
          <img src="images/new_ofr4.jpg">
        </picture>
       
        </article></div>
      
    </div>
  </div>
  
</div>
    </section>
    <!-- FOOTER -->
    <?php
   include("footer1.php");
   ?>
    <!-- FOOTER END -->
    <!-- SCROLL TOP -->
    <a href="" class="scrolltop"><i class="fa fa-long-arrow-up"></i></a>
</div>
<script src='https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/web-animations/2.3.1/web-animations.min.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/8.3.1/smooth-scrollbar.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js'></script>
<script >jQuery('.card-slider').slick({
  slidesToShow: 3,
  autoplay: true,
  slidesToScroll: 1,
  dots: false,
  responsive: [
  {
    breakpoint: 768,
    settings: {
      slidesToShow: 2 } },


  {
    breakpoint: 600,
    settings: {
      slidesToShow: 1 } }] });





let cards = document.querySelectorAll('.card');
let card;
let modal = document.querySelector('.modal');
let closeButton = document.querySelector('.modal__close-button');
let page = document.querySelector('.page');
const cardBorderRadius = 20;
const openingDuration = 600; //ms
const closingDuration = 600; //ms
const timingFunction = 'cubic-bezier(.76,.01,.65,1.38)';

var Scrollbar = window.Scrollbar;
Scrollbar.init(document.querySelector('.modal__scroll-area'));


function flipAnimation(first, last, options) {
  let firstRect = first.getBoundingClientRect();
  let lastRect = last.getBoundingClientRect();

  let deltas = {
    top: firstRect.top - lastRect.top,
    left: firstRect.left - lastRect.left,
    width: firstRect.width / lastRect.width,
    height: firstRect.height / lastRect.height };


  return last.animate([{
    transformOrigin: 'top left',
    borderRadius: `
    ${cardBorderRadius / deltas.width}px / ${cardBorderRadius / deltas.height}px`,
    transform: `
      translate(${deltas.left}px, ${deltas.top}px) 
      scale(${deltas.width}, ${deltas.height})
    ` },
  {
    transformOrigin: 'top left',
    transform: 'none',
    borderRadius: `${cardBorderRadius}px` }],
  options);
}

cards.forEach(item => {
  item.addEventListener('click', e => {
    jQuery('.card-slider').slick('slickPause');
    card = e.currentTarget;
    page.dataset.modalState = 'opening';
    card.classList.add('card--opened');
    card.style.opacity = 0;
    document.querySelector('body').classList.add('no-scroll');

    let animation = flipAnimation(card, modal, {
      duration: openingDuration,
      easing: timingFunction,
      fill: 'both' });


    animation.onfinish = () => {
      page.dataset.modalState = 'open';
      animation.cancel();
    };
  });
});

closeButton.addEventListener('click', e => {
  page.dataset.modalState = 'closing';
  document.querySelector('body').classList.remove('no-scroll');

  let animation = flipAnimation(card, modal, {
    duration: closingDuration,
    easing: timingFunction,
    direction: 'reverse',
    fill: 'both' });


  animation.onfinish = () => {
    page.dataset.modalState = 'closed';
    card.style.opacity = 1;
    card.classList.remove('card--opened');
    jQuery('.card-slider').slick('slickPlay');
    animation.cancel();
  };
});
//# sourceURL=pen.js
</script>
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
  <script src='https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js'></script>
<script >var swiper = new Swiper('.blog-slider', {
  spaceBetween: 30,
  effect: 'fade',
  loop: true,
  mousewheel: {
    invert: false },

  // autoHeight: true,
  pagination: {
    el: '.blog-slider__pagination',
    clickable: true } });
//# sourceURL=pen.js
</script>
<script src="js/jquery.validate.min.js"></script>

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
<script type="text/javascript">
    $(function(){
        $('a[title]').tooltip();
    });

</script>

<script>
    $(document).ready(function() {
  
    var numItems = $('li.fancyTab').length;
	
			  if (numItems == 12){
					$("li.fancyTab").width('8.3%');
				}
			  if (numItems == 11){
					$("li.fancyTab").width('9%');
				}
			  if (numItems == 10){
					$("li.fancyTab").width('10%');
				}
			  if (numItems == 9){
					$("li.fancyTab").width('11.1%');
				}
			  if (numItems == 8){
					$("li.fancyTab").width('12.5%');
				}
			  if (numItems == 7){
					$("li.fancyTab").width('14.2%');
				}
			  if (numItems == 6){
					$("li.fancyTab").width('16.666666666666667%');
				}
			  if (numItems == 5){
					$("li.fancyTab").width('20%');
				}
			  if (numItems == 4){
					$("li.fancyTab").width('25%');
				}
			  if (numItems == 3){
					$("li.fancyTab").width('33.3%');
				}
			  if (numItems == 2){
					$("li.fancyTab").width('50%');
				}
		  
	
		});

$(window).load(function() {

  $('.fancyTabs').each(function() {

    var highestBox = 0;
    $('.fancyTab a', this).each(function() {

      if ($(this).height() > highestBox)
        highestBox = $(this).height();
    });

    $('.fancyTab a', this).height(highestBox);

  });
});
    
    </script>
   
<script type="text/javascript">
		$(document).ready(function()
		{
			$('#date').bootstrapMaterialDatePicker
			({
				time: false,
				clearButton: true
			});

			$('#time').bootstrapMaterialDatePicker
			({
				date: false,
				shortTime: false,
				format: 'HH:mm'
			});

			$('#date-format').bootstrapMaterialDatePicker
			({
				format: 'dddd DD MMMM YYYY - HH:mm'
			});
			$('#date-fr').bootstrapMaterialDatePicker
			({
				format: 'DD/MM/YYYY HH:mm',
				lang: 'fr',
				weekStart: 1, 
				cancelText : 'ANNULER',
				nowButton : true,
				switchOnClick : true
			});

			$('#date-end').bootstrapMaterialDatePicker
			({
				weekStart: 0, format: 'DD/MM/YYYY HH:mm'
			});
			$('#date-start').bootstrapMaterialDatePicker
			({
				weekStart: 0, format: 'DD/MM/YYYY HH:mm', shortTime : true
			}).on('change', function(e, date)
			{
				$('#date-end').bootstrapMaterialDatePicker('setMinDate', date);
			});

			$('#min-date').bootstrapMaterialDatePicker({ format : 'DD/MM/YYYY HH:mm', minDate : new Date() });

			$.material.init()
		});
		</script>

    <script>$(function () {
  $('.datetimepicker').datetimepicker({});
});</script>
<script type="text/javascript">
    $(document).ready(function(){

        $('#type').on("change",function () {
            var categoryId = $(this).find('option:selected').val();
            $.ajax({
                url: "ajax.php",
                type: "POST",
                data: "categoryId="+categoryId,
                success: function (response) {
                    console.log(response);
                    $("#type1").html(response);
                },
            });
        });

    });
     $(document).ready(function(){

        $('#type').on("change",function () {
            var categoryId1 = $(this).find('option:selected').val();
            $.ajax({
                url: "ajax.php",
                type: "POST",
                data: "categoryId1="+categoryId1,
                success: function (response) {
                    console.log(response);
                    $("#type2").html(response);
                },
            });
        });

    });
    
</script>

</body>
</html>