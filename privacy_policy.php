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
    <meta name="description" content="To rent a bike please, read our privacy policy to use our bike/cars and also explains the information you give us when you book your bike/car hire.">
    <meta name="keywords" content="Privacy Policy, Bike Rentals, Rent a Bike, information, bike rentals, bicycle rentals, car rental services in Vijayawada, tirupati, vizag, nellore, rajahmundry, self drive cars">
    <meta name="author" content="pxtheme-govindsaini">

    <!-- PAGE TITLE -->
    <title>Privacy Policy | Bike Rentals | Rent a Bike</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <!-- style css -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

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

<body class="no-scroll" >
<!-- WIDE DESKTOP -->
<div id="wide-desktop">
    <!-- LOADER -->
   <?php 
   include ("header.php");
   ?>
    <!-- END HEADER -->

    <div class="clearfix"></div>
    <!-- BOOK CAB-->
    <section class="bookcab " id="bookcab" style="padding:80px 0;margin-top:50px;" >
        <div class="container ">
            <div class="row">
              <div class="col-md-12">
                 <div class="boxaccount " ><!-- box Starts -->
                     <div class="row">
                     <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="panel panel-default sidebar-menu" style="box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 1px 5px 0 rgba(0,0,0,0.12), 0 3px 1px -2px rgba(0,0,0,0.2);"><!-- panel panel-default sidebar-menu Starts -->
<div class="panel-heading text-center" style="background:#ffb735"><h4 id='p_title' >PRIVACY POLICY</h4></div>
                            <div class="panel-body customeracnt" >
                                <p>JourneyWheels places paramount importance on maintaining the privacy of its customers -  personal information under the applicable laws in India.
Please read this Policy carefully by accessing or using our website. The customer hereby acknowledges that he has read, understood, and agrees to be bound to all the terms of this Policy
</p>
<p>JourneyWheels collects and uses relevant personal information of customer in order to provide services. The following personal information is collected from the Customer and shall include, the Customer's street address, name, contact telephone number; vehicle preference; company name and employee accounts with JourneyWheels; Reservations and Rental details including dates, times and places of vehicle hire; </p>
  <p>The collection of information shall depend upon on the Customer's use of JourneyWheels's services. JourneyWheels may collect information directly from the Customer by mobile devices, portable devices /telephone/email/over the counter/filling an enrollment form or through an internet based service.</p> 
  <p>The Customer may choose not to provide some information but this may prevent JourneyWheels from providing the standard of services that is normally expected. The Customer by proceeding with the usage/access of the website/application of the JourneyWheels explicitly grants his/her consent to such usage of the data by the JourneyWheels.  JourneyWheels protects information by keeping up to date with techniques and processes meeting current industry standards ensuring that information are kept secure and confidential. </p>
  <p>JourneyWheels shall make best possible endeavors to use the data of the Customers for rendering standard services only by sharing it with third party companies. JourneyWheels will be careful in the management of information of Customers and also has measures in place to ensure that collected information is protected and not accessed inappropriately.</p>
  <p>JourneyWheels makes every effort to ensure that information of Customer is accurate and updated and requires Customer to verify their identity for security purposes before replying to any requests.</p>
  <p>Any Customer who has an objection to such usage must not proceed with the usage/access of the website/application of JourneyWheels.<br>
The Customer who has already shared his/her personal data may raise the demand to JourneyWheels for removal of his/her data at registered office address mentioned below.
</p>
<p>Registered office address #19-1-112/A, JM COMPLEX, OLD EXHIBITION GROUND, NEAR OPP RTC BUS STAND, TIRUPATI, ANDHRA PRADESH-517501
How the company transfers data to third party companies?<br>
JourneyWheels does not submit information to third parties except in the following cases:
</p>
<p>The access is through customer Id and password. The storage of information of the Customer is in computer servers with limited access that are located in controlled facilities. As transmission of data over the Internet or any wireless network cannot be guaranteed to be 100% secure</p>
<p>How to edit this information or log out?<br>
The access to customers account is through customer ID login and passwords and JourneyWheels persuades that the customer promptly updates information if it changes in order to help JourneyWheels keep the information and up to date. The access would be withdrawn if such facility is not to be continued.
</p>
<p>However, JourneyWheels keeps track of past transactions, therefore the Customer cannot delete information or opt-out of information associated with past transactions on the website.</p>
<p>The changes made herein to the Policy shall be made without prior notice under the heading "Privacy Policy" section of the Website. The revised Policy is effective immediately when posted on the website. The Customer's continued use of the website after the effectiveness of such revisions will constitute the Customer's acknowledgment and acceptance of the terms of the revised Policy. </p>
  <p>Disclaimer<br>
Every effort has been made to ensure that the information on this site is correct and up to date, however, JourneyWheels does not provide any warranty as to the completeness or accuracy of the information and, subject to applicable laws, does not accept any liability for damages of any kind resulting from the access or use of this website and its contents. All information on this site is protected by copyright and other intellectual property rights. No images, text or other content from this site may be distributed or reproduced without prior written approval from JourneyWheels.
</p>
<p><strong>Cancellations & Refunds:</strong><br>

Based on the cancellation the refund will be processed. All refunds will be made in the same mode of payment used while booking. If you paid by using credit/debit card or net banking, it may take up to 5-7 business days for your bank to credit the refund amount to your account.</p>
  <p>Contact Us<br>
In case of any questions or suggestions regarding the Policy, please email JourneyWheels at: contact@journeywheels.in</p>
       </div>
      </div>
    </div>
  </div>
              </div><!-- box Ends -->
              </div>      
            </div>
</div><!-- container Ends -->
</div><!-- content Ends -->
    </section>
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
   

</script>
</body>
</html>