<?php

include ("./includes/db.php");

include("./functions/functions.php");
if(isset($_POST['categoryId'])) {
    $categoryId = $_POST['categoryId'];
     if($categoryId==1){
    echo "<option value=''>Pick-Up Vijayawada Location</option>";
    echo "<option value='Journey Wheels Office'>Journey Wheels Office</option>";
     echo "<option value='Railway Station'>Railway Station</option>";
      echo "<option value='Bus Stand'>Bus Stand</option>";
       echo "<option value='PVR'>PVR</option>";
        echo "<option value='PVP'>PVP</option>";
         echo "<option value='BRTC FOOD JN'>BRTC FOOD JN</option>";
    }
    
    if($categoryId==3){
    echo "<option value=''>Pick-Up Nellore Location</option>";
    echo "<option value='Journey Wheels Office'>Journey Wheels Office</option>";
    //  echo "<option value='Railway Station'>Railway Station</option>";
    //   echo "<option value='Bus Stand'>Bus Stand</option>";
    }
     if($categoryId==2){
    echo "<option value=''>Pick-Up Tirupati Location</option>";
    echo "<option value='Journey Wheels Office'>Journey Wheels Office</option>";
     echo "<option value='Railway Station'>Railway Station</option>";
      echo "<option value='Bus Stand'>Bus Stand</option>";
    }
    if($categoryId==4){
    echo "<option value=''>Pick-Up Rajahmundry Location</option>";
    echo "<option value='Journey Wheels Office'>Journey Wheels Office</option>";
    //  echo "<option value='Railway Station'>Railway Station</option>";
    //   echo "<option value='Bus Stand'>Bus Stand</option>";
    }
    if($categoryId==5){
    echo "<option value=''>Pick-Up Vizag Location</option>";
    echo "<option value='Journey Wheels Office'>Journey Wheels Office</option>";
     echo "<option value='NAD Junction'>NAD Junction</option>";
    //   echo "<option value='Vizag Address3'>Vizag Address3</option>";
    }
     if($categoryId==6){
    echo "<option value=''>Pick-Up Guntur Location</option>";
    echo "<option value='Journey Wheels Office'>Journey Wheels Office</option>";
     echo "<option value='Railway Station'>Railway Station</option>";
       echo "<option value='Bus Stand'>Bus Stand</option>";
    }
   
}
if(isset($_POST['categoryId1'])) {
    $categoryId1 = $_POST['categoryId1'];
     if($categoryId1==1){
    echo "<option value=''>Drop-Off Vijayawada Location</option>";
    echo "<option value='Journey Wheels Office'>Journey Wheels Office</option>";
     echo "<option value='Railway Station'>Railway Station</option>";
      echo "<option value='Bus Stand'>Bus Stand</option>";
    }
    if($categoryId1==3){
    echo "<option value=''>Drop-Off Nellore Location</option>";
    echo "<option value='Journey Wheels Office'>Journey Wheels Office</option>";
    //  echo "<option value='Railway Station'>Railway Station</option>";
    //   echo "<option value='Bus Stand'>Bus Stand</option>";
    }
     if($categoryId1==2){
    echo "<option value=''>Drop-Off Tirupati Location</option>";
     echo "<option value='Journey Wheels Office'>Journey Wheels Office</option>";
     echo "<option value='Railway Station'>Railway Station</option>";
      echo "<option value='Bus Stand'>Bus Stand</option>";
    }
    if($categoryId1==4){
    echo "<option value=''>Drop-Off Rajahmundry Location</option>";
    echo "<option value='Journey Wheels Office'>Journey Wheels Office</option>";
    //  echo "<option value='Railway Station'>Railway Station</option>";
    //   echo "<option value='Bus Stand'>Bus Stand</option>";
    }
    if($categoryId1==5){
    echo "<option value=''>Drop-Off Vizag Location</option>";
    echo "<option value='Journey Wheels Office'>Journey Wheels Office</option>";
     echo "<option value='NAD Junction'>NAD Junction</option>";

    }
      if($categoryId1==6){
    echo "<option value=''>Drop-Off Guntur Location</option>";
    echo "<option value='Journey Wheels Office'>Journey Wheels Office</option>";
     echo "<option value='Railway Station'>Railway Station</option>";
       echo "<option value='Bus Stand'>Bus Stand</option>";
    }
   
}

if(isset($_POST['categoryIdd'])) {
    $categoryIdd = $_POST['categoryIdd'];
    $Idd = $_POST['Idd'];
     if($categoryIdd==2){
   
    echo '<h6>Extra Helimet<span style="float: right"><i class="fa fa-inr"></i>100</span></h6';
         }
    
    
   
}
 
                                           if(isset($_POST['submit'])) {
        $update_id = $_POST['id'];

        $c_image = $_FILES['c_image']['name'];

        $c_image_tmp = $_FILES['c_image']['tmp_name'];

        move_uploaded_file($c_image_tmp,"images/$c_image");
        $update_c = "update users set image='$c_image' WHERE uid='$update_id'";
        $run_c = mysqli_query($db, $update_c);
        if ($run_c) {
            // echo "<script>alert('Your account has been updated')</script>";
            echo "<script>window.open('profile.php','_self')</script>";
        }
    }

?>