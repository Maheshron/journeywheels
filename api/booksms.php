
<?php
ob_start();
session_start();
require_once '../includes/db.php';
require_once '../functions/function.php';

$errorMsg= "";
$name=trim($_POST["name"]);
$pick_datetime=trim($_POST["pick_datetime"]);
$drop_datetime=trim($_POST["drop_datetime"]);
$product_title=trim($_POST["product_title"]);
$pick_location=trim($_POST["pick_location"]);
$loc=trim($_POST["loc"]);
$contact=trim($_POST["contact"]);
if(empty($name)){
    $errorMsg .= "<li style='list-style:none'>Name required</li>";
}else{
    $name=$name;
}
if(empty($pick_datetime)){
    $errorMsg .= "<li style='list-style:none'>Pick Date Time required</li>";
}else{
    $pick_datetime=$pick_datetime;
}if(empty($drop_datetime)){
    $errorMsg .= "<li style='list-style:none'>Drop Date Time required</li>";
}else{
    $drop_datetime=$drop_datetime;
}if(empty($product_title)){
    $errorMsg .= "<li style='list-style:none'>Title required</li>";
}else{
    $product_title=$product_title;
}if(empty($pick_location)){
    $errorMsg .= "<li style='list-style:none'>Pick Location required</li>";
}else{
    $pick_location=$pick_location;
}if(empty($loc)){
    $errorMsg .= "<li style='list-style:none'>Location required</li>";
}else{
    $loc=$loc;
}if(empty($contact)){
    $errorMsg .= "<li style='list-style:none'>Contact required</li>";
}else{
    $contact=$contact;
}
if(empty($errorMsg)){
// Order Confirmation SMS to User
$username = urlencode('JNYWLS');
$password = urlencode('360806203');
$msg = 'Hi '.$name.', Your booking has been confirmed from  '. $pick_datetime .' to '. $drop_datetime .'.Thank you team Journey Wheels.'. $product_title.' ( '. $pick_location.' )  '.'-'.$loc;
$msgs = urlencode($msg);
$numbers = urlencode($contact);
$sender = urlencode('JNYWLS');
// Prepare data for POST request
$data = 'username=' . $username . '&password=' . $password . '&mobileno=' . $numbers . "&sendername=" . $sender . "&message=" . $msgs;
// Send the GET request with cURL
$ch = curl_init('http://bulksms.mysmsmantra.com/WebSMS/SMSAPI.jsp?'.$data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response['error'] = true; 
$response['message']= curl_exec($ch);
	$response['msg'] = 'User Message'; 
curl_close($ch);
echo json_encode($response);
// Order Confirmation SMS to User
  $msg1 = 'Hi Team,'.'\n'.' Order Placed by '.$name.' from '. $pick_datetime .' to '. $drop_datetime .'.'. $product_title.' ( '. $pick_location.' )  '.'-'.$loc;
$msgs1 = urlencode($msg1);
$numbers = 8374211970;
// Prepare data for POST request
$data1 = 'username=' . $username . '&password=' . $password . '&mobileno=' . $numbers . "&sendername=" . $sender . "&message=" . $msgs1;
// Send the GET request with cURL
$ch1 = curl_init('http://bulksms.mysmsmantra.com/WebSMS/SMSAPI.jsp?'.$data1);
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
$response1['error'] = true; 
$response1['message']= curl_exec($ch1);
	$response1['msg'] = 'Client Message'; 
curl_close($ch1);
echo json_encode($response1);

}else{
                        $response['error'] = true; 
						$response['message'] = 'Something Went Wrong';
                        echo json_encode($response);
}
?>