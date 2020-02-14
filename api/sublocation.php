<?php
ob_start();
session_start();
require_once '../includes/db.php';
require_once '../functions/function.php';

$errorMsg= "";
$loc=trim($_POST["loc"]);

if(empty($loc)){
    $errorMsg .= "<li style='list-style:none'>Password required</li>";
}else{
    $loc=$loc;
}

if(empty($errorMsg)){
      $query = "SELECT * FROM sublocations where locid=$loc ";
                    $result = mysqli_query($db, $query);
                    if (mysqli_num_rows($result) > 0) {
                        $products_arr=array();
                        $products_arr["records"]=array();
                        while ($row = mysqli_fetch_array($result)) {
                          $id=$row['id'];
                          $product_title=$row['name'];
                      $sublocations = array(
							'Id'=>$id, 
							'Sub Location Name'=>$product_title
							
						);
						 array_push($products_arr["records"], $sublocations);
                        }}
                                              
						$response['error'] = false; 
						$response['message'] = 'Sub Locations List'; 
						$response['sublocations'] =$products_arr["records"]; 

                        echo json_encode($response);
                        
                        exit;
   
}else{
                        $response['error'] = true; 
						$response['message'] = 'Somthing Went Wrong';
                        echo json_encode($response);
}
?>