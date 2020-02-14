<?php

require_once ('../includes/dbconnection.php');
require_once ('../includes/db.php');
require_once ('../functions/function.php');

$errorMsg ="";
 
        $uid=$_POST['uid'];
        $c_image = $_FILES['c_image']['name'];
        $c_image_tmp = $_FILES['c_image']['tmp_name'];
        
        $c_image1 = $_FILES['c_image1']['name'];
        $c_image_tmp1 = $_FILES['c_image1']['tmp_name'];
    
        $c_image2 = $_FILES['c_image2']['name'];
        $c_image_tmp2 = $_FILES['c_image2']['tmp_name'];
        
        $c_image3 = $_FILES['c_image3']['name'];
        $c_image_tmp3 = $_FILES['c_image3']['tmp_name'];
        
        if(move_uploaded_file($c_image_tmp,"../images/$c_image")){
            
        }else{
             $errorMsg .="<li style='list-style:none'>Image1 Upload Error </li>";
        }
        if(move_uploaded_file($c_image_tmp1,"../images/$c_image1")){
            
        }else{
             $errorMsg .="<li style='list-style:none'>Image2 Upload Error </li>";
        }
        if(move_uploaded_file($c_image_tmp2,"../images/$c_image2")){
            
        }else{
             $errorMsg .="<li style='list-style:none'>Image3 Upload Error </li>";
        }
        if(move_uploaded_file($c_image_tmp3,"../images/$c_image3")){
            
        }else{
             $errorMsg .="<li style='list-style:none'>Image4 Upload Error </li>";
        }
        $name = $_POST['name'];
        $gender= $_POST['gender'];
        $dob = $_POST['dob'];
        $nation= $_POST['nation'];
        $mobile = $_POST['mobile'];
        $address = $_POST['address'];
        $mem_name = $_POST['mem_name'];
        $mem_mobile= $_POST['mem_mobile'];
        $mem_mail = $_POST['mem_mail'];
if(empty($uid)){
    $errorMsg .="<li style='list-style:none'>Id is required </li>";

}else{
    $uid=$uid;

}

if(empty($errorMsg)) {
  $update_customer = "update users set image='$c_image',image1='$c_image1',image2='$c_image2',image3='$c_image3',name='$name',mobile='$mobile',gender='$gender',dob='$dob',nation='$nation',address='$address',mem_name='$mem_name ',mem_mobile='$mem_mobile',mem_mail='$mem_mail' where uid='$uid'";
        $run_customer = mysqli_query($db, $update_customer);
        if ($run_customer) {
       
						$response['error'] = false; 
						$response['message'] = 'Upload Success'; 
						$response['orderuser'] = 'Profile Inserted'; 
                        echo json_encode($response);
                        
            exit;
        }else{
            echo  json_encode(['code'=>400,'msg'=>"Upload Failed"]);
            exit;
        }
}
else{
    echo  json_encode(['code'=>404,'msg'=>"Something went wrong"]);
}



?>