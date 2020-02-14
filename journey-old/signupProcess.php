<?php

require_once ('includes/dbconnection.php');
require_once ('functions/function.php');

$errorMsg ="";
$rname=trim($_POST["rname"]);
$remail=trim($_POST["remail"]);
$rpassword=trim($_POST["rpassword"]);
$rcpassword=trim($_POST["rcpassword"]);
$rmobile=trim($_POST["rmobile"]);
if(empty($rname)){
    $errorMsg .="<li style='list-style:none'>Name is required </li>";

}else{
    $rname=$rname;

}

if(empty($remail)){
    $errorMsg .="<li style='list-style:none'>Email is required </li>";

}else{
    $remail=filterEmail($remail);
    if($remail== FALSE){
        $errorMsg.="<li style='list-style:none'>Invalid Email Format</li>";
    }

}

if(empty($rpassword)){
    $errorMsg .="<li style='list-style:none'>Password is required </li>";

}else{
    $rpassword=password_hash($rpassword,PASSWORD_DEFAULT);
}

if( ! password_verify($rcpassword, $rpassword)){
    


   $errorMsg .="<li style='list-style:none'>Both Passwords Are not Same</li>";
}
if(empty($rmobile)){
    $errorMsg.="<li style='list-style:none'>Mobile is required</li>";
}else{
    $rmobile=$rmobile;
}

if(empty($errorMsg)) {
    $qry=$db->prepare("SELECT email FROM users WHERE email=?");
    $qry->bindParam(1,$remail);
    $qry->execute();
    if($qry->rowCount()>0){
        echo json_encode(['code'=>400,'msg'=>'Email already exist']);
        exit;
    } else{
        $stmt=$db->prepare("INSERT INTO users(name,email,password,mobile) VALUES(:name, :email, :password, :mobile)");
        $stmt->execute(array(':name'=>$rname, ':email'=>$remail ,':password'=>$rpassword,':mobile'=>$rmobile));
        $affected_rows=$stmt->rowCount();
        if($affected_rows==1){
            $username = urlencode('JNYWLS');
$password = urlencode('360806203');
$msg = 'Dear '.$rname.', Welcome to Journey Wheels.Thank You For Joining With us.';

$msgs = urlencode($msg);
$numbers = urlencode($rmobile);
$sender = urlencode('JNYWLS');

// Prepare data for POST request
$data = 'username=' . $username . '&password=' . $password . '&mobileno=' . $numbers . "&sendername=" . $sender . "&message=" . $msgs;

// Send the GET request with cURL
$ch = curl_init('http://bulksms.mysmsmantra.com/WebSMS/SMSAPI.jsp?'.$data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);

curl_close($ch);

// Process your response here

            echo json_encode(['code'=>200,'msg'=>'Successfully Signup ']);
            exit;
        }else{
            echo  json_encode(['code'=>400]);
            exit;
        }
    }
}else{
    echo  json_encode(['code'=>404,'msg'=>$errorMsg]);
}?>