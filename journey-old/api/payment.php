<?php

require_once ('../includes/dbconnection.php');
require_once ('../includes/db.php');
require_once ('../functions/function.php');
 require('../config.php');
require('../razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
$errorMsg ="";
 $type_id=$_POST['type_id'];
  $razorpayOrderId=$_POST['razorpay_order_id'];
  $payment_id=$_POST['payment_id'];
      $status=$_POST['status'];
        $product_id=$_POST['id'];
        $uid=$_POST['uid'];
        $amount=$_POST['amount'];
        $email=$_POST['email'];
        $contact=$_POST['contact'];
        $name=$_POST['name'];
        $rent=$_POST['rent'];
        $tax=$_POST['tax'];
         $tax1=$_POST['tax1'];
        $location=$_POST['location'];
        $hel=$_POST['hel'];
        $product_title=$_POST['product_title'];
        $pick_location=$_POST['pick_location'];
        $pick_datetime=$_POST['pick_datetime'];
        $drop_location=$_POST['drop_location'];
        $drop_datetime=$_POST['drop_datetime'];

                
if(empty($product_id)){
    $errorMsg .="<li style='list-style:none'>Id is required </li>";

}else{
    $product_id=$product_id;

}
if(empty($uid)){
    $errorMsg .="<li style='list-style:none'>Id is required </li>";

}else{
    $uid=$uid;

}

if(empty($payment_id)){
    $errorMsg .="<li style='list-style:none'>Payment Id is required </li>";

}else{
    $payment_id=$payment_id;

}
if($type_id==1){
if(empty($errorMsg)) {
    if($status=="success"){
  $update_customer = "INSERT INTO customers_orders (razorpay_order_id,payment_id,customer_id,vehicle_title,vehicle_id,pick_location,pick_datetime,drop_location,drop_datetime,order_date,amount,email,contact_no,name,location,rent,tax,tax1,hel) 
        VALUES ('$razorpayOrderId','$payment_id','$uid','$product_title','$product_id','$pick_location','$pick_datetime','$drop_location','$drop_datetime',NOW(),'$amount','$email','$contact','$name','$location','$rent','$tax','$tax1','$hel')";
        $run_customer = mysqli_query($db, $update_customer);
        if ($run_customer) {
       
								
						$response['error'] = false; 
						$response['message'] = 'Payment Success'; 
						$response['orderuser'] = 'Order Inserted'; 
                        echo json_encode($response);
                        
            exit;
        }else{
            echo  json_encode(['code'=>400]);
            exit;
        }
    }
else{
    echo  json_encode(['code'=>404,'msg'=>"Something went wrong"]);
}
}
}
if($type_id==2){
if(empty($errorMsg)) {
    if($status=="success"){
  $update_customer = "INSERT INTO cars_orders (razorpay_order_id,payment_id,customer_id,vehicle_title,vehicle_id,pick_location,pick_datetime,drop_location,drop_datetime,order_date,amount,email,contact_no,name,location,rent,tax,tax1) 
        VALUES ('$razorpayOrderId','$payment_id','$uid','$product_title','$product_id','$pick_location','$pick_datetime','$drop_location','$drop_datetime',NOW(),'$amount','$email','$contact','$name','$location','$rent','$tax','$tax1')";
        $run_customer = mysqli_query($db, $update_customer);
        if ($run_customer) {
       
								
						$response['error'] = false; 
						$response['message'] = 'Payment Success'; 
						$response['orderuser'] = 'Order Inserted'; 
                        echo json_encode($response);
                        
            exit;
        }else{
            echo  json_encode(['code'=>400]);
            exit;
        }
    }
else{
    echo  json_encode(['code'=>404,'msg'=>"Something went wrong"]);
}
}
}
if($type_id==3){
if(empty($errorMsg)) {
    if($status=="success"){
  $update_customer = "INSERT INTO bicycles_orders (razorpay_order_id,payment_id,customer_id,vehicle_title,vehicle_id,pick_location,pick_datetime,drop_location,drop_datetime,order_date,amount,email,contact_no,name,location,rent,tax,tax1) 
        VALUES ('$razorpayOrderId','$payment_id','$uid','$product_title','$product_id','$pick_location','$pick_datetime','$drop_location','$drop_datetime',NOW(),'$amount','$email','$contact','$name','$location','$rent','$tax','$tax1')";
        $run_customer = mysqli_query($db, $update_customer);
        if ($run_customer) {
       
								
						$response['error'] = false; 
						$response['message'] = 'Payment Success'; 
						$response['orderuser'] = 'Order Inserted'; 
                        echo json_encode($response);
                        
            exit;
        }else{
            echo  json_encode(['code'=>400]);
            exit;
        }
    }
else{
    echo  json_encode(['code'=>404,'msg'=>"Something went wrong"]);
}
}
}
?>