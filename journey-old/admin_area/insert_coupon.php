<?php

if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>

<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li>
<br>
<i class="fa fa-dashboard"></i> Dashboard / Special Offers

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->


<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title"><!-- panel-title Starts -->

<i class="fa fa-money fa-fw"></i> Insert Coupon

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Coupon</label>

<div class="col-md-6">

<input type="text" name="coupon" class="form-control" required="required" title="Enter your coupan">

</div>

</div><!-- form-group Ends -->
<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Offer (In %)</label>

<div class="col-md-6">

<input type="number" name="offer" class="form-control" required="required" title="Offer Percentage">

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"></label>

<div class="col-md-6">

<input type="submit" name="submit" value="Insert" class="btn btn-primary form-control">

</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->

<?php

if(isset($_POST['submit'])){

$coupon= $_POST['coupon'];

$offer = $_POST['offer'];

$insert_cat = "insert into coupons (coupon,offer) values ('$coupon','$offer')";

$run_cat = mysqli_query($con,$insert_cat);

if($run_cat){

echo "<script> alert('Coupon Has Been Inserted')</script>";

echo "<script> window.open('index.php?view_coupons','_self') </script>";

}

}



?>

<?php } ?>