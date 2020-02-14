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
    $uid = $row['uid'];
     $name = $row['name'];
      $mobile = $row['mobile'];

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <!-- style css -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">

    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Distance css -->
    <link rel="stylesheet" href="css/distanced.css">
    
    <script src="js/modernizr-2.8.3.min.js"></script>
    <style>.modal {
            z-index: 9999999999999;
            background: rgba(0,0,0,0.5);
        }
        .closeText:before {
    content: "Close";
}
#p_title{
    font-weight:bold;
}
.card{
    box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 1px 5px 0 rgba(0,0,0,0.12), 0 3px 1px -2px rgba(0,0,0,0.2);
}
    </style>
     <style>
                                              input[type="file"] {
                                                      display: none;
                                               }
                                             .custom-file-upload {
                                                   border: 1px solid #ccc;
                                                   display: inline-block;
                                                   padding: 6px 12px;
                                                   cursor: pointer;
                                              }
                                             .custom-file-upload  .overlay{
                                                  position: absolute;
  opacity:0;
  color: snow;
  font-size: 13px;
  margin-top:-1%;
  margin-left: 41%;
 }
                                            
                                              
                                              
    .panel-default>.panel-heading {
  color: #333;
  background-color: #fff;
  border-color: #e4e5e7;
  padding: 0;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.panel-default>.panel-heading a {
  display: block;
  padding: 10px 15px;
}

.panel-default>.panel-heading a:after {
  content: "";
  position: relative;
  top: 1px;
  display: inline-block;
  font-family: 'Glyphicons Halflings';
  font-style: normal;
  font-weight: 400;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  float: right;
  transition: transform .25s linear;
  -webkit-transition: -webkit-transform .25s linear;
  position: relative;
    top: -15px;
 
}

.panel-default>.panel-heading a[aria-expanded="true"] {
  background-color: #eee;
}

.panel-default>.panel-heading a[aria-expanded="true"]:after {
  content: "\2212";
  -webkit-transform: rotate(180deg);
  transform: rotate(180deg);
}

.panel-default>.panel-heading a[aria-expanded="false"]:after {
  content: "\002b";
  -webkit-transform: rotate(90deg);
  transform: rotate(90deg);
}

.accordion-option {
  width: 100%;
  float: left;
  clear: both;
  margin: 15px 0;
}

.accordion-option .title {
  font-size: 20px;
  font-weight: bold;
  float: left;
  padding: 0;
  margin: 0;
}

.accordion-option .toggle-accordion {
  float: right;
  font-size: 16px;
  color: #6a6c6f;
}

.accordion-option .toggle-accordion:before {
  content: "Expand All";
}

.accordion-option .toggle-accordion.active:before {
  content: "Collapse All";
 
}

.userBooking__bookingSummaryTitle {
       padding: 20px 25px 10px;
    color: #000000;
    font-size: 18px;
    background-color: #ffb735;
    border-radius: 2px;
    text-align: center;
    font-weight: 700;
}
.userBooking__orderTitleHead {
    padding: 15px 10px;
    color: #999;
     background-color:#ffb735;
}
.userBooking__orderListItem:nth-child(1) {
    width: 16.5%;
}
.userBooking__orderListItem {
    display: inline-block;
    text-align: center;
    width: 15.5%;
    font-size:14px;
   
}
.userBooking__orderTitle
{
    color:#222;
    font-family:13px;
}
.orderAccordion__pickUpTitle {
    padding: 10px 15px;
    border-bottom: 1px solid #e0e0e0;
}
.orderAccordion__IndvItem {
    padding: 10px;
}
.imgpart img
{
    width:243px;
    height:100px;
    
}
.imgpart img
{
    /*border-radius:50%;*/
    padding:0px;
    /*border:1px solid #222;*/
    position: relative;
    top: 53px;
    left: 55px;
}
.imgpart
{

    width: 20%;
}
.orderAccordion__mediaBody {
    width: 100%;
}
.orderAccordion__mediaBody>h4 {
    color: #606e7d;
    font-family: SourceSansPro-medium;
    display: inline-block;
    font-weight: 600;
    font-size: 16px;
}
.media-heading {
    margin-top: 0;
    margin-bottom: 5px;
}
.orderAccordion__IndvItemRegNo {
    display: inline-block;
    margin: 0;
    color: #999;
    font-size: 14px;
}
.orderAccordion__mediaBody>p {
    display: inline-block;
    float: right;
    font-size: 14px;
}
.myTextMuted_light {
    color: #c1c1c1;
}
.prd-detiles
{
    display: table-cell;
    width: 40%;
    font-size: 14px;
    padding: 0 20px 0 0;
}
.orderAccordion__pickUpContent {
    padding: 10px 0 10px 20px;
    position: relative;
}
.Marker {
    position: absolute;
    left: 0;
    top: 14px;
}
.orderAccordion__pickUpContent {
    padding: 10px 0 10px 20px;
    position: relative;
}
.orderAccordion__btns {
    margin: 10px 0;
    display: table-cell;
    width: 19%;
   
}
.userBooking a {
    text-decoration: none;
}
.ourCustomBtn {
    display: block;
    padding: 6px 10px;
    border: 1px solid #f2f2f2;
    border-radius: 4px;
    font-size: 14px;
    box-shadow: 1px 1px 1px rgba(0,45,63,.15);
    font-family: SourceSansPro-book;
    color: #535a5f;
}
.btnBlue, .ourCustomBtn {
    margin-right: 5px;
    margin-top: 5px;
}
.imgpart a
{
    margin-top:30px;
}
.orderAccordion__orderDetails1, .orderAccordion__orderDetails2, .orderAccordion__orderDetails3 {
    border: 1px solid #E0E0E0;
    margin: 5px 0;
    background-color: #fff;
}

.orderAccordion__titleMain {
    padding: 10px 15px;
    border-bottom: 1px solid #E0E0E0;
}

.orderAccordion__chargesAllType {
    padding: 15px 30px;
}

.userBooking__orderDetailsCard {
    position: relative;
    background-color: #fff;
    color: #335b6b;
    padding: 16px 0 14px;
    font-size: 15px;
    border-radius: 4px;
    transition: .2s;
    box-shadow: 0 0 20px 0 rgba(0,0,0,.05);
    cursor: pointer;
}


.orderAccordion__totalRent {
    cursor: pointer;
}
.orderAccordion__totalRent, .orderAccordion__totalRentAmount {
    padding: 7px 15px;
}


.orderAccordion__subChargesAmount, .orderAccordion__totalRentAmount {
    text-align: right;
}
.orderAccordion__totalRent {
    cursor: pointer;
}
.custmPanel {
    margin-bottom: 0;
    background-color: transparent;
    border: 0;
    border-radius: 0!important;
    -webkit-box-shadow: none;
    box-shadow: none;
}
.dash {
    border-top: 1px dashed #E0E0E0;
    margin: 0 auto;
}
.orderAccordion .pd_amt {
    color: #335b6b;
    font-family: SourceSansPro-bold;
}
 @media (min-width : 319px) and (max-width:480px)
 {
     .userBooking__orderListItem:nth-child(1) {
    width: 30.5%;
    display:none;
}
.userBooking__orderListItem {
    display: inline-block;
    text-align: center;
    width: 22.5%;
    font-size: 9px;
}
.panel-default>.panel-heading a:after {
    content: "";
    position: relative;
    top: 1px;
    display: inline-block;
    font-family: 'Glyphicons Halflings';
    font-style: normal;
    font-weight: 400;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    float: right;
    transition: transform .25s linear;
    -webkit-transition: -webkit-transform .25s linear;
    position: relative;
    top: -34px;
    left: 10px;
    font-size: 10px;
}

.imgpart img {
    /*border-radius: 50%;*/
    padding: 0px;
    /*border: 1px solid #222;*/
    position: relative;
    top: -1px;
    left: 20px;
}
 }
 #styl_wrd{
     word-break: break-all;
 }


                                          </style>
</head><!--<![endif]-->

<body class="no-scroll" >
<!-- WIDE DESKTOP -->
<div id="wide-desktop">
    <!-- LOADER -->
   <?php 
   include ("header.php");
   ?>
    <!-- END HEADER -->

    <div class="clearfix"></div>
    <section class="ourvehicle padding-80" id="vehicle_section">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                  <br><br><h4 class="primary-title">My  <small> Bikes</small><i>Bookings</i></h4>
                </div>
                 <div class="col-md-12">
                    <!-- NAV TABS -->
                    <ul class="nav nav-tabs pull-right" data-animation="true" data-animation-class="bounceInDown" role="tablist">
                        <li role="presentation" class="active"><a href="#Tirupati" aria-controls="cab" role="tab" data-toggle="tab">Bike Orders</a></li>
                        <li role="presentation"><a href="#Nellore" aria-controls="bike" role="tab" data-toggle="tab">Car Orders</a></li>
                        <li role="presentation"><a href="#Vijayawada" aria-controls="bicycle" role="tab" data-toggle="tab">Bicycle Orders</a></li>
                    </ul>
                </div>
               
            </div>
            <div class="row">
                <!-- TAB PANES  -->
                <div class="tab-content">
                    <!-- TAXI TABPANEL -->
                    <div role="tabpanel" class="tab-pane active" id="Tirupati">
                         <div class="row">
              <div class="col-md-12">
                 <div class="boxaccount " ><!-- box Starts -->
                     <div class="row">
                     
                    <div class="col-md-12">
                      <div class="container">
  <div class="accordion-option">
  
    <div class="userBooking__orderTitle userBooking__orderTitleHead"> 
    <span class="userBooking__orderListItem"><b>Booking Date</b></span> 
    <span class="userBooking__orderListItem"><b>Order ID</b></span> 
    <span class="userBooking__orderListItem"><b>Amount</b></span>
    <span class="userBooking__orderListItem"><b>Pickup</b></span>
    <span class="userBooking__orderListItem"><b>Dropoff</b></span> 
  </div>
  <div class="clearfix"></div>
   <?php
				        
                    $query = "SELECT * FROM customers_orders where customer_id=$uid ";
                    $result = mysqli_query($db, $query);
                    if (mysqli_num_rows($result) > 0) {

                        while ($row = mysqli_fetch_array($result)) {
                               $id=$row["id"]; 
                                $vehicle_id=$row["vehicle_id"];
                            $loc=$row["location"]; 
                             $hel=$row["hel"]; 
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



                          ?>  
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingOne" >
        <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne_<?php echo $id; ?>" aria-expanded="true" aria-controls="collapseOne" >
          <div class="userBooking__orderTitle" > 
          <span class="userBooking__orderListItem ng-binding" id="styl_wrd"><?php echo $row["order_date"]; ?></span>
          <span class="userBooking__orderListItem ng-binding" id="styl_wrd"><?php echo $row["razorpay_order_id"]; ?></span>
          <span class="userBooking__orderListItem"> 
          <span  class="ng-binding" id="styl_wrd"><i class="fa fa-inr"></i> <?php echo $row["amount"]; ?></span>  </span> 
          <span class="userBooking__orderListItem ng-binding" id="styl_wrd"><?php echo $row["pick_datetime"]; ?></span>
          <span class="userBooking__orderListItem ng-binding" id="styl_wrd"><?php echo $row["drop_datetime"]; ?></span> <span class="userBooking__orderListItem">  </span> </div>
        </a>
      </h4>
      </div>
      <div id="collapseOne_<?php echo $id; ?>" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">
          <div class="row orderAccordion__pickUpTitle" ng-show="!alldatainside.twsId"><b>Vehicle Details</b></div>
          <div class="insidepart">
              <div class="imgpart">
                  
                  <?php
                
                  $get_customer = "select * from products WHERE id='$vehicle_id'";
    $run_customer = mysqli_query($db, $get_customer);
    while($row1 = mysqli_fetch_array($run_customer)){
    $product_img = $row1['product_img'];
    ?>
                  <a href="#"><img src="admin_area/product_images/<?php echo $product_img; ?>"></a>
                  <?php } ?>
              </div>
              <div class="prd-detiles">
                  <div class="media-body orderAccordion__mediaBody visible-xs-inline-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"> <h4 class="media-heading ng-binding"><?php echo $row["vehicle_title"]; ?>&nbsp;&nbsp;</h4> <span class="orderAccordion__IndvItemRegNo ng-binding">(<?php echo $location; ?>)</span> <p class="comment myTextMuted_light ng-binding"><i class="fa fa-inr"></i> <?php echo $row["rent"]; ?> Rent &nbsp;</p> </div>
                  <div class="orderAccordion__pickUpContent ng-binding"><i class="fa fa-map-marker"></i><b> PICK-UP LOCATION :</b> <?php echo $row["pick_location"]; ?> </div>
                     <div class="orderAccordion__pickUpContent ng-binding"><i class="fa fa-map-marker"></i><b> DROP-OFF LOCATION :</b> <?php echo $row["drop_location"]; ?></div>
<div class="orderAccordion__pickUpContent ng-binding"><i class="fa fa-phone"></i>&nbsp;<?php echo $name; ?>&nbsp;(<?php echo $mobile; ?>)</div>
              </div>
              
        <div class="col-md-12"> 
        <div class="orderAccordion__orderDetails2 row"> 
        <div class="orderAccordion__titleMain col-md-12">Fare Details</div> 
        <div class="orderAccordion__chargesAllType col-md-12"> 
        <div class="row"> 
        <div class="orderAccordion__totalRent col-xs-6">Total Rent</div> 
        <div class="orderAccordion__totalRentAmount col-xs-6 ng-binding"><i class="fa fa-inr"></i> <?php echo $row["rent"]; ?> </div>
         <?php if($hel==2){ ?>
         <div class="orderAccordion__totalRent col-xs-6">Extra Helmet</div> 
        <div class="orderAccordion__totalRentAmount col-xs-6 ng-binding"><i class="fa fa-inr"></i> 50.00 </div>
         <?php }?>
         </div> 
       <div class="row panel custmPanel"> <div class="rowCollaps clearfix" > 
        <div class="orderAccordion__totalRent col-xs-6">CGST&nbsp;<span class="text-muted ng-binding">(2.5%)</span> </div> 
        <div class="orderAccordion__totalRentAmount col-xs-6 ng-binding"><i class="fa fa-inr"></i> <?php echo $row["tax"]; ?></div> <ul class="col-md-12 marRmv"><li  class="row marRmv ng-scope ng-hide"  style=""> 
        <div class="orderAccordion__subChargesTitle col-xs-6 ng-binding">SGST&nbsp;<span class="text-muted ng-binding">(2.5%)</span></div> 
        <div class="orderAccordion__subChargesAmount col-xs-6 ng-binding"><i class="fa fa-inr"></i> <?php echo $row["tax1"]; ?></div> 
        
        </li> </ul> </div> </div>  <div class="dash"></div>
        <div class="row"> 
        <div class="orderAccordion__totalRent pd_amt col-xs-6">Total Amount &nbsp;<span  class="ng-scope"></span></div> 
        <div class="orderAccordion__totalRentAmount pd_amt col-xs-6 ng-binding"><i class="fa fa-inr"></i> <?php echo $row["amount"]; ?></div> </div> 
        
        </div> 
        </div> 
        </div> 
         </div> 
        
             </div>
             
          </div>
          
      </div>
   	<?php
                        }}
                        ?>
  </div>
</div>
    </div>
  </div>
              </div><!-- box Ends -->
              </div>      
            </div>
                     </div>
                    <!-- TAXI TABPANEL END -->
                    <div role="tabpanel" class="tab-pane" id="Nellore">
                         <div class="row">
              <div class="col-md-12">
                 <div class="boxaccount " ><!-- box Starts -->
                     <div class="row">
                     
                    <div class="col-md-12">
                      <div class="container">
  <div class="accordion-option">
  
    <div class="userBooking__orderTitle userBooking__orderTitleHead"> 
    <span class="userBooking__orderListItem1"><b>Booking Date</b></span> 
    <span class="userBooking__orderListItem"><b>Order ID</b></span> 
    <span class="userBooking__orderListItem"><b>Amount</b></span>
    <span class="userBooking__orderListItem"><b>Pickup</b></span>
    <span class="userBooking__orderListItem"><b>Dropoff</b></span> 
  </div>
  <div class="clearfix"></div>
   <?php
				        
                    $query = "SELECT * FROM cars_orders where customer_id=$uid ";
                    $result = mysqli_query($db, $query);
                    if (mysqli_num_rows($result) > 0) {

                        while ($row = mysqli_fetch_array($result)) {
                               $id=$row["id"]; 
                                $vehicle_id=$row["vehicle_id"];
                            $loc=$row["location"]; 
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



                          ?>  
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingOne" >
        <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne_<?php echo $id; ?>" aria-expanded="true" aria-controls="collapseOne" >
          <div class="userBooking__orderTitle" > 
          <span class="userBooking__orderListItem ng-binding"><?php echo $row["order_date"]; ?></span>
          <span class="userBooking__orderListItem ng-binding"><?php echo $row["razorpay_order_id"]; ?></span>
          <span class="userBooking__orderListItem"> 
          <span  class="ng-binding"><i class="fa fa-inr"></i> <?php echo $row["amount"]; ?></span>  </span> 
          <span class="userBooking__orderListItem ng-binding"><?php echo $row["pick_datetime"]; ?></span>
          <span class="userBooking__orderListItem ng-binding"><?php echo $row["drop_datetime"]; ?></span> <span class="userBooking__orderListItem">  </span> </div>
        </a>
      </h4>
      </div>
      <div id="collapseOne_<?php echo $id; ?>" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">
          <div class="row orderAccordion__pickUpTitle" ng-show="!alldatainside.twsId"><b>Vehicle Details</b></div>
          <div class="insidepart">
              <div class="imgpart">
                  <?php
                  $get_customer = "select * from cars WHERE id='$vehicle_id'";
    $run_customer = mysqli_query($db, $get_customer);
    while($row1 = mysqli_fetch_array($run_customer)){;
    $product_img = $row1['product_img'];
    ?>
                  <a href="#"><img src="admin_area/product_images/<?php echo $product_img; ?>"></a>
                  <?php } ?>
              </div>
              <div class="prd-detiles">
                  <div class="media-body orderAccordion__mediaBody visible-xs-inline-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"> <h4 class="media-heading ng-binding"><?php echo $row["vehicle_title"]; ?>&nbsp;&nbsp;</h4> <span class="orderAccordion__IndvItemRegNo ng-binding">(<?php echo $location; ?>)</span> <p class="comment myTextMuted_light ng-binding"><i class="fa fa-inr"></i> <?php echo $row["rent"]; ?> Rent &nbsp;</p> </div>
                  <div class="orderAccordion__pickUpContent ng-binding"><i class="fa fa-map-marker"></i><b> PICK-UP LOCATION :</b> <?php echo $row["pick_location"]; ?> </div>
                     <div class="orderAccordion__pickUpContent ng-binding"><i class="fa fa-map-marker"></i><b> DROP-OFF LOCATION :</b> <?php echo $row["drop_location"]; ?></div>
<div class="orderAccordion__pickUpContent ng-binding"><i class="fa fa-phone"></i>&nbsp;<?php echo $name; ?>&nbsp;(<?php echo $mobile; ?>)</div>
              </div>
              
        <div class="col-md-12"> 
        <div class="orderAccordion__orderDetails2 row"> 
        <div class="orderAccordion__titleMain col-md-12">Fare Details</div> 
        <div class="orderAccordion__chargesAllType col-md-12"> 
        <div class="row"> 
        <div class="orderAccordion__totalRent col-xs-6">Total Rent</div> 
        <div class="orderAccordion__totalRentAmount col-xs-6 ng-binding"><i class="fa fa-inr"></i> <?php echo $row["rent"]; ?> </div> </div> 
       <div class="row panel custmPanel"> <div class="rowCollaps clearfix" > 
        <div class="orderAccordion__totalRent col-xs-6">CGST&nbsp;<span class="text-muted ng-binding">(2.5%)</span> </div> 
        <div class="orderAccordion__totalRentAmount col-xs-6 ng-binding"><i class="fa fa-inr"></i> <?php echo $row["tax"]; ?></div> <ul class="col-md-12 marRmv"><li  class="row marRmv ng-scope ng-hide"  style=""> 
        <div class="orderAccordion__subChargesTitle col-xs-6 ng-binding">SGST&nbsp;<span class="text-muted ng-binding">(2.5%)</span></div> 
        <div class="orderAccordion__subChargesAmount col-xs-6 ng-binding"><i class="fa fa-inr"></i> <?php echo $row["tax1"]; ?></div> </li> </ul> </div> </div>  <div class="dash"></div> <div class="row"> 
        <div class="orderAccordion__totalRent pd_amt col-xs-6">Total Amount &nbsp;<span  class="ng-scope"></span></div> 
        <div class="orderAccordion__totalRentAmount pd_amt col-xs-6 ng-binding"><i class="fa fa-inr"></i> <?php echo $row["amount"]; ?></div> </div> 
        
        </div> 
        </div> 
        </div> 
         </div> 
        
             </div>
             
          </div>
          
      </div>
   	<?php
                        }}
                        ?>
  </div>
</div>
    </div>
  </div>
              </div><!-- box Ends -->
              </div>      
            </div>
                 
                    </div>
                    <div role="tabpanel" class="tab-pane" id="Vijayawada">
                         <div class="row">
              <div class="col-md-12">
                 <div class="boxaccount " ><!-- box Starts -->
                     <div class="row">
                     
                    <div class="col-md-12">
                      <div class="container">
  <div class="accordion-option">
  
    <div class="userBooking__orderTitle userBooking__orderTitleHead"> 
    <span class="userBooking__orderListItem"><b>Booking Date</b></span> 
    <span class="userBooking__orderListItem"><b>Order ID</b></span> 
    <span class="userBooking__orderListItem"><b>Amount</b></span>
    <span class="userBooking__orderListItem"><b>Pickup</b></span>
    <span class="userBooking__orderListItem"><b>Dropoff</b></span> 
  </div>
  <div class="clearfix"></div>
   <?php
				        
                    $query = "SELECT * FROM bicycles_orders where customer_id=$uid ";
                    $result = mysqli_query($db, $query);
                    if (mysqli_num_rows($result) > 0) {

                        while ($row = mysqli_fetch_array($result)) {
                               $id=$row["id"]; 
                                $vehicle_id=$row["vehicle_id"];
                            $loc=$row["location"]; 
                           
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


                          ?>  
    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingOne" >
        <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne_<?php echo $id; ?>" aria-expanded="true" aria-controls="collapseOne" >
          <div class="userBooking__orderTitle" > 
          <span class="userBooking__orderListItem ng-binding"><?php echo $row["order_date"]; ?></span>
          <span class="userBooking__orderListItem ng-binding"><?php echo $row["razorpay_order_id"]; ?></span>
          <span class="userBooking__orderListItem"> 
          <span  class="ng-binding"><i class="fa fa-inr"></i> <?php echo $row["amount"]; ?></span>  </span> 
          <span class="userBooking__orderListItem ng-binding"><?php echo $row["pick_datetime"]; ?></span>
          <span class="userBooking__orderListItem ng-binding"><?php echo $row["drop_datetime"]; ?></span> <span class="userBooking__orderListItem">  </span> </div>
        </a>
      </h4>
      </div>
      <div id="collapseOne_<?php echo $id; ?>" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">
          <div class="row orderAccordion__pickUpTitle" ng-show="!alldatainside.twsId"><b>Vehicle Details</b></div>
          <div class="insidepart">
              <div class="imgpart">
                  <?php
                  $get_customer = "select * from bicycles WHERE id='$vehicle_id'";
    $run_customer = mysqli_query($db, $get_customer);
    while($row1 = mysqli_fetch_array($run_customer)){;
    $product_img = $row1['product_img'];
    ?>
                  <a href="#"><img src="admin_area/product_images/<?php echo $product_img; ?>"></a>
                  <?php } ?>
              </div>
              <div class="prd-detiles">
                  <div class="media-body orderAccordion__mediaBody visible-xs-inline-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"> <h4 class="media-heading ng-binding"><?php echo $row["vehicle_title"]; ?>&nbsp;&nbsp;</h4> <span class="orderAccordion__IndvItemRegNo ng-binding">(<?php echo $location; ?>)</span> <p class="comment myTextMuted_light ng-binding"><i class="fa fa-inr"></i> <?php echo $row["rent"]; ?> Rent &nbsp;</p> </div>
                  <div class="orderAccordion__pickUpContent ng-binding"><i class="fa fa-map-marker"></i><b> PICK-UP LOCATION :</b> <?php echo $row["pick_location"]; ?> </div>
                     <div class="orderAccordion__pickUpContent ng-binding"><i class="fa fa-map-marker"></i><b> DROP-OFF LOCATION :</b> <?php echo $row["drop_location"]; ?></div>
<div class="orderAccordion__pickUpContent ng-binding"><i class="fa fa-phone"></i>&nbsp;<?php echo $name; ?>&nbsp;(<?php echo $mobile; ?>)</div>
              </div>
              
        <div class="col-md-12"> 
        <div class="orderAccordion__orderDetails2 row"> 
        <div class="orderAccordion__titleMain col-md-12">Fare Details</div> 
        <div class="orderAccordion__chargesAllType col-md-12"> 
        <div class="row"> 
        <div class="orderAccordion__totalRent col-xs-6">Total Rent</div> 
        <div class="orderAccordion__totalRentAmount col-xs-6 ng-binding"><i class="fa fa-inr"></i> <?php echo $row["rent"]; ?> </div> </div> 
       <div class="row panel custmPanel"> <div class="rowCollaps clearfix" > 
        <div class="orderAccordion__totalRent col-xs-6">CGST&nbsp;<span class="text-muted ng-binding">(2.5%)</span> </div> 
        <div class="orderAccordion__totalRentAmount col-xs-6 ng-binding"><i class="fa fa-inr"></i> <?php echo $row["tax"]; ?></div> <ul class="col-md-12 marRmv"><li  class="row marRmv ng-scope ng-hide"  style=""> 
        <div class="orderAccordion__subChargesTitle col-xs-6 ng-binding">SGST&nbsp;<span class="text-muted ng-binding">(2.5%)</span></div> 
        <div class="orderAccordion__subChargesAmount col-xs-6 ng-binding"><i class="fa fa-inr"></i> <?php echo $row["tax1"]; ?></div> </li> </ul> </div> </div>  <div class="dash"></div> <div class="row"> 
        <div class="orderAccordion__totalRent pd_amt col-xs-6">Total Amount &nbsp;<span  class="ng-scope"></span></div> 
        <div class="orderAccordion__totalRentAmount pd_amt col-xs-6 ng-binding"><i class="fa fa-inr"></i> <?php echo $row["amount"]; ?></div> </div> 
        
        </div> 
        </div> 
        </div> 
         </div> 
        
             </div>
             
          </div>
          
      </div>
   	<?php
                        }}
                        ?>
  </div>
</div>
    </div>
  </div>
              </div><!-- box Ends -->
              </div>      
            </div>
                 
                    </div>
                    
                    <!-- SUV TABPANEL END -->
                </div>
            </div>
        </div>
    </section>
    <!-- BOOK CAB-->
  
    <div class="clearfix"></div>
    <!-- PASSANGER FEED END-->
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--<script src="js/jquery-3.2.1.min.js"></script>-->
<!-- jQuery Validation -->
<script src="js/jquery.validate.min.js"></script>
<!-- Google Map API JS -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=true&language=en&libraries=places"></script>
 <script>
                                           //preview of image before uploading
                                               var loadFile = function(event) {
                                               var output = document.getElementById('output');
                                                output.src = URL.createObjectURL(event.target.files[0]);
                                                };
                                                 var loadFile1 = function(event) {
                                               var output1 = document.getElementById('output1');
                                                output1.src = URL.createObjectURL(event.target.files[0]);
                                                };
                                                 var loadFile2 = function(event) {
                                               var output2 = document.getElementById('output2');
                                                output2.src = URL.createObjectURL(event.target.files[0]);
                                                };
                                                 var loadFile3 = function(event) {
                                               var output3 = document.getElementById('output3');
                                                output3.src = URL.createObjectURL(event.target.files[0]);
                                                };
                                          </script>
                                          <?php
                                           if(isset($_POST['imagesubmit'])) {
        $update_id = $customer_id;

        $c_image = $_FILES['c_image']['name'];

        $c_image_tmp = $_FILES['c_image']['tmp_name'];
        if(empty($c_image)){

        $c_image = $new_customer_image;

        }

        move_uploaded_file($c_image_tmp,"images/$c_image");
        
         $c_image1 = $_FILES['c_image1']['name'];

        $c_image_tmp1 = $_FILES['c_image1']['tmp_name'];
        if(empty($c_image1)){

$c_image1 = $new_customer_image1;

}

        move_uploaded_file($c_image_tmp1,"images/$c_image1");
        
         $c_image2 = $_FILES['c_image2']['name'];

        $c_image_tmp2 = $_FILES['c_image2']['tmp_name'];
        if(empty($c_image2)){

$c_image2 = $new_customer_image2;

}

        move_uploaded_file($c_image_tmp2,"images/$c_image2");
     $c_image3 = $_FILES['c_image3']['name'];

        $c_image_tmp3 = $_FILES['c_image3']['tmp_name'];
        if(empty($c_image3)){

$c_image3 = $new_customer_image3;

}

        move_uploaded_file($c_image_tmp3,"images/$c_image3");
            
        $update_c = "update users set image='$c_image',image1='$c_image1',image2='$c_image2',image3='$c_image3' WHERE uid='$update_id'";
        $run_c = mysqli_query($db, $update_c);
        if ($run_c) {
            // echo "<script>alert('Your account has been updated')</script>";
            echo "<script>window.location='profile.php'</script>";
        }
    }
?>
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

<!--    });-->
<!--</script>-->
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

  <!--Modals Start -->
   <!-- [ Modal #1 ]  Login Modal-->
  <div class="modal fade" id="demo-1" tabindex="-1">
    <div class="modal-dialog">
     <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal"><i class="icon-xs-o-md"></i></button>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center caps"><strong>Login</strong></h4>
      </div>
       <div class="modal-body">
          <form class="log" id="loginForm1" method="post" >
             <div class="display-error" style="display: none;"></div>

                                            <div class="form-group ">
                                                <label >Email</label>
                                                <input type="email" class="form-control" name="lemail" placeholder="Enter Registered E-mail" style="border: 1px solid black;" required >
                                                
                                               
                                            </div>
                                            <div class="form-group ">
                                                <label>Password</label>
                                                <input type="password" class="form-control" name="lpassword"  id="Login1" placeholder="Enter Your Password" style="border: 1px solid black" required >
                                                <label ><input type="checkbox" class="logch" style=" " onclick="log1Function()"><span style="color: black" class="logsp">&nbsp;Show Password</span></label>
                                            </div>
                                             <div class="form-group ">
                                                 <a href="" data-toggle="modal" data-target="#demo-3"  data-dismiss="modal" style="color:black">Forgot Password?</a>
                                             </div>

                                           
                                       
            <button type="submit" class="btn btn-primary "value="sign In">Login</button><h5 style="display:inline;font-weight:bold"> OR </h5>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#demo-2" style="display:inline" data-dismiss="modal">Create New Account</button>
            </form>
              </div>
     </div>
    </div>
  </div>

  <!-- [ Modal #2 ] Register Modal-->
   <div class="modal fade"  id="demo-2" tabindex="-1">
    <div class="modal-dialog">
     <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal"><i class="icon-xs-o-md"></i></button>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center caps"><strong>Create New Account</strong></h4>
      </div>
      <div class="modal-body">
         <form class="log" id="registFrm" method="post">
              

                <div class="form-group regnam">
                    <label>Name</label>
                    <input type="text" class="form-control" name="rname" placeholder="Enter Your Name" style="border: 1px solid black;" required>
                </div>

                <div class="form-group regmail">
                    <label>Email</label>
                    <input type="email" class="form-control el" name="remail" placeholder="Enter Valid E-mail"style="border: 1px solid black;" required>
                </div>
                <div class="form-group regpwd">
                    <label>Password</label>
                    <input type="password" class="form-control pd" name="rpassword" id="Register" placeholder="Enter Password" style=" border: 1px solid black"required >
                    <label class="regsp"><input type="checkbox" class="regch" onclick="regFunction()"><span class="regsp" style="color: black">&nbsp;Show Password</span></label>
                </div>
                <div class="form-group regphn">
                    <label>Phone Number</label>
                    <input type="text" class="form-control" name="rmobile"  maxlength="10" pattern="[0-9]{10}" placeholder="Enter Mobile Number" style="border: 1px solid black" required>
                </div>


                
              <div class="form-group text-center">
            <button type="submit" class="btn  btn-primary" >Register</button>
            </div>
            </form>
            </div>
     </div>
    </div>
  </div>
  <!-- [ Modal #3 ] Forgot Password Modal-->
   <div class="modal fade" id="demo-3" tabindex="-1">
    <div class="modal-dialog">
     <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal"><i class="icon-xs-o-md"></i></button>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center caps"><strong> Forgot Password</strong></h4>
      </div>
      <div class="modal-body">
        <form action='forgetPassword.php' method='post'>
            <div class="form-group ">
                  <label >Email</label>
                  <input type="email" class="form-control" name="email" placeholder="Enter Registered E-mail" style="border: 1px solid black;" required >
            </div>
            <div class="form-group text-center">
              <button type="submit" class="btn btn-primary" name="frgotsubmit" >Submit</button>
              </div>

       </form>
            </div>
     </div>
    </div>
  </div>     
 <!--Modals End-->
 <div class="modal fade" id="demo-4" tabindex="-1">
    <div class="modal-dialog">
     <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal"><i class="icon-xs-o-md"></i></button>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center caps"> Partner With Us</h4>
      </div>
       <div class="modal-body">
          <form class="log"  method="post" >
             <div class="display-error" style="display: none;"></div>

                                           <div class="form-group regnam">
                    <label>Name</label>
                    <input type="text" class="form-control" name="rname" placeholder="Enter Your Name" style="border: 1px solid black;" required>
                </div>

                <div class="form-group regmail">
                    <label>Email</label>
                    <input type="email" class="form-control el" name="remail" placeholder="Enter Valid E-mail"style="border: 1px solid black;" required>
                </div>
                    <div class="form-group regphn">
                    <label>Phone Number</label>
                    <input type="text" class="form-control" name="rmobile"  maxlength="10" pattern="[0-9]{10}" placeholder="Enter Mobile Number" style="border: 1px solid black" required>
                </div>                       
                                           
               <div class="form-group text-center">                         
            <button type="submit" class="btn btn-primary">Submit</button> </div> </form>
              </div>
     </div>
    </div>
  </div>
<!--Login Form Script Starts -->
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
<!--Login Form Script Ends -->

<!--Signup Form Script Starts -->
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
<!--Signup Form Script Ends -->

    <script>$(function () {
  $('.datetimepicker').datetimepicker();
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
    
    
    $(document).ready(function() {

  $(".toggle-accordion").on("click", function() {
    var accordionId = $(this).attr("accordion-id"),
      numPanelOpen = $(accordionId + ' .collapse.in').length;
    
    $(this).toggleClass("active");

    if (numPanelOpen == 0) {
      openAllPanels(accordionId);
    } else {
      closeAllPanels(accordionId);
    }
  })

  openAllPanels = function(aId) {
    console.log("setAllPanelOpen");
    $(aId + ' .panel-collapse:not(".in")').collapse('show');
  }
  closeAllPanels = function(aId) {
    console.log("setAllPanelclose");
    $(aId + ' .panel-collapse.in').collapse('hide');
  }
     
});
   

</script>
</body>
</html>