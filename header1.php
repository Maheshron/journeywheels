<style>
 @media only screen and (min-width: 320px) and (max-width: 479px) {
     .navbar-brand{
	          width: 220px;
	      }
       }</style>
<body>
    <!-- LOADER -->
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
                    <a class="navbar-brand" href="../index.php"><img src="../images/logo1.jpg" alt="logo"></a>
                    <div class="container"  style="margin-top: -80px;float: right">
        
                    </div>

                </div>

                <div class="row ">
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse no-padding" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="" id="nav-login-btn"> <?php
        if (!isset($_SESSION['email'])) {
        echo  "<a href=''  class='login' style='color:white;' data-toggle='modal' data-target='#demo-1'>Login | Register</a>";
        }else{ ?>
       <li class="dropdown" > <a href="" class="dropdown-toggle"  data-toggle="dropdown" style='color:white;font-size:16px;font-weight:400;padding:10px;border-radius:2px;'><?php echo $name; ?> <i class="fa fa-angle-down"></i></a>
              <ul class="dropdown-menu ">
                  <li class="dropdown-submenu" >
                                    <a href="../profile.php"  style="color:black;font-size:15px" >My Profile</a>
                                      <a href=""  style="color:black;font-size:15px" >My Bookings</a>
                                 <a href="../logout.php" style="color:black;font-size:15px" >Logout</a>
                                    </li>
                                    </ul>
                                    </li>
              <?php }
  ?>
                     </li>
                            <li><a href="index.html">HOME</a></li>
                            <li><a href="#vehicle_section">our vehicle    </a></li>
    
                            <li><a href="aboutus.html">ABOUT US  </a></li>
                            <li><a href="#feeds">PASSENGER FEED </a></li>
                             <li><a href="#feeds">CLIENT FEED </a></li>
                               <li><a href="#feeds">PARTNER WITH US </a></li>
                            <li><a href="#footer">CONTACT US</a></li>
                           
                                    <li><a href="terms.html">Terms & Conditions </a></li>
                                    <li><a href="privacy_policy.html">Privacy Policy</a></li>
                            <!--<li class="dropdown">-->
                            <!--    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>-->
                            <!--    <ul class="dropdown-menu">-->
                            <!--        <li><a href="index.html">Home</a></li>-->
                            <!--        <li><a href="index_v2.html">Home_v2</a></li>-->
                            <!--        <li><a href="aboutus.html">About Us</a></li>-->
                            <!--        <li><a href="service.html">Services</a></li>-->
                            <!--        <li><a href="drivers.html">Drivers</a></li>-->
                            <!--        <li><a href="vehicle_info.html">Vehicle Info</a></li>-->
                            <!--        <li role="separator" class="divider"></li>-->
                            <!--        <li><a href="blog.html">Blog</a></li>-->
                            <!--        <li><a href="blog_right_sidebar.html">Blog Right Sidebar</a></li>-->
                            <!--        <li><a href="singleblog.html">Single Blog</a></li>-->
                            <!--        <li role="separator" class="divider"></li>-->
                            <!--        <li><a href="faqs.html">FAQs </a></li>-->
                            <!--        <li><a href="404.html">404 Not Found </a></li>-->
                            <!--        <li role="separator" class="divider"></li>-->
                            <!--        <li><a href="terms.html">Terms & Conditions </a></li>-->
                            <!--        <li><a href="privacy_policy.html">Privacy Policy</a></li>-->
                            <!--    </ul>-->
                            <!--</li>-->
                        </ul>
                        <a href="" class="callus btn btn-default btn-rounded">
                            <i class="fa fa-headphones"> </i> 00 123 456 789</a>
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
                                      <a href=""  style="color:black;font-size:15px" >My Bookings</a>
                                 <a href="logout.php" style="color:black;font-size:15px" >Logout</a>
                                    </li>
                                    </ul>
                                    </li>
              <?php }
  ?>
                         
                        <li><a href="https://www.facebook.com/journeywheelsoffical/"  class="fa fa-facebook-square"></a> </li>
                        <li><a href="https://www.twitter.com/journey_wheels" class="fa fa-twitter-square"></a> </li>
                        <li><a href="https://www.instagram.com/journey_wheels/" class="fa fa-instagram"></a> </li>
                      
                    </ul>
                    
                    
                    <br>
                     
                </div>

            </div>
            <!-- /.container -->
        </nav>
    </header>
   <!--Modals Start -->
   <!-- [ Modal #1 ]  Login Modal-->
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
             <div class="display-error" style="display: none;color:red;"></div>

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

                                           
                                       
            <button type="submit" class="btn btn-primary "value="sign In" style="background-color:#ffcc66; border-radius:5px;">Login</button><h5 style="display:inline;font-weight:bold; color:#fff;"> OR </h5>
            <button type="button" class="btn btn-primary" style="background-color:#ffcc66; border-radius:5px;"  data-toggle="modal" data-target="#demo-2" style="display:inline" data-dismiss="modal" >Create New Account</button>
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
              
  <div class="display-error" style="display: none;color:red;"></div>
                 <div class="form-group  ">
                                                <label style="color:#ffcc66;">Full Name</label>
                                                <input type="text" class="form-control" name="rname" placeholder="Enter Your Name" style="border-radius:5px; height:35px;"  >
                                                
                                               
                                            </div>
                                                <div class="form-group ">
                                                <label style="color:#ffcc66;">Email</label>
                                                <input type="email" class="form-control" name="remail" placeholder="Enter Registered E-mail" style="border-radius:5px; height:35px;"  >
                                                
                                               
                                            </div>
                                            <div class="form-group ">
                                                <label style="color:#ffcc66;">Mobile</label>
                                                <input type="text" class="form-control" name="rmobile"  maxlength="10" pattern="[0-9]{10}"  placeholder="Enter Your Password"  style="border-radius:5px; height:35px;"  >
                                                
                                            </div>
                                            <div class="form-group ">
                                                <label style="color:#ffcc66;">Password</label>
                                                <input type="password" class="form-control" name="rpassword"  placeholder="Enter Your Password"  style="border-radius:5px; height:35px;"  >
                                                
                                            </div>
                                            <div class="form-group ">
                                                <label style="color:#ffcc66;">Confirm Password</label>
                                                <input type="password" class="form-control" name="rcpassword"  placeholder="Confirm Password"  style="border-radius:5px; height:35px;"  >
                                                
                                            </div>
                                            <div class="form-group ">
                                                <label style="color:#ffcc66;">Driving Licence Number</label>
                                                <input type="text" class="form-control" name="rdriving"  placeholder="Enter Your Driving Licence Number"  style="border-radius:5px; height:35px;"  >
                                                
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
  
</body>
