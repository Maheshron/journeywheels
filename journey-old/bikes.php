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
    <meta name="description" content="JourneyWheels - The best bike rental company in Vijayawada, Tirupati, Vizag, Nellore and Rajahmundry. Having wide range of collection of bikes like Royal Enfields, KTM Duke, Aprilia, Honda Activa, TVS Jupiter, Yamaha FZ and Bajaj Pulsar.">
    <meta name="keywords" content="Bike Rentals, JourneyWheels, Rent a bike, bike rental company, collection of bikes, bike rental services, bike rental in vijayawada">
    <meta name="author" content="pxtheme-govindsaini">

    <!-- PAGE TITLE -->
    <title>Bike Rentals | JourneyWheels | Rent a bike</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <!-- style css -->

    <link rel="stylesheet" href="css/style.css">

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
    
    <!-- OUR VEHICEL -->
    <section class="ourvehicle padding-80" id="vehicle_section">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                  <br><br><h4 class="primary-title">our <small> Bikes</small><i>Autoroom</i></h4>
                </div>
                 <div class="col-md-12">
                    <!-- NAV TABS -->
                    <ul class="nav nav-tabs pull-right" data-animation="true" data-animation-class="bounceInDown" role="tablist">
                        <li role="presentation" class="active"><a href="#Tirupati" aria-controls="cab" role="tab" data-toggle="tab">Tirupati</a></li>
                        <li role="presentation"><a href="#Nellore" aria-controls="bike" role="tab" data-toggle="tab">Nellore</a></li>
                        <li role="presentation"><a href="#Vijayawada" aria-controls="bicycle" role="tab" data-toggle="tab">Vijayawada</a></li>
                         <li role="presentation"><a href="#Rajahmundry" aria-controls="bike" role="tab" data-toggle="tab">Rajahmundry</a></li>
                        <li role="presentation"><a href="#Vizag" aria-controls="bicycle" role="tab" data-toggle="tab">Vizag</a></li>
                    </ul>
                </div>
               
            </div>
            <div class="row">
                <!-- TAB PANES  -->
                <div class="tab-content">
                    <!-- TAXI TABPANEL -->
                    <div role="tabpanel" class="tab-pane active" id="Tirupati">
                        <div class="owl-carousel owl-theme vehicle-slider" id="vehicle-slider2">
                            <!-- ITEM ONE -->
                            <div class="item">
                                <div class="vehicle-info">
                                    <div class="vh-thumb">
                                        <img class="thumb" src="images/bike/bike5.png" alt="vehicle"/>
                                        <img class="flip" src="images/bike/bike5.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Aprilia 125cc  <small>start FROM <i class="fa fa-inr"></i>42 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike5.png" alt="">
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
                                        <img src="images/bike/bike6.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike6.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Aprilia 150cc  <small>start FROM <i class="fa fa-inr"></i>43 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike6.png" alt="">
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
                                    <div class="vh-thumb"><img src="images/bike/bike7.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike7.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Honda active <small>start FROM <i class="fa fa-inr"></i>38 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike7.png" alt="">
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
                                        <img src="images/bike/bike8.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike8.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Jupiter <small>start FROM <i class="fa fa-inr"></i>38 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike8.png" alt="">
                                          </span>
                                        <div class="dri-title">
                                            <a href="">Visit More</a><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM FOUR END  -->
                            
                            
                        </div>
                        <div class="owl-carousel owl-theme vehicle-slider" id="vehicle-slider2">
                            <!-- ITEM ONE -->
                            <div class="item">
                                <div class="vehicle-info">
                                    <div class="vh-thumb">
                                        <img class="thumb" src="images/bike/bike9.png" alt="vehicle"/>
                                        <img class="flip" src="images/bike/bike9.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Jupiter classic  <small>start FROM <i class="fa fa-inr"></i>38 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike9.png" alt="">
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
                                        <img src="images/bike/bike10.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike10.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Yamaha rayzr <small>start FROM <i class="fa fa-inr"></i>38 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike10.png" alt="">
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
                                    <div class="vh-thumb"><img src="images/bike/bike11.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike11.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Yamaha rayz street rally <small>start FROM <i class="fa fa-inr"></i>40 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike11.png" alt="">
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
                                        <img src="images/bike/bike12.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike12.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Jupiter classic <small>start FROM <i class="fa fa-inr"></i>38 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike12.png" alt="">
                                          </span>
                                        <div class="dri-title">
                                            <a href="">Visit More</a><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM FOUR END  -->
                            
                            
                        </div>
                            <div class="owl-carousel owl-theme vehicle-slider" id="vehicle-slider2">
                            <!-- ITEM ONE -->
                            <div class="item">
                                <div class="vehicle-info">
                                    <div class="vh-thumb">
                                        <img class="thumb" src="images/bike/bike13.png" alt="vehicle"/>
                                        <img class="flip" src="images/bike/bike13.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Yamaha fz25 <small>start FROM <i class="fa fa-inr"></i>100 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike13.png" alt="">
                                          </span>
                                        <div class="dri-title">
                                            <a href="bikes.php">Visit More</a><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM ONE END -->
                             <div class="item">
                                <div class="vehicle-info">
                                    <div class="vh-thumb">
                                        <img class="thumb" src="images/bike/bike17.png" alt="vehicle"/>
                                        <img class="flip" src="images/bike/bike17.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Yamaha fz 150  <small>start FROM <i class="fa fa-inr"></i>70 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike17.png" alt="">
                                          </span>
                                        <div class="dri-title">
                                            <a href="bikes.php">Visit More</a><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM TWO  -->
                          
                            <!-- ITEM TWO END -->
                            <!-- ITEM THREE  -->
                            <div class="item">
                                <div class="vehicle-info">
                                    <div class="vh-thumb"><img src="images/bike/bike15.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike15.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Yamaha r15 v3  <small>start FROM <i class="fa fa-inr"></i>110 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike15.png" alt="">
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
                                        <img src="images/bike/bike16.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike16.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Tvs ntarQ <small>start FROM <i class="fa fa-inr"></i>42 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike16.png" alt="">
                                          </span>
                                        <div class="dri-title">
                                            <a href="">Visit More</a><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM FOUR END  -->
                            
                            
                        </div>
                          <div class="owl-carousel owl-theme vehicle-slider" id="vehicle-slider2">
                            <!-- ITEM ONE -->
                            <div class="item">
                                <div class="vehicle-info">
                                    <div class="vh-thumb">
                                        <img class="thumb" src="images/bike/bike1.png" alt="vehicle"/>
                                        <img class="flip" src="images/bike/bike1.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Royal enfield classic 350  <small>start FROM <i class="fa fa-inr"></i>120 /Hour</small> </h4>
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
                                    <h4>KTM duke 200 <small>start FROM <i class="fa fa-inr"></i>120 /Hour</small> </h4>
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
                                    <h4>Aprilia 150cc  <small>start FROM <i class="fa fa-inr"></i>43 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike3.png" alt="">
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
                                    <h4>Royal enfield thunderbird x350 <small>start FROM <i class="fa fa-inr"></i>140 /Hour</small> </h4>
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
                          <div class="owl-carousel owl-theme vehicle-slider" id="vehicle-slider2">
                            <!-- ITEM ONE -->
                           <div class="item">
                                <div class="vehicle-info">
                                    <div class="vh-thumb">
                                        <img src="images/bike/bike14.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike14.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>TVS Apache  <small>start FROM <i class="fa fa-inr"></i>70 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike14.png" alt="">
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
                                        <img src="images/bike/bike18.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike18.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Bajaj Pulsar 150cc<small>start FROM <i class="fa fa-inr"></i>65 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike18.png" alt="">
                                          </span>
                                        <div class="dri-title">
                                            <a href="bikes.php">Visit More</a><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM TWO END -->
                           
                        </div>
                    </div>
                    <!-- TAXI TABPANEL END -->
                    <div role="tabpanel" class="tab-pane" id="Nellore">
                        <div class="owl-carousel owl-theme vehicle-slider" id="vehicle-slider2">
                            <!-- ITEM ONE -->
                            <div class="item">
                                <div class="vehicle-info">
                                    <div class="vh-thumb">
                                        <img class="thumb" src="images/bike/bike5.png" alt="vehicle"/>
                                        <img class="flip" src="images/bike/bike5.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Aprilia 125cc  <small>start FROM <i class="fa fa-inr"></i>42 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike5.png" alt="">
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
                                        <img src="images/bike/bike6.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike6.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Aprilia 150cc  <small>start FROM <i class="fa fa-inr"></i>43 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike6.png" alt="">
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
                                    <div class="vh-thumb"><img src="images/bike/bike7.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike7.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Honda active <small>start FROM <i class="fa fa-inr"></i>38 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike7.png" alt="">
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
                                        <img src="images/bike/bike8.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike8.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Jupiter <small>start FROM <i class="fa fa-inr"></i>38 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike8.png" alt="">
                                          </span>
                                        <div class="dri-title">
                                            <a href="">Visit More</a><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM FOUR END  -->
                            
                            
                        </div>
                        <div class="owl-carousel owl-theme vehicle-slider" id="vehicle-slider2">
                            <!-- ITEM ONE -->
                            <div class="item">
                                <div class="vehicle-info">
                                    <div class="vh-thumb">
                                        <img class="thumb" src="images/bike/bike9.png" alt="vehicle"/>
                                        <img class="flip" src="images/bike/bike9.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Jupiter classic  <small>start FROM <i class="fa fa-inr"></i>38 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike9.png" alt="">
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
                                        <img src="images/bike/bike10.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike10.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Yamaha rayzr <small>start FROM <i class="fa fa-inr"></i>38 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike10.png" alt="">
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
                                    <div class="vh-thumb"><img src="images/bike/bike11.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike11.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Yamaha rayz street rally <small>start FROM <i class="fa fa-inr"></i>40 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike11.png" alt="">
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
                                        <img src="images/bike/bike12.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike12.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Jupiter classic <small>start FROM <i class="fa fa-inr"></i>38 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike12.png" alt="">
                                          </span>
                                        <div class="dri-title">
                                            <a href="">Visit More</a><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM FOUR END  -->
                            
                            
                        </div>
                            <div class="owl-carousel owl-theme vehicle-slider" id="vehicle-slider2">
                            <!-- ITEM ONE -->
                            <div class="item">
                                <div class="vehicle-info">
                                    <div class="vh-thumb">
                                        <img class="thumb" src="images/bike/bike13.png" alt="vehicle"/>
                                        <img class="flip" src="images/bike/bike13.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Yamaha fz25 <small>start FROM <i class="fa fa-inr"></i>100 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike13.png" alt="">
                                          </span>
                                        <div class="dri-title">
                                            <a href="bikes.php">Visit More</a><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM ONE END -->
                             <div class="item">
                                <div class="vehicle-info">
                                    <div class="vh-thumb">
                                        <img class="thumb" src="images/bike/bike17.png" alt="vehicle"/>
                                        <img class="flip" src="images/bike/bike17.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Yamaha fz 150  <small>start FROM <i class="fa fa-inr"></i>70 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike17.png" alt="">
                                          </span>
                                        <div class="dri-title">
                                            <a href="bikes.php">Visit More</a><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM TWO  -->
                          
                            <!-- ITEM TWO END -->
                            <!-- ITEM THREE  -->
                            <div class="item">
                                <div class="vehicle-info">
                                    <div class="vh-thumb"><img src="images/bike/bike15.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike15.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Yamaha r15 v3  <small>start FROM <i class="fa fa-inr"></i>110 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike15.png" alt="">
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
                                        <img src="images/bike/bike16.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike16.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Tvs ntarQ <small>start FROM <i class="fa fa-inr"></i>42 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike16.png" alt="">
                                          </span>
                                        <div class="dri-title">
                                            <a href="">Visit More</a><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM FOUR END  -->
                            
                            
                        </div>
                          <div class="owl-carousel owl-theme vehicle-slider" id="vehicle-slider2">
                            <!-- ITEM ONE -->
                            <div class="item">
                                <div class="vehicle-info">
                                    <div class="vh-thumb">
                                        <img class="thumb" src="images/bike/bike1.png" alt="vehicle"/>
                                        <img class="flip" src="images/bike/bike1.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Royal enfield classic 350  <small>start FROM <i class="fa fa-inr"></i>120 /Hour</small> </h4>
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
                                    <h4>KTM duke 200 <small>start FROM <i class="fa fa-inr"></i>120 /Hour</small> </h4>
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
                                    <h4>Aprilia 150cc  <small>start FROM <i class="fa fa-inr"></i>43 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike3.png" alt="">
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
                                    <h4>Royal enfield thunderbird x350 <small>start FROM <i class="fa fa-inr"></i>140 /Hour</small> </h4>
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
                          <div class="owl-carousel owl-theme vehicle-slider" id="vehicle-slider2">
                            <!-- ITEM ONE -->
                           <div class="item">
                                <div class="vehicle-info">
                                    <div class="vh-thumb">
                                        <img src="images/bike/bike14.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike14.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>TVS Apache  <small>start FROM <i class="fa fa-inr"></i>70 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike14.png" alt="">
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
                                        <img src="images/bike/bike18.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike18.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Bajaj Pulsar 150cc<small>start FROM <i class="fa fa-inr"></i>65 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike18.png" alt="">
                                          </span>
                                        <div class="dri-title">
                                            <a href="bikes.php">Visit More</a><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM TWO END -->
                           
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="Vijayawada">
                        <div class="owl-carousel owl-theme vehicle-slider" id="vehicle-slider2">
                            <!-- ITEM ONE -->
                            <div class="item">
                                <div class="vehicle-info">
                                    <div class="vh-thumb">
                                        <img class="thumb" src="images/bike/bike5.png" alt="vehicle"/>
                                        <img class="flip" src="images/bike/bike5.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Aprilia 125cc  <small>start FROM <i class="fa fa-inr"></i>42 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike5.png" alt="">
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
                                        <img src="images/bike/bike6.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike6.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Aprilia 150cc  <small>start FROM <i class="fa fa-inr"></i>43 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike6.png" alt="">
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
                                    <div class="vh-thumb"><img src="images/bike/bike7.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike7.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Honda active <small>start FROM <i class="fa fa-inr"></i>38 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike7.png" alt="">
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
                                        <img src="images/bike/bike8.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike8.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Jupiter <small>start FROM <i class="fa fa-inr"></i>38 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike8.png" alt="">
                                          </span>
                                        <div class="dri-title">
                                            <a href="">Visit More</a><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM FOUR END  -->
                            
                            
                        </div>
                        <div class="owl-carousel owl-theme vehicle-slider" id="vehicle-slider2">
                            <!-- ITEM ONE -->
                            <div class="item">
                                <div class="vehicle-info">
                                    <div class="vh-thumb">
                                        <img class="thumb" src="images/bike/bike9.png" alt="vehicle"/>
                                        <img class="flip" src="images/bike/bike9.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Jupiter classic  <small>start FROM <i class="fa fa-inr"></i>38 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike9.png" alt="">
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
                                        <img src="images/bike/bike10.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike10.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Yamaha rayzr <small>start FROM <i class="fa fa-inr"></i>38 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike10.png" alt="">
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
                                    <div class="vh-thumb"><img src="images/bike/bike11.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike11.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Yamaha rayz street rally <small>start FROM <i class="fa fa-inr"></i>40 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike11.png" alt="">
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
                                        <img src="images/bike/bike12.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike12.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Jupiter classic <small>start FROM <i class="fa fa-inr"></i>38 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike12.png" alt="">
                                          </span>
                                        <div class="dri-title">
                                            <a href="">Visit More</a><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM FOUR END  -->
                            
                            
                        </div>
                            <div class="owl-carousel owl-theme vehicle-slider" id="vehicle-slider2">
                            <!-- ITEM ONE -->
                            <div class="item">
                                <div class="vehicle-info">
                                    <div class="vh-thumb">
                                        <img class="thumb" src="images/bike/bike13.png" alt="vehicle"/>
                                        <img class="flip" src="images/bike/bike13.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Yamaha fz25 <small>start FROM <i class="fa fa-inr"></i>100 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike13.png" alt="">
                                          </span>
                                        <div class="dri-title">
                                            <a href="bikes.php">Visit More</a><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM ONE END -->
                             <div class="item">
                                <div class="vehicle-info">
                                    <div class="vh-thumb">
                                        <img class="thumb" src="images/bike/bike17.png" alt="vehicle"/>
                                        <img class="flip" src="images/bike/bike17.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Yamaha fz 150  <small>start FROM <i class="fa fa-inr"></i>70 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike17.png" alt="">
                                          </span>
                                        <div class="dri-title">
                                            <a href="bikes.php">Visit More</a><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM TWO  -->
                          
                            <!-- ITEM TWO END -->
                            <!-- ITEM THREE  -->
                            <div class="item">
                                <div class="vehicle-info">
                                    <div class="vh-thumb"><img src="images/bike/bike15.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike15.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Yamaha r15 v3  <small>start FROM <i class="fa fa-inr"></i>110 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike15.png" alt="">
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
                                        <img src="images/bike/bike16.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike16.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Tvs ntarQ <small>start FROM <i class="fa fa-inr"></i>42 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike16.png" alt="">
                                          </span>
                                        <div class="dri-title">
                                            <a href="">Visit More</a><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM FOUR END  -->
                            
                            
                        </div>
                          <div class="owl-carousel owl-theme vehicle-slider" id="vehicle-slider2">
                            <!-- ITEM ONE -->
                            <div class="item">
                                <div class="vehicle-info">
                                    <div class="vh-thumb">
                                        <img class="thumb" src="images/bike/bike1.png" alt="vehicle"/>
                                        <img class="flip" src="images/bike/bike1.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Royal enfield classic 350  <small>start FROM <i class="fa fa-inr"></i>120 /Hour</small> </h4>
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
                                    <h4>KTM duke 200 <small>start FROM <i class="fa fa-inr"></i>120 /Hour</small> </h4>
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
                                    <h4>Aprilia 150cc  <small>start FROM <i class="fa fa-inr"></i>43 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike3.png" alt="">
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
                                    <h4>Royal enfield thunderbird x350 <small>start FROM <i class="fa fa-inr"></i>140 /Hour</small> </h4>
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
                          <div class="owl-carousel owl-theme vehicle-slider" id="vehicle-slider2">
                            <!-- ITEM ONE -->
                           <div class="item">
                                <div class="vehicle-info">
                                    <div class="vh-thumb">
                                        <img src="images/bike/bike14.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike14.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>TVS Apache  <small>start FROM <i class="fa fa-inr"></i>70 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike14.png" alt="">
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
                                        <img src="images/bike/bike18.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike18.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Bajaj Pulsar 150cc<small>start FROM <i class="fa fa-inr"></i>65 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike18.png" alt="">
                                          </span>
                                        <div class="dri-title">
                                            <a href="bikes.php">Visit More</a><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM TWO END -->
                           
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="Rajahmundry">
                        <div class="owl-carousel owl-theme vehicle-slider" id="vehicle-slider2">
                            <!-- ITEM ONE -->
                            <div class="item">
                                <div class="vehicle-info">
                                    <div class="vh-thumb">
                                        <img class="thumb" src="images/bike/bike5.png" alt="vehicle"/>
                                        <img class="flip" src="images/bike/bike5.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Aprilia 125cc  <small>start FROM <i class="fa fa-inr"></i>42 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike5.png" alt="">
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
                                        <img src="images/bike/bike6.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike6.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Aprilia 150cc  <small>start FROM <i class="fa fa-inr"></i>43 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike6.png" alt="">
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
                                    <div class="vh-thumb"><img src="images/bike/bike7.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike7.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Honda active <small>start FROM <i class="fa fa-inr"></i>38 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike7.png" alt="">
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
                                        <img src="images/bike/bike8.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike8.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Jupiter <small>start FROM <i class="fa fa-inr"></i>38 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike8.png" alt="">
                                          </span>
                                        <div class="dri-title">
                                            <a href="">Visit More</a><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM FOUR END  -->
                            
                            
                        </div>
                        <div class="owl-carousel owl-theme vehicle-slider" id="vehicle-slider2">
                            <!-- ITEM ONE -->
                            <div class="item">
                                <div class="vehicle-info">
                                    <div class="vh-thumb">
                                        <img class="thumb" src="images/bike/bike9.png" alt="vehicle"/>
                                        <img class="flip" src="images/bike/bike9.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Jupiter classic  <small>start FROM <i class="fa fa-inr"></i>38 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike9.png" alt="">
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
                                        <img src="images/bike/bike10.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike10.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Yamaha rayzr <small>start FROM <i class="fa fa-inr"></i>38 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike10.png" alt="">
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
                                    <div class="vh-thumb"><img src="images/bike/bike11.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike11.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Yamaha rayz street rally <small>start FROM <i class="fa fa-inr"></i>40 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike11.png" alt="">
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
                                        <img src="images/bike/bike12.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike12.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Jupiter classic <small>start FROM <i class="fa fa-inr"></i>38 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike12.png" alt="">
                                          </span>
                                        <div class="dri-title">
                                            <a href="">Visit More</a><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM FOUR END  -->
                            
                            
                        </div>
                            <div class="owl-carousel owl-theme vehicle-slider" id="vehicle-slider2">
                            <!-- ITEM ONE -->
                            <div class="item">
                                <div class="vehicle-info">
                                    <div class="vh-thumb">
                                        <img class="thumb" src="images/bike/bike13.png" alt="vehicle"/>
                                        <img class="flip" src="images/bike/bike13.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Yamaha fz25 <small>start FROM <i class="fa fa-inr"></i>100 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike13.png" alt="">
                                          </span>
                                        <div class="dri-title">
                                            <a href="bikes.php">Visit More</a><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM ONE END -->
                             <div class="item">
                                <div class="vehicle-info">
                                    <div class="vh-thumb">
                                        <img class="thumb" src="images/bike/bike17.png" alt="vehicle"/>
                                        <img class="flip" src="images/bike/bike17.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Yamaha fz 150  <small>start FROM <i class="fa fa-inr"></i>70 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike17.png" alt="">
                                          </span>
                                        <div class="dri-title">
                                            <a href="bikes.php">Visit More</a><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM TWO  -->
                          
                            <!-- ITEM TWO END -->
                            <!-- ITEM THREE  -->
                            <div class="item">
                                <div class="vehicle-info">
                                    <div class="vh-thumb"><img src="images/bike/bike15.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike15.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Yamaha r15 v3  <small>start FROM <i class="fa fa-inr"></i>110 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike15.png" alt="">
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
                                        <img src="images/bike/bike16.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike16.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Tvs ntarQ <small>start FROM <i class="fa fa-inr"></i>42 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike16.png" alt="">
                                          </span>
                                        <div class="dri-title">
                                            <a href="">Visit More</a><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM FOUR END  -->
                            
                            
                        </div>
                          <div class="owl-carousel owl-theme vehicle-slider" id="vehicle-slider2">
                            <!-- ITEM ONE -->
                            <div class="item">
                                <div class="vehicle-info">
                                    <div class="vh-thumb">
                                        <img class="thumb" src="images/bike/bike1.png" alt="vehicle"/>
                                        <img class="flip" src="images/bike/bike1.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Royal enfield classic 350  <small>start FROM <i class="fa fa-inr"></i>120 /Hour</small> </h4>
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
                                    <h4>KTM duke 200 <small>start FROM <i class="fa fa-inr"></i>120 /Hour</small> </h4>
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
                                    <h4>Aprilia 150cc  <small>start FROM <i class="fa fa-inr"></i>43 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike3.png" alt="">
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
                                    <h4>Royal enfield thunderbird x350 <small>start FROM <i class="fa fa-inr"></i>140 /Hour</small> </h4>
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
                          <div class="owl-carousel owl-theme vehicle-slider" id="vehicle-slider2">
                            <!-- ITEM ONE -->
                           <div class="item">
                                <div class="vehicle-info">
                                    <div class="vh-thumb">
                                        <img src="images/bike/bike14.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike14.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>TVS Apache  <small>start FROM <i class="fa fa-inr"></i>70 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike14.png" alt="">
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
                                        <img src="images/bike/bike18.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike18.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Bajaj Pulsar 150cc<small>start FROM <i class="fa fa-inr"></i>65 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike18.png" alt="">
                                          </span>
                                        <div class="dri-title">
                                            <a href="bikes.php">Visit More</a><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM TWO END -->
                           
                        </div>
                    </div>
                     <div role="tabpanel" class="tab-pane" id="Vizag">
                        <div class="owl-carousel owl-theme vehicle-slider" id="vehicle-slider2">
                            <!-- ITEM ONE -->
                            <div class="item">
                                <div class="vehicle-info">
                                    <div class="vh-thumb">
                                        <img class="thumb" src="images/bike/bike5.png" alt="vehicle"/>
                                        <img class="flip" src="images/bike/bike5.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Aprilia 125cc  <small>start FROM <i class="fa fa-inr"></i>42 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike5.png" alt="">
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
                                        <img src="images/bike/bike6.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike6.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Aprilia 150cc  <small>start FROM <i class="fa fa-inr"></i>43 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike6.png" alt="">
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
                                    <div class="vh-thumb"><img src="images/bike/bike7.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike7.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Honda active <small>start FROM <i class="fa fa-inr"></i>38 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike7.png" alt="">
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
                                        <img src="images/bike/bike8.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike8.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Jupiter <small>start FROM <i class="fa fa-inr"></i>38 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike8.png" alt="">
                                          </span>
                                        <div class="dri-title">
                                            <a href="">Visit More</a><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM FOUR END  -->
                            
                            
                        </div>
                        <div class="owl-carousel owl-theme vehicle-slider" id="vehicle-slider2">
                            <!-- ITEM ONE -->
                            <div class="item">
                                <div class="vehicle-info">
                                    <div class="vh-thumb">
                                        <img class="thumb" src="images/bike/bike9.png" alt="vehicle"/>
                                        <img class="flip" src="images/bike/bike9.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Jupiter classic  <small>start FROM <i class="fa fa-inr"></i>38 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike9.png" alt="">
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
                                        <img src="images/bike/bike10.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike10.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Yamaha rayzr <small>start FROM <i class="fa fa-inr"></i>38 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike10.png" alt="">
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
                                    <div class="vh-thumb"><img src="images/bike/bike11.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike11.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Yamaha rayz street rally <small>start FROM <i class="fa fa-inr"></i>40 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike11.png" alt="">
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
                                        <img src="images/bike/bike12.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike12.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Jupiter classic <small>start FROM <i class="fa fa-inr"></i>38 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike12.png" alt="">
                                          </span>
                                        <div class="dri-title">
                                            <a href="">Visit More</a><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM FOUR END  -->
                            
                            
                        </div>
                            <div class="owl-carousel owl-theme vehicle-slider" id="vehicle-slider2">
                            <!-- ITEM ONE -->
                            <div class="item">
                                <div class="vehicle-info">
                                    <div class="vh-thumb">
                                        <img class="thumb" src="images/bike/bike13.png" alt="vehicle"/>
                                        <img class="flip" src="images/bike/bike13.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Yamaha fz25 <small>start FROM <i class="fa fa-inr"></i>100 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike13.png" alt="">
                                          </span>
                                        <div class="dri-title">
                                            <a href="bikes.php">Visit More</a><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM ONE END -->
                             <div class="item">
                                <div class="vehicle-info">
                                    <div class="vh-thumb">
                                        <img class="thumb" src="images/bike/bike17.png" alt="vehicle"/>
                                        <img class="flip" src="images/bike/bike17.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Yamaha fz 150  <small>start FROM <i class="fa fa-inr"></i>70 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike17.png" alt="">
                                          </span>
                                        <div class="dri-title">
                                            <a href="bikes.php">Visit More</a><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM TWO  -->
                          
                            <!-- ITEM TWO END -->
                            <!-- ITEM THREE  -->
                            <div class="item">
                                <div class="vehicle-info">
                                    <div class="vh-thumb"><img src="images/bike/bike15.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike15.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Yamaha r15 v3  <small>start FROM <i class="fa fa-inr"></i>110 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike15.png" alt="">
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
                                        <img src="images/bike/bike16.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike16.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Tvs ntarQ <small>start FROM <i class="fa fa-inr"></i>42 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike16.png" alt="">
                                          </span>
                                        <div class="dri-title">
                                            <a href="">Visit More</a><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM FOUR END  -->
                            
                            
                        </div>
                          <div class="owl-carousel owl-theme vehicle-slider" id="vehicle-slider2">
                            <!-- ITEM ONE -->
                            <div class="item">
                                <div class="vehicle-info">
                                    <div class="vh-thumb">
                                        <img class="thumb" src="images/bike/bike1.png" alt="vehicle"/>
                                        <img class="flip" src="images/bike/bike1.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Royal enfield classic 350  <small>start FROM <i class="fa fa-inr"></i>120 /Hour</small> </h4>
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
                                    <h4>KTM duke 200 <small>start FROM <i class="fa fa-inr"></i>120 /Hour</small> </h4>
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
                                    <h4>Aprilia 150cc  <small>start FROM <i class="fa fa-inr"></i>43 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike3.png" alt="">
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
                                    <h4>Royal enfield thunderbird x350 <small>start FROM <i class="fa fa-inr"></i>140 /Hour</small> </h4>
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
                          <div class="owl-carousel owl-theme vehicle-slider" id="vehicle-slider2">
                            <!-- ITEM ONE -->
                           <div class="item">
                                <div class="vehicle-info">
                                    <div class="vh-thumb">
                                        <img src="images/bike/bike14.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike14.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>TVS Apache  <small>start FROM <i class="fa fa-inr"></i>70 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike14.png" alt="">
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
                                        <img src="images/bike/bike18.png" alt="vehicle">
                                        <img class="flip" src="images/bike/bike18.png" alt="vehicle"/>
                                        <a href="booknow.php" class="btn btn-rounded booknow"><i class="fa fa-search-plus"></i> booknow</a>
                                    </div>
                                    <h4>Bajaj Pulsar 150cc<small>start FROM <i class="fa fa-inr"></i>65 /Hour</small> </h4>
                                    <span class="md-divider"></span>
                                    <div class="driver-info">
                                          <span class="dri-thumb">
                                          <img src="images/bike/bike18.png" alt="">
                                          </span>
                                        <div class="dri-title">
                                            <a href="bikes.php">Visit More</a><br>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM TWO END -->
                           
                        </div>
                    </div>
                    
                    <!-- SUV TABPANEL END -->
                </div>
            </div>
        </div>
    </section>



    <!-- PASSANGER FEED -->
   
  
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--<script src="js/jquery-3.2.1.min.js"></script>-->
<!-- jQuery Validation -->
<script src="js/jquery.validate.min.js"></script>
<!-- Google Map API JS -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=true&language=en&libraries=places"></script>

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
    $(document).ready(function(){

        $('#type3').on("change",function () {
            var categoryId2 = $(this).find('option:selected').val();
            $.ajax({
                url: "ajax.php",
                type: "POST",
                data: "categoryId2="+categoryId2,
                success: function (response) {
                    console.log(response);
                    $("#type4").html(response);
                },
            });
        });

    });
     $(document).ready(function(){

        $('#type3').on("change",function () {
            var categoryId3 = $(this).find('option:selected').val();
            $.ajax({
                url: "ajax.php",
                type: "POST",
                data: "categoryId3="+categoryId3,
                success: function (response) {
                    console.log(response);
                    $("#type5").html(response);
                },
            });
        });

    });
    $(document).ready(function(){

        $('#type6').on("change",function () {
            var categoryId4 = $(this).find('option:selected').val();
            $.ajax({
                url: "ajax.php",
                type: "POST",
                data: "categoryId4="+categoryId4,
                success: function (response) {
                    console.log(response);
                    $("#type7").html(response);
                },
            });
        });

    });
     $(document).ready(function(){

        $('#type6').on("change",function () {
            var categoryId5= $(this).find('option:selected').val();
            $.ajax({
                url: "ajax.php",
                type: "POST",
                data: "categoryId5="+categoryId5,
                success: function (response) {
                    console.log(response);
                    $("#type8").html(response);
                },
            });
        });

    });
   

</script>
</body>
</html>