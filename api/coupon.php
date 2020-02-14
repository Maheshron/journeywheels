<?php
ob_start();
session_start();
require_once '../includes/db.php';
require_once '../functions/function.php';

$errorMsg= "";
$coupon=trim($_POST["coupon"]);

if(empty($coupon)){
    $errorMsg .= "<li style='list-style:none'>Coupon required</li>";
}else{
    $coupon=$coupon;
}

if(empty($errorMsg)){
      $query = "select * from coupons where coupon='$coupon'";
       $run_customer = mysqli_query($db, $query);
    $row = mysqli_fetch_array($run_customer);
    if (mysqli_num_rows($run_customer)>0){
    $code=$row['offer'];
    $offer=$code/100;

                   $discount = array(
							'Offer'=>$offer, 
							'Code'=>$coupon
						
						);
					
						$response['error'] = false; 
						$response['message'] = 'Promocode Applied Successfully'; 
						$response['Offer Users'] = $discount; 
                        echo json_encode($response);
                        exit;
    }
    else
    {
                        $response['error'] = true; 
						$response['message'] = 'Invalid Promocode';
                        echo json_encode($response);
    }
   
}
else
{
                        $response['error'] = true; 
						$response['message'] = 'Please Insert some promocode value';
                        echo json_encode($response);
}
?>