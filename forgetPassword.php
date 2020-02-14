<?php
session_start();
include ("./includes/db.php");

include("./functions/functions.php");
if(isset($_POST['frgotsubmit'])){
$email = $_POST['email'];
$result = mysqli_query($db,"SELECT * FROM users where email='" . $_POST['email'] . "'");
$row = mysqli_fetch_assoc($result);
$emailid=$row['email'];
$name=$row['name'];
$id=$row['uid'];

$password=$row['password'];
if($email==$emailid) {
$to = $email;
$subject = "Password Reset Link";
$txt = "Password Reset Link \n \n http://journeywheels.in/resetpassword.php?id=$id";

$headers = "From: Contact@journeywheels.in";
if(mail($to,$subject,$txt,$headers)){
echo '<script>alert("Password Reset Link Sent To Mail")</script>';
// echo '<script>header("Refresh:0; url=index.php")</script>';
echo '<script>window.location.replace("index.php")</script>';

}
else{
echo '<script>alert("invalid userid")</script>';
}
}
}
?>
