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
    
    <!DOCTYPE html>
    <html>
    <head>
      <title> Insert Bike</title>
        <script type="text/javascript" src="../admin_area/js/jquery.min.js"></script>
        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
        <script>tinymce.init({ selector:'#product_desc,#product_features' });</script>
    </head>
    <body>

    <div class="row"><!-- row Starts -->

        <div class="col-lg-12"><!-- col-lg-12 Starts -->

            <ol class="breadcrumb"><!-- breadcrumb Starts -->

                <li class="active">

                    <i class="fa fa-dashboard"> </i> Dashboard / Bike Orders

                </li>

            </ol><!-- breadcrumb Ends -->

        </div><!-- col-lg-12 Ends -->

    </div><!-- row Ends -->


    <div class="row"><!-- 2 row Starts -->

        <div class="col-lg-12"><!-- col-lg-12 Starts -->

            <div class="panel panel-default"><!-- panel panel-default Starts -->

                <div class="panel-heading"><!-- panel-heading Starts -->

                    <h3 class="panel-title">

                        <i class="fa fa-money fa-fw"></i> Bike Orders

                    </h3>

                </div><!-- panel-heading Ends -->

                <div class="panel-body"><!-- panel-body Starts -->
                    <div class="row"><!-- 2 row Starts -->
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4">
                           <a href="index.php?view_orders=1"><input type="submit" name="submit" value="Vijayawada Orders" class="btn btn-primary form-control"></a> 
                            <a href="index.php?view_orders=2"><input type="submit" name="submit" value="Tirupati Orders" class="btn btn-primary form-control" style="margin-top:10px;"></a>
                           <a href="index.php?view_orders=3"> <input type="submit" name="submit" value="Nellore Orders" class="btn btn-primary form-control" style="margin-top:10px;"></a>
                            <a href="index.php?view_orders=4"><input type="submit" name="submit" value="Rajuhmundry Orders" class="btn btn-primary form-control" style="margin-top:10px;"></a>
                            <a href="index.php?view_orders=5"><input type="submit" name="submit" value="Vizag Orders" class="btn btn-primary form-control" style="margin-top:10px;"></a>
                            <a href="index.php?view_orders=6"><input type="submit" name="submit" value="Guntur Orders" class="btn btn-primary form-control" style="margin-top:10px;"></a>
                            <a href="index.php?view_orders=7"><input type="submit" name="submit" value="Kakinada Orders" class="btn btn-primary form-control" style="margin-top:10px;"></a>
                            <a href="index.php?view_orders=8"><input type="submit" name="submit" value="Kadapa Orders" class="btn btn-primary form-control" style="margin-top:10px;"></a>
                            <a href="index.php?view_orders=9"><input type="submit" name="submit" value="Ananthapuram Orders" class="btn btn-primary form-control" style="margin-top:10px;"></a>
                            <a href="index.php?view_orders=10"><input type="submit" name="submit" value="Chittoor Orders" class="btn btn-primary form-control" style="margin-top:10px;"></a>

                             
                        </div>
                    </div>
                </div><!-- panel-body Ends -->

            </div><!-- panel panel-default Ends -->

        </div><!-- col-lg-12 Ends -->

    </div><!-- 2 row Ends -->
  
    </body>

    </html>

    
<?php } ?>



