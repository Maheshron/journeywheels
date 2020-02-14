<?php
ob_start();
session_start();
require_once '../includes/dbconnection.php';
require_once '../functions/function.php';

$errorMsg= "";
$email=trim($_POST["lemail"]);
$password=trim($_POST["lpassword"]);

if(empty($email))
{
    $errorMsg .="<li style='list-style:none'>Email is required</li>";
}
else
{
    $email=filterEmail($email);
    if($email == FALSE)
    {
        $errorMsg .= "<li style='list-style:none'>Invalid email</li>";
    }
}

if(empty($password))
{
    $errorMsg .= "<li style='list-style:none'>Password required</li>";
}
else
{
    $password=$password;
}
if(empty($errorMsg))
{
    $query=$db->prepare("SELECT * FROM users WHERE email=?");
    $query->execute(array($email));
    $result = $query->fetchAll();
    $pwd=$result[0]['password'];
    $uid=$result[0]['uid'];
    $name=$result[0]['name'];
    $mobile=$result[0]['mobile'];
    $dob=$result[0]['dob'];
    $gender=$result[0]['gender'];
    $nation=$result[0]['nation'];
    $address=$result[0]['address'];
    $mem_name=$result[0]['mem_name'];
    $mem_mobile=$result[0]['mem_mobile'];
    $mem_mail=$result[0]['mem_mail'];
    $image=$result[0]['image'];
    $image1=$result[0]['image1'];
    $image2=$result[0]['image2'];
    $image3=$result[0]['image3'];
    if(password_verify($password, $pwd))
    {
        $_SESSION['email'] = $email;

        $_SESSION['uid'] = $result[0]['uid'];

        $user = array(
							'Id'=>$uid
						
						);
						
						$response['error'] = false; 
						$response['message'] = 'Login Success'; 
						$response['user'] = $user; 
                        echo json_encode($response);
                        exit;
    }
    else
    {
                        $response['error'] = true; 
						$response['message'] = 'Invalid Username or Password';
                        echo json_encode($response);
                        exit;
    }
}

else
{
                        $response['error'] = true; 
						$response['message'] = 'Somthing Went Wrong';
                        echo json_encode($response);
}
?>