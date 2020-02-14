<?php
$get_p_cats = "select * from product_categories WHERE parent=0";

$run_p_cats = mysqli_query($con,$get_p_cats);
$get_cats = "select * from categories ";

$run_cats = mysqli_query($con,$get_cats);
if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>

<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li>

<i class="fa fa-dashboard"></i> Dashboard / Insert Products Category

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" ><!-- panel-title Starts -->

<i class="fa fa-money fa-fw" ></i> Insert Product Category

</h3><!-- panel-title Ends -->


</div><!-- panel-heading Ends -->


<div class="panel-body" ><!-- panel-body Starts -->

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data" ><!-- form-horizontal Starts -->
<div id="errors"></div>
    <div class="form-group" ><!-- form-group Starts -->

        <label class="col-md-3 control-label" >Main Category Title</label>

        <div class="col-md-6" >

            <select type="text" name="mainparent" class="form-control" >
                <option value="0">Main Category</option>
                <?php while ($mainparent=mysqli_fetch_assoc($run_cats)) : ?>
                    <option value="<?php echo $mainparent['cat_id']; ?>"><?php echo $mainparent['cat_title']; ?></option>
                <?php endwhile; ?>

            </select>

        </div>


    </div><!-- form-group Ends -->
<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" >Product Category Title</label>

<div class="col-md-6" >

    <select type="text" name="parent" class="form-control" >
        <option value="0">Parent</option>
        <?php while ($parent=mysqli_fetch_assoc($run_p_cats)) : ?>
        <option value="<?php echo $parent['p_cat_id']; ?>"><?php echo $parent['p_cat_title']; ?></option>
        <?php endwhile; ?>

    </select>

</div>


</div><!-- form-group Ends -->
    <div class="form-group" ><!-- form-group Starts -->

        <label class="col-md-3 control-label" >Product Sub-Category Title</label>

        <div class="col-md-6" >

            <input type="text" name="category" class="form-control" >

        </div>


    </div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" >Show as Top Product Category</label>

<div class="col-md-6" >

<input type="radio" name="p_cat_top" value="yes" >

<label> Yes </label>

<input type="radio" name="p_cat_top" value="no" >

<label> No </label>

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Select Product Category Image</label>

<div class="col-md-6" >

<input type="file" name="p_cat_image" class="form-control" >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" ></label>

<div class="col-md-6" >

<input type="submit" name="submit" value="Submit Now" class="btn btn-primary form-control" >

</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->


</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->

<?php
$errors=array();
if(isset($_POST['submit'])) {
    $mainparent = $_POST['mainparent'];
    $parent = $_POST['parent'];
    $category= $_POST['category'];
    $sqlform = "select * from product_categories WHERE p_cat_title='$category' and parent='$parent'";
    $fresult = mysqli_query($con, $sqlform);
    $count = mysqli_num_rows($fresult);
    if ($category == '') {
        $errors[] .= 'Category cant be left empty';
    }
    if ($count > 0) {
        $errors[] .= $category . ' alredy exists.Please choose a new one';
    }
    if (!empty($errors)) {

    } else {
        $p_cat_top = $_POST['p_cat_top'];

        $p_cat_image = $_FILES['p_cat_image']['name'];

        $temp_name = $_FILES['p_cat_image']['tmp_name'];

        move_uploaded_file($temp_name, "other_images/$p_cat_image");

$insert_p_cat = "insert into product_categories (p_cat_title,parent,p_cat_top,p_cat_image,catid) values ('$category','$parent','$p_cat_top','$p_cat_image','$mainparent')";

$run_p_cat = mysqli_query($con,$insert_p_cat);

echo "<script>alert('New Product Category Has been Inserted')</script>";

//echo "<script>window.open('index.php?insert_p_cat','_self')</script>";





}


}
?>


<?php } ?>