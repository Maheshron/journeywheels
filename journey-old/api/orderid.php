 <?php
               
ob_start();
session_start();
require_once '../includes/db.php';
require_once '../functions/function.php';
 require('../config.php');
require('../razorpay-php/Razorpay.php');
use Razorpay\Api\Api;

$errorMsg= "";
$amount=trim($_POST["amount"]);
$receipt_id=trim($_POST["receipt_id"]);
if(empty($receipt_id)){
    $errorMsg.="<li style='list-style:none'>Receipt Id is required</li>";
}else{
    $receipt_id=$receipt_id;
}
if(empty($amount)){
    $errorMsg.="<li style='list-style:none'>Amount is required</li>";
}else{
    $amount=$amount;
}
if(empty($errorMsg)){
                $api = new Api($keyId, $keySecret);
                $orderData = [
                    'receipt'         => $receipt_id,
                    'amount'          =>$amount * 100,
                    'currency'        => "INR",
                    'payment_capture' => 1
                ];
              
                $razorpayOrder = $api->order->create($orderData);
                $razorpayOrderId = $razorpayOrder['id'];
             $order_id = array(
							'Id'=>$razorpayOrderId
						
						);
						
								
						$response['error'] = false; 
						$response['message'] = 'Order ID'; 
						$response['user'] = $order_id; 
                        echo json_encode($response);
                        
            exit;
        }else{
            echo  json_encode(['code'=>404,'msg'=>$errorMsg]);
        }
                ?>