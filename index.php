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
                                    
                                           
                                        if ($package == 3) {
                                             if ($message >= 5 ) {
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
    <meta name="description" content="Get more number of choices for your lovely journey through JourneyWheels which provides Bike Rentals, Bicycle & Car Rental Services in Vijayawada, Tirupati, Vizag, Nellore and Rajahmundry">
    <meta name="keywords" content="journeywheels, bike rentals, bicycle rentals, car rental services in Vijayawada, tirupati, vizag, nellore, rajahmundry, self drive cars">
    <meta name="author" content="pxtheme-govindsaini">

    <!-- PAGE TITLE -->
    <title>JourneyWheels - Bike Rentals, Bicycle & Car Rental Services in Vijayawada, Tirupati, Vizag, Nellore and Rajahmundry</title>

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
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

		<script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.10/js/ripples.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.10/js/material.min.js"></script>
		
	<script type="text/javascript" src="https://momentjs.com/downloads/moment-with-locales.min.js"></script>
		<script type="text/javascript" src="js/bootstrap-material-datetimepicker.js"></script>

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




.carousel-showmanymoveone
{
  .carousel-control
  { 
    width: 4%;
    background-image:none;

    &.left 
    {
      margin-left:15px;
    }

    &.right 
    {
      margin-right:15px;
    }
  }

  .cloneditem-1, 
  .cloneditem-2, 
  .cloneditem-3
  {
    display: none;
  }

  .carousel-inner
  {
    @media all and (min-width: 768px)
    {
      @media (transform-3d), (-webkit-transform-3d)
      {
        > .item.active.right,
        > .item.next
        { 
          transform: translate3d(50%, 0, 0);  
          left: 0;
        }

        > .item.active.left,
        > .item.prev
        { 
          transform: translate3d(-50%, 0, 0);
          left: 0;
        }

        > .item.left,
        > .item.prev.right,
        > .item.active
        {
          transform: translate3d(0, 0, 0);
          left: 0;
        }    
      } 

      > .active.left,
      > .prev
      {
        left: -50%;
      }

      > .active.right,
      > .next
      {
        left:  50%;
      }

      > .left,
      > .prev.right,
      > .active
      {
        left: 0;
      }

      .cloneditem-1 
      {
        display: block;
      }
    }

    @media all and (min-width: 992px)
    {    
      @media (transform-3d), (-webkit-transform-3d)
      {
        > .item.active.right,
        > .item.next
        { 
          transform: translate3d(25%, 0, 0);  
          left: 0;
        }    

        > .item.active.left,
        > .item.prev
        { 
          transform: translate3d(-25%, 0, 0);
          left: 0;
        }

        > .item.left,
        > .item.prev.right,
        > .item.active
        {
          transform: translate3d(0, 0, 0);
          left: 0;
        }
      }

      > .active.left,
      > .prev
      {
        left: -25%;
      }

      > .active.right,
      > .next
      {
        left:  25%;
      }

      > .left,
      > .prev.right,
      > .active
      {
        left: 0;
      }

      .cloneditem-2, 
      .cloneditem-3
      {
        display: block;
      }
    }    
  }
}


// demo setup only, not needed for carousel
.container
{
  margin-bottom: 50px;
}
body
{
  font-family: 'Bitter', sans-serif;
  color: #fff;
  background-repeat: no-repeat;
  background-position: right top;
  background-size: 20%;
}
p
{
  font-family: 'Open Sans', sans-serif;
  color: #333;
  margin-bottom: 2em;
}
h2
{
  margin: 2em 0 1em;
}

.logo
{
  margin: 20px auto;
  height: 100px;  
  
  @media only screen and (min-width : 768px) {  
    margin: 28px;
    float: left;
  }
}

.title
{
  padding: 28px;
  display: table-cell;
  position: relative;
  vertical-align: middle;
  text-align: center;
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

<body class="no-scroll" style="overflow-x:hidden;">
<!-- WIDE DESKTOP -->
<div id="wide-desktop">
    <!-- LOADER -->
   <?php 
   include ("header.php");
   ?>
    <!-- END HEADER -->

    <!-- SLIDER -->
	<div class="hidden-xs">
    <section class="slider" id="slider">
        <div class="owl-carousel owl-theme" id="main-slider">
            <div class="item">
                <!-- SLIDER TWO -->
                <img src="images/bnr-bike-one.png" alt="slide_01" />
                <div class="container absulate-content">
                    <div class="row">
                        <div class="col-md-6">
                            <span class="thin-line">Book<b> to Go</b></span>
                            <h3 class="xlg slide-title">	Enjo
                                <span class="cricle-go" data-animation="animated rubberBand" style="text-align:center;" data-animation-delay="0.2s">y</span>
                            </h3>
                            <span data-animation="animated fadeInDown" data-animation-delay="0.4s" class="min-text">Only <b><i class="fa fa-rupee" style="font-size:35px"></i> 150/1 hr</b></span>
                            <p data-animation="animated fadeInDown" data-animation-delay="0.4s" class="led-text text-left col-sm-9 padding-left-none">We are a company that offers unique and clear rental services.</p>
                            <div class="buttons" data-animation="animated fadeInDown" data-animation-delay="0.8s">
                                <a href="booknow.php" class="btn btn-default btn-book">Book Your ride</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SLIDER ONE END -->
            <!-- SLIDER TWO END -->
            <div class="item">
                <!-- SLIDER THREE -->
                <img src="images/slide_03.png" alt="slide_01" />
                <div class="container absulate-content">
                    <div class="row">
                        <div class="col-md-6">
                            <span class="thin-line">Ready To comfirt <b>ride</b></span>
                            <h3 class="xlg slide-title"> Free
                                <span class="cricle-go" data-animation="animated rubberBand" data-animation-delay="0.2s"> $0</span>
                            </h3><br><br>
                            <span data-animation="animated fadeInDown" data-animation-delay="0.4s" class="min-text">First Ride <b><i class="fa fa-rupee" style="font-size:35px"></i>100/Day</b></span>
                            <p data-animation="animated fadeInDown" data-animation-delay="0.4s" class="led-text text-left col-sm-9 padding-left-none">We are a company that offers unique and clear rental services.</p>
                            <div class="buttons" data-animation="animated fadeInDown" data-animation-delay="0.8s">
                                <a href="booknow.php" class="btn btn-default btn-book">Book Your ride</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <!-- SLIDER ONE -->
                <img src="images/slide_01.png" alt="slide_01" />
                <div class="container absulate-content">
                    <div class="row">
                        <div class="col-md-6">
                            <span class="thin-line">reach your <b>destinations</b></span>
                            <h3 class="xlg slide-title">	Let’s
                                <span class="cricle-go" data-animation="animated rubberBand" data-animation-delay="0.2s">go</span>
                            </h3>
                            <span data-animation="animated fadeInDown" data-animation-delay="0.4s" class="min-text">start at <b><i class="fa fa-rupee" style="font-size:35px"></i> 9/K.m</b> </span>
                            <p data-animation="animated fadeInDown" data-animation-delay="0.4s" class="led-text text-left col-sm-9 padding-left-none">We are a company that offers unique and clear rental services.</p>
                            <div class="buttons" data-animation="animated fadeInDown" data-animation-delay="0.8s">
                                <a href="booknow.php" class="btn btn-default btn-book">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SLIDER THREE END -->
        </div>
    </section>
    <!-- SLIDER End -->
</div>

    <div class="clearfix"></div>
    <!-- BOOK CAB-->
    <section class="bookcab" id="bookcab">
        <div class="container container-shadow">
            <div class="row">
                <div class="hidden-xs">
                <div class="col-md-5 padding40 wow fadeInRight introDiv hidden-xs" data-wow-duration="0.8s" data-wow-delay="0.5s">
                    <div class="short-intro">
                        <h4 class="primary-title">Book<i>Go Drive</i></h4>
                        <div id="book-pic" style="overflow: hidden; ">
                            <div class="image-div" >
                                <a data-toggle="tab" href="#settings"><img src ="images/bike.png"></a>
                            </div>
                            <div class="image-div" >
                                <a data-toggle="tab" href="#profile"><img src ="images/bicycle.png"></a>
                            </div>
                            <div class="image-div" >
                                <a data-toggle="tab" href="#messages"><img src ="images/hatchback.png"></a>
                            </div>
                            <div style="clear:left;"></div>
                        </div>
                        <p align="justify">Booknow a bike from JourneyWheels - The best bike rental company in Vijayawada, Tirupati, Vizag, Nellore and Rajahmundry.
We offer reliable services on car rentals and rent a bike services.</p>
                        <blockquote class="blockquote">
                            <i class="mb-0">We are a company that offers unique and clear rental  services
                            </i>
                        </blockquote>
                        <ul class="list">
                            <li><i class="fa fa-hand-o-right"></i>	Super & reliable services</li>
                            <li><i class="fa fa-hand-o-right"></i>	24 X 7 customer support </li>
                            <li><i class="fa fa-hand-o-right"></i>	Large Range of Bike Models </li>
                            <li><i class="fa fa-hand-o-right"></i>	Large Range of Car Models </li>
                            <li><i class="fa fa-hand-o-right"></i>	GPS Tracking and help</li>
                           
                        </ul>
                        <div class="buttons">
                            <a href="contact_us.php" class="btn btn-default wow bounceIn" data-wow-duration="0.8s" data-wow-delay="1.8s">Contact us</a>
                            <a href="about_us.php" class="btn btn-default wow bounceIn" data-wow-duration="0.8s" data-wow-delay="1.8s">About Us</a>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-md-7 booking-form wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.5s" id="menu2">
                        <div class="board">
                            <?php if($error!=''){?>
              <div class="col-md-12">
                      <div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          <b> <?php  echo "$error";  ?></b>
                  </div></div>
               <?php } ?>    
                            <h1 class="heading-padding hidden-xs" style="color:black;"><b>Select Category</b></h1>
                              <form method="post" action="">
                                  <div class="tabs-wrapper">
                                       <section id="fancyTabWidget" class="tabs t-tabs">
                                         <div id="myTabContent" class="tab-content fancyTabContent" aria-live="polite">
                                             <div class="tab-pane  fade active in" id="tabBody0" role="tabpanel" aria-labelledby="tab0"      aria-hidden="false" tabindex="0">
                                              <div>
                                              <div class="row">
                                                 <div class="col-md-12">
                                                     <div class="wrapper wrapper-800">
	                                                    <div class="mini-packages col-sm-12" style="padding-bottom:20px" >
                                                            <div class="col-sm-1  mr-2  "></div>
                                                               <div class="col-sm-3 col-xs-4 mr-2  " data-wow-duration="0.8s" data-wow-    delay="1.3s">
                                                                    <div class="pkg-item text-center active">
                                                                         <i class="fa fa-motorcycle" style="font-size:40px"></i> 
                                                                              <div class="checkbox checkbox-emboss" style="display:none">
                                                                                    <input type="radio" name="package" value="1"  checked/>
                                                                              </div>
                                                                    </div>
                                                               </div>
                                                               <div class="col-sm-3 col-xs-4  mr-2" data-wow-duration="0.8s" data-wow-delay="1.4s">
                                                                  <div class="pkg-item text-center">
                                                                     <i class="fa fa-bicycle" style="font-size:40px"></i> 
                                                                     <div class="checkbox checkbox-emboss" style="display:none">
                                                                        <input type="radio" name="package" value="2"  />
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="col-sm-3 col-xs-4 mr-2" data-wow-duration="0.8s" data-wow-delay="1.5s">
                                                                   <div class="pkg-item text-center">
                                                                        <i class="fa fa-car" style="font-size:40px"></i> 
                                                                         <div class="checkbox checkbox-emboss" style="display:none">
                                                                              <input type="radio" name="package" value="3"  />
                                                                         </div>
                                                                   </div>
                                                              </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <select class="form-control" id="type" name="location" required>
                                                                 <option value="">Select Location</option>
                                                                 <option value="1">Vijayawada</option>
                                                                 <option value="2">Tirupati</option>
                                                                 <option value="3">Nellore</option>
                                                                 <option value="4">Rajahmundry</option>
                                                                 <option value="5">Vizag</option>
                                                                 <option value="6">Guntur</option>
                                                                 <option value="7">Kakinada</option>
                                                            </select>
                                                        </div>
                                                        <div class="row">
                                                           <div class="col-md-6 col-sm-6">
                                                                <div class="form-group">
                                                                    <select class="form-control" id="type1" name="pick_loc" required="required">
                                                                          <option value="">Pick-Up Location</option>
                                                                    </select>
                                                                 </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6">
                                                                 <div class="form-group">
                                                                     <select class="form-control" id="type2" name="drop_loc" required="required">
                                                                          <option value="">Drop-Off Location</option>
                                                                     </select>
                                                                 </div>
                                                             </div>
                                                       </div>
                                                       <div class="row">
                                                          <div class="col-md-6 col-sm-6">
                                                              <div class="form-group">
                                                                 <div class="form-control-wrapper">
                                                                     <input type="text" id="date-start" class="form-control floating-label" placeholder="Pick-Up Date & Time" name="pckup_datetime" required="required">
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div class="col-md-6 col-sm-6">
                                                              <div class="form-group">
                                                                  <input type="text" id="date-end" class="form-control floating-label" placeholder="Drop-Off Date & Time" name="drop_datetime" required="required">
                                                              </div>
                                                          </div>
                                                       </div>
                                                       <div class="row">
                                                           <div class="col-md-6 col-sm-6">
                                                               <div class="form-group sm_dspy">
                                                                   <input type="email" class="form-control floating-label"  placeholder="Email" name="email" >
                                                               </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6 ">
                                                                <div class="form-group sm_dspy">
                                                                   <input type="text" class="form-control floating-label" name="phone"  pattern="[789][0-9]{9}" title="Mobile no. should be 10 digit & start with 7,8,9" minlength="10" maxlength="10" placeholder="Mobile Number" >
                                                                </div>
                                                            </div>
                                                            <div class="buttons" data-animation="animated fadeInDown" data-animation-delay="0.8s">
                                                              <input type="submit" name="bookbikesubmit" class="btn btn-default " value="Book Your Ride" data-wow-duration="0.8s" data-wow-delay="1.8s"/>
                                                            </div>
                                                        </div>
                                                     </div>
                                                 </div>
                                              </div>
                                           </div>
                                             </div>
                                         </div>
                                      </section>
                                   </div>
                             </form>
                                <div class="clearfix"></div>
                    </div>
                        </div>
             </div>
        </div>
	</section>
                <div class="Route-intro">
                    <div id="dvDistance"></div>
                    <div id="dvMap" class="col-md-6" style="height: 90%" ></div>
                    <div id="dvPanel" class="col-md-6" style="height: 90%" ></div>
                </div>
            </div>

    <!-- ABOUT US START -->
    <section class="whiteback hidden-xs" id="bookcab1" >
        <div class="container">
            <div class="row">

                <div class="col-md-6 aboutus wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.5s">
                    <!-- ABOUT US -->
                    <div class="short-intro" style="margin-top:38px">
                        <h4 class="primary-title">About <small> Us</small></h4>
                        <p align="justify">JourneyWheels offers self drive cars, hire a bicycle, bike rental services. Get more number of choices for your lovely journey through JourneyWheels which provides Bike Rentals, Bicycle & Car Rental Services in Vijayawada, Tirupati, Vizag, Nellore and Rajahmundry. We provide an efficient pickup and drop servie and also gives the value of your time. Now book through online to hire a bike/car/bicyle.</p>
                        <p>Rent a bike from JourneyWheels and get 10% off on online bookings and reach your destinations safely and happily.</p>
                        <div class="buttons">
                            <a href="about_us.php" class="btn btn-default wow bounceIn" style="margin-bottom:20px" data-wow-duration="0.8s" data-wow-delay="1.8s">Read More...</a>
                        </div>
                    </div>
                    <!-- ABOUT US END -->
                </div>
                <div class="col-md-6   aboutus wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.5s">
                  
                    <img src="images/about.png" id="style_img">
                    
                </div>

            </div>
        </div>
    </section>
    
   <!-- OUR VEHICEL -->
    <section class="ourvehicle padding-80 hidden-xs" id="vehicle_section">

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="primary-title">our <small> Vehicle</small><i>Autoroom</i></h4>
                </div>
                <div class="col-md-6">
                    <!-- NAV TABS -->
                    <ul class="nav nav-tabs pull-right" data-animation="true" data-animation-class="bounceInDown" role="tablist">
                        <li role="presentation" class="active"><a href="#bike" aria-controls="cab" role="tab" data-toggle="tab">Bike</a></li>
                        <li role="presentation"><a href="#bicycle" aria-controls="bike" role="tab" data-toggle="tab">Bicycle</a></li>
                        <li role="presentation"><a href="#cab" aria-controls="bicycle" role="tab" data-toggle="tab">Cab</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <!-- TAB PANES  -->
                <div class="tab-content">
                    <!-- TAXI TABPANEL -->
                    <div role="tabpanel" class="tab-pane active" id="bike">
                        <div class="owl-carousel owl-theme vehicle-slider" id="vehicle-slider2">
                            <!-- ITEM ONE -->
                            <div class="item">
                                <div class="vehicle-info">
                                    <div class="vh-thumb">
                                        <img class="thumb" src="images/bike/bike1.png" alt="vehicle"/>
                                        <img class="flip" src="images/bike/bike1.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Royal enfield classic 350  <small>start FROM <i class="fa fa-inr"></i>120/Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike1.png" alt="">
                                          </span>
                                        <div class="dri-title">
                                            <a href="bikes.php">Visit More</a><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM ONE END -->
                            <!-- ITEM TWO  -->
                            <div class="item">
                                <div class="vehicle-info">
                                    <div class="vh-thumb">
                                        <img src="images/bike/bike20.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike20.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>KTM duke 200 <small>start FROM <i class="fa fa-inr"></i>120/Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike20.png" alt="">
                                          </span>
                                        <div class="dri-title">
                                            <a href="bikes.php">Visit More</a><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM TWO END -->
                            <!-- ITEM THREE  -->
                            <div class="item">
                                <div class="vehicle-info">
                                    <div class="vh-thumb"><img src="images/bike/bike21.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike21.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Aprilia 150cc  <small>start FROM <i class="fa fa-inr"></i>43/Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike21.png" alt="">
                                          </span>
                                        <div class="dri-title">
                                            <a href="bikes.php">Visit More</a><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM THREE END  -->
                            <!-- ITEM FOUR  -->
                            <div class="item">
                                <div class="vehicle-info">
                                    <div class="vh-thumb">
                                        <img src="images/bike/bike4.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike4.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Royal enfield thunderbird x350 <small>start FROM <i class="fa fa-inr"></i>140/Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike4.png" alt="">
                                          </span>
                                        <div class="dri-title">
                                            <a href="bikes.php">Visit More</a><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM FOUR END  -->
                        </div>
                    </div>
                    <!-- TAXI TABPANEL END -->
                    <!-- SUV TABPANEL -->
                    <div role="tabpanel" class="tab-pane" id="bicycle">
                        <!-- TAB SUV -->
                        <div class="owl-carousel owl-theme vehicle-slider" id="vehicle-slider3">
                            <div class="item">
                                <!-- ITEM ONE-->
                                <div class="vehicle-info">
                                    <div class="vh-thumb">
                                        <img class="thumb" src="img/img-bycycl-1.png" alt="vehicle"/>
                                        <img class="flip" src="img/img-bycycl-1.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>vehicle C5  <small>start FROM <i class="fa fa-inr"></i>100 <sup>/DAY</sup></small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="img/img-bycycl-1.png" alt="">
                                          </span>
                                        <div class="dri-title">
                                            <a href="bicycles.php">Visit More</a><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM ONE END -->
                            <!-- ITEM TWO -->
                            <div class="item">
                                <div class="vehicle-info">
                                    <div class="vh-thumb">
                                        <img src="img/img-bycycl-2.jpg" alt="vehicle">
                                        <img class="flip" src="img/img-bycycl-2.jpg" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>vehicle C6  <small>start FROM <i class="fa fa-inr"></i>100 <sup>/DAY</sup></small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="img/img-bycycl-2.jpg" alt="">
                                          </span>
                                        <div class="dri-title">
                                            <a href="bicycles.php">Visit More</a><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM TWO END -->
                            <!-- ITEM THREE  -->
                            <div class="item">
                                <div class="vehicle-info">
                                    <div class="vh-thumb"><img src="img/img-bycycl-3.jpg" alt="vehicle">
                                        <img class="flip" src="img/img-bycycl-3.jpg" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>vehicle C7  <small>start FROM <i class="fa fa-inr"></i>100<sup>/DAY</sup></small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="img/img-bycycl-3.jpg" alt="">
                                          </span>
                                        <div class="dri-title">
                                            <a href="bicycles.php">Visit More</a><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM THREE END  -->
                            <!-- ITEM FOUR  -->
                            <div class="item">
                                <div class="vehicle-info">
                                    <div class="vh-thumb">
                                        <img src="img/img-bycycl-4.png" alt="vehicle">
                                        <img class="flip" src="img/img-bycycl-4.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>vehicle C8  <small>start FROM <i class="fa fa-inr"></i>100 <sup>/DAY</sup></small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="img/img-bycycl-4.png" alt="">
                                          </span>
                                        <div class="dri-title">
                                            <a href="bicycles.php">Visit More</a><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM FOUR END  -->
                        </div>
                    </div>
                    <!-- SUV TABPANEL END -->
					  <!-- CAB TABPANEL -->
                    <div role="tabpanel" class="tab-pane " id="cab">
                        <div class="owl-carousel owl-theme vehicle-slider" id="vehicle-slider">
                            <!-- ITEM TWO -->
                         <div class="item">
                                <!-- ITEM ONE-->
                                <div class="vehicle-info">
                                    <div class="vh-thumb">
                                        <img class="thumb" src="img/img-suzuki-swift-1.png" alt="vehicle">
                                        <img class="flip" src="img/img-suzuki-swift-1.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Maruthi Suzuki swift <small><span style="">For 12hrs <i class="fa fa-inr" aria-hidden="true"></i>1500 , For 24hrs <i class="fa fa-inr" aria-hidden="true"></i>2200</span></small></h4>
								
                                    <span class=""><br/><br/></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="img/img-suzuki-swift-1.png" alt="">
                                          </span>
                                        <div class="dri-title">
                                            <a href="cars.php">Visit More</a><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM TWO END -->
                            <div class="item">
                                <!-- ITEM ONE-->
                                <div class="vehicle-info">
                                    <div class="vh-thumb">
                                        <img class="thumb" src="img/img-marti-sfit-dezir-2.jpg" alt="vehicle">
                                        <img class="flip" src="img/img-marti-sfit-dezir-2.jpg" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Maruthi Suzuki swift desire <small> <span style="">For 12hrs <i class="fa fa-inr" aria-hidden="true"></i>1600 , For 24hrs <i class="fa fa-inr" aria-hidden="true"></i>2300</span> </small> </h4>
                                    <span class=""><br/></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="img/img-marti-sfit-dezir-2.jpg" alt="">
                                          </span>
                                        <div class="dri-title">
                                            <a href="cars.php">Visit More</a><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM ONE ENd -->

                            <!-- ITEM THREE  -->
                            <div class="item">
                                <div class="vehicle-info">
                                    <div class="vh-thumb"><img src="img/img-tyto-innova-3.jpg" alt="vehicle">
                                        <img class="flip" src="img/img-tyto-innova-3.jpg" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Toyota innova <small> For 12hrs <i class="fa fa-inr"></i>1800 , For 24hrs <i class="fa fa-inr"></i>2500 </small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="img/img-tyto-innova-3.jpg" alt="">
                                          </span>
                                        <div class="dri-title">
                                            <a href="cars.php">Visit More</a><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM THREE END -->
                            <!-- ITEM FOUR -->
                            <div class="item">
                                <div class="vehicle-info">
                                    <div class="vh-thumb">
                                        <img src="img/img-toyota-innova-crysta-4.jpg" alt="vehicle">
                                        <img class="flip" src="img/img-toyota-innova-crysta-4.jpg" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Toyota innova crysta <small>For 12hrs <i class="fa fa-inr"></i>2000 , For 24hrs <i class="fa fa-inr"></i>3500</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="img/img-toyota-innova-crysta-4.jpg" alt="">
                                          </span>
                                        <div class="dri-title">
                                            <a href="cars.php">Visit More</a><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM FOUR END -->
                            <!-- ITEM FIVE -->

                            <!-- ITEM FIVE END -->
                        </div>
                    </div>
                    <!-- CAB TABPANEL END -->
					
                </div>
            </div>
        </div>
    </section>

    <!--  DOWNLOAD APP -->
    <section class="download-app" id="app">
        <div class="container indx-div-mrgn">
            <div class="row">
                <div class="col-md-7">
                    <div class="download-info"><br/><br/>
                        <h4 class="title-big"><small> Journey</small> Wheels</h4>
                        <span class="big-text"><b>Download </b>app to your</span>
                        <h2>ANDROID MOBILES<small>Available Soon</small></h2>
                         <h3 class="hidden-md hidden-lg hidden-sm"><span class="txt-colr-red text-center">Soon Avaliable</span></h3>
                        <div class="buttons social-btn mbl-view-padding">
                            <a class="btn btn-googleplay wow bounceIn"  data-wow-duration="0.5s" data-wow-delay="0.5s">
                                <img src="images/google-play.png" alt="">
                                <span class="text"><i>Get it now</i>
                                 Google Play</a>
                            <!--<a class="btn btn-appstore wow bounceIn"  data-wow-duration="0.5s" data-wow-delay="0.7s">-->
                            <!--    <img src="images/apple.png"  alt=""/> <span class="text"><i>Get it now</i> App Store</span></a>-->
                               
                        </div>
                    </div>
                </div>
                <div class="col-md-5 hidden-xs">
                    <div class="app-phone">
                        <img class="wow rotateInUpRight" data-wow-duration="0.5s" src="images/phone-hand.png" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- DOWNLOAD APP END -->
    <!-- PASSANGER FEED -->
    <section class="passanger-feed padding-80" id="feeds">
        <div class="container">
            <div class="row col-md-12">
                <h4 class="primary-title black">Client  <small> feed</small><i>what say our Client</i></h4>
            </div>
            <div class="row ">
                <div class="col-md-5 feeds-bg">
                    <p class="clnt-txt-styl">The absolute best car rental service I have ever had! From the moment of checking online for information to the moment of leaving the shuttle at the airport! Thank you!</p>
                    <div class="buttons">
					 <a href="" class="btn btn-default hidden-xs wow bounceIn text-center"  data-toggle='modal' data-target='#demo-4' data-wow-duration="0.5s" data-wow-delay="0.5s"><i class="fa fa-handshake" aria-hidden="true"></i> Partner With Us</a>
                        <a href="feedback.php" class="btn btn-default wow bounceIn"  data-wow-duration="0.5s" data-wow-delay="0.7s">View All</a>
					 
                    </div>
                </div>
                <div class="col-md-6 col-md-offset-1">
                    <div class="owl-carousel owl-theme feeds-slider" id="feeds-slider">
                        <div class="item">
                            <!-- ITEM ONE -->
                            <div class="feed-post">
                                <div class="col-md-4 col-sm-3">
                                    <div class="user-thumb text-center">
                                        <img src="images/img-one.jpg" alt=""/>
                                        <span class="media-icon"><i class="fa fa-youtube-play"></i></span>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-9">
                                    <div class="post-content">
                                        <a href="" class="title">This was my 1st experience with Journey Wheels. The rental process was extremely quick and easy. The staff was exceptional!.</a>
                                        <div class="userinfo">
                                            <span class="user-name">Bharat Kumar <i>Tirupati</i></span>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ITEM ONE END -->
                        <!-- ITEM TWO -->
                        <div class="item">
                            <div class="feed-post">
                                <div class="col-md-4 col-sm-3">
                                    <div class="user-thumb text-center">
                                        <img src="images/img-two.jpg" alt="">
                                        <span class="media-icon"><i class="fa fa-youtube-play"></i></span>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-9">
                                    <div class="post-content">
                                        <a href="" class="title">Nice deal with Journey Wheels, I would like to thank JD for giving details of JOURNEY WHEELS. Overall, nice ride with nice deal.</a>
                                        <div class="userinfo">
                                            <span class="user-name">M Suresh <i> Vijayawada</i></span>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ITEM TWO END -->
                         <!-- ITEM THREE -->
                        <div class="item">
                            <div class="feed-post">
                                <div class="col-md-4 col-sm-3">
                                    <div class="user-thumb text-center">
                                     <center>   <img src="images/img-3.jpg" alt=""> </center>
                                        <span class="media-icon"><i class="fa fa-youtube-play"></i></span>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-9">
                                    <div class="post-content">
                                        <a href="" class="title">Staff is good at arranging bikes on time with pickup and drop facility.Happy with service providers.</a>
                                        <div class="userinfo">
                                            <span class="user-name">Kishore <i>Nellore</i></span>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ITEM Three END -->
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section >

        <div class="testimonials1 center black1 hidden-xs">
           <div class="wrap hidden-xs">
   <h6 class="wow fadeInDown"></h6>
                   <h6 class="wow fadeInDown"></h6>   <h6 class="wow fadeInDown"></h6>   <h6 class="wow fadeInDown"></h6>
                <h6 class="wow fadeInDown" style="padding-bottom:0px;"><i class="fa fa-quote-left"></i>Wow,
			Journey Wheels is outstanding!</h6>
                <!--<p class="wow fadeInUp">-->
                <!--    Journeywheels is targeted towards the segment of urban dwellers who don't want to own a car, so, the company has launched , which allows consumers to unlock bikes through an app and can pick up the car/bike and drop them off at various points across your neighbourhood.-->
                <!--    </p>-->
                <!--<p class="meta wow fadeInUp">-->
                <!--    -Bharath Kumar, Tirupati-->
                <!--</p>-->
            </div>
		  <div class="row ">
    <div class="col-md-12">
      <div class="carousel carousel-showmanymoveone slide" id="carouselABC">
        <div class="carousel-inner">
          <div class="item active">
            <div class="col-xs-12 col-sm-6 col-md-3"><a href="#"><img src="images/offer2.jpg" class="img-responsive"></a></div>
          </div>
          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-3"><a href="#"><img src="images/offer2.jpg" class="img-responsive"></a></div>
          </div>
          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-3"><a href="#"><img src="images/offer2.jpg" class="img-responsive"></a></div>
          </div>          
          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-3"><a href="#"><img src="images/offer2.jpg" class="img-responsive"></a></div>
          </div>
          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-3"><a href="#"><img src="images/offer2.jpg" class="img-responsive"></a></div>
          </div>
          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-3"><a href="#"><img src="images/offer2.jpg" class="img-responsive"></a></div>
          </div>
          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-3"><a href="#"><img src="images/offer2.jpg" class="img-responsive"></a></div>
          </div>
          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-3"><a href="#"><img src="images/offer2.jpg" class="img-responsive"></a></div>
          </div>
        </div>
        <a class="left carousel-control" href="#carouselABC" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
        <a class="right carousel-control" href="#carouselABC" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
      </div>
    </div>
  </div> 	

        </div>

    </section>
    <div class="clearfix"></div>
    <!-- PASSANGER FEED END-->
    <!-- FOOTER -->
   <?php
        include ("footer.php");
        ?>
    <!-- FOOTER END -->
    <!-- SCROLL TOP -->
    <a href="" class="scrolltop"><i class="fa fa-long-arrow-up"></i></a>



</div>
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


<script>
    (function(){
  // setup your carousels as you normally would using JS
  // or via data attributes according to the documentation
  // https://getbootstrap.com/javascript/#carousel
  $('#carousel123').carousel({ interval: 2000 });
  $('#carouselABC').carousel({ interval: 3600 });
}());

(function(){
  $('.carousel-showmanymoveone .item').each(function(){
    var itemToClone = $(this);

    for (var i=1;i<4;i++) {
      itemToClone = itemToClone.next();

      // wrap around if at end of item collection
      if (!itemToClone.length) {
        itemToClone = $(this).siblings(':first');
      }

      // grab item, clone, add marker class, add to collection
      itemToClone.children(':first-child').clone()
        .addClass("cloneditem-"+(i))
        .appendTo($(this));
    }
  });
}());
    
</script>

</body>
</html>