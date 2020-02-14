    <!-- LOADER -->
<style>
header .collapse.navbar-collapse.active .navbar-nav li>ul.dropdown-menu {
    position: relative;
        top: 0px;

}
header .collapse.navbar-collapse.active .navbar-nav li a{
    font-size:16px;
}
.loginfm .form-control{
    padding:20px;
}
 @media only screen and (min-width: 320px) and (max-width: 479px) {
     .navbar-brand{
	          width: 220px;
	      }
	     .dropdown .styl_odr{
       display:none;
    
   }
       }
        @media only screen and (max-width: 1199px) and (min-width: 992px){
       .navbar-brand img{
    padding:1px;
}
   } 
   @media only screen and (max-width: 990px) and (min-width: 768px){
       .navbar-brand img{
    padding:0px;
}
   }
   @media only screen and (max-width: 479px) and (min-width: 320px){
        .navbar-brand img{
    padding:0px;
   }
   
   }</style>
    <div class="vertical-centered-box" id="loader-wrapper">
        <div class="content">
            <div class="loader-circle"></div>
            <div class="loader-line-mask">
                <div class="loader-line"></div>
            </div>
            <i class="fa fa-taxi"></i>
        </div>
    </div>
    <!-- LOADER END -->
    <!-- HEADER -->
    <header id="home" class="header fixed-header">
        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php"><img src="images/logo1.png" alt="logo"></a>
                    <div class="container"  style="margin-top: -80px;float: right">
                    </div>
                </div>
                <div class="row ">
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse no-padding" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="" id="nav-login-btn"> 
                            <?php
                             if (!isset($_SESSION['email'])) {
        echo  "<a href=''  class='login' style='color:white;' data-toggle='modal' data-target='#demo-1'>Login | Register</a>";
        }else{ ?>
       <li class="dropdown" > <a href="" class="dropdown-toggle"  data-toggle="dropdown" style='color:white;font-size:16px;font-weight:400;border-radius:2px;'><?php echo $name; ?> <i class="fa fa-angle-down"></i></a>
              <ul class="dropdown-menu ">
                  <li class="dropdown-submenu" >
                                    <a href="profile.php"  style="color:black;font-size:15px" >My Profile</a>
                                       <a href="my_bookings.php"  style="color:black;font-size:15px" >My Bookings</a>
                                 <a href="logout.php" style="color:black;font-size:15px" >Logout</a>
                                    </li>
                                    </ul>
                                    </li>
                    <?php } ?>
                     </li>
                            <li><a href="index.php">HOME</a></li>
                            <li><a href="our_vehicle.php">our vehicle</a></li>
                            <li><a href="about_us.php">ABOUT US  </a></li>
                              <li><a href="offers.php">Offers</a></li>
                                 <li><a href="hiring.php">We're Hiring</a></li>
                            <li><a href="feedback.php">PASSENGER FEED </a></li>
                            <li><a href="feedback.php">CLIENT FEED </a></li>
                            <li><a href=""  data-toggle='modal' data-target='#demo-4'>PARTNER WITH US </a></li>
                            <li><a href="contact_us.php">CONTACT US</a></li>
                            <li><a href="terms_conditions.php">Terms & Conditions </a></li>
                            <li><a href="privacy_policy.php">Privacy Policy</a></li>
                            
                        </ul>
                        <a href="" class="callus btn btn-default btn-rounded">
                            <i class="fa fa-headphones"> </i> 939-1090-908</a>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>

                <div class="pull-right absulate-pos">

                    <button type="button" aria-label="Toggle Navigation" class="lines-button x navbar-toggle">
                        <span class="lines"></span>
                    </button>

                    
                   <ul class="social-link">
                       
                        <?php
        if (!isset($_SESSION['email'])) {
        echo  "<a href=''  class='login' style='color:white;font-size:15px;font-weight:bold;padding:10px;border-radius:2px;' data-toggle='modal' data-target='#demo-1'>Login | Register</a>";
        }else{ ?>
       <li class="dropdown" > <a href="" class="dropdown-toggle"  data-toggle="dropdown" style='color:white;font-size:16px;font-weight:400;padding:10px;border-radius:2px;'><?php echo $name; ?> <i class="fa fa-angle-down"></i></a>
              <ul class="dropdown-menu ">
                  <li class="dropdown-submenu" >
                                    <a href="profile.php"  style="color:black;font-size:15px" >My Profile</a>
                                      <a href="my_bookings.php"  style="color:black;font-size:15px" >My Bookings</a>
                                 <a href="logout.php" style="color:black;font-size:15px" >Logout</a>
                                    </li>
                                    </ul>
                                    </li>
              <?php }
  ?>
                         
                        <li><a href="https://www.facebook.com/journeywheelsoffical/"  target="_blank" class="fa fa-facebook-square"></a> </li>
                        <li><a href="https://www.twitter.com/journey_wheels" target="_blank" class="fa fa-twitter-square"></a> </li>
                        <li><a href="https://www.instagram.com/journey_wheels/" target="_blank" class="fa fa-instagram"></a> </li>
                      
                    </ul>
                    
                    
                    <br>
                     
                </div>
        </nav></header>

           
    <!--Modals Start -->
   <!-- [ Modal #1 ]  Login Modal-->
  <div class="modal fade" id="demo-1" tabindex="-1">
    <div class="modal-dialog ">
     <div class="modal-content loginfm">
      <button type="button" class="close" data-dismiss="modal"><i class="icon-xs-o-md"></i></button>
      <div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color:#fff;">&times;</span></button>
        <h4 class="modal-title text-center caps" style="color:#fff;"><strong>Login</strong></h4>
      </div>
       <div class="modal-body">
          <form class="log" id="loginForm1" method="post" >
             <div class="display-error" style="display: none;"></div>

                                                <div class="form-group ">
                                                <label style="color:#ffcc66;">Email</label>
                                                <input type="email" class="form-control" name="lemail" placeholder="Enter Registered E-mail" style="border-radius:5px;"  >
                                                
                                               
                                            </div>
                                          
                                            <div class="form-group ">
                                                <label style="color:#ffcc66;">Password</label>
                                                <input type="password" class="form-control" name="lpassword"  id="Login1" placeholder="Enter Your Password"  style="border-radius:5px;"  >
                                                
                                            </div>
                                           
                                            
                                                <label ><input type="checkbox" class="logch" style=" " onclick="log1Function()"><span style="color: #ffcc66" class="logsp">&nbsp;Show Password</span></label>
                                            
                                             <div class="form-group ">
                                                 <a href="" data-toggle="modal" data-target="#demo-3"  data-dismiss="modal" style="color:#fff">Forgot Password?</a>
                                             </div>

                                           
                                       
            <button type="submit" class="btn btn-primary" value="sign In" style="background-color:#ffcc66; border-radius:5px;">Login</button><h5 style="display:inline;font-weight:bold; color:#fff;"> OR </h5>
            <button type="button" class="btn btn-primary" style="background-color:#ffcc66; border-radius:5px;"  data-toggle="modal" data-target="#demo-2" style="display:inline" data-dismiss="modal" >Signup</button>
            </form>
              </div>
     </div>
    </div>
  </div>
  <!-- [ Modal #2 ] Register Modal-->
   <div class="modal fade"  id="demo-2" tabindex="-1">
    <div class="modal-dialog">
     <div class="modal-content loginfm">
      <button type="button" class="close" data-dismiss="modal"><i class="icon-xs-o-md"></i></button>
      <div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color:#ffcc66;">&times;</span></button>
        <h4 class="modal-title text-center caps" style="color:#fff;"><strong>Create New Account</strong></h4>
      </div>
      <div class="modal-body">
    <form class="log" id="registFrm" method="post">
                 <div class="form-group">
                                                <label style="color:#ffcc66;">Full Name</label>
                                                <input type="text" class="form-control" name="rname" placeholder="Enter Your Name" style="border-radius:5px; height:35px;"  required="required">
                                                
                                               
                                            </div>
                                                <div class="form-group ">
                                                <label style="color:#ffcc66;">Email</label>
                                                <input type="email" class="form-control" name="remail" placeholder="Enter Registered E-mail" style="border-radius:5px; height:35px;"  required="required">
                                                
                                               
                                            </div>
                                            <div class="form-group ">
                                                <label style="color:#ffcc66;">Mobile</label>
                                                <input type="text" class="form-control" name="rmobile"   pattern="[6789][0-9]{9}" title="Mobile no. should be 10 digit & start with 6,7,8,9" minlength="10" maxlength="10" placeholder="Mobile Number"  style="border-radius:5px; height:35px;"  required="required">
                                                
                                            </div>
                                            <div class="form-group ">
                                                <label style="color:#ffcc66;">Password</label>
                                                <input type="password" class="form-control" name="rpassword"   placeholder="Enter Your Password"  style="border-radius:5px; height:35px;" required="required" >
                                                
                                            </div>
                                            <div class="form-group ">
                                                <label style="color:#ffcc66;">Confirm Password</label>
                                                <input type="password" class="form-control" name="rcpassword"  placeholder="Confirm Password"  style="border-radius:5px; height:35px;"  required="required">
                                                
                                            </div>
                                           
                                             
                                <div class="form-group text-center">
                            <button type="submit" class="btn  btn-primary" style="background-color:#ffcc66;" >Register</button>
                        </div>
            </form>
    </div>
     </div>
    </div>
  </div>
  
  <!-- [ Modal #3 ] Forgot Password Modal-->
   <div class="modal fade" id="demo-3" tabindex="-1">
    <div class="modal-dialog">
     <div class="modal-content loginfm">
      <button type="button" class="close" data-dismiss="modal"><i class="icon-xs-o-md"></i></button>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center caps" style="color:#fff;"><strong> Forgot Password</strong></h4>
      </div>
      <div class="modal-body">
        <form action='forgetPassword.php' method='post'>
            <div class="form-group ">
                  <label style="color:#ffcc66;">Email</label>
                  <input type="email" class="form-control" name="email" placeholder="Enter Registered E-mail" style="border: 1px solid black;border-radius:5px;" required >
            </div>
            <div class="form-group text-center">
              <button type="submit" style="background-color:#ffcc66; border-radius:5px;" class="btn btn-primary" name="frgotsubmit" >Submit</button>
              </div>
       </form>
            </div>
     </div>
    </div>
  </div>     
  <!-- [ Modal #4 ] Enter Otp Modal-->
   <!--<div class="modal fade" id="demo-4" tabindex="-1">
    <div class="modal-dialog">
     <div class="modal-content loginfm">
      <button type="button" class="close" data-dismiss="modal"><i class="icon-xs-o-md"></i></button>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center caps" style="color:#fff;"><strong>Enter OTP</strong></h4>
      </div>
      <div class="modal-body">
        <form action='forgetPassword.php' method='post'>
            <input type="text" class="form-control" name="otp"  minlength="6" maxlength="6" placeholder="Enter Otp"  style="border-radius:5px; height:35px;"  required="required">
            <div class="form-group text-center">
              <button type="submit" style="background-color:#ffcc66; border-radius:5px;" class="btn btn-primary" name="frgotsubmit" >Verify Otp</button>
              </div>
       </form>
            </div>
     </div>
    </div>
  </div>-->
 <!--Modals End-->
 
 
 
 
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

