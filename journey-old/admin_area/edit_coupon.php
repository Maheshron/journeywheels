<?php include_once('includes/db.php'); ?>
<?php

if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>

<?php

$edit_id = $_GET['edit_coupon'];

$edit_cat = "select * from coupons where id='$edit_id'";

$run_edit = mysqli_query($con,$edit_cat);

$row_edit = mysqli_fetch_array($run_edit);

$c_name = $row_edit['coupon'];
$c_per = $row_edit['offer'];
$c_cat=$row_edit['category_id'];


?>

<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li>

<i class="fa fa-dashboard"></i> Dashboard / Edit Category

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->


<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title"><!-- panel-title Starts -->

<i class="fa fa-money fa-fw"></i> Edit Category

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" action="" method="post"><!-- form-horizontal Starts -->

        <div class="form-group"><!-- form-group Starts -->
        
        <label class="col-md-3 control-label">Coupon Title</label>
        
        <div class="col-md-6">
        
        <input type="text" name="coupan_name" class="form-control" value="<?php echo $c_name; ?>" required="required">
        
        </div>
        
        </div><!-- form-group Ends -->
        
        <div class="form-group"><!-- form-group Starts -->
        
        <label class="col-md-3 control-label">Coupon Percentage</label>
        
        <div class="col-md-6">
        
        <input type="number" name="coupan_percentage" class="form-control" value="<?php echo $c_per; ?>" required="required">
        
        </div>
        
        </div><!-- form-group Ends -->
        
        <!--<div class="form-group">--><!-- form-group Starts -->
        
        <!--<label class="col-md-3 control-label">Select Category </label>
        <div class="col-md-6">
        <select name="coupan_cat" class="form-control" class="col-md-6 control-label">
        <option disabled selected value="" required="required">Coupon Category</option>
        
        
        $get_cats="select * from categories;";
        $run_cats=mysqli_query($con,$get_cats);
        while ($row_brands=mysqli_fetch_array($run_cats)) 
        {
        $id=$row_brands['id'];
        $cats_title=$row_brands['cat_title'];
        echo "<option value='$id'>$cats_title</option>";
        }
        
        
        </select>
        </div>
        </div>--><!-- form-group Ends -->
        
        <div class="form-group"><!-- form-group Starts -->
        
        <label class="col-md-3 control-label"></label>
        
        <div class="col-md-6">
        
        <input type="submit" name="update" value="Update Category" class="btn btn-primary form-control">
        
        </div>
        
        </div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->

<?php

if(isset($_POST['update']))
{

        $cou_name = $_POST['coupan_name'];
        $cou_perc = $_POST['coupan_percentage'];
        $cou_cat = $_POST['coupan_cat'];
        
        $update_cou = "update coupons set coupon='$cou_name',offer='$cou_perc' where id='$edit_id'";
        
        $run_cat = mysqli_query($con,$update_cou);
        
        if($run_cat)
        {
        
        echo "<script>alert('Coupon Has Been Updated');
        window.location='index.php?view_coupons';
        </script>";
        }
            else{
                echo "<script>alert('Error in Updation');
        window.location='edit_coupon.php';
        </script>";
                }

}


?>

<?php } ?>