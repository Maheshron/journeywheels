<?php
ob_start();
session_start();
require_once '../includes/db.php';
require_once '../functions/function.php';

$errorMsg= "";
$uid=trim($_POST["uid"]);

if(empty($uid)){
    $errorMsg .= "<li style='list-style:none'>UID required</li>";
}else{
    $uid=$uid;
}

if(empty($errorMsg)){
      $query = "SELECT * FROM users where uid=$uid ";
       $run_customer = mysqli_query($db, $query);
    $row = mysqli_fetch_array($run_customer);
    $name = $row['name'];
    $email = $row['email'];
    $password = $row['password'];
    $mobile = $row['mobile'];
    $dob1 = $row['dob'];
    $gender1 = $row['gender'];
    $nation1 = $row['nation'];
    $address1= $row['address'];
    $mem_name1 = $row['mem_name'];
    $mem_mobile1 = $row['mem_mobile'];
    $mem_mail1 = $row['mem_mail'];
    $image1 = $row['image'];
    $image11 = $row['image1'];
    $image21 = $row['image2'];
    $image31 = $row['image3'];
    if($dob1!=""){
        $dob=$dob1;;
    }else{
        $dob="Not Uploaded";
    }
     if($gender1!=""){
        $gender=$gender1;;
    }else{
        $gender="Not Uploaded";
    }
    if($nation1!=""){
        $nation=$nation1;;
    }else{
        $nation="Not Uploaded";
    }
    if($address1!=""){
        $address=$address1;;
    }else{
        $address="Not Uploaded";
    }
    if($mem_name1!=""){
        $mem_name=$mem_name1;;
    }else{
        $mem_name="Not Uploaded";
    }
    if($mem_mobile1!=""){
        $mem_mobile=$mem_mobile1;;
    }else{
        $mem_mobile="Not Uploaded";
    }
    if($mem_mail1!=""){
        $mem_mail=$mem_mail1;;
    }else{
        $mem_mail="Not Uploaded";
    }
    if($image1!="add.png"){
        $image='http://journeywheels.in/images/'.$image1;
    }else{
        $image="Not Uploaded";
    }
    if($image11!="add.png"){
        $image1='http://journeywheels.in/images/'.$image11;
    }else{
        $image1="Not Uploaded";
    }
    if($image21!="add.png"){
        $image2='http://journeywheels.in/images/'.$image21;;
    }else{
        $image2="Not Uploaded";
    }
    if($image31!="add.png"){
        $image3='http://journeywheels.in/images/'.$image31;;
    }else{
        $image3="Not Uploaded";
    }

                   $user = array(
							'Id'=>$uid, 
							'Name'=>$name,
							'Email'=>$email,
						
							'Mobile'=>$mobile,
							'Date Of Birth'=>$dob,
							'Gender'=>$gender,
							'Nation'=>$nation,
							'Address'=>$address,
							'Member Name'=>$mem_name,
							'Member Mobile'=>$mem_mobile,
							'Member Email'=>$mem_mail,
							'License Image'=>$image,
							'License Image1'=>$image1,
							'Id Proof Image'=>$image2,
								'Id Proof Image2'=>$image3,
						
						
						);
					
						$response['error'] = false; 
						$response['message'] = 'User Details'; 
						$response['Profile Users'] = $user; 
                        echo json_encode($response);
                        exit;
   
}else{
                        $response['error'] = true; 
						$response['message'] = 'Somthing Went Wrong';
                        echo json_encode($response);
}
?>