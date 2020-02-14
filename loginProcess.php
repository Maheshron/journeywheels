<?php
ob_start();
session_start();
require_once 'includes/dbconnection.php';
require_once 'functions/function.php';

$errorMsg= "";
$email=trim($_POST["lemail"]);
$password=trim($_POST["lpassword"]);

if(empty($email)){
    $errorMsg .="<li style='list-style:none'>Email is required</li>";
}else{
    $email=filterEmail($email);
    if($email == FALSE){
        $errorMsg .= "<li style='list-style:none'>Invalid email</li>";
    }
}

if(empty($password)){
    $errorMsg .= "<li style='list-style:none'>Password required</li>";
}else{
    $password=$password;
}
if(empty($errorMsg)){
    $query=$db->prepare("SELECT password,uid FROM users WHERE email=?");
    $query->execute(array($email));
    $result = $query->fetchAll();
    $pwd=$result[0]['password'];
    if(password_verify($password, $pwd)){
        $_SESSION['email'] = $email;

        $_SESSION['uid'] = $result[0]['uid'];

        echo json_encode(['code'=>200,'email'=>$_SESSION['email']]);
        exit;
    }else{
        json_encode(['code'=>400, 'msg'=>'invalid username / password']);
        exit;
    }
}else{
    echo json_encode(['code'=>404,'msg'=>$errorMsg]);
}
?>