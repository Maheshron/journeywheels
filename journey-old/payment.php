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
if(isset($_POST['submit'])){
    if (!isset($_SESSION['email'])){
        echo "<script> window.location='SignUp.php'</script>";
    }
    else {
        echo "<script> window.location='products.php'</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script type="text/javascript" src="jquery.timepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="jquery.timepicker.css" />
    <script type="text/javascript" src="bootstrap-datepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap-datepicker.css" />

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="/jquery-ui.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">

    <!-- Updated stylesheet url -->
    <link rel="stylesheet" href="//jonthornton.github.io/jquery-timepicker/jquery.timepicker.css">

    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>

    <!-- Updated JavaScript url -->
    <script src="//jonthornton.github.io/jquery-timepicker/jquery.timepicker.js"></script>


    <script>
        $( function() {
            $( "#datepicker" ).datepicker();
        } );
        $( function() {
            $( "#datepicker1" ).datepicker();
        } );


    </script>
    <script>
        $( function() {
            $('#scrollDefaultExample').timepicker({'scrollDefault': 'now'});
        });
        $( function() {
            $('#scrollDefaultExample1').timepicker({'scrollDefault': 'now'});
        });
    </script>
</head>
<body style="background-color: snow">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

    <!-- Links -->
    <ul class="navbar-nav ">
        <li class="nav-item">
            <a class="nav-link" style="color:white;font-weight: bold;margin-left: 30px" href="index.php">Home</a>
        </li>
        <li class="nav-item" >
            <?php
            if(!isset($_SESSION['email'])){
                echo    "<a href=''  class='btn login' style='margin-left: 30px;color: #FFFFFF;font-weight: bolder' data-toggle='modal' data-target='#myModal'>Login</a>";
            }else {
                echo  "<a href=''  class='btn ' style='color: #FFFFFF;font-weight: bolder;margin-left:450px;margin-top: '> Welcome $email </a>";

            }
            ?>
        </li>
        <div class="modal fade" id="myModal" >
            <div class="modal-dialog modal-dialog-centered logmodal">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <div class="container">
                            <h3 class="modal-title text-center" style="color: black;font-weight:bold">Login</h3>
                        </div>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">

                        <form class="log" id="loginForm1" method="post" >

                            <div class="display-error" style="display: none;"></div>

                            <div class="form-group ">
                                <label >Email</label>
                                <input type="email" class="form-control" name="lemail" placeholder=" Enter a valid email" style="border: 1px solid black;" required >
                            </div>
                            <div class="form-group ">
                                <label>Password</label>
                                <input type="password" class="form-control" name="lpassword"  id="Login1" placeholder="Enter your password" style="border: 1px solid black" required >
                                <label ><input type="checkbox" class="logch" style=" " onclick="log1Function()"><span style="color: black" class="logsp">&nbsp;Show password</span></label>
                            </div>

                            <button type="submit" class="btn  " value="sign In" style="margin-left:180px;background-color: black; color: white; ">LOGIN</button>
                        </form>

                    </div>



                </div>
            </div>
        </div>
        <li class="nav-item">
            <?php
            if(!isset($_SESSION['email'])){
                echo    "
            <a class='nav-link' style='color:white;font-weight: bold;margin-left: 30px' href='SignUp.php'>Sign Up</a>";
            }else {
                echo  "<a href='logout.php'  class='btn ' style='color: #FFFFFF;font-weight: bolder;margin-left:450px;margin-top: '> Log Out </a>";

            }
            ?>
        </li>
    </ul>
</nav>
<h1 style="margin-top: 200px;margin-left: 500px">Welcome to Payment Page</h1>
</body>
</html>