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
      $uid = $row['uid'];

}
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $pickupdatetime = $_GET['pickdatetime'];
    $dropdatetime = $_GET['dropdatetime'];
    $ploc = $_GET['pickaddress'];
    $dloc= $_GET['dropaddress'];
    $get_customer = "select * from products WHERE id='$id'";
    $run_customer = mysqli_query($db, $get_customer);
    $row = mysqli_fetch_array($run_customer);
    $price = $row['price'];
    $product_title = $row['product_title'];
    $product_img = $row['product_img'];
    $p_kmlimit = $row['kmlimit'];
    $p_excess = $row['excess'];
    $location=$_GET['location']; 
}
if(isset($_POST['couponsubmit'])){
    $coupon_code=$_POST['coupon'];

$query=mysqli_query($db,"select * from coupons where coupon='$coupon_code' ");
$row=mysqli_fetch_array($query);
if (mysqli_num_rows($query)>0){
      $code=$row['offer'];
    $offer=$code/100;
    $error="Promocode applied successfully ";
}else{
     $error1="Invalid Promocode ";
}
}
?><?php
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
                                   $difference = abs($endtimestamp - $starttimestamp)/(3600);
                                   return $difference;
                               }
                            
                                   $hours_difference = differenceInHours($d1,$d2);
                                       if($hours_difference<=10){
                                 $calprice = $hours_difference*($price/10);
                                $CGST=$calprice*(2.5/100);
                                $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>10 && $hours_difference<=24){
                                       $hours_difference=10;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>24 && $hours_difference<=34){
                                       $hours_difference=$hours_difference-14;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>34 && $hours_difference<=48){
                                       $hours_difference=20;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>48 && $hours_difference<=58){
                                       $hours_difference=$hours_difference-24;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>58 && $hours_difference<=72){
                                       $hours_difference=30;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>72 && $hours_difference<=82){
                                       $hours_difference=$hours_difference-34;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>82 && $hours_difference<=96){
                                       $hours_difference=40;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>96 && $hours_difference<=106){
                                       $hours_difference=$hours_difference-44;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>106 && $hours_difference<=120){
                                       $hours_difference=50;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>120 && $hours_difference<=130){
                                       $hours_difference=$hours_difference-54;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>130 && $hours_difference<=144){
                                       $hours_difference=60;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>144 && $hours_difference<=154){
                                       $hours_difference=$hours_difference-64;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>154 && $hours_difference<=168){
                                       $hours_difference=70;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>168 && $hours_difference<=178){
                                       $hours_difference=$hours_difference-74;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>178 && $hours_difference<=192){
                                       $hours_difference=80;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>192 && $hours_difference<=202){
                                       $hours_difference=$hours_difference-84;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>202 && $hours_difference<=216){
                                       $hours_difference=90;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>216 && $hours_difference<=226){
                                       $hours_difference=$hours_difference-94;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>226 && $hours_difference<=240){
                                       $hours_difference=100;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>240 && $hours_difference<=250){
                                       $hours_difference=$hours_difference-104;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>250 && $hours_difference<=264){
                                       $hours_difference=110;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>264 && $hours_difference<=274){
                                       $hours_difference=$hours_difference-114;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>274 && $hours_difference<=288){
                                       $hours_difference=120;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>288 && $hours_difference<=298){
                                       $hours_difference=$hours_difference-124;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>298 && $hours_difference<=312){
                                       $hours_difference=130;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>312 && $hours_difference<=322){
                                       $hours_difference=$hours_difference-134;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>322 && $hours_difference<=336){
                                       $hours_difference=140;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>336 && $hours_difference<=346){
                                       $hours_difference=$hours_difference-144;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>346 && $hours_difference<=360){
                                       $hours_difference=150;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>360 && $hours_difference<=370){
                                       $hours_difference=$hours_difference-154;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>370 && $hours_difference<=384){
                                       $hours_difference=160;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>384 && $hours_difference<=394){
                                       $hours_difference=$hours_difference-164;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>394 && $hours_difference<=408){
                                       $hours_difference=170;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>408 && $hours_difference<=418){
                                       $hours_difference=$hours_difference-174;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>418 && $hours_difference<=432){
                                       $hours_difference=180;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>432 && $hours_difference<=442){
                                       $hours_difference=$hours_difference-184;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>442 && $hours_difference<=456){
                                       $hours_difference=190;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>456 && $hours_difference<=466){
                                       $hours_difference=$hours_difference-194;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>466 && $hours_difference<=480){
                                       $hours_difference=200;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>480 && $hours_difference<=490){
                                       $hours_difference=$hours_difference-204;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>490 && $hours_difference<=504){
                                       $hours_difference=210;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>504 && $hours_difference<=514){
                                       $hours_difference=$hours_difference-214;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>514 && $hours_difference<=528){
                                       $hours_difference=220;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>528 && $hours_difference<=538){
                                       $hours_difference=$hours_difference-224;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>538 && $hours_difference<=552){
                                       $hours_difference=230;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>552 && $hours_difference<=562){
                                       $hours_difference=$hours_difference-234;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>562 && $hours_difference<=576){
                                       $hours_difference=240;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>576 && $hours_difference<=586){
                                       $hours_difference=$hours_difference-244;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>586 && $hours_difference<=600){
                                       $hours_difference=250;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>600 && $hours_difference<=610){
                                       $hours_difference=$hours_difference-254;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>610 && $hours_difference<=624){
                                       $hours_difference=260;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>624 && $hours_difference<=634){
                                       $hours_difference=$hours_difference-264;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>634 && $hours_difference<=648){
                                       $hours_difference=270;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>648 && $hours_difference<=658){
                                       $hours_difference=$hours_difference-274;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>658 && $hours_difference<=672){
                                       $hours_difference=280;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>672 && $hours_difference<=682){
                                       $hours_difference=$hours_difference-284;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>682 && $hours_difference<=696){
                                       $hours_difference=290;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>696 && $hours_difference<=706){
                                       $hours_difference=$hours_difference-294;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>706 && $hours_difference<=720){
                                       $hours_difference=300;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>720 && $hours_difference<=730){
                                       $hours_difference=$hours_difference-304;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>730 && $hours_difference<=744){
                                       $hours_difference=310;
                                        $calprice = $hours_difference*($price/10);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }else if($hours_difference>744){
                                      
                                        $calprice = $hours_difference*($price/12);
                                        $CGST=$calprice*(2.5/100);
                                        $SGST=$calprice*(2.5/100);
                                   }
                              
                              
                              
                              
                                 $ccalprice=number_format($calprice,1);
                                 $cCGST=number_format($CGST,1);
                                 $cSGST=number_format($SGST,1);
                         //Removing Operater
                                 $c_calprice = str_replace( ',', '',  $ccalprice );
                                 $c_CGST = str_replace( ',', '', $cCGST );
                                 $c_SGST = str_replace( ',', '', $cSGST );
                                 if(!isset($_POST['couponsubmit'])){
                                        $tol_amount=$c_calprice+$c_CGST+$c_SGST+50;
                                 }else{
                                $tol_amountc=$c_calprice+$c_CGST+$c_SGST+50;
                                $tol_amount=$tol_amountc-($offer*$tol_amountc);
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
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <!-- style css -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

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
         .styl_pd{
            padding:10px;
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
    <section class="bookcab padding-80" id="bookcab" style="margin-top:50px" >
        <div class="container">
           
             <div class="row">
               <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 styl_pd"></div>
               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 styl_pd">
                   <div class="card"  id="card_check" >
                      <div class="card-header" id="check_out">SUMMARY</div>
                      <div class="card-body">
                         <h5 class="text-center"><?php echo $product_title;?><br>
                    <img class="text-center" id="img_check" src="admin_area/product_images/<?php echo $product_img;?>"></h5>
                    <div class="container-fluid" >
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 text-center">
                                <h6 style="margin-top: 12px;"><?php echo $pickupdatetime ;?> 
                                </h6>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center" style="border-radius: 5px;padding: 3px">
                                <h5 style="margin-top: 5px;background-color: black;color: white;border-radius: 5px;padding: 3px"> TO</h5>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 text-center" >
                                <h6 style="margin-top: 12px;"><?php echo $dropdatetime  ;?></h6></div>
                        </div>
                    </div>
                     
                    <h6 class="text-center"><b>PICK UP ADDRESS :</b><?php echo $ploc;?> </h6>
                    <h6 class="text-center"><b>DROPOFF ADDRESS :</b><?php echo $dloc;?> </h6><hr id="hr_check" >
                    <div class="container-fluid" > 
                     <div class="row" > 
                     <div class="col-lg-10 col-md-10 col-sm-8 col-xs-8 helimets">
                        <label>Total Price </label>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
                        <h6 style="float:right"><b><i class="fa fa-inr"></i><?php echo $price  ;?></b></h6></div>
   
                       </div>
                    <div class="row" >
                        
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-8 helimets">
                        <label>Number of Helimet(s)</label>
                        </div>
                         <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 text-center">
                       <form action="booking.php?pick_loc=<?php echo $ploc; ?>&drop_loc=<?php echo $dloc; ?>&id=<?php echo $id; ?>&pick_datetime=<?php echo $pickupdatetime; ?>&drop_datetime=<?php echo $dropdatetime; ?>&helid=1&location=<?php echo $location; ?>" method="POST">

                                
                                <select name="myselect" id="myselect" onchange="this.form.submit()">
                                    <option  value="2">2</option>
                                    <option  value="1">1</option>

                                </select>
                                 
                                </form>

                              
                        </div></div>
                       <div class="row" >
                           <div class="col-lg-10 col-md-10 col-sm-8 col-xs-8 "> 
                        <label>Km Limit </label>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
                        <h6 style="float:right"><?php echo $p_kmlimit;?> km</h6></div>
   
                         </div>
                       <div class="row" >
                           <div class="col-lg-10 col-md-10 col-sm-8 col-xs-8 "> 
                        <label>Excess Km Charges </label>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
                        <h6 style="float:right"><i class="fa fa-inr"></i><?php echo $p_excess;?>/km</h6></div>
   
                       </div>
                      
                        </div>
                    </div>
                  
                     
                   </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 styl_pd">
                    <div class="card" id="card_check">
                      <div class="card-header" id="check_out">Have Coupon Code</div>
                      <div class="card-body" style="margin:10px">
                           <form action="" method="post">
                                <div class="row">
                                   <div class="col-lg-9 col-md-8 col-sm-8 col-xs-8">
                                      <?php  if(!isset($_POST['couponsubmit'])){ ?>
                                       <input name="coupon" placeholder="Enter Coupon Code" class="form-control"  style="text-transform: uppercase;" value="">
                                       <?php }else{ 
                                        $coupon_code=$_POST['coupon'];?>
                                        <input name="coupon" placeholder="Enter Coupon Code" class="form-control"  style="text-transform: uppercase;" value="<?php echo $coupon_code; ?>">
                                        <?php } ?>

                                    </div>
                                     <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                       <button type="submit" name="couponsubmit" class="btn btn-success">Apply</button>
                                       </div>
                                       </div>
                               </form>
                               <h6 style="color:green;"><?php echo "$error"; ?></h6> <h6 style="color:red;"><?php echo "$error1"; ?></h6>
                        </div>
                        </div>
                        <br>
                   <div class="card" id="card_check" >
                      <div class="card-header" id="check_out">CHECKOUT</div>
                      <div class="card-body" style="margin:10px">
                           <form action="" method="post">
                               
                       
                    <h6> Booking Fee<span style="float: right"><i class="fa fa-inr"></i>&nbsp; 
                    <?php 
                   
                    echo $c_calprice;
                   
                    ?>
                    </span></h6>
                       <div><h6>Extra Helimet<span style="float: right"><i class="fa fa-inr"></i>&nbsp; 50.0  </span></h6></div>
                    <h6> CGST<span style="float: right"><i class="fa fa-inr"></i>&nbsp; <?php echo $c_CGST;?></span></h6>
                    <h6> SGST<span style="float: right"><i class="fa fa-inr"></i>&nbsp; <?php echo $c_SGST;?></span></h6><hr  id="hr_check">
                   <?php if(!isset($_POST['couponsubmit'])){?>
                     <h5>Total Payable Amount <span style="float: right"><i class="fa fa-inr"></i>&nbsp; <?php echo $tol_amount; ?></span></h5>
                   <?php }if(isset($_POST['couponsubmit'])){
                    $coupon_code=$_POST['coupon'];
$query=mysqli_query($db,"select * from coupons where coupon='$coupon_code' ");
$row=mysqli_fetch_array($query);
if (mysqli_num_rows($query)>0){
    ?>
                    <h5>Total Amount <span style="float: right"><i class="fa fa-inr"></i>&nbsp; <?php echo $tol_amountc; ?></span></h5>
                    <h5>Offer(<?php echo $code; ?>%) <span style="float: right">- <i class="fa fa-inr"></i>&nbsp; <?php echo $offer*$tol_amountc; ?></span></h5><hr  id="hr_check">
                 <h5>Total Payable Amount <span style="float: right"><i class="fa fa-inr"></i>&nbsp; <?php echo $tol_amount; ?></span></h5>
<?php }else{ ?>
                 <h5>Total Payable Amount <span style="float: right"><i class="fa fa-inr"></i>&nbsp; <?php echo $tol_amount; ?></span></h5>

                  <?php }} ?> <h5 data-toggle='modal' data-target='#demo-p' style="float:left;font-weight:bold"><input type="checkbox"  id="isAgeSelected"  onclick="goFurther()"> I Agree with the terms and conditions</h5>
                   
                    </form>
                    
                  
                    <div class="row text-center">
                      <?php
                require('config.php');
                require('razorpay-php/Razorpay.php');
                use Razorpay\Api\Api;
                $api = new Api($keyId, $keySecret);
                $orderData = [
                    'receipt'         => 3456,
                    'amount'          =>$tol_amount * 100,
                    'currency'        => "INR",
                    'payment_capture' => 1
                ];
                $displayAmount = $amount = $orderData['amount'];
                $razorpayOrder = $api->order->create($orderData);
                $razorpayOrderId = $razorpayOrder['id'];
                 $_SESSION['razorpay_order_id'] = $razorpayOrderId;
                $_SESSION['id'] = $id;
                $_SESSION['uid'] = $uid;
                 $_SESSION['amount'] = $tol_amount;
                 $_SESSION['email'] = $email;
                 $_SESSION['contact'] = $mobile;
                 $_SESSION['name'] = $name;
                  $_SESSION['rent'] = $c_calprice;
                   $_SESSION['tax'] = $c_CGST;
                    $_SESSION['tax1'] = $c_SGST;
                 $_SESSION['product_title'] = $product_title;
                 $_SESSION['pick_location'] = $ploc;
                 $_SESSION['pick_datetime'] = $pickupdatetime;
                 $_SESSION['drop_location'] = $dloc;
                 $_SESSION['drop_datetime'] = $dropdatetime;
                  $_SESSION['location'] = $location;
                if ($displayCurrency !== 'INR') {
                    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
                    $exchange = json_decode(file_get_contents($url), true);
                    $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
                }
                $data = [
                    "key"               => $keyId,
                    "amount"            => $amount,
                    "name"              => "Journey Wheels Payment",
                    "description"       => "",
                    "image"             => "",
                    "prefill"           => [
                      "name"              => $name,
                        "email"             => $email,
                         "contact"           => $mobile,
                    ],
                    "notes"             => [
                         "Vehicle_Name"           => $product_title,
                         "Vehicle_Id"           => $id,
                         "pick_location"           => $ploc,
                         "pick_datetime"           => $pickupdatetime,
                         "drop_location"           => $dloc,
                         "drop_datetime"           => $dropdatetime,
                        "Location"           => $location,
                        "merchant_order_id" => "$razorpayOrderId",
                         
                    ],
                    "theme"             => [
                        "color"             => "#ffb735"
                    ],
                    "order_id"          => $razorpayOrderId,
                ];

                if ($displayCurrency !== 'INR')
                {
                    $data['display_currency']  = $displayCurrency;
                    $data['display_amount']    = $displayAmount;
                }

                $json = json_encode($data);
                 require("checkout/manual1.php");
            ?>
</div>
                    </div>
                      </div>
                   </div>
               </div>
            </div>
            
        </div>
    </section>
   <div class="modal fade" id="demo-p" tabindex="-1">
    <div class="modal-dialog">
     <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal"><i class="icon-xs-o-md"></i></button>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center caps"><strong>Terms & Conditions</strong></h4>
      </div>
       <div class="modal-body">
           <div class="ex3 text-justify">
            <ul>
             <li><i class="fa fa-hand-o-right" style="font-size:17px;"></i> Rider needs to present a valid Driving License at the time of picking up the vehicle. Original ID proof (Voter ID, Aadhaar Card or Passport) needs to be submitted at the time of pick up.</li>
             <li><i class="fa fa-hand-o-right" style="font-size:17px;"></i> If customer drives the bike above 150 km/day then Rs.2 excess Fee will be levied per Kilometer.</li> 
             <li><i class="fa fa-hand-o-right" style="font-size:17px;"></i> If the vehicle booked for 5 hrs it will have a limit of 65 kms for bike.</li>
             <li><i class="fa fa-hand-o-right" style="font-size:17px;"></i> Late Return fee would be Rs 100/hour plus hourly & daily basis rent.</li>
             <li><i class="fa fa-hand-o-right" style="font-size:17px;"></i> 1 Complimentary helmet will be provided.</li>
             <li><i class="fa fa-hand-o-right" style="font-size:17px;"></i> Fuel charges are not included.</li>
            </ul>
            <h5 class="text-center"><b>Kilometers limit perday/hours</b></h5>
            <ul>
                <li><i class="fa fa-hand-o-right" style="font-size:17px;"></i> A Limit of  150Kms/day   every Excess kilometer Rs. 2 (below 125cc)</li>
                <li><i class="fa fa-hand-o-right" style="font-size:17px;"></i> Above 125cc Rs 3 will be charged per kilometer.</li>
                <li><i class="fa fa-hand-o-right" style="font-size:17px;"></i> Above 180cc Rs 4 will be charged per kilometer.</li>
                <li><i class="fa fa-hand-o-right" style="font-size:17px;"></i> In case of damage to the Bike on rent due to accident/mishandling/carelessness, appropriate charges will be calculated by the vendor and the customer is liable to pay the same to the vendor along with the daily tariff until the bike is ready for renting again.</li>
            </ul>
         </div>
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
   
   <script>    
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
</script>  
 
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
                        alert('You have successfully login');
                        window.location='index.php';
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