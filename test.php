<?php
$username = urlencode('JNYWLS');
$password = urlencode('360806203');
$msg = 'Welcome to Journey Wheels.Thank You For Joining With us.';

$msgs = urlencode($msg);
$numbers = urlencode('8374211970');
$sender = urlencode('JNYWLS');

// Prepare data for POST request
$data = 'username=' . $username . '&password=' . $password . '&mobileno=' . $numbers . "&sendername=" . $sender . "&message=" . $msgs;

// Send the GET request with cURL
$ch = curl_init('http://bulksms.mysmsmantra.com/WebSMS/SMSAPI.jsp?'.$data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
echo $response;
curl_close($ch);
?>