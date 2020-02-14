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
    <meta name="description" content="Contact JourneyWheels to hire a bike or car or bicycle for your lovely journey to reach your destinations safely and happily. Serve You Better">
    <meta name="keywords" content="Contact Us, JourneyWheels, Bike Rental Services, hire a bike, hire a car, hire a bicycle, destinations safely, Serve You Better">
    <meta name="author" content="pxtheme-govindsaini">

    <!-- PAGE TITLE -->
    <title>Contact Us | JourneyWheels | Bike Rental Services</title>

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
     <div class="footer padding-180 whiteback" id="bookcab1">
        <div class="container">
            <div class="row">
    	<div class="hidden-md hidden-lg visible-xs text-center">
                    <center class="hidden-md visible-xs"><br/> <br/><div class="buttons">
                       <center> <a href="" class="btn btn-default wow bounceIn text-center ftr-btn-styl hidden-md"  data-toggle='modal' data-target='#demo-4' data-wow-duration="0.5s" data-wow-delay="0.5s"><i class="fa fa-handshake-o" aria-hidden="true"></i>&nbsp&nbsp; Partner With Us</a> </center>
                     <br/>
                    </div> </center>
           </div>
                <div class="col-md-6 wow fadeInRight"  data-wow-duration="0.5s" data-wow-delay="0.2s">
                    
               
				<div class="ftr-cnt-icn">
                  </div>
                  <div class="mobl-view-cnt-cntr">
				  
                    <!-- ADDRESS -->
                    <address>
                        <strong>TIRUPATI HEAD OFFICE</strong>
                        <p>JOURNEY WHEELS,<br> #19-1-112/A, JM COMPLEX <br>OLD EXHIBITION GROUND,<br> NEAR OPP RTC BUS STAND,<br> TIRUPATI,<br> ANDHRA PRADESH-517501</p>
                        <ul class="contact-info">
                            <li><i class="fa fa-phone"></i> (+91) 8106454599 </li>
                            <!--<li><i class="fa fa-fax"></i> 123-456-7890 </li>-->
                            <li><i class="fa fa-envelope-o"></i>Contact@journeywheels.in</li>
                            <!--<li><i class="fa fa-briefcase "></i> <a href="mailTo:career@joueneywheels.com">career@joueneywheels.com</a> </li>-->
                        </ul>
                    </address>
                    <!-- ADDRESS -->
                    <!-- SCIAL ICON -->
                    <i class="fa fa-globe icon-siz-styl" aria-hidden="true"></i>
                    <h6 style="display:inline-block; color:#fff; font-size:18px;">Social Media</h6>
                    <ul class="social-icon">
                        
                        <li><a href="https://www.facebook.com/journeywheelsoffical/" id="scl-icon-siz" class="fa fa-facebook-square"></a></li>
                        <li><a href="https://www.twitter.com/journey_wheels" id="scl-icon-siz" class="fa fa-twitter-square"></a></li>
                        <li><a href="" class="fa fa-youtube-square"></a></li>
                        <li><a href="https://www.linkedin.com/in/journey-wheels-offical" id="scl-icon-siz" class="fa fa-linkedin-square"></a></li>
                         <li><a href="https://www.instagram.com/journey_wheels/" id="scl-icon-siz" class="fa fa-instagram"></a></li>
                        <li><a href="https://in.pinterest.com/journeywheels/" id="scl-icon-siz" class="fa fa-pinterest-square"></a></li>
                    </ul>
                    <!-- SCIAL ICON END -->
                    <!--<p class="copyright">© 2018 <i>Journey Wheels</i> All Rights Reserved</p>-->
                    <!--<ul class="legal">-->
                    <!--    <li><a href="terms.html">Terms & Condition</a></li>-->
                    <!--    <li><a href="privacy_policy.html">Privacy Policy </a></li>-->
                    <!--</ul>-->
                </div>
				</div>
                <!-- MESSSAGE FORM  -->
                   
                
                <!-- GOOGLE MAP  -->
                <div class="col-md-6 hidden-xs no-padding map-container wow fadeInRight">
                    <!--  <div id="gmap" class="gmap"
                        data-address="The Heights, Jersey City, NJ, United States"
                        data-marker-icon="assets/theme/img/mar_marker.png">
                     </div> -->
                    <iframe width="100%" height="440" src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=%2319-1-112%2FA%2C%20SHOP%20NO%3A-6%20JM%20COMPLEX%20PARKING%20Chainthalathenu%20Road%20NEAR%20SUBWAY%20Opp%20RTC%20bus%20stand%20Old%20exhibition%20Grounds%2C%20Kothapalli%2C%20Tirupati%2C%20Andhra%20Pradesh%20517501%20%20%20%20+(Title)&amp;ie=UTF8&amp;t=&amp;z=10&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
				

                <!-- GOOGLE MAP  -->
            </div>
        </div>
    </div>
    </div>
     <div class="footer  whiteback padding40" id="bookcab1">
        <div class="container">
            <div class="row">
    	<div class="hidden-md hidden-lg visible-xs text-center">
                    <center class="hidden-md visible-xs"><br/> <br/><div class="buttons">
                       <center> <a href="" class="btn btn-default wow bounceIn text-center ftr-btn-styl hidden-md"  data-toggle='modal' data-target='#demo-4' data-wow-duration="0.5s" data-wow-delay="0.5s"><i class="fa fa-handshake-o" aria-hidden="true"></i>&nbsp&nbsp; Partner With Us</a> </center>
                     <br/>
                    </div> </center>
           </div>
                <div class="col-md-6 wow fadeInRight"  data-wow-duration="0.5s" data-wow-delay="0.2s">
                    
               
				<div class="ftr-cnt-icn">
                  </div>
                  <div class="mobl-view-cnt-cntr">
			      <address>
                        <strong>VIJAYAWADA OFFICE</strong>
                        <p>JOURNEY WHEELS,<br> #21-10/5-11A, 5th Ln srinagar colony <br>SRWA-564, Satyanarayana Puram, <br>Vijayawada,<br> ANDHRA PRADESH-520011</p>
                        <ul class="contact-info">
                            <li><i class="fa fa-phone"></i> (+91) 8106454599 </li>
                            <!--<li><i class="fa fa-fax"></i> 123-456-7890 </li>-->
                            <li><i class="fa fa-envelope-o"></i>Contact@journeywheels.in</li>
                            <!--<li><i class="fa fa-briefcase "></i> <a href="mailTo:career@joueneywheels.com">career@joueneywheels.com</a> </li>-->
                        </ul>
                    </address>
                    <!-- ADDRESS -->
                    <!-- SCIAL ICON -->
                    <i class="fa fa-globe icon-siz-styl" aria-hidden="true"></i>
                    <h6 style="display:inline-block; color:#fff; font-size:18px;">Social Media</h6>
                    <ul class="social-icon">
                        
                        <li><a href="https://www.facebook.com/journeywheelsoffical/" id="scl-icon-siz" class="fa fa-facebook-square"></a></li>
                        <li><a href="https://www.twitter.com/journey_wheels" id="scl-icon-siz" class="fa fa-twitter-square"></a></li>
                        <li><a href="" class="fa fa-youtube-square"></a></li>
                        <li><a href="https://www.linkedin.com/in/journey-wheels-offical" id="scl-icon-siz" class="fa fa-linkedin-square"></a></li>
                         <li><a href="https://www.instagram.com/journey_wheels/" id="scl-icon-siz" class="fa fa-instagram"></a></li>
                        <li><a href="https://in.pinterest.com/journeywheels/" id="scl-icon-siz" class="fa fa-pinterest-square"></a></li>
                    </ul>
                    <!-- SCIAL ICON END -->
                    <!--<p class="copyright">© 2018 <i>Journey Wheels</i> All Rights Reserved</p>-->
                    <!--<ul class="legal">-->
                    <!--    <li><a href="terms.html">Terms & Condition</a></li>-->
                    <!--    <li><a href="privacy_policy.html">Privacy Policy </a></li>-->
                    <!--</ul>-->
                </div>
				</div>
                <!-- MESSSAGE FORM  -->
                   
                
                <!-- GOOGLE MAP  -->
                 <div class="col-md-6 hidden-xs no-padding map-container wow fadeInRight">
                    <!--  <div id="gmap" class="gmap"
                        data-address="The Heights, Jersey City, NJ, United States"
                        data-marker-icon="assets/theme/img/mar_marker.png">
                     </div> -->
                    <div style="width: 100%;position: relative;"><iframe width="100%" height="440" src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=21-10%2F5-11A%2C5th%20Ln%20srinagar%20colony%2C%20SRWA-564%2C%20Satyanarayana%20puram%2C%20Vijayawada%2C%20Andhra%20Pradesh%20520011+(Title)&amp;ie=UTF8&amp;t=&amp;z=10&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 20px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;"><small style="line-height: 1.8;font-size: 8px;background: #fff;">Powered by <a href="http://www.googlemapsgenerator.com/tr/">googlemaps gen (tr)</a> & <a href="https://notariscompare.nl/">notariscompare (nl)</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><br />    </div>
				 </div>
        </div>
    </div>
     <div class="footer  whiteback padding40" id="bookcab1">
        <div class="container">
            <div class="row">
    	<div class="hidden-md hidden-lg visible-xs text-center">
                    <center class="hidden-md visible-xs"><br/> <br/><div class="buttons">
                       <center> <a href="" class="btn btn-default wow bounceIn text-center ftr-btn-styl hidden-md"  data-toggle='modal' data-target='#demo-4' data-wow-duration="0.5s" data-wow-delay="0.5s"><i class="fa fa-handshake-o" aria-hidden="true"></i>&nbsp&nbsp; Partner With Us</a> </center>
                     <br/>
                    </div> </center>
           </div>
                <div class="col-md-6 wow fadeInRight"  data-wow-duration="0.5s" data-wow-delay="0.2s">
                    
               
				<div class="ftr-cnt-icn">
                  </div>
                  <div class="mobl-view-cnt-cntr">
				  
                    <!-- ADDRESS -->
                    <address>

                        <strong>NELLORE OFFICE</strong>
                        <p>JOURNEY WHEELS,<br>Flat no 203,<br> sailaja homes apartment,<br>Vedayapalem, Nellore,<br> Andhra Pradesh 524004</p>
                        <ul class="contact-info">
                            <li><i class="fa fa-phone"></i> 093910 90908  </li>
                            <!--<li><i class="fa fa-fax"></i> 123-456-7890 </li>-->
                            <li><i class="fa fa-envelope-o"></i>Contact@journeywheels.in</li>
                            <!--<li><i class="fa fa-briefcase "></i> <a href="mailTo:career@joueneywheels.com">career@joueneywheels.com</a> </li>-->
                        </ul>
                    </address>
                    <!-- ADDRESS -->
                    <!-- SCIAL ICON -->
                    <i class="fa fa-globe icon-siz-styl" aria-hidden="true"></i>
                    <h6 style="display:inline-block; color:#fff; font-size:18px;">Social Media</h6>
                    <ul class="social-icon">
                        
                        <li><a href="https://www.facebook.com/journeywheelsoffical/" id="scl-icon-siz" class="fa fa-facebook-square"></a></li>
                        <li><a href="https://www.twitter.com/journey_wheels" id="scl-icon-siz" class="fa fa-twitter-square"></a></li>
                        <li><a href="" class="fa fa-youtube-square"></a></li>
                        <li><a href="https://www.linkedin.com/in/journey-wheels-offical" id="scl-icon-siz" class="fa fa-linkedin-square"></a></li>
                         <li><a href="https://www.instagram.com/journey_wheels/" id="scl-icon-siz" class="fa fa-instagram"></a></li>
                        <li><a href="https://in.pinterest.com/journeywheels/" id="scl-icon-siz" class="fa fa-pinterest-square"></a></li>
                    </ul>
                    <!-- SCIAL ICON END -->
                    <!--<p class="copyright">© 2018 <i>Journey Wheels</i> All Rights Reserved</p>-->
                    <!--<ul class="legal">-->
                    <!--    <li><a href="terms.html">Terms & Condition</a></li>-->
                    <!--    <li><a href="privacy_policy.html">Privacy Policy </a></li>-->
                    <!--</ul>-->
                </div>
				</div>
                <!-- MESSSAGE FORM  -->
                   
                
                <!-- GOOGLE MAP  -->
                <div class="col-md-6 hidden-xs no-padding map-container wow fadeInRight">
                    <!--  <div id="gmap" class="gmap"
                        data-address="The Heights, Jersey City, NJ, United States"
                        data-marker-icon="assets/theme/img/mar_marker.png">
                     </div> -->
				<iframe width="100%" height="440" src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=%20Flat%20no%20203%2C%20sailaja%20homes%20apartment%2C%20Vedayapalem%2C%20Nellore%2C%20Andhra%20Pradesh%20524004+(Your%20Business%20Name)&ie=UTF8&t=&z=14&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>

                <!-- GOOGLE MAP  -->
            </div>
        </div>
    </div>
    </div>
   <div class="footer  whiteback padding40" id="bookcab1">
        <div class="container">
            <div class="row">
    	<div class="hidden-md hidden-lg visible-xs text-center">
                    <center class="hidden-md visible-xs"><br/> <br/><div class="buttons">
                       <center> <a href="" class="btn btn-default wow bounceIn text-center ftr-btn-styl hidden-md"  data-toggle='modal' data-target='#demo-4' data-wow-duration="0.5s" data-wow-delay="0.5s"><i class="fa fa-handshake-o" aria-hidden="true"></i>&nbsp&nbsp; Partner With Us</a> </center>
                     <br/>
                    </div> </center>
           </div>
                <div class="col-md-6 wow fadeInRight"  data-wow-duration="0.5s" data-wow-delay="0.2s">
                    
               
				<div class="ftr-cnt-icn">
                  </div>
                  <div class="mobl-view-cnt-cntr">
				 
                    <!-- ADDRESS -->
                    <address>
                        <strong>RAJAHMUNDRY  OFFICE</strong>
                        <p>JOURNEY WHEELS,<br>  D.NO 88-5-1,PLAT NO 162  <br>Gadalamma nagar,<br> Rajahmundry,<br> Andhra Pradesh 533103</p>
                        <ul class="contact-info">
                            <li><i class="fa fa-phone"></i> 08106454599 </li>
                            <!--<li><i class="fa fa-fax"></i> 123-456-7890 </li>-->
                            <li><i class="fa fa-envelope-o"></i>Contact@journeywheels.in</li>
                            <!--<li><i class="fa fa-briefcase "></i> <a href="mailTo:career@joueneywheels.com">career@joueneywheels.com</a> </li>-->
                        </ul>
                    </address>
                    <!-- ADDRESS -->
                    <!-- SCIAL ICON -->
                    <i class="fa fa-globe icon-siz-styl" aria-hidden="true"></i>
                    <h6 style="display:inline-block; color:#fff; font-size:18px;">Social Media</h6>
                    <ul class="social-icon">
                        
                        <li><a href="https://www.facebook.com/journeywheelsoffical/" id="scl-icon-siz" class="fa fa-facebook-square"></a></li>
                        <li><a href="https://www.twitter.com/journey_wheels" id="scl-icon-siz" class="fa fa-twitter-square"></a></li>
                        <li><a href="" class="fa fa-youtube-square"></a></li>
                        <li><a href="https://www.linkedin.com/in/journey-wheels-offical" id="scl-icon-siz" class="fa fa-linkedin-square"></a></li>
                         <li><a href="https://www.instagram.com/journey_wheels/" id="scl-icon-siz" class="fa fa-instagram"></a></li>
                        <li><a href="https://in.pinterest.com/journeywheels/" id="scl-icon-siz" class="fa fa-pinterest-square"></a></li>
                    </ul>
                    <!-- SCIAL ICON END -->
                    <!--<p class="copyright">© 2018 <i>Journey Wheels</i> All Rights Reserved</p>-->
                    <!--<ul class="legal">-->
                    <!--    <li><a href="terms.html">Terms & Condition</a></li>-->
                    <!--    <li><a href="privacy_policy.html">Privacy Policy </a></li>-->
                    <!--</ul>-->
                </div>
				</div>
                <!-- MESSSAGE FORM  -->
                   
                
                <!-- GOOGLE MAP  -->
                <div class="col-md-6 hidden-xs no-padding map-container wow fadeInRight">
                    <!--  <div id="gmap" class="gmap"
                        data-address="The Heights, Jersey City, NJ, United States"
                        data-marker-icon="assets/theme/img/mar_marker.png">
                     </div> -->
                    <iframe width="100%" height="440" src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=D.NO%2088-5-1%2CPLAT%20NO%20162%20Gadalamma%20nagar%2C%20Rajahmundry%2C%20Andhra%20Pradesh%20533103+(Your%20Business%20Name)&ie=UTF8&t=&z=14&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>


                <!-- GOOGLE MAP  -->
            </div>
        </div>
    </div>
    </div>
   <div class="footer  whiteback padding40" id="bookcab1">
        <div class="container">
            <div class="row">
    	<div class="hidden-md hidden-lg visible-xs text-center">
                    <center class="hidden-md visible-xs"><br/> <br/><div class="buttons">
                       <center> <a href="" class="btn btn-default wow bounceIn text-center ftr-btn-styl hidden-md"  data-toggle='modal' data-target='#demo-4' data-wow-duration="0.5s" data-wow-delay="0.5s"><i class="fa fa-handshake-o" aria-hidden="true"></i>&nbsp&nbsp; Partner With Us</a> </center>
                     <br/>
                    </div> </center>
           </div>
                <div class="col-md-6 wow fadeInRight"  data-wow-duration="0.5s" data-wow-delay="0.2s">
                    
               
				<div class="ftr-cnt-icn">
                  </div>
                  <div class="mobl-view-cnt-cntr">
				  
                    <!-- ADDRESS -->
                    <address>
                        <strong>VIZAG OFFICE</strong>
                        <p>JOURNEY WHEELS,<br> 58-1-335/2 FLAT NO 504<br>Vishnu priya function hall beside yes bank, <br> Buchirajupalem, Visakhapatnam,<br>  Andhra Pradesh 530027</p>
                        <ul class="contact-info">
                            <li><i class="fa fa-phone"></i> 08106454599 </li>
                            <!--<li><i class="fa fa-fax"></i> 123-456-7890 </li>-->
                            <li><i class="fa fa-envelope-o"></i>Contact@journeywheels.in</li>
                            <!--<li><i class="fa fa-briefcase "></i> <a href="mailTo:career@joueneywheels.com">career@joueneywheels.com</a> </li>-->
                        </ul>
                    </address>
                    <!-- ADDRESS -->
                    <!-- SCIAL ICON -->
                    <i class="fa fa-globe icon-siz-styl" aria-hidden="true"></i>
                    <h6 style="display:inline-block; color:#fff; font-size:18px;">Social Media</h6>
                    <ul class="social-icon">
                        
                        <li><a href="https://www.facebook.com/journeywheelsoffical/" id="scl-icon-siz" class="fa fa-facebook-square"></a></li>
                        <li><a href="https://www.twitter.com/journey_wheels" id="scl-icon-siz" class="fa fa-twitter-square"></a></li>
                        <li><a href="" class="fa fa-youtube-square"></a></li>
                        <li><a href="https://www.linkedin.com/in/journey-wheels-offical" id="scl-icon-siz" class="fa fa-linkedin-square"></a></li>
                         <li><a href="https://www.instagram.com/journey_wheels/" id="scl-icon-siz" class="fa fa-instagram"></a></li>
                        <li><a href="https://in.pinterest.com/journeywheels/" id="scl-icon-siz" class="fa fa-pinterest-square"></a></li>
                    </ul>
                    <!-- SCIAL ICON END -->
                    <!--<p class="copyright">© 2018 <i>Journey Wheels</i> All Rights Reserved</p>-->
                    <!--<ul class="legal">-->
                    <!--    <li><a href="terms.html">Terms & Condition</a></li>-->
                    <!--    <li><a href="privacy_policy.html">Privacy Policy </a></li>-->
                    <!--</ul>-->
                </div>
				</div>
                <!-- MESSSAGE FORM  -->
                   
                
                <!-- GOOGLE MAP  -->
                <div class="col-md-6 hidden-xs no-padding map-container wow fadeInRight">
                    <!--  <div id="gmap" class="gmap"
                        data-address="The Heights, Jersey City, NJ, United States"
                        data-marker-icon="assets/theme/img/mar_marker.png">
                     </div> -->
             <iframe width="100%" height="440" src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=JOURNEY%20WHEELS%20%7C%20BIKE%20RENTAL%20IN%20VIZAG58-1-335%2F2%20FLAT%20NO%20504%20Vishnu%20priya%20function%20hall%20beside%20yes%20bank%2C%20Buchirajupalem%2C%20Visakhapatnam%2C%20Andhra%20Pradesh%20530027+(Your%20Business%20Name)&ie=UTF8&t=&z=14&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>
				

                <!-- GOOGLE MAP  -->
            </div>
        </div>
    </div>
   
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