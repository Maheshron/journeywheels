<?php
ob_start();
session_start();
require_once '../includes/db.php';
require_once '../functions/function.php';

$errorMsg= "";
$id=trim($_POST["id"]);
$type_id=trim($_POST["type_id"]);
if(empty($id)){
    $errorMsg .= "<li style='list-style:none'>ID required</li>";
}else{
    $id=$id;
}
if(empty($type_id)){
    $errorMsg .= "<li style='list-style:none'>UID required</li>";
}else{
    $type_id=$type_id;
}
if($type_id==1){
if(empty($errorMsg)){
      $query = "SELECT * FROM products where id=$id ";
       $run_customer = mysqli_query($db, $query);
    $row = mysqli_fetch_array($run_customer);
    $product_title = $row['product_title'];
     $product_img = $row['product_img'];
      $price = $row['price'];
       $kmlimit = $row['kmlimit'];
        $excess= $row['excess'];
        
                   $vehicle_info= array(
							'Id'=>$id, 
							'Vehicle Title'=>$product_title,
							'Vehicle Image'=>'http://journeywheels.in/admin_area/product_images/'.$product_img,
							'Price'=>$price,
							'Kmlimit'=>$kmlimit,
							'Excess'=>$excess
						
						);
					
						$response['error'] = false; 
						$response['message'] = 'Vehicle Details'; 
						$response['Vehicle Details'] = $vehicle_info; 
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
      $query = "SELECT * FROM cars where id=$id ";
       $run_customer = mysqli_query($db, $query);
    $row = mysqli_fetch_array($run_customer);
    $product_title = $row['product_title'];
     $product_img = $row['product_img'];
      $price = $row['price'];
         $price1 = $row['price1'];
       $kmlimit = $row['kmlimit'];
        $excess= $row['excess'];
        
                   $vehicle_info = array(
							'Id'=>$id, 
							'Vehicle Title'=>$product_title,
							'Vehicle Image'=>'http://journeywheels.in/admin_area/product_images/'.$product_img,
							'Price'=>$price,
							
							'Kmlimit'=>$kmlimit,
							'Excess'=>$excess
						
						);
					
						$response['error'] = false; 
						$response['message'] = 'Vehicle Details'; 
						$response['Vehicle Details'] = $vehicle_info; 
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
      $query = "SELECT * FROM bicycles where id=$id ";
       $run_customer = mysqli_query($db, $query);
    $row = mysqli_fetch_array($run_customer);
    $product_title = $row['product_title'];
     $product_img = $row['product_img'];
      $price = $row['price'];
       $kmlimit = $row['kmlimit'];
        $excess= $row['excess'];
        
                   $vehicle_info = array(
							'Id'=>$id, 
							'Vehicle Title'=>$product_title,
							'Vehicle Image'=>'http://journeywheels.in/admin_area/product_images/'.$product_img,
							'Price'=>$price,
							'Kmlimit'=>$kmlimit,
							'Excess'=>$excess
						
						);
					
						$response['error'] = false; 
						$response['message'] = 'Vehicle Details'; 
						$response['Vehicle Details'] = $vehicle_info; 
                        echo json_encode($response);
                        exit;
   
}else{
                        $response['error'] = true; 
						$response['message'] = 'Somthing Went Wrong';
                        echo json_encode($response);
}
}
?>