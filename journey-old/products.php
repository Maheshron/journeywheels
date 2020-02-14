<?php
ob_start();
session_start();
if(!isset($_SESSION))
    include ("includes/db.php");
include("functions/functions.php");
$email = '';
$error = '';
if(isset($_SESSION["email"])){
    $email = $_SESSION['email'];
    $get_customer = "select * from users WHERE email='$email'";
    $run_customer = mysqli_query($db, $get_customer);
    $row = mysqli_fetch_array($run_customer);
    $name = $row['name'];

}
$pick_loc=$_GET['pick_loc'];
$pick_datetime=$_GET['pick_datetime'];
$drop_loc=$_GET['drop_loc'];
$drop_datetime=$_GET['drop_datetime'];


$loc=$_GET['location']; 
if($loc==1){
    $location='Vijayawada';
}elseif($loc==2){
    $location='Tirupati';
}elseif($loc==3){
    $location='Nellore';
}elseif($loc==4){
    $location='Rajahmundry';
}elseif($loc==5){
    $location='Vizag';
}elseif($loc==6){
    $location='Guntur';
}
 if(isset($_POST['book'])){
                                        if(isset($_SESSION["email"])){
                                  $id=$_POST["id"];
                                            
                                                 echo "<script>window.location='booking.php?pick_loc=$pick_loc&pick_datetime=$pick_datetime&id=$id&drop_loc= $drop_loc&drop_datetime=$drop_datetime&helid=1&location=$loc'</script>";
                                            
                                    }else {
                                        $error="Please Login to Proceed";
                                     
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
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="pxtheme-govindsaini">

   
    <!-- PAGE TITLE -->
    <title>Journey Wheels</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <!-- style css -->

    <link rel="stylesheet" href="css/style.css">
<!--    <link rel="stylesheet" href="css/formstyle.css">-->
<!--    <link rel="stylesheet" href="css/form-design.css">-->
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
		<!--<script type="text/javascript" src="https://rawgit.com/FezVrasta/bootstrap-material-design/master/dist/js/material.min.js"></script>-->
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
    <style>
    .modal {
            z-index: 9999999999999;
            background: rgba(0,0,0,0.5);
        }
        #cards:hover
        {
         transform: scale(1.1);
          transition:  0.8s;
        }
        #cardim:hover
        {
         transform: scaleX(-1); 
         transition:  0.5s;
        }
        
        #input-mrgn-btm{
            margin-bottom:-15px;
        }
        body{
        overflow-x:hidden;
        }
        
 
/*product list style*/

       #pro-lst-styl{
            margin-bottom:20px; 
            background-color:#fff;  
            box-shadow: 4px 4px 7px 2px rgba(0,0,0,0.4) ! important;
        }
        .prdct-lst-styl{
       // box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
       box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
        border-left:3px solid #ffb735;
        margin-left:10px;
        margin-bottom:30px;
        background-color:#fff;
        
        
        }
        
         .prdct-lst-styl:hover{
             box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
              -moz-box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
              -webkit-box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
              -o-box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
         }

.prdct-lst-styl .btn-bg{
background-color:#ffb735;
margin-top:10px;
}
.img-padng{
padding-left:15px;
padding-right:15px;
padding-top:10px;
max-height:120px;
}
   .prodct-btn-styl{
       padding:6px 5px;
       background-color:#fff;
       margin-bottom:10px;
       border-radius:3px 4px;
       margin-left:6px;
       box-shadow: 0px 8px 5px -5px rgba(0,0,0,0.4);
      -moz-box-shadow: 0px 8px 5px -5px rgba(0,0,0,0.4);
      	-webkit-box-shadow: 0px 8px 5px -5px rgba(0,0,0,0.4);
      	-o-box-shadow: 0px 8px 5px -5px rgba(0,0,0,0.4);
   }
   #prodct-pric-txt{
  font-weight:bold;
  padding-right:4px;
  line-height:30px;
  font-size:12px;
   }
   #lst-pg-to-txt{
   background-color:#fff;
   padding:5px;
   border-radius:50%;
   margin-top:15px;
   margin-bottom:15px;
   box-shadow:  0 0 10px  rgba(0,0,0,0.6);
			-moz-box-shadow: 0 0 10px  rgba(0,0,0,0.6);
			-webkit-box-shadow: 0 0 10px  rgba(0,0,0,0.6);
			-o-box-shadow: 0 0 10px  rgba(0,0,0,0.6);
   }
  .prdct-lst-styl .pro-txt-mrgn{
  padding-bottom:30px ! important;
  }
  #prodct-lst-mrgn{
  margin:auto ! important;
  }
  .nav-pill-styl>li.active>a, .nav-pill-styl>li.active>a:focus, .nav-pill-styl>li.active>a:focus{
  background-color:rgba(255, 183, 53, 0.6);
  color:#000;
   text-shadow: 0px 2px 2px rgba(255, 255, 255, 0.4);
   border-bottom:3px solid #ffb735;
   -webkit-transition: all 1s ease-in-out;
  -moz-transition: all 1s ease-in-out;
  -o-transition: all 1s ease-in-out;
  transition: all 0.2s ease-in-out;
  }
 .nav-pill-styl{
 margin-left:35%;
 margin-top:5%;
 margin-bottom:30px;
 }
  .nav-pill-styl>li>a{
  padding:4px 20px;
  color:#000;
  background-color:rgba(255,255,255,0.8);
  font-size:18px;
  margin-left:5px;
  font-weight:bold;
  margin-bottom:6%;
  }
.bookng-filtr-bgclr{
background-color:#ffb735;
}
        .control-label{
            display:none;
        }
  .product-name{
        overflow: hidden;
        max-height: 1.0em; /* (Number of lines you want visible) * (line-height) */
        text-align:center;
    }</style>
     <style>
	    @media only screen and (min-width: 320px) and (max-width: 1600px) {
	       .dtp-picker-month{
	           display:none;
	       } 
	      .dtp{
	          top:5%;
	         
	      }
            .alert-danger {
    color: #f9120d;
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
            .btn-flat{
   background-color:black; 
   border-radius:5px;
     color:white;           
}
.btn-flat:hover{
    color:#ffb735;
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
           .nav-pill-styl {
    margin-left: 15%;
       }
          #prodct-pric-txt{
 
  font-size:11px;
   }
       }
       @media only screen and (min-width: 480px) and (max-width: 767px) {
       }
       @media only screen and (min-width: 320px) and (max-width: 479px) {
           .dtp{
	          top:10%;
	      }
	      
       }
      @media only screen  and (min-width: 320px) and (max-width: 400px){ 
      .prdct-lst-styl {
        margin-left: -50px;
        margin-right: -50px;
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
    <div class="clearfix"></div>
    <!-- BOOK CAB-->
    <section class="bookcab padding-80" id="bookcab" style="margin-top:50px">
        <div class="container-fluid">
            <div class="row" style="">
                 <div class="col-lg-4 col-sm-12 hidden-md hidden-xs hidden-sm booking-form  bookng-filtr-bgclr" data-wow-duration="0.8s" data-wow-delay="0.5s" id="menu2" style="position: relative;width:350px;">
                         <div class="board"> <h3 class="text-center"><b>Booking Filter</b></h3>
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="settings">
                             <!-- Filter FORM -->
                           <form action="" method="post" style="margin-top:30px" >
                              <div class="row">
                                <div class="col-sm-12 " data-wow-duration="0.8s" data-wow-delay="0.7s" id="input-mrgn-btm">
                                    <div class="input-group ">
                                       <div class="input-group-addon"><i class="fa fa-home"></i></div>
                                     
                                                       <select name="pick_loc" class="form-control" required>
                  <?php if($loc==1){?>
                    <option value="">Pick-up Location</option>
                    <option value="Journey Wheels Office">Journey Wheels Office</option>
                    <option value="Railway Station">Railway Station</option>
                    <option value="Bus Stand">Bus Stand</option>
                    <option value="PVR">PVR</option>
                    <option value="PVP">PVP</option>
                    <option value="BRTC FOOD JN">BRTC FOOD JN</option>
                  <?php } ?>
                  <?php if($loc==3){?>
                    <option value="">Pick-up Location</option>
                    <option value="Journey Wheels Office">Journey Wheels Office</option>
                    <!--<option value="Railway Station">Railway Station</option>-->
                    <!--<option value="Bus Stand">Bus Stand</option>-->
                  <?php } ?>
                   <?php if($loc==2){?>
                    <option value="">Pick-up Location</option>
                    <option value="Journey Wheels Office">Journey Wheels Office</option>
                    <option value="Railway Station">Railway Station</option>
                    <option value="Bus Stand">Bus Stand</option>
                  <?php } ?>
                   <?php if($loc==4){?>
                    <option value="">Pick-up Location</option>
                    <option value="Journey Wheels Office">Journey Wheels Office</option>
                    <!--<option value="Railway Station">Railway Station</option>-->
                    <!--<option value="Bus Stand">Bus Stand</option>-->
                  <?php } ?>
                   <?php if($loc==5){?>
                    <option value="">Pick-up Location</option>
                    <option value="Journey Wheels Office">Journey Wheels Office</option>
                    <option value="NAD Junction">NAD Junction</option>
                  
                  <?php } ?>
                  <?php if($loc==6){?>
                    <option value="">Pick-up Location</option>
                    <option value="Journey Wheels Office">Journey Wheels Office</option>
                    <option value="Railway Station">Railway Station</option>
                     <option value="Bus Stand">Bus Stand</option>

                  
                  <?php } ?>
                </select>
                   </div>
       </div>
       <div class="col-sm-12 col-xs-12" data-wow-duration="0.8s" data-wow-delay="0.9s" id="input-mrgn-btm">
                           <div class="input-group ">
                    <div class="input-group-addon"><i class="fa fa-map-pin"></i></div>
                                        <select name="drop_loc" class="form-control" required>
                     <?php if($loc==1){?>
                    <option value="">Drop-Off Location</option>
                    <option value="Journey Wheels Office">Journey Wheels Office</option>
                    <option value="Railway Station">Railway Station</option>
                    <option value="Bus Stand">Bus Stand</option>
                  <?php } ?>
                  <?php if($loc==3){?>
                    <option value="">Drop-Off Location</option>
                    <option value="Journey Wheels Office">Journey Wheels Office</option>
                    <!--<option value="Railway Station">Railway Station</option>-->
                    <!--<option value="Bus Stand">Bus Stand</option>-->
                  <?php } ?>
                   <?php if($loc==2){?>
                    <option value="">Drop-Off Location</option>
                    <option value="Journey Wheels Office">Journey Wheels Office</option>
                    <option value="Railway Station">Railway Station</option>
                    <option value="Bus Stand">Bus Stand</option>
                  <?php } ?>
                   <?php if($loc==4){?>
                    <option value="">Drop-Off Location</option>
                    <option value="Journey Wheels Office">Journey Wheels Office</option>
                    <!--<option value="Railway Station">Railway Station</option>-->
                    <!--<option value="Bus Stand">Bus Stand</option>-->
                  <?php } ?>
                   <?php if($loc==5){?>
                    <option value="">Drop-Off Location</option>
                     <option value="Journey Wheels Office">Journey Wheels Office</option>
                    <option value="NAD Junction">NAD Junction</option>
                  <?php } ?>
                  <?php if($loc==6){?>
                    <option value="">Drop-Off Location</option>
                    <option value="Journey Wheels Office">Journey Wheels Office</option>
                    <option value="Railway Station">Railway Station</option>
                     <option value="Bus Stand">Bus Stand</option>

                  
                  <?php } ?>
                </select>
                   </div>  
                       </div> 
        <div class="col-sm-12 col-xs-12" data-wow-duration="0.8s" data-wow-delay="0.9s" id="input-mrgn-btm">
                       
                                                              <div class="form-group">
                                                                 <div class="form-control-wrapper">
                                                                     <label>Pick-Up Date & Time</label>
                                                                     <input type="text" id="date-start" class="form-control floating-label" placeholder="Pick-Up Date & Time" name="pckup_datetime" value="<?php echo $pick_datetime;?>">
                                                                  </div>
                                                              </div>
                                                          
                       </div> 
          <div class="col-sm-12 col-xs-12" data-wow-duration="0.8s" data-wow-delay="0.9s" id="input-mrgn-btm" style="padding:15px">
                       
                                                           <label>Drop-Off Date & Time</label>
                                                              <div class="form-group">
                                                                  <input type="text" id="date-end" class="form-control floating-label" placeholder="Drop-Off Date & Time" name="drop_datetime" value="<?php echo $drop_datetime;?>">
                                                              </div>
                                                         
                       </div> 
                             
                         <div class="col-sm-12" id="input-mrgn-btm">
                                    <div class="buttons">
                                       <input type="submit" name="submitfilter" class="btn btn-default "  value="Apply Filter" data-wow-duration="0.8s" data-wow-delay="1.8s"/>
                                       
                                    </div>
                                 </div>
                              </div>
							  
                           </form><br><br><br> 
                            <?php
                                    if(isset($_POST['submitfilter'])) {
                                         $f_pick_loc = $_POST['pick_loc'];
                                            $f_drop_loc = $_POST['drop_loc'];
                                            $pickupdatetime = $_POST['pckup_datetime'];
                                            $dropdatetime = $_POST['drop_datetime'];
                                            //                   convering date format          
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
          
                                            echo "<script>window.location='products.php?pick_loc=$f_pick_loc&pick_datetime=$pickupdatetime&drop_loc=$f_drop_loc&drop_datetime=$dropdatetime&location=$loc'</script>";

                                        }else {
                                           
                                            $error="Please Select Minimum 5 hours For Booking".$message;
                                       }

                                    }
                                    ?>
                      </div>
                    <div class="clearfix"></div>
                            </div>

                        </div>
                </div>
               
               
               
               <div class="col-lg-7 col-sm-12 col-md-12 col-xs-12 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.5s" id="menu2" style="">   <div class="row">
                       <?php if($error!=''){?>
              <div class="col-lg-12" style="margin-top:50px;">
                      <div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          <b><?php  echo "$error";  ?></b>
         </div>
               <?php } ?>       </div>
         
                      <div id="prodct-lst-mrgn">
  <center class="text-center bloack-center"><ul id="myTabs" class="nav nav-pills nav-pill-styl" role="tablist" data-tabs="tabs">
    <li class="active hidden-xs"><a href="#relavance" data-toggle="tab">Relavance</a></li>
    <li class="hidden-xs"><a href="#low-high" data-toggle="tab">Low To High</a></li>
    <li class="hidden-xs"><a href="#high-low" data-toggle="tab">High To low</a></li>
  </ul></center>
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane fade in active" id="relavance">
            <div class="">
                <?php
              
                  if(isset($_GET['location'])) {
              
                    $pckup_loc=$_GET['pick_loc'];
               
                    $query = "SELECT * FROM products where location=$loc and availability=0  ";
                    $result = mysqli_query($db, $query);
                    if (mysqli_num_rows($result) > 0) {

                        while ($row = mysqli_fetch_array($result)) {

                            ?>
                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                          <form method="post" action="">
                          <div class="prdct-lst-styl row">
                             
                               <h5 class="text-center product-name"
                                        style="margin-top: 10px; font-weight: 600; font-family:Garamond; font-size:18px;"><?php echo $row["product_title"]; ?></h5>
                              <img src="admin_area/product_images/<?php echo $row["product_img"]; ?>" class="img-padng"/>
                               <div class="overlay1" style="background: none">

                                        <input type="hidden" name="hidden_price"
                                               value="<?php echo $row["product_price"]; ?>">
                                        <input type="hidden" name="hidden_name"
                                               value="<?php echo $row["product_title"]; ?>">
                                        <input type="hidden" name="hidden_tax"
                                               value="<?php echo $row["product_tax"]; ?>">
                                        <input type="hidden" name="quantity"
                                               class="form-control" value="1">
                                        <input type="hidden" name="hidden_img"
                                               value="<?php echo $row["product_img1"]; ?>">
                                        <input type="hidden" name="id"
                                               value="<?php echo $row["id"]; ?>">


                                    </div>
                            <hr/>
                              <h6 class="text-center"><b class="pro-txt-mrgn"><?php echo $pick_datetime;?></b></h6>
                              <h6 class="text-center"> <b id="lst-pg-to-txt">To</b> </h6>
                             <h6 class="text-center"><b><?php echo $drop_datetime;?></b></h6> 
                             
                            <div class="col-md-12 col-xs-12 btn-bg"> 
                              <div class="">
                         <h5 class="bold"><span class="" id="prodct-pric-txt"> <i class="fa fa-inr"></i><?php echo $row["price"]; ?>/Day  </span> 
                         <span class="">
                             <button class="pull-right btn prodct-btn-styl" name="book" type="submit">Book Now</button>
                             </span> </h5>
                                 
                              </div></div> 
                          </div>
                          </form>
                      </div>
                      
                            <?php
                        }
                    }
               
            }                                     
            ?>
             <?php
              
                  if(isset($_GET['location'])) {
              
                    $pckup_loc=$_GET['pick_loc'];
               
                    $query = "SELECT * FROM products where location=$loc and availability=1  ";
                    $result = mysqli_query($db, $query);
                    if (mysqli_num_rows($result) > 0) {

                        while ($row = mysqli_fetch_array($result)) {

                            ?>
                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                          <form method="post" action="">
                          <div class="prdct-lst-styl row">
                             
                               <h5 class="text-center product-name"
                                        style="margin-top: 10px; font-weight: 600; font-family:Garamond; font-size:18px;"><?php echo $row["product_title"]; ?></h5>
                              <img src="admin_area/product_images/<?php echo $row["product_img"]; ?>" class="img-padng"/>
                               <div class="overlay1" style="background: none">

                                        <input type="hidden" name="hidden_price"
                                               value="<?php echo $row["product_price"]; ?>">
                                        <input type="hidden" name="hidden_name"
                                               value="<?php echo $row["product_title"]; ?>">
                                        <input type="hidden" name="hidden_tax"
                                               value="<?php echo $row["product_tax"]; ?>">
                                        <input type="hidden" name="quantity"
                                               class="form-control" value="1">
                                        <input type="hidden" name="hidden_img"
                                               value="<?php echo $row["product_img1"]; ?>">
                                        <input type="hidden" name="id"
                                               value="<?php echo $row["id"]; ?>">


                                    </div>
                            <hr/>
                              <h6 class="text-center"><b class="pro-txt-mrgn"><?php echo $pick_datetime;?></b></h6>
                              <h6 class="text-center"> <b id="lst-pg-to-txt">To</b> </h6>
                             <h6 class="text-center"><b><?php echo $drop_datetime;?></b></h6> 
                             
                            <div class="col-md-12 col-xs-12 btn-bg"> 
                              <div class="">
                         <h5 class="bold"><span class="" id="prodct-pric-txt"> <i class="fa fa-inr"></i><?php echo $row["price"]; ?>/Day  </span> 
                         <span class="">
                             <button class="pull-right btn prodct-btn-styl" name="book" type="submit" style="color:red" disabled>Sold Out</button>
                             </span> </h5>
                                 
                              </div></div> 
                          </div>
                          </form>
                      </div>
                      
                            <?php
                        }
                    }
               
            }                                     
            ?>
                           
                      </div>
                      
   </div>
   <div role="tabpanel" class="tab-pane fade" id="low-high">
            <div class="">
                <?php
                  if(isset($_GET['location'])) {
                    $pckup_loc=$_GET['pick_loc'];
                    $query = "SELECT * FROM products where location=$loc and availability=0 ORDER BY  price";
                    $result = mysqli_query($db, $query);
                    if (mysqli_num_rows($result) > 0) {

                        while ($row = mysqli_fetch_array($result)) {

                            ?>
                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                          <form method="post" action="">
                          <div class="prdct-lst-styl row">
                               <h5 class="text-center product-name"
                                        style="margin-top: 10px; font-weight: 600; font-family:Garamond; font-size:18px;"><?php echo $row["product_title"]; ?></h5>
                              <img src="admin_area/product_images/<?php echo $row["product_img"]; ?>" class="img-padng"/>
                               <div class="overlay1" style="background: none">

                                        <input type="hidden" name="hidden_price"
                                               value="<?php echo $row["product_price"]; ?>">
                                        <input type="hidden" name="hidden_name"
                                               value="<?php echo $row["product_title"]; ?>">
                                        <input type="hidden" name="hidden_tax"
                                               value="<?php echo $row["product_tax"]; ?>">
                                        <input type="hidden" name="quantity"
                                               class="form-control" value="1">
                                        <input type="hidden" name="hidden_img"
                                               value="<?php echo $row["product_img1"]; ?>">
                                        <input type="hidden" name="id"
                                               value="<?php echo $row["id"]; ?>">

                                    </div>
                            <hr/>
                              <h6 class="text-center"><b class="pro-txt-mrgn"><?php echo $pick_datetime;?></b></h6>
                              <h6 class="text-center"> <b id="lst-pg-to-txt">To</b> </h6>
                             <h6 class="text-center"><b><?php echo $drop_datetime;?></b></h6> 
                            <div class="col-md-12 col-xs-12 btn-bg"> 
                              <div class="">
                         <h5 class="bold"><span class="" id="prodct-pric-txt"> <i class="fa fa-inr"></i><?php echo $row["price"]; ?>/Day  </span> <span class=""><button class="pull-right btn prodct-btn-styl"  name="book" type="submit">Book Now</button></span> </h5>
                                 
                              </div></div> 
                          </div>
                          </form>
                      </div>
                      

                            <?php
                        }
                    }
            }
                                    ?>
                  <?php
                  if(isset($_GET['location'])) {
                    $pckup_loc=$_GET['pick_loc'];
                    $query = "SELECT * FROM products where location=$loc and availability=1 ORDER BY  price";
                    $result = mysqli_query($db, $query);
                    if (mysqli_num_rows($result) > 0) {

                        while ($row = mysqli_fetch_array($result)) {

                            ?>
                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                          <form method="post" action="">
                          <div class="prdct-lst-styl row">
                               <h5 class="text-center product-name"
                                        style="margin-top: 10px; font-weight: 600; font-family:Garamond; font-size:18px;"><?php echo $row["product_title"]; ?></h5>
                              <img src="admin_area/product_images/<?php echo $row["product_img"]; ?>" class="img-padng"/>
                               <div class="overlay1" style="background: none">

                                        <input type="hidden" name="hidden_price"
                                               value="<?php echo $row["product_price"]; ?>">
                                        <input type="hidden" name="hidden_name"
                                               value="<?php echo $row["product_title"]; ?>">
                                        <input type="hidden" name="hidden_tax"
                                               value="<?php echo $row["product_tax"]; ?>">
                                        <input type="hidden" name="quantity"
                                               class="form-control" value="1">
                                        <input type="hidden" name="hidden_img"
                                               value="<?php echo $row["product_img1"]; ?>">
                                        <input type="hidden" name="id"
                                               value="<?php echo $row["id"]; ?>">

                                    </div>
                            <hr/>
                              <h6 class="text-center"><b class="pro-txt-mrgn"><?php echo $pick_datetime;?></b></h6>
                              <h6 class="text-center"> <b id="lst-pg-to-txt">To</b> </h6>
                             <h6 class="text-center"><b><?php echo $drop_datetime;?></b></h6> 
                            <div class="col-md-12 col-xs-12 btn-bg"> 
                              <div class="">
                         <h5 class="bold"><span class="" id="prodct-pric-txt"> <i class="fa fa-inr"></i><?php echo $row["price"]; ?>/Day  </span> <span class=""><button class="pull-right btn prodct-btn-styl" style="color:red"  name="book" type="submit" disabled>Sold Out</button></span> </h5>
                                 
                              </div></div> 
                          </div>
                          </form>
                      </div>
                      

                            <?php
                        }
                    }
            }
                                    ?>
                                     
                      </div>
                      
   </div>
    <div role="tabpanel" class="tab-pane fade" id="high-low">
            <div class="">
                <?php
              
                  if(isset($_GET['location'])) {
              
                $pckup_loc=$_GET['pick_loc'];
               
                    $query = "SELECT * FROM products where location=$loc and availability=0 ORDER BY  price desc ";
                    $result = mysqli_query($db, $query);
                    if (mysqli_num_rows($result) > 0) {

                        while ($row = mysqli_fetch_array($result)) {

                            ?>
                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                          <form method="post" action="">
                          <div class="prdct-lst-styl row">
                               <h5 class="text-center product-name"
                                        style="margin-top: 10px; font-weight: 600; font-family:Garamond; font-size:18px;"><?php echo $row["product_title"]; ?></h5>
                              <img src="admin_area/product_images/<?php echo $row["product_img"]; ?>" class="img-padng"/>
                               <div class="overlay1" style="background: none">

                                        <input type="hidden" name="hidden_price"
                                               value="<?php echo $row["product_price"]; ?>">
                                        <input type="hidden" name="hidden_name"
                                               value="<?php echo $row["product_title"]; ?>">
                                        <input type="hidden" name="hidden_tax"
                                               value="<?php echo $row["product_tax"]; ?>">
                                        <input type="hidden" name="quantity"
                                               class="form-control" value="1">
                                        <input type="hidden" name="hidden_img"
                                               value="<?php echo $row["product_img1"]; ?>">
                                        <input type="hidden" name="id"
                                               value="<?php echo $row["id"]; ?>">


                                    </div>
                            <hr/>
                              <h6 class="text-center"><b class="pro-txt-mrgn"><?php echo $pick_datetime;?></b></h6>
                              <h6 class="text-center"> <b id="lst-pg-to-txt">To</b> </h6>
                             <h6 class="text-center"><b><?php echo $drop_datetime;?></b></h6> 
                              
                              
                              
                            <div class="col-md-12 col-xs-12 btn-bg"> 
                              <div class="">
                         <h5 class="bold"><span class="" id="prodct-pric-txt"> <i class="fa fa-inr"></i><?php echo $row["price"]; ?>/Day  </span> <span class=""><button class="pull-right btn prodct-btn-styl" name="book" type="submit">Book Now</button></span> </h5>
                                 
                              </div></div> 
                          </div>
                          </form>
                      </div>
                      

                            <?php
                        }
                    }               
            }  
                                    ?>
                            <?php
              
                  if(isset($_GET['location'])) {
              
                $pckup_loc=$_GET['pick_loc'];
               
                    $query = "SELECT * FROM products where location=$loc and availability=1 ORDER BY  price desc ";
                    $result = mysqli_query($db, $query);
                    if (mysqli_num_rows($result) > 0) {

                        while ($row = mysqli_fetch_array($result)) {

                            ?>
                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                          <form method="post" action="">
                          <div class="prdct-lst-styl row">
                               <h5 class="text-center product-name"
                                        style="margin-top: 10px; font-weight: 600; font-family:Garamond; font-size:18px;"><?php echo $row["product_title"]; ?></h5>
                              <img src="admin_area/product_images/<?php echo $row["product_img"]; ?>" class="img-padng"/>
                               <div class="overlay1" style="background: none">

                                        <input type="hidden" name="hidden_price"
                                               value="<?php echo $row["product_price"]; ?>">
                                        <input type="hidden" name="hidden_name"
                                               value="<?php echo $row["product_title"]; ?>">
                                        <input type="hidden" name="hidden_tax"
                                               value="<?php echo $row["product_tax"]; ?>">
                                        <input type="hidden" name="quantity"
                                               class="form-control" value="1">
                                        <input type="hidden" name="hidden_img"
                                               value="<?php echo $row["product_img1"]; ?>">
                                        <input type="hidden" name="id"
                                               value="<?php echo $row["id"]; ?>">


                                    </div>
                            <hr/>
                              <h6 class="text-center"><b class="pro-txt-mrgn"><?php echo $pick_datetime;?></b></h6>
                              <h6 class="text-center"> <b id="lst-pg-to-txt">To</b> </h6>
                             <h6 class="text-center"><b><?php echo $drop_datetime;?></b></h6> 
                              
                              
                              
                            <div class="col-md-12 col-xs-12 btn-bg"> 
                              <div class="">
                         <h5 class="bold"><span class="" id="prodct-pric-txt"> <i class="fa fa-inr"></i><?php echo $row["price"]; ?>/Day  </span> <span class=""><button class="pull-right btn prodct-btn-styl" style="color:red" name="book" type="submit" disabled>Sold Out</button></span> </h5>
                                 
                              </div></div> 
                          </div>
                          </form>
                      </div>
                      

                            <?php
                        }
                    }               
            }  
                                    ?>
                      </div>
                      
   </div>
  </div>
</div>
 </div>
   
            </div>
        </div>
    </section>
                  </div>
                  
            </div>
        </div>
    </section>
        
 
   


   
 <!-- FOOTER -->
  <?php 
  include ('footer.php');
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
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=true&language=en&libraries=places"></script>

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

<script>$(function () {
  $('.datetimepicker').datetimepicker();
});</script>
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


	

</body>
</html>
