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
    <meta name="description" content="JourneyWheels Bike Rental Services Terms & Conditions - View our Rental Agreement about your rights, responsibilities and limitations when hiring a motorcycle. Customers acknowledgment.">
    <meta name="keywords" content="Terms & Conditions, Hire a Motorcycle, Bike Rental Services, Rental Agreement, responsibilities and limitations, Customers acknowledgment">
    <meta name="author" content="pxtheme-govindsaini">

    <!-- PAGE TITLE -->
    <title>Register New Account | JourneyWheels | Bike Rental Services</title>
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
                     <div class="col-md-2"></div>
                    <div class="col-md-7">
                        <div class="panel panel-default sidebar-menu" style="box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 1px 5px 0 rgba(0,0,0,0.12), 0 3px 1px -2px rgba(0,0,0,0.2);"><!-- panel panel-default sidebar-menu Starts -->
                           <div class="panel-heading text-center" style="background:#ffb735;">
                                <h5 id='p_title' >CREATE NEW ACCOUNT</h5>
                            </div>
                             <div class="panel-body customeracnt" >
<form class="log" method="post" action="">
        <div class="form-group is-empty">
        <label>Full Name *</label>
        <input type="text" class="form-control" name="rname" placeholder="Enter Your Name" style="border-radius:5px; height:35px;background:#f6f6f6" required="required">
        </div>
                    
        <div class="form-group  is-empty">
            <label>Email *</label>
            <input type="email" class="form-control" name="remail" placeholder="Enter Registered E-mail" style="border-radius:5px; height:35px;background:#f6f6f6" required="required">
        </div>
     
        <div class="form-group  is-empty">
        <label>Password *</label>
            <input type="password" class="form-control" name="rpassword" placeholder="Enter Your Password" style="border-radius:5px; height:35px;background:#f6f6f6" required="required">
        </div>
                
        <div class="form-group  is-empty">
            <label>Confirm Password *</label>
            <input type="password" class="form-control" name="rcpassword" placeholder="Confirm Password" style="border-radius:5px; height:35px;background:#f6f6f6" required="required">
        </div>

        <div class="form-group  is-empty">
            <label>Mobile *</label>
            <input type="text" class="form-control" name="mmobile" minlength="10" maxlength="10" style="border-radius:5px; height:35px;background:#f6f6f6;cursor: not-allowed;" value="<?php echo $_SESSION["mobile"]; ?>" readonly >
        </div>
                                                           
        <div class="form-group text-center">
        <input type="submit" class="btn  btn-primary" name="register" value="Register">
        </div>
</form>
<?php
  if(isset($_POST['register']))
  {
          include_once('includes/db.php');
            $name=$_POST["rname"];
            $email=$_POST["remail"];
            $rpassword=$_POST["rpassword"];
            $rcpassword=$_POST["rcpassword"];
            $mmobile=$_POST["mmobile"];
              if($rpassword==$rcpassword)
      {

                    $rpassword=password_hash($rpassword,PASSWORD_DEFAULT);
                  $query="SELECT * FROM `users` WHERE `email`='$email'";
                  $run=mysqli_query($db,$query);

                  if(mysqli_num_rows($run) == 0)
                {
                  $query="INSERT INTO `users`(`name`, `email`, `password`, `mobile`) VALUES ('$name','$email','$rpassword','$mmobile')";
                    if (mysqli_query($db,$query)) 
                    {
                      echo "<script>alert('Congrats $name!! You have been Registered Successfully!');
                        window.location.href='login.php';
                      </script>";
                    }
                    else
                    {
                      echo "<script>alert('Registration Failed!!'); </script>";
                    }
                } 
                else
               {
                  echo "<script>alert('Email ID already exists!!'); </script>";
                }
            
        }       
            else
            {
            echo "<script>alert('Passwords are not matching!! ')</script>";
            }
              
           
  }
?>
                             
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