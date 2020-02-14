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
        echo  "<a href='login.php'  class='login' style='color:white;'>Login | Register</a>";
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
        echo  "<a href='login.php'  class='login' style='color:white;font-size:15px;font-weight:bold;padding:10px;border-radius:2px;'>Login | Register</a>";
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

