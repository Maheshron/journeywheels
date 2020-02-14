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
$dob = $row['dob'];
$gender = $row['gender'];
$address = $row['address'];
$nation = $row['nation'];
}
?>
<!DOCTYPE html>

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
                
                 <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12  "><!-- col-md-3 Starts -->

<div class="panel panel-default sidebar-menu" style="box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 1px 5px 0 rgba(0,0,0,0.12), 0 3px 1px -2px rgba(0,0,0,0.2);"><!-- panel panel-default sidebar-menu Starts -->
<div class="panel-heading" style="background:#ffb735"><div class="row"><div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center"><h4 id='p_title'  >PROFILE</h4> </div>  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><a href="" id='p_title' style="float:right;padding:10px" data-toggle='modal' data-target='#demo-7'  name='edit'  ><i class="fa fa-edit" style="font-size:20px"></i></a></div></div>
                                      </div>
<div class="panel-body customeracnt"><!-- panel-heading Starts -->

<?php

$customer_session = $_SESSION['email'];

$get_customer = "select * from users where email='$customer_session'";

$run_customer = mysqli_query($db,$get_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_image = $row_customer['image'];
$new_customer_image= $row_customer['image'];
$customer_image1 = $row_customer['image1'];
$new_customer_image1= $row_customer['image1'];
$customer_image2 = $row_customer['image2'];
$new_customer_image2= $row_customer['image2'];
$customer_image3 = $row_customer['image3'];
$new_customer_image3= $row_customer['image3'];
$customer_id = $row_customer['uid'];
$customer_name = $row_customer['name'];
$customer_email = $row_customer['email'];
$customer_mobile = $row_customer['mobile'];
$customer_dob= $row_customer['dob'];
$customer_gender= $row_customer['gender'];
$customer_nation= $row_customer['nation'];
$customer_address= $row_customer['address'];
$mem_name = $row_customer['mem_name'];
$mem_mobile = $row_customer['mem_mobile'];
$mem_mail = $row_customer['mem_mail'];
if(!isset($_SESSION['email'])){


}
else {
?>

<center>
  <form action='profile.php' method='post' enctype='multipart/form-data' ><!--- form Starts -->
<img src='images/profile.svg' id='outputp' class='img-responsive img-circle' style='height: 100px;width: 100px'>
<input  class='custom-file-upload' type='file'  name='c_image_p' accept='image/gif, image/jpeg, image/png' onchange='loadFilep(event)'/>
                                                                                            
</form>
</center>
                                              
<br>
     <div class='card-body'>
                <ul class='list-group shadow-none'>
           <?php     if($customer_name !=''){ ?>
               <li class='list-group-item'>
                 <div class='row'>
                <div class='col-lg-2 col-md-2 col-sm-2  col-xs-2'>
                  <div class='list-icon'>
                    <i class='fa fa-user' style='font-size:18px'></i>
                  </div> </div> <div class='col-lg-10 col-md-10 col-sm-10  col-xs-10'>
                  <div class='list-details'>
                    <span><?php echo $customer_name; ?></span>
                   
                  </div>
                  <div class='list-details'>
                    <span><?php echo $customer_mobile; ?></span>
                   
                  </div><div class='list-details'>
                    <span><?php echo $customer_email; ?></span>
                   
                  </div></div>
                </li>
<?php
                } ?>
               
                 <li class='list-group-item'>
                 <div class='row'>
                <div class='col-lg-2 col-md-2 col-sm-2  col-xs-2'>
                  <div class='list-icon'>
                    <i class='fa  fa-venus-mars'  style='font-size:18px'></i>
                  </div> 
                     </div> 
                     <div class='col-lg-10 col-md-10 col-sm-10  col-xs-10'>
                  <div class='list-details'>
                      <?php  if($customer_gender !=''){ ?>
                    <span><?php echo $customer_gender; ?></span>
                   <?php }else{ ?>
                      <span>Gender</span>
                      <?php } ?>
                  </div><div class='list-details'>
                     <?php if($customer_dob !=''){ ?>
                    <span><?php echo $customer_dob; ?></span>
                   <?php }else{ ?>
                      <span>Date Of Birth</span>
                      <?php } ?>
                  </div></div>
                </li>
                <li class='list-group-item'>
                 <div class='row'>
                <div class='col-lg-2 col-md-2 col-sm-2  col-xs-2'>
                  <div class='list-icon'>
                    <i class='fa fa-flag'  style='font-size:18px'></i>
                  </div> </div> <div class='col-lg-10 col-md-10 col-sm-10  col-xs-10'>
                  <div class='list-details'>
                   <?php if($customer_nation !=''){ ?>
                    <span><?php echo $customer_nation; ?></span>
                   <?php }else{ ?>
                      <span>Nation</span>
                      <?php } ?>
                  </div></div>
                </li>
                <li class='list-group-item'>
                 <div class='row'>
                <div class='col-lg-2 col-md-2 col-sm-2  col-xs-2'>
                  <div class='list-icon'>
                    <i class='fa fa-address-card-o'  style='font-size:18px'></i>
                  </div> </div> <div class='col-lg-10 col-md-10 col-sm-10  col-xs-10'>
                  <div class='list-details'>
                   <?php if($customer_address !=''){ ?>
                    <span><?php echo $customer_address; ?></span>
                   <?php }else{ ?>
                      <span>Address</span>
                      <?php } ?>
                  </div></div>
                </li>
                
                </ul>
                </div>
 <?php if($mem_name ==''){              
echo "<h6 class='text-center'><a href=''  data-toggle='modal' data-target='#demo-8' id='p_title'>+ Add Family/Friend</a></h6>";
}else{
  echo "<div class='card-heading text-center' id='p_title' style='padding:10px;'>Members List<a href='' id='p_title' style='float:right;' data-toggle='modal' data-target='#demo-8'  name='edit'  ><i class='fa fa-edit' style='font-size:20px'></i></a></div>
                                     
  <div class='card-body'>
                <ul class='list-group shadow-none'>";
                
               
              echo "  <li class='list-group-item'>
                 <div class='row'>
                <div class='col-lg-2 col-md-2 col-sm-2  col-xs-2'>
                  <div class='list-icon'>
                    <i class='fa fa-user' style='font-size:18px'></i>
                  </div> </div> <div class='col-lg-10 col-md-10 col-sm-10  col-xs-10'>
                  <div class='list-details'>
                    <span>$mem_name</span>
                   
                  </div>
                  <div class='list-details'>
                    <span>$mem_mobile</span>
                   
                  </div><div class='list-details'>
                    <span>$mem_mail</span>
                   
                  </div></div>
                </li>
   </ul>
                </div> 
";
}
}

?>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default sidebar-menu Ends -->

                 </div><!-- col-md-3 Ends -->

                 <div class="col-lg-9  col-md-9 col-sm-8 col-xs-12 " ><!--- col-md-9 Starts -->

                 <div class="boxaccount " ><!-- box Starts -->
                     <div class="row">
                     <!--<div class="col-md-1"></div>-->
                    <div class="col-md-10">
                        <div class="panel panel-default sidebar-menu" style="box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 1px 5px 0 rgba(0,0,0,0.12), 0 3px 1px -2px rgba(0,0,0,0.2);">
                            <div class="panel-heading text-center" style="background:#ffb735"><h4 id='p_title' >UPLOAD DOCUMENTS</h4></div>
                            <div class="panel-body customeracnt" >
                                 <form action="profile.php" method="post" enctype="multipart/form-data" ><!--- form Starts -->
                                 <div class="row">
                                     <h4 class="text-center" style="font-weight:bold">Driving License</h4>
                                     
                                     <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                                     
                                      <div class="col-lg-3 col-md-3 col-sm-5 col-xs-5 text-center">
                                          
                                           <label >
                                               <div class="card" style="background-color:#f39e04;">
                                              <img id="output1" src="images/<?php echo $customer_image?>" style="height:100px;width:100px" >
                                               <input  class="custom-file-upload" type="file"  name="c_image" accept="image/gif, image/jpeg, image/png" onchange="loadFile1(event)"/>
                                                  </div>
                                          </label>
                                          <h6>Front Side</h6>
                                          </div>
                                           <div class="col-lg-3 col-md-3 col-sm-5 col-xs-5 text-center">
                                           <label>
                                                  <div class="card" style="background-color:#f39e04">
                                             <img id="output" src="images/<?php echo $customer_image1?>" style="height:100px;width:100px">
                                               <input  class="custom-file-upload" type="file"  name="c_image1" accept="image/gif, image/jpeg, image/png" onchange="loadFile(event)"/>
                                                  </div>
                                          </label>
                                          <h6>Back Side</h6>
                                          </div>
                                          
                                          </div>
                                           <div class="row">
                                     <h4 class="text-center" style="font-weight:bold">ID Proof(s)</h4>
                                     
                                     <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                                     
                                      <div class="col-lg-3 col-md-3 col-sm-5 col-xs-5 text-center">
                                          
                                           <label >
                                                  <div class="card" style="background-color:#f39e04">
                                              <img id="output2" src="images/<?php echo $customer_image2?>" style="height:100px;width:100px" >
                                               <input  class="custom-file-upload" type="file"  name="c_image2" accept="image/gif, image/jpeg, image/png" onchange="loadFile2(event)"/>
                                                  </div>
                                          </label>
                                         
                                          </div>
                                           <div class="col-lg-3 col-md-3 col-sm-5 col-xs-5 text-center">
                                           <label >
                                                  <div class="card" style="background-color:#f39e04">
                                              <img id="output3" src="images/<?php echo $customer_image3?>" style="height:100px;width:100px" >
                                               <input  class="custom-file-upload" type="file"  name="c_image3" accept="image/gif, image/jpeg, image/png" onchange="loadFile3(event)"/>
                                                 </div> 
                                          </label>
                                        
                                          </div>
                                          
                                         
                                          
                                          </div>
                                          <div class="row text-center">
                                           <button type="submit" class="btn btn-success" name="imagesubmit" style="margin: 40px 0 0 10px;background-color:#000" >Upload</button>
                                         </div>
                                          </form><br>
                                           <h5 style="font-weight:bold">Guidelines to Follow</h6>
                                           <ul style="list-style:none">
                                               <li>* Upload both sides of the Driving License in appropriate fields.</li>
                                               <li>* Make sure the photocopy of the original Driving License is uploaded.</li>
                                               <li>* ID proof can be Adhaar card, Pan card, Passport, College or Office ID.</li>
                                               <li>* Make sure photos are clear and visible.</li>
                                               <li>* Passport is mandatory for hiring superbikes.</li>
                                           </ul>
                                </div>
                   </div>

                        </div>
                   </div>
              </div><!-- box Ends -->
             
                  </div><!--- col-md-9 Ends -->
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
                                               var loadFilep = function(event) {
                                               var outputp = document.getElementById('outputp');
                                                outputp.src = URL.createObjectURL(event.target.files[0]);
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
                                                 var loadFile = function(event) {
                                               var output = document.getElementById('output');
                                                output.src = URL.createObjectURL(event.target.files[0]);
                                                };
                                          </script>
 <div class="modal fade" id="demo-7" tabindex="-1">
    <div class="modal-dialog ">
     <div class="modal-content loginfm">
      <button type="button" class="close" data-dismiss="modal"><i class="icon-xs-o-md"></i></button>
      <div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color:#fff;">&times;</span></button>
        <h4 class="modal-title text-center caps" style="color:#fff;"><strong>Profile</strong></h4>
      </div>
       <div class="modal-body">
          <form class="log" method="post" >
             <div class="display-error" style="display: none;color:red;"></div>
 <div class="row"> <div class="col-lg-6 ">
                                                <div class="form-group ">
                                                <label style="color:#ffcc66;">Name</label>
                                                <input type="text" class="form-control" name="name" value="<?php echo $name;?>" style="border-radius:5px;"  >
                                            </div></div><div class="col-lg-6 ">
                                            <div class="form-group">
                                                <label style="color:#ffcc66;">Mobile Number</label>
                                                <input type="text" class="form-control" maxlength="10" pattern="[0-9]{10}"  name="mobile"  value="<?php echo $mobile;?>" style="border-radius:5px;"  >
                                              </div> </div> </div>
                                             <div class="form-group"> 
                                                <label style="color:#ffcc66;">Gender</label>
                                                 <div class="radio">
                                              
      <label class="radio-inline" style="color:white;font-weight:bold"><input type="radio" name="optradio"  <?php if ($gender == 'Male') { echo 'checked';} ?> value="Male">Male</label>
      <label class="radio-inline" style="color:white;font-weight:bold"><input type="radio" name="optradio"  <?php if ($gender == 'Female') { echo 'checked';} ?> value="Female" >Female</label>
    </div> 
    </div> 
                                               
                                              <div class="row"> <div class="col-lg-6 ">
                                                <div class="form-group ">
                                                <label style="color:#ffcc66;">Date of Birth</label>
                                            <input type="text" class="form-control px-datepicker" name="dorpof_date"   style="border-radius:5px;"  value="<?php echo $dob;?>"/>
                                                                                                  </div></div><div class="col-lg-6 ">
                                            <div class="form-group">
                                                <label style="color:#ffcc66;">Nationality</label>
                                                  <select class="form-control" name="nation"   value="<?php echo $nation;?>" style="border-radius:5px;" >
                                                  <option>Indian</option>
                                                  </select>
                                              </div> </div> </div>
                                              <div class="form-group">
                                                <label style="color:#ffcc66;">Address</label>
                                               <textarea class="form-control" rows="5" id="comment" name="address" style="border-radius:5px;" ><?php echo $address;?></textarea>    
                                               </div>
                            <div class="form-group text-center">
            <button type="submit" class="btn btn-primary" value="Sign In" name="edit"  style="background-color:#ffcc66;border-radius:5px;">Edit Profile</button></div>
            </form>
              </div>
     </div>
    </div>
  </div>
   <div class="modal fade" id="demo-8" tabindex="-1">
    <div class="modal-dialog ">
     <div class="modal-content loginfm">
      <button type="button" class="close" data-dismiss="modal"><i class="icon-xs-o-md"></i></button>
      <div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color:#fff;">&times;</span></button>
        <h4 class="modal-title text-center caps" style="color:#fff;"><strong>Add Member</strong></h4>
      </div>
       <div class="modal-body">
          <form class="log" method="post" >
             <div class="display-error" style="display: none;color:red;"></div>

                                                <div class="form-group ">
                                                <label style="color:#ffcc66;">Name</label>
                                                <input type="text" class="form-control" name="mem_name"  value="<?php echo $mem_name;?>" style="border-radius:5px;"  >
                                            </div>
                                            <div class="form-group">
                                                <label style="color:#ffcc66;">Mobile Number</label>
                                                <input type="text" class="form-control" maxlength="10" pattern="[0-9]{10}"  name="mem_mobile" value="<?php echo $mem_mobile;?>"  style="border-radius:5px;"  >
                                              </div>
                                              <div class="form-group">
                                                <label style="color:#ffcc66;">Email</label>
                                                <input type="email" class="form-control" name="mem_mail"  value="<?php echo $mem_mail;?>"  style="border-radius:5px;"  >
                                              </div>
                            <div class="form-group text-center">
            <button type="submit" class="btn btn-primary" value="Sign In" name="mem_edit" style="background-color:#ffcc66;border-radius:5px;">Add</button></div>
            </form>
              </div>
     </div>
    </div>
  </div>
    <?php
     if(isset($_POST['edit'])) {
          $update_id = $customer_id;
       $p_name = $_POST['name'];
       $p_optradio = $_POST['optradio'];
        $p_dorpof_date = $_POST['dorpof_date'];
         $p_nation= $_POST['nation'];
       $p_mobile = $_POST['mobile'];
          $p_address = $_POST['address'];
        $update_edit= "update users set name='$p_name',mobile='$p_mobile',gender='$p_optradio',dob='$p_dorpof_date',nation='$p_nation',address='$p_address' WHERE uid='$update_id'";
        $run_c = mysqli_query($db, $update_edit);
        if ($run_c) {
            // echo "<script>alert('Your account has been updated')</script>";
            echo "<script>window.location='profile.php'</script>";
        }
    }
 if(isset($_POST['mem_edit'])) {
          $update_id = $customer_id;
       $p_mem_name = $_POST['mem_name'];
       $p_mem_mobile= $_POST['mem_mobile'];
        $p_mem_mail = $_POST['mem_mail'];
       
        $update_edit= "update users set mem_name='$p_mem_name ',mem_mobile='$p_mem_mobile',mem_mail='$p_mem_mail' WHERE uid='$update_id'";
        $run_c = mysqli_query($db, $update_edit);
        if ($run_c) {
            // echo "<script>alert('Your account has been updated')</script>";
            echo "<script>window.location='profile.php'</script>";
        }
    }
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
                                                <label ><input type="checkbox" class="logch"  onclick="log1Function()"><span style="color: black" class="logsp">&nbsp;Show Password</span></label>
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
                    <input type="email" class="form-control el" name="remail" placeholder="Enter Valid E-mail" style="border: 1px solid black;" required>
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
    // $(document).ready(function(){

    //     $('#type1').on("change",function () {
    //         var subcategoryId = $(this).find('option:selected').val();

    //         $.ajax({
    //             url: "ajax.php",
    //             type: "POST",
    //             data: "subcategoryId="+subcategoryId,
    //             success: function (response) {
    //                 console.log(response);
    //                 $("#type2").html(response);
    //             },
    //         });
    //     });

    // });

</script>
</body>
</html>