 <?php
include ("./includes/db.php");
$coupon_code=$_POST['coupon_code'];

$query=mysqli_query($db,"select * from coupons where coupon='$coupon_code' ");
$row=mysqli_fetch_array($query);
if (mysqli_num_rows($query)>0){
    $code=$row['offer'];
    $offer=$code/100;
	echo json_encode(array(
				"statusCode"=>200,
				"value"=>$offer
       
			));
}
else{
	echo json_encode(array("statusCode"=>201));
}

?>