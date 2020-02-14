<?php
ob_start();
session_start();
require_once '../includes/db.php';
require_once '../functions/function.php';

$errorMsg= "";
$loc=trim($_POST["loc"]);
$type_id=trim($_POST["type_id"]);

$picktime=trim($_POST["picktime"]);
$droptime=trim($_POST["droptime"]);
if(empty($loc)){
    $errorMsg .= "<li style='list-style:none'>Password required</li>";
}else{
    $loc=$loc;
}

if(empty($picktime)){
    $errorMsg .= "<li style='list-style:none'>Password required</li>";
}else{
    $picktime=$picktime;
}
if(empty($droptime)){
    $errorMsg .= "<li style='list-style:none'>Password required</li>";
}else{
    $droptime=$droptime;
}
if(empty($type_id)){
    $errorMsg .= "<li style='list-style:none'>UID required</li>";
}else{
    $type_id=$type_id;
}
if($type_id==1){
if(empty($errorMsg)){
      $query = "SELECT * FROM products where location=$loc";
                    $result = mysqli_query($db, $query);
                    if (mysqli_num_rows($result) > 0) {
                        $products_arr=array();
                        $products_arr["records"]=array();
                        while ($row = mysqli_fetch_array($result)) {
                          $id=$row['id'];
                          $product_title=trim($row['product_title']);
                          $product_img=$row['product_img'];
                          $price=$row['price'];
                          $kmlimit=$row['kmlimit'];
                          $excess=$row['excess'];
                            $availabile=$row['availability'];
                            if($availabile==0){
                                $availability="Book";
                            }else if($availabile==1){
                                 $availability="Sold Out";
                            }
                   $vehicleslist = array(
							'Id'=>$id, 
							'Product Name'=>$product_title,
							'Product Image'=>'http://journeywheels.in/admin_area/product_images/'.$product_img,
							'Price'=>$price,
							'Km Limit'=>$kmlimit,
							'Excess'=>$excess,
							'Availability'=>$availability
							
						
						
						);
						 array_push($products_arr["records"], $vehicleslist);
                        }}
						$response['error'] = false; 
						$response['message'] = 'Vehicles List'; 
						$response['vehicleslist'] = $products_arr["records"]; 
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
      $query = "SELECT * FROM cars where location=$loc";
                    $result = mysqli_query($db, $query);
                    if (mysqli_num_rows($result) > 0) {
                        $products_arr=array();
                        $products_arr["records"]=array();
                        while ($row = mysqli_fetch_array($result)) {
                          $id=$row['id'];
                          $product_title=trim($row['product_title']);
                          $product_img=$row['product_img'];
                          $price=$row['price'];
                          $price1=$row['price1'];
                          $kmlimit=$row['kmlimit'];
                          $excess=$row['excess'];
                         $availabile=$row['availability'];
                            if($availabile==0){
                                $availability="Book";
                            }else if($availabile==1){
                                 $availability="Sold Out";
                            }
                   $vehicleslist = array(
							'Id'=>$id, 
							'Product Name'=>$product_title,
							'Product Image'=>'http://journeywheels.in/admin_area/product_images/'.$product_img,
							'Price'=>$price,
                          
							'Km Limit'=>$kmlimit,
							'Excess'=>$excess,
								'Availability'=>$availability
						
						
						);
						 array_push($products_arr["records"], $vehicleslist);
                        }}
						$response['error'] = false; 
						$response['message'] = 'Vehicles List'; 
						$response['vehicleslist'] = $products_arr["records"]; 
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
      $query = "SELECT * FROM bicycles where location=$loc";
                    $result = mysqli_query($db, $query);
                    if (mysqli_num_rows($result) > 0) {
                        $products_arr=array();
                        $products_arr["records"]=array();
                        while ($row = mysqli_fetch_array($result)) {
                          $id=$row['id'];
                          $product_title=trim($row['product_title']);
                          $product_img=$row['product_img'];
                          $price=$row['price'];
                          $kmlimit=$row['kmlimit'];
                          $excess=$row['excess'];
                         $availabile=$row['availability'];
                            if($availabile==0){
                                $availability="Book";
                            }else if($availabile==1){
                                 $availability="Sold Out";
                            }
                   $vehicleslist = array(
							'Id'=>$id, 
							'Product Name'=>$product_title,
							'Product Image'=>'http://journeywheels.in/admin_area/product_images/'.$product_img,
							'Price'=>$price,
							'Km Limit'=>$kmlimit,
							'Excess'=>$excess,
								'Availability'=>$availability
						
						
						);
						 array_push($products_arr["records"], $vehicleslist);
                        }}
						$response['error'] = false; 
						$response['message'] = 'Vehicles List'; 
						$response['vehicleslist'] = $products_arr["records"]; 
                        echo json_encode($response);
                        exit;
   
}else{
                        $response['error'] = true; 
						$response['message'] = 'Somthing Went Wrong';
                        echo json_encode($response);
}
}
?>