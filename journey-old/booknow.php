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
    <meta name="description" content="Booknow a bike from JourneyWheels and get 10% off through online booking. We offer reliable services on car rentals and rent a bike services.">
    <meta name="keywords" content="booknow, journeywheels, rental services, online booking, reliable services, car rentals, rent a bike, rent a bicycle">
    <meta name="author" content="pxtheme-govindsaini">

    <!-- PAGE TITLE -->
    <title>BookNow - JourneyWheels Offers Unique & Clear Rental Services</title>

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
<!--  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" />-->

		<!--<link rel="stylesheet"-->
		<!--	  href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.10/css/bootstrap-material-design.min.css"/>-->

		<link rel="stylesheet"
			  href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.10/css/ripples.min.css"/>

		<link rel="stylesheet" href="css/bootstrap-material-datetimepicker.css" />
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

		<script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
<!--		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.10/js/ripples.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.10/js/material.min.js"></script>
		
	<script type="text/javascript" src="http://momentjs.com/downloads/moment-with-locales.min.js"></script>
		<script type="text/javascript" src="js/bootstrap-material-datetimepicker.js"></script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
<!--  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->

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
    <style>.modal {
            z-index: 9999999999999;
            background: rgba(0,0,0,0.5);
        }
        .closeText:before {
    content: "Close";
}
/*.form-group .form-control{*/
/*    padding:10px;*/
/*}*/
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

@media  (max-width: 479px) and (min-width: 320px){
    .sm_dspy{
        display:none;
    }
}
    </style>
	<style>
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
    <!-- BOOK CAB-->
    <section class="bookcab" id="bookcab" >
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
                        <p align="justify">Booknow a bike from JourneyWheels - The best bike rental company in Vijayawada, Tirupati, Vizag, Nellore and Rajahmundry. We offer reliable services on car rentals and rent a bike services.</p>
                        <blockquote class="blockquote">
                            <i class="mb-0">We are a company that offers unique and clear rental  services
                            </i>
                        </blockquote>
                        <ul class="list">
                            <li><i class="fa fa-hand-o-right"></i>	Super & reliable services</li>
                            <li><i class="fa fa-hand-o-right"></i>	24 X 7 customer support provide</li>
                            <li><i class="fa fa-hand-o-right"></i>	Large Range of Car Models </li>
                            <li><i class="fa fa-hand-o-right"></i>	GPS Tracking and help</li>
                            <li><i class="fa fa-hand-o-right"></i>	Powerful Security Offer  </li>
                        </ul>
                        <div class="buttons">
                            <a href="" class="btn btn-default wow bounceIn" data-wow-duration="0.8s" data-wow-delay="1.8s">Contact us</a>
                            <a href="aboutus.html" class="btn btn-default wow bounceIn" data-wow-duration="0.8s" data-wow-delay="1.8s">About Us</a>
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
	                                                    <div class="mini-packages col-sm-12 " style="padding-bottom:20px" >
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
                                                               <div class="col-sm-3 col-xs-4 mr-2  " data-wow-duration="0.8s" data-wow-delay="1.5s">
                                                                   <div class="pkg-item text-center">
                                                                        <i class="fa fa-car" style="font-size:40px"></i> 
                                                                         <div class="checkbox checkbox-emboss" style="display:none">
                                                                              <input type="radio" name="package" value="3"  />
                                                                         </div>
                                                                   </div>
                                                              </div>
                                                        </div>
                                                         
                                                        <div class="form-group">
                                                            <select class="form-control" id="type" name="location" required="required">
                                                                 <option value="">Select Location</option>
                                                                 <option value="1">Vijayawada</option>
                                                                 <option value="2">Tirupati</option>
                                                                 <option value="3">Nellore</option>
                                                                 <option value="4">Rajahmundry</option>
                                                                 <option value="5">Vizag</option>
                                                            </select>
                                                         </div>
                                                       <div class="row">
                                                           <div class="col-md-6 col-sm-6">
                                                                <div class="form-group">
                                                                    <select class="form-control" id="type1" name="pick_loc">
                                                                          <option>Pick-Up Location</option>
                                                                    </select>
                                                                 </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6">
                                                                 <div class="form-group">
                                                                     <select class="form-control" id="type2" name="drop_loc">
                                                                          <option>Drop-Off Location</option>
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
                                                                   <input type="email" class="form-control floating-label"  placeholder="Email" name="email" required="required">
                                                               </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6 ">
                                                                <div class="form-group sm_dspy">
                                                                   <input type="text" class="form-control floating-label"  pattern="[789][0-9]{9}" title="Mobile no. should be 10 digit & start with 7,8,9" minlength="10" maxlength="10" placeholder="Mobile Number" name="phone" required="required">
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
<!-- WIDE DESKTOP -->
<!-- All JS START HERE -->
<!-- jQuery Latest Version -->

<!--<script src="js/jquery-3.2.1.min.js"></script>-->
<!-- jQuery Validation -->
<script src="js/jquery.validate.min.js"></script>
<!-- Google Map API JS -->
<!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=true&language=en&libraries=places"></script>-->

<!--<script>-->
<!--    $(document).ready(function() {-->

        
<!--        $("#placepicker").placepicker();-->

       
<!--        $(".placepicker").each(function() {-->

           
<!--            var target = this;-->
<!--            var $collapse = $(this).parents('.form-group').next('.collapse');-->
<!--            var $map = $collapse.find('.placepicker-map');-->

         
<!--            var placepicker = $(this).placepicker({-->
<!--                map: $map.get(0)-->
<!--            }).data('placepicker');-->

          
<!--            $collapse.on('show.bs.collapse', function () {-->

<!--                window.setTimeout(function() {-->
<!--                    placepicker.resizeMap();-->
<!--                    placepicker.reloadMap();-->
<!--                    if (!$(target).prop('value')) {-->
<!--                        placepicker.geoLocation();-->
<!--                    }-->

<!--                }, 0);-->

<!--            });-->

<!--        });-->


		


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
<!--<script src="js/distanced.js"></script>-->
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

<!--    });-->
<!--</script>-->
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