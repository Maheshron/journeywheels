<?php
include ("./includes/db.php");

require('config.php');

session_start();

require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
       
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'id' => $_SESSION['id'],
            'uid' => $_SESSION['uid'],
            'amount' => $_SESSION['amount'],
            'email' => $_SESSION['email'],
            'contact' => $_SESSION['contact'],
            'name' => $_SESSION['name'],
             'product_title' => $_SESSION['product_title'],
              'pick_location' => $_SESSION['pick_location'],
               'pick_datetime' => $_SESSION['pick_datetime'],
                'drop_location' => $_SESSION['drop_location'],
                'drop_datetime' => $_SESSION['drop_datetime'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}
if ($success === true)
{
    if(isset($_POST['razorpay_payment_id'])) {
        $idd = $_POST['razorpay_payment_id'];
        $o_id=$_SESSION['razorpay_order_id'];
        $product_id=$_SESSION['id'];
        $uid=$_SESSION['uid'];
        $amount=$_SESSION['amount'];
        $email=$_SESSION['email'];
        $contact=$_SESSION['contact'];
        $name=$_SESSION['name'];
        $rent=$_SESSION['rent'];
        $tax=$_SESSION['tax'];
         $tax1=$_SESSION['tax1'];
        $location=$_SESSION['location'];
        if($location==1){
    $loc='Vijayawada';
}elseif($location==2){
    $loc='Tirupati';
}elseif($location==3){
    $loc='Nellore';
}elseif($location==4){
    $loc='Rajahmundry';
}elseif($location==5){
    $loc='Vizag';
}
        $product_title=$_SESSION['product_title'];
        $pick_location=$_SESSION['pick_location'];
        $pick_datetime=$_SESSION['pick_datetime'];
        $drop_location=$_SESSION['drop_location'];
        $drop_datetime=$_SESSION['drop_datetime'];
         $get_customer = "select * from products WHERE id='$product_id'";
    $run_customer = mysqli_query($db, $get_customer);
    $row = mysqli_fetch_array($run_customer);
    $product_img = $row['product_img'];
        $update_customer = "INSERT INTO customers_orders (razorpay_order_id,payment_id,customer_id,vehicle_title,vehicle_id,pick_location,pick_datetime,drop_location,drop_datetime,order_date,amount,email,contact_no,name,location,rent,tax,tax1,hel) 
        VALUES ('$o_id','$idd','$uid','$product_title','$product_id','$pick_location','$pick_datetime','$drop_location','$drop_datetime',NOW(),'$amount','$email','$contact','$name','$location','$rent','$tax','$tax1',1)";
        $run_customer = mysqli_query($db, $update_customer);
        if ($run_customer) {
// Order Confirmation SMS to User
$username = urlencode('JNYWLS');
$password = urlencode('360806203');
$msg = 'Hi '.$name.', Your booking has been Confirmed from  '. $pick_datetime .' to '. $drop_datetime .'.Thank you team Journey Wheels.'. $product_title.' ( '. $pick_location.' ) '.'-'.$loc;
$msgs = urlencode($msg);
$number = urlencode($contact);
$sender = urlencode('JNYWLS');
// Prepare data for POST request
$data = 'username=' . $username . '&password=' . $password . '&mobileno=' . $number . "&sendername=" . $sender . "&message=" . $msgs;
// Send the GET request with cURL
$ch = curl_init('http://bulksms.mysmsmantra.com/WebSMS/SMSAPI.jsp?'.$data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
// echo $response;
// Order Confirmation SMS to User
// Order Confirmation SMS to Client
$msg1 = 'Hi Team,Order Placed by '.$name.' from '. $pick_datetime .' to '. $drop_datetime .'.'. $product_title.' ( '. $pick_location.' ) '.'-'.$loc;
$msgs1 = urlencode($msg1);
$numbers = 8106454599;
// Prepare data for POST request
$data1 = 'username=' . $username . '&password=' . $password . '&mobileno=' . $numbers . "&sendername=" . $sender . "&message=" . $msgs1;
// Send the GET request with cURL
$ch1 = curl_init('http://bulksms.mysmsmantra.com/WebSMS/SMSAPI.jsp?'.$data1);
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
$response1 = curl_exec($ch1);
curl_close($ch1);
// echo $response1;
// Order Confirmation SMS to User                        
// Order Confirmation Mail to User 
   $email1='Contact@journeywheels.in'; 
		$to=$email; // Receiver Email ID, Replace with your email ID
		$subject='Journey Wheels';
		$headers  		= 'MIME-Version: 1.0' . "
";
$headers 		.= 'Content-type: text/html; charset=iso-8859-1' . "
";
$headers 		.= 'To: The Receiver <'.$to.'>' . "
";
$headers 		.= "From: <".$email1.">" . "
";

$message		= '<body style="margin-top:10px; padding: 0; width: 100%; -webkit-text-size-adjust: none; -webkit-font-smoothing: antialiased;">
  <table width="100%" bgcolor="#FFFFFF" border="0" cellspacing="0" cellpadding="0" id="background" style="height: 100% !important; margin: 0; padding: 0; width: 100% !important;">
    <tr>
      <td align="center" valign="top">
        <table width="600" border="0" bgcolor="#FFFFFF" cellspacing="0" cellpadding="0" id="header_container">
          <tr>
            <td align="center" valign="top">
              <table width="100%" border="0" bgcolor="black" cellspacing="0" cellpadding="0" id="header">
                <tr>
                  <td valign="top" class="header_content">
                    <h1 style="color: #F4F4F4; font-size: 24px; text-align: center;padding: 10px;"><img src="http://journeywheels.in/images/logo1.png"</h1>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
        <table width="600" border="0" bgcolor="#ffb735" cellspacing="0" cellpadding="20" id="body_container">
          <tr>
            <td align="center" valign="top" class="body_content">
              <table width="100%" border="0" cellspacing="0" cellpadding="20">
                <tr>
                  <td valign="top">
                    <h2 style="color: #FFFFFF; font-size: 20px; text-align: left;">Hi '.$name.' </h2>
                    <p style="color: black; font-size: 15px; line-height: 22px; text-align:left;">Congratulations! Your booking '.$product_title.' is confirmed. Thank you for choosing Journey Wheels.</p>
                  </td>
                </tr>
                <tr>
						<td valign="top" align="center" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;">
							<table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
								<tr>
									<td align="center" valign="middle" class="social" style="border-collapse: collapse;border: 0;margin: 0;padding: 10px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;text-align: center;">
										<table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
											<tr>
									<td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"><img src="https://ci4.googleusercontent.com/proxy/AiDx2LoA-QbVeNSUZmuvbq_9jwEYYaHqOebJYs9S0J7x_fLYKT6DaPbOidrpqe51MghSHuOoddvYqTygTpgqZCcFYlW3HmRk_wsfI7w=s0-d-e1-ft#https://cdn.wheelstreet.com/images/email/wall-calendar.png" height="70px"></td>
									<td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 15px;line-height: 22px;font-weight:bold;text-align:center;"> '.$pick_datetime.' <br> To<br> '.$drop_datetime.' </td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</td>
					</tr>
                <tr>
          <td align="center" valign="top"  style="border-radius:10px;" class="body_info_content" bgcolor="white" >
           <h5 style="line-height: 5px;">'.$product_title.'</h5>
                  <img src="http://journeywheels.in/test/JW/admin_area/product_images/'.$product_img.'">
                  <h5 style="line-height: 5px;">Your Fare</h5><hr>
                  <h5><span style="float:left;margin-left:10px;">Total Rent</span><span style="float:right;margin-right:10px;">Rs '.$rent.'</span></h5><br>
                  <h5><span style="float:left;margin-left:10px;">CGST(2.5%) </span><span style="float:right;margin-right:10px;">Rs '.$tax.'</span></h5><br>
                   <h5><span style="float:left;margin-left:10px;">SGST(2.5%) </span><span style="float:right;margin-right:10px;">Rs '.$tax1.'</span></h5><br>
                   <h4 style="font-weight:bold;"><span style="float:left;margin-left:10px;">Total Amount</span><span style="float:right;margin-right:10px;">Rs '.$amount.'</span></h4>
         
          </td>
        </tr>
         <tr>
          <td align="center" valign="top" class="body_info_content">
            <table width="100%" border="0" cellspacing="0" cellpadding="20">
              <tr>
                <td valign="top">
                  <h2 style="color: black; font-size: 20px; text-align: center;">TERMS & CONDITIONS</h2>
                  <p style="color: black; font-size: 14px; text-align: left;">1.Speed limit: 80/hr.</p>
                  <p style="color: black; font-size: 14px; text-align: left;">2.Driving License will be verified in original.</p>
                   <p style="color: black; font-size: 14px;  text-align: left;">3.One complimentary helmet will be provided with the bike.</p>   
                    <p style="color: black; font-size: 14px;  text-align: left;">4.Fuel charges are not included.</p>
                </td>
              </tr>
               <tr>
                  <td valign="top">
                    <h2 style="color: #FFFFFF; font-size: 18px; text-align: left;">Thanks for joining us!</h2>
                    <h2 style="color: #FFFFFF; font-size: 20px; text-align: left;">Team Journey Wheels</h2>
                 <p style="text-align:center;font-size: 10px;">If you have any questions Please email us at Contact@journeywheels.in or call us on +91-9391-090-908</p><hr>
                 <p style="text-align:center;font-size: 14px;">#19-1-112/A, JM COMPLEX OLD EXHIBITION GROUND,NEAR OPP RTC BUS STAND, TIRUPATI,ANDHRA PRADESH-517501</p>
                  </td>
                </tr>
                <tr>
						<td valign="top" align="center" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;">
							<table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
								<tr>
									<td align="center" valign="middle" class="social" style="border-collapse: collapse;border: 0;margin: 0;padding: 10px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;text-align: center;">
										<table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
											<tr>
										<td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"><a href="https://www.facebook.com/journeywheelsoffical/"><img src="http://journeywheels.in/test/JW/images/facebook-teal.png"></a></td>
									<td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"><a href="https://www.twitter.com/journey_wheels"><img src="http://journeywheels.in/test/JW/images/twitter-teal.png"></a></td>
									<td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"><a href="https://www.linkedin.com/in/journey-wheels-offical"><img src="http://journeywheels.in/test/JW/images/linkedin-teal.png"></a></td>
									<td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"><a href="https://plus.google.com/"><img src="http://journeywheels.in/test/JW/images/google-teal.png"></a></td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</td>
					</tr>
            </table>
          </td>
        </tr>
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
</body>';
	if(mail($to, $subject, $message, $headers))
{

}
else
{

}
	// Order Confirmation Mail to User 
	// Order Confirmation Mail to Client

		$to='Contact@journeywheels.in'; // Receiver Email ID, Replace with your email ID
		$subject='Journey Wheels';
		$headers  		= 'MIME-Version: 1.0' . "
";
$headers 		.= 'Content-type: text/html; charset=iso-8859-1' . "
";
$headers 		.= 'To: The Receiver <'.$to.'>' . "
";
$headers 		.= "From: <".$email.">" . "
";
$message1		= '<body style="margin-top:10px; padding: 0; width: 100%; -webkit-text-size-adjust: none; -webkit-font-smoothing: antialiased;">
  <table width="100%" bgcolor="#FFFFFF" border="0" cellspacing="0" cellpadding="0" id="background" style="height: 100% !important; margin: 0; padding: 0; width: 100% !important;">
    <tr>
      <td align="center" valign="top">
        <table width="600" border="0" bgcolor="#FFFFFF" cellspacing="0" cellpadding="0" id="header_container">
          <tr>
            <td align="center" valign="top">
              <table width="100%" border="0" bgcolor="black" cellspacing="0" cellpadding="0" id="header">
                <tr>
                  <td valign="top" class="header_content">
                    <h1 style="color: #F4F4F4; font-size: 24px; text-align: center;padding: 10px;"><img src="http://journeywheels.in/images/logo1.png"</h1>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
        <table width="600" border="0" bgcolor="#ffb735" cellspacing="0" cellpadding="20" id="body_container">
          <tr>
            <td align="center" valign="top" class="body_content">
              <table width="100%" border="0" cellspacing="0" cellpadding="20">
                <tr>
                  <td valign="top">
                    <h2 style="color: #FFFFFF; font-size: 20px; text-align: left;">Hi Team </h2>
                    <p style="color: black; font-size: 18px; line-height: 22px; text-align:left;">Congratulations! Order Placed by '.$name.' from '. $pick_datetime .' to '. $drop_datetime .'. Thank you for choosing Journey Wheels.</p>
                  </td>
                </tr>
                <tr>
						<td valign="top" align="center" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;">
							<table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
								<tr>
									<td align="center" valign="middle" class="social" style="border-collapse: collapse;border: 0;margin: 0;padding: 10px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;text-align: center;">
										<table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
											<tr>
											
									<td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"><img src="https://ci4.googleusercontent.com/proxy/AiDx2LoA-QbVeNSUZmuvbq_9jwEYYaHqOebJYs9S0J7x_fLYKT6DaPbOidrpqe51MghSHuOoddvYqTygTpgqZCcFYlW3HmRk_wsfI7w=s0-d-e1-ft#https://cdn.wheelstreet.com/images/email/wall-calendar.png" height="70px"></td>
									<td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 15px;line-height: 22px;font-weight:bold;text-align:center;"> '.$pick_datetime.' <br> To<br> '.$drop_datetime.' </td>
								
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</td>
					</tr>
                <tr>
          <td align="center" valign="top"  style="border-radius:10px;" class="body_info_content" bgcolor="white" >
          <h5 style="line-height: 5px;">'.$product_title.'</h5>
                  <img src="http://journeywheels.in/admin_area/product_images/'.$product_img.'">
                 <h5 style="line-height: 5px;">Your Fare</h5><hr>
                  <h5><span style="float:left;margin-left:10px;">Total Rent</span><span style="float:right;margin-right:10px;">Rs '.$rent.'</span></h5><br>
                  <h5><span style="float:left;margin-left:10px;">CGST(2.5%) </span><span style="float:right;margin-right:10px;">Rs '.$tax.'</span></h5><br>
                   <h5><span style="float:left;margin-left:10px;">SGST(2.5%) </span><span style="float:right;margin-right:10px;">Rs '.$tax1.'</span></h5><br>
                    <h4 style="font-weight:bold;"><span style="float:left;margin-left:10px;">Total Amount</span><span style="float:right;margin-right:10px;">Rs '.$amount.'</span></h4>
         
          </td>
        </tr>
         <tr>
          <td align="center" valign="top" class="body_info_content">
            <table width="100%" border="0" cellspacing="0" cellpadding="20">
              <tr>
                <td valign="top">
                  <h2 style="color: black; font-size: 20px; text-align: center;">TERMS & CONDITIONS</h2>
                  <p style="color: black; font-size: 14px; text-align: left;">1.Speed limit: 80/hr.</p>
                  <p style="color: black; font-size: 14px;text-align: left;">2.Driving License will be verified in original.</p>
                   <p style="color: black; font-size: 14px;text-align: left;">3.One complimentary helmet will be provided with the bike.</p>   
                    <p style="color: black; font-size: 14px;text-align: left;">4.Fuel charges are not included.</p>
                </td>
              </tr>
               <tr>
                  <td valign="top">
                    <h2 style="color: #FFFFFF; font-size: 18px; text-align: left;">Thanks for joining us!</h2>
                    <h2 style="color: #FFFFFF; font-size: 20px; text-align: left;">Team Journey Wheels</h2>
                 <p style="text-align:center;font-size: 10px;">If you have any questions Please email us at Contact@journeywheels.in or call us on +91-9391-090-908</p><hr>
                 <p style="text-align:center;font-size: 14px;">#19-1-112/A, JM COMPLEX OLD EXHIBITION GROUND,NEAR OPP RTC BUS STAND, TIRUPATI,ANDHRA PRADESH-517501</p>
                  </td>
                </tr>
                <tr>
						<td valign="top" align="center" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;">
							<table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
								<tr>
									<td align="center" valign="middle" class="social" style="border-collapse: collapse;border: 0;margin: 0;padding: 10px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;text-align: center;">
										<table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
											<tr>
										<td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"><a href="https://www.facebook.com/journeywheelsoffical/"><img src="http://journeywheels.in/images/facebook-teal.png"></a></td>
									<td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"><a href="https://www.twitter.com/journey_wheels"><img src="http://journeywheels.in/images/twitter-teal.png"></a></td>
									<td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"><a href="https://www.linkedin.com/in/journey-wheels-offical"><img src="http://journeywheels.in/images/linkedin-teal.png"></a></td>
									<td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"><a href="https://plus.google.com/"><img src="http://journeywheels.in/images/google-teal.png"></a></td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</td>
					</tr>
            </table>
          </td>
        </tr>
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
</body>';

if(mail($to, $subject, $message1, $headers))
{

}
else
{

}
	// Order Confirmation Mail to Client
        }
    }
     echo '<script>window.location="my_bookings.php"</script>';
}
else
{
  $html = "<p>Your Payment Failed</p>
             <p>{$error}</p>";
             echo $html;

}

// echo $html;
