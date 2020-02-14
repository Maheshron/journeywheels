/'PLEASE CUT AND PASTE THE CODING BELOW AND SAVE THE FILE AS "mail.php ".

'AS per the Govt Of India regualtions , bulk mailing is considered a spam and hence your account will be deleted immedietly 'while bulk mailing. Hence avoid bulk mailing. This program is strictly for non-bulk mailing application only.

'If found to be abusing with bulk mail, your domain will be deleted without any prior notice./




<?php
require_once "Mail.php";

/************************************************
EDIT the following variables for your own use
*************************************************/


$host = "localhost"; // Your domain
$username = "test@journeywheels.in"; // Your user / full email address
$password = "ZWzSC*UtX+0]"; // Password to your email address



/************************************************
*************************************************/

$name = $_REQUEST['name'] ;
$email = $_REQUEST['email'] ;
$phone = $_REQUEST['phone'] ;
$address = $_REQUEST['address'] ;
$enquiry = $_REQUEST['enquiry'] ;


// Message contents

$from = $email;
$to = "checkmail649@gmail.com";
$subject = "Enquiry";

// Format the SMTP message body

$body = "Name: $name \nEmail: $email \nPhone: $phone \nAddress: $address \nEnquiry: $enquiry \n";


$headers = array ('From' => $from,
'To' => $to,
'Subject' => $subject);
$smtp = Mail::factory('smtp',
array ('host' => $host,
'auth' => false,
'username' => $username,
'password' => $password));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
/************************************************
ERROR MESSAGE
*************************************************/
?>
<p> <? echo $mail->getMessage(); ?> </p>
<?
/************************************************/
} else {
/************************************************
SUCCESS MESSAGE
*************************************************/
?>
<p>Message successfully sent!</p>
<?
/************************************************/
}
?>