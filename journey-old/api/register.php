<?php

require_once ('../includes/dbconnection.php');
require_once ('../functions/function.php');

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
          
           
             $query=$db->prepare("SELECT * FROM users WHERE email=?");
    $query->execute(array($remail));
    $result = $query->fetchAll();
    $uid=$result[0]['uid'];
              $user = array(
							'Id'=>$uid
						
						);
						
								
						$response['error'] = false; 
						$response['message'] = 'Login Success'; 
						$response['user'] = $user; 
                        echo json_encode($response);
                        
            exit;
        }else{
            echo  json_encode(['code'=>400]);
            exit;
        }
    }
}else{
    echo  json_encode(['code'=>404,'msg'=>$errorMsg]);
}?>