<?php
ob_start();
session_start();
require_once '../includes/db.php';
require_once '../functions/function.php';

$errorMsg= "";
$customer_id=trim($_POST["customer_id"]);
$type_id=trim($_POST["type_id"]);

if(empty($customer_id)){
    $errorMsg .= "<li style='list-style:none'>UID required</li>";
}else{
    $customer_id=$customer_id;
}
if(empty($type_id)){
    $errorMsg .= "<li style='list-style:none'>UID required</li>";
}else{
    $type_id=$type_id;
}
if($type_id==1){
if(empty($errorMsg)){
      $query = "SELECT * FROM customers_orders where customer_id=$customer_id ";
       $run_customer = mysqli_query($db, $query);
        if (mysqli_num_rows($run_customer) > 0) {
        $orders_arr=array();
        $orders_arr["records"]=array();
    while ($row = mysqli_fetch_array($run_customer)){
    $razorpay_order_id = $row['razorpay_order_id'];
    $payment_id= $row['payment_id'];
    $vehicle_title =trim($row['vehicle_title']);
    $vehicle_id = $row['vehicle_id'];
    $pick_location = $row['pick_location'];
    $pick_datetime= $row['pick_datetime'];
    $drop_location= $row['drop_location'];
    $drop_datetime= $row['drop_datetime'];
    $location = $row['location'];
    $order_date= $row['order_date'];
    $amount = $row['amount'];
  
  
                   $order = array(
							'Customer Id'=>$customer_id, 
							'razorpay Order Id'=>$razorpay_order_id,
							'Payment Id'=>$payment_id,
							'Vehicle Title'=>$vehicle_title,
							'Vehicle Id'=>$vehicle_id,
							'Pick Location'=>$pick_location,
							'Pick Datetime'=>$pick_datetime,
							'Drop Location'=>$drop_location,
							'Drop Datetime'=>$drop_datetime,
							'Location'=>$location,
							'Order date'=>$order_date,
							'Amount'=>$amount
							
						
						);
					 array_push($orders_arr["records"], $order);
                        }}
						$response['error'] = false; 
						$response['message'] = 'Orders'; 
						$response['Orders'] = $orders_arr["records"]; 
                        echo json_encode($response);
                        exit;
  
}else{
                        $response['error'] = true; 
						$response['message'] = 'Somthing Went Wrong';
                        echo json_encode($response);
}
}
if($type_id==2){
    if(empty($errorMsg)){
      $query = "SELECT * FROM cars_orders where customer_id=$customer_id ";
       $run_customer = mysqli_query($db, $query);
  if (mysqli_num_rows($run_customer) > 0) {
        $orders_arr=array();
        $orders_arr["records"]=array();
    while ($row = mysqli_fetch_array($run_customer)){
    $razorpay_order_id = $row['razorpay_order_id'];
    $payment_id= $row['payment_id'];
    $vehicle_title = trim($row['vehicle_title']);
    $vehicle_id = $row['vehicle_id'];
    $pick_location = $row['pick_location'];
    $pick_datetime= $row['pick_datetime'];
    $drop_location= $row['drop_location'];
    $drop_datetime= $row['drop_datetime'];
    $location = $row['location'];
    $order_date= $row['order_date'];
    $amount = $row['amount'];
   
  
                   $order = array(
							'Customer Id'=>$customer_id, 
							'razorpay Order Id'=>$razorpay_order_id,
							'Payment Id'=>$payment_id,
							'Vehicle Title'=>$vehicle_title,
							'Vehicle Id'=>$vehicle_id,
							'Pick Location'=>$pick_location,
							'Pick Datetime'=>$pick_datetime,
							'Drop Location'=>$drop_location,
							'Drop Datetime'=>$drop_datetime,
							'Location'=>$location,
							'Order date'=>$order_date,
							'Amount'=>$amount
							
						
						);
					 array_push($orders_arr["records"], $order);
                        }}
						$response['error'] = false; 
						$response['message'] = 'Orders'; 
						$response['Orders'] = $orders_arr["records"]; 
                        echo json_encode($response);
                        exit;
   
}else{
                        $response['error'] = true; 
						$response['message'] = 'Somthing Went Wrong';
                        echo json_encode($response);
}
}
if($type_id==3){
    
if(empty($errorMsg)){
      $query = "SELECT * FROM bicycles_orders where customer_id=$customer_id ";
       $run_customer = mysqli_query($db, $query);
    if (mysqli_num_rows($run_customer) > 0) {
        $orders_arr=array();
        $orders_arr["records"]=array();
    while ($row = mysqli_fetch_array($run_customer)){
    $razorpay_order_id = $row['razorpay_order_id'];
    $payment_id= $row['payment_id'];
    $vehicle_title = trim($row['vehicle_title']);
    $vehicle_id = $row['vehicle_id'];
    $pick_location = $row['pick_location'];
    $pick_datetime= $row['pick_datetime'];
    $drop_location= $row['drop_location'];
    $drop_datetime= $row['drop_datetime'];
    $location = $row['location'];
    $order_date= $row['order_date'];
    $amount = $row['amount'];
   
  
                   $order = array(
							'Customer Id'=>$customer_id, 
							'razorpay Order Id'=>$razorpay_order_id,
							'Payment Id'=>$payment_id,
							'Vehicle Title'=>$vehicle_title,
							'Vehicle Id'=>$vehicle_id,
							'Pick Location'=>$pick_location,
							'Pick Datetime'=>$pick_datetime,
							'Drop Location'=>$drop_location,
							'Drop Datetime'=>$drop_datetime,
							'Location'=>$location,
							'Order date'=>$order_date,
							'Amount'=>$amount
						
						
						);
					
					 array_push($orders_arr["records"], $order);
                        }}
						$response['error'] = false; 
						$response['message'] = 'Orders'; 
						$response['Orders'] = $orders_arr["records"]; 
                        echo json_encode($response);
                        exit;
}else{
                        $response['error'] = true; 
						$response['message'] = 'Somthing Went Wrong';
                        echo json_encode($response);
}
}
?>