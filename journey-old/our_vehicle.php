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
    <meta name="description" content="Bikes for rent through Journeywheels. Have a glance at our vehicles like Royal Enfields, KTM Duke, Aprilia, Bicycle, Maruthi Suzuki Swift, Swift Dzire, Tayota Innova, Innova Crystal">
    <meta name="keywords" content="JourneyWheels, Vehicle list, Bicycles, Cars and Bike Rentals, Royal Enfields, KTM Duke, Aprilia, Bicycle, Maruthi Suzuki Swift, Swift Dzire, Tayota Innova, Innova Crystal">
    <meta name="author" content="pxtheme-govindsaini">

    <!-- PAGE TITLE -->
    <title>JourneyWheels - Vehicle list - Bicycles, Cars and Bike Rentals</title>

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
   include ("header.php");
   ?>
    <!-- END HEADER -->

</div>

    <div class="clearfix"></div>
   
   <!-- OUR VEHICEL -->
    <section class="ourvehicle padding-180 " id="vehicle_section">

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
                                        <img class="thumb" src="images/bike/bike1.png" alt="cheap rent car and bike deals"/>
                                        <img class="flip" src="images/bike/bike1.png" alt="cheap rent car and bike deals"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Royal enfield classic 350  <small>start FROM <i class="fa fa-inr"></i>120/Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike1.png" alt="cheap rent car and bike deals">
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
                                        <img src="images/bike/bike20.png" alt="cheap car and bike rent">
                                        <img class="flip" src="images/bike/bike20.png" alt="cheap car and bike rent"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>KTM duke 200 <small>start FROM <i class="fa fa-inr"></i>120/Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike20.png" alt="cheap car and bike rent">
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
                                    <div class="vh-thumb"><img src="images/bike/bike21.png" alt="cab and bike rental service">
                                        <img class="flip" src="images/bike/bike21.png" alt="cab and bike rental service"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Aprilia 150cc  <small>start FROM <i class="fa fa-inr"></i>43/Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike21.png" alt="cab and bike rental service">
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
                                        <img src="images/bike/bike4.png" alt="where to rent bikes near me">
                                        <img class="flip" src="images/bike/bike4.png" alt="where to rent bikes near me"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Royal enfield thunderbird x350 <small>start FROM <i class="fa fa-inr"></i>140/Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike4.png" alt="where to rent bikes near me">
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
                                        <img class="thumb" src="img/img-bycycl-1.png" alt="bicycle rental"/>
                                        <img class="flip" src="img/img-bycycl-1.png" alt="bicycle rental"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>vehicle C5  <small>start FROM <i class="fa fa-inr"></i>100 <sup>/DAY</sup></small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="img/img-bycycl-1.png" alt="bicycle rental">
                                          </span>
                                        <div class="dri-title">
                                            <a href="">Visit More</a><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM ONE END -->
                            <!-- ITEM TWO -->
                            <div class="item">
                                <div class="vehicle-info">
                                    <div class="vh-thumb">
                                        <img src="img/img-bycycl-2.jpg" alt="bicycle rental service">
                                        <img class="flip" src="img/img-bycycl-2.jpg" alt="bicycle rental service"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>vehicle C6  <small>start FROM <i class="fa fa-inr"></i>100 <sup>/DAY</sup></small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="img/img-bycycl-2.jpg" alt="bicycle rental service">
                                          </span>
                                        <div class="dri-title">
                                            <a href="">Visit More</a><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM TWO END -->
                            <!-- ITEM THREE  -->
                            <div class="item">
                                <div class="vehicle-info">
                                    <div class="vh-thumb"><img src="img/img-bycycl-3.jpg" alt="renting a bicycle">
                                        <img class="flip" src="img/img-bycycl-3.jpg" alt="renting a bicycle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>vehicle C7  <small>start FROM <i class="fa fa-inr"></i>100<sup>/DAY</sup></small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="img/img-bycycl-3.jpg" alt="renting a bicycle">
                                          </span>
                                        <div class="dri-title">
                                            <a href="">Visit More</a><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM THREE END  -->
                            <!-- ITEM FOUR  -->
                            <div class="item">
                                <div class="vehicle-info">
                                    <div class="vh-thumb">
                                        <img src="img/img-bycycl-4.png" alt="bicycle rental near me">
                                        <img class="flip" src="img/img-bycycl-4.png" alt="bicycle rental near me"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>vehicle C8  <small>start FROM <i class="fa fa-inr"></i>100 <sup>/DAY</sup></small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="img/img-bycycl-4.png" alt="bicycle rental near me">
                                          </span>
                                        <div class="dri-title">
                                            <a href="">Visit More</a><br>

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
                                        <img class="thumb" src="img/img-suzuki-swift-1.png" alt="affordable car rental">
                                        <img class="flip" src="img/img-suzuki-swift-1.png" alt="affordable car rental"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Maruthi Suzuki swift <small><span style="">For 12hrs <i class="fa fa-inr" aria-hidden="true"></i>1500 , For 24hrs <i class="fa fa-inr" aria-hidden="true"></i>2200</span></small></h4>
								
                                    <span class=""><br/><br/></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="img/img-suzuki-swift-1.png" alt="affordable car rental">
                                          </span>
                                        <div class="dri-title">
                                            <a href="">Visit More</a><br>

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
                                          <img src="img/img-marti-sfit-dezir-2.jpg" alt="vehicle">
                                          </span>
                                        <div class="dri-title">
                                            <a href="">Visit More</a><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM ONE ENd -->

                            <!-- ITEM THREE  -->
                            <div class="item">
                                <div class="vehicle-info">
                                    <div class="vh-thumb"><img src="img/img-tyto-innova-3.jpg" alt="car rental agency">
                                        <img class="flip" src="img/img-tyto-innova-3.jpg" alt="car rental agency"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Tyota innova <small> For 12hrs <i class="fa fa-inr"></i>1800 , For 24hrs <i class="fa fa-inr"></i>2500 </small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="img/img-tyto-innova-3.jpg" alt="car rental agency">
                                          </span>
                                        <div class="dri-title">
                                            <a href="">Visit More</a><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM THREE END -->
                            <!-- ITEM FOUR -->
                            <div class="item">
                                <div class="vehicle-info">
                                    <div class="vh-thumb">
                                        <img src="img/img-toyota-innova-crysta-4.jpg" alt="affordable car rentals near me">
                                        <img class="flip" src="img/img-toyota-innova-crysta-4.jpg" alt="affordable car rentals near me"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Tyota innova crysta <small>For 12hrs <i class="fa fa-inr"></i>2000 , For 24hrs <i class="fa fa-inr"></i>3500</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="img/img-toyota-innova-crysta-4.jpg" alt="affordable car rentals near me">
                                          </span>
                                        <div class="dri-title">
                                            <a href="">Visit More</a><br>

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

</body>
</html>