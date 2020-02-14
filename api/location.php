<?php
ob_start();
session_start();
require_once '../includes/db.php';
require_once '../functions/function.php';


      $query = "SELECT * FROM locations";
                    $result = mysqli_query($db, $query);
                    if (mysqli_num_rows($result) > 0) {
                        $products_arr=array();
                        $products_arr["records"]=array();
                        while ($row = mysqli_fetch_array($result)) {
                          $id=$row['id'];
                          $product_title=$row['name'];
                          $product_img=$row['image'];

                        
                   $locations = array(
							'Id'=>$id, 
							'Location Name'=>$product_title,
							'Location Image'=>'http://journeywheels.in/admin_area/product_images/'.$product_img
						
						);
						 array_push($products_arr["records"], $locations);
                        }}
						$response['error'] = false; 
						$response['message'] = 'Locations List'; 
						$response['locations'] = $products_arr["records"]; 
                        echo json_encode($response);
                        exit;
   

?>