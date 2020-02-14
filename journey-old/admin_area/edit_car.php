<?php

if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<?php

if(isset($_GET['edit_car'])){

$edit_id = $_GET['edit_car'];

$get_p = "select * from cars where id='$edit_id'";

$run_edit = mysqli_query($con,$get_p);

$row_edit = mysqli_fetch_array($run_edit);

$p_id = $row_edit['id'];

$p_title = $row_edit['product_title'];


$p_image = $row_edit['product_img'];


$new_p_image= $row_edit['product_img'];


$p_price = $row_edit['price'];
$cat_id = $row_edit['cat_id'];
$location= $row_edit['location'];
$availability= $row_edit['availability'];

}


$get_p_cats = "select * from product_categories WHERE parent=0";

$run_p_cats = mysqli_query($con,$get_p_cats);
$get_cats = "select * from categories ";

$run_cats = mysqli_query($con,$get_cats);

?>


<!DOCTYPE html>

<html>

<head>

<title> Edit Bi-Cars </title>


<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'#product_desc,#product_features' });</script>

</head>

<body>

<div class="row"><!-- row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"> </i> Dashboard / Edit Cars

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- row Ends -->


<div class="row"><!-- 2 row Starts --> 

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

<i class="fa fa-money fa-fw"></i> Edit Cars

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Car Title </label>

<div class="col-md-6" >

<input type="text" name="product_title" class="form-control" required value="<?php echo $p_title; ?>">

</div>

</div><!-- form-group Ends -->

 <div class="form-group" ><!-- form-group Starts -->

                                    <label class="col-md-3 control-label" > Car Type * </label>
<div class="col-md-6" >
                                    <select type="text" name="p_mainparent" class="form-control" required >
                <option value="">Select Car Type</option>
                <?php while ($mainparent=mysqli_fetch_assoc($run_cats)) : ?>
                    <option value="<?php echo $mainparent['cat_id']; ?>"><?php echo $mainparent['cat_title']; ?></option>
                <?php endwhile; ?>

            </select>
            </div>


                                </div><!-- form-group Ends -->


<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Car Image  </label>

<div class="col-md-6" >

<input type="file" name="product_img" class="form-control" >
<br><img src="product_images/<?php echo $p_image; ?>" width="200" height="150" >

</div>

</div><!-- form-group Ends -->



<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Car Price </label>

<div class="col-md-6" >

<input type="text" name="product_price" class="form-control" required value="<?php echo $p_price; ?>" >

</div>

</div><!-- form-group Ends -->

 <div class="form-group" ><!-- form-group Starts -->

                                    <label class="col-md-3 control-label" > Car Location* </label>
<div class="col-md-6" >
                                    <select type="text" name="p_loc" class="form-control" required>
                <option value="">Select Location</option>
                <option value="1">Vijayawada</option>
                  <option  value="2">Tirupati</option>
                    <option value="3">Nellore</option>
                     <option value="4">Rajahmundry</option>
                                        
                                        <option value="5">Vizag</option>
                <option value="6">Guntur</option>
                

            </select>
</div>

                                </div><!-- form-group Ends -->

  <div class="form-group" ><!-- form-group Starts -->

                                    <label class="col-md-3 control-label" >Car Availability* </label>
<div class="col-md-6" >
                                    <select type="text" name="p_available" class="form-control" required>
                <option value="">Select Availability</option>
                <option value="0">Available</option>
                  <option  value="1">Un-Available</option>
                  

            </select></div>


                                </div><!-- form-group Ends -->




<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" ></label>

<div class="col-md-6" >

<input type="submit" name="update" value="Update Product" class="btn btn-primary form-control" >

</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends --> 




</body>

</html>

<?php

if(isset($_POST['update'])){

$product_title = $_POST['product_title'];

$product_price = $_POST['product_price'];
$u_loc = $_POST['p_loc'];
$u_available= $_POST['p_available'];
$u_cat_id= $_POST['p_mainparent'];


$product_img = $_FILES['product_img']['name'];

$temp_name = $_FILES['product_img']['tmp_name'];

if(empty($product_img)){

$product_img = $new_p_image;

}





move_uploaded_file($temp_name1,"product_images/$product_img");

$update_product = "update cars set product_title='$product_title',product_img='$product_img',price='$product_price',location='$u_loc',availability='$u_available',cat_id='$u_cat_id' where id='$p_id'";

$run_product = mysqli_query($con,$update_product);

if($run_product){

echo "<script> alert('Product has been updated successfully') </script>";

echo "<script>window.open('index.php?view_cars','_self')</script>";

}

}

?>

<?php } ?>
