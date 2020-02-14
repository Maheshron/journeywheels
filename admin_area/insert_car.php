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

                    <i class="fa fa-dashboard"> </i> Dashboard / Insert Cars

                </li>

            </ol><!-- breadcrumb Ends -->

        </div><!-- col-lg-12 Ends -->

    </div><!-- row Ends -->


    <div class="row"><!-- 2 row Starts -->

        <div class="col-lg-12"><!-- col-lg-12 Starts -->

            <div class="panel panel-default"><!-- panel panel-default Starts -->

                <div class="panel-heading"><!-- panel-heading Starts -->

                    <h3 class="panel-title">

                        <i class="fa fa-money fa-fw"></i> Insert Cars

                    </h3>

                </div><!-- panel-heading Ends -->

                <div class="panel-body"><!-- panel-body Starts -->

                    <form method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

                        <div class="row"><!-- row Starts -->
                        
                          <div class="col-md-3"></div>
                          
                          <div class="col-md-6"><!-- col-md-6 Starts -->

                                <div class="form-group" ><!-- form-group Starts -->

                                    <label class="control-label" > Car Name * </label>

                                    <input type="text" name="product_title" class="form-control" required="required" >

                                </div><!-- form-group Ends -->
                                
                                <div class="form-group" ><!-- form-group Starts -->

                                    <label class="control-label" > Car Type * </label>

                                    <select type="text" name="mainparent" class="form-control" required="required">
                                        
                                           <option value="0" DISABLED="DISABLED">Main Category</option>
                                            
                                           <?php while ($mainparent=mysqli_fetch_assoc($run_cats)) : ?>
                      
                                           <option value="<?php echo $mainparent['cat_id']; ?>"><?php echo $mainparent['cat_title']; ?></option>
                              
                                           <?php endwhile; ?>

                                    </select>

                                </div><!-- form-group Ends -->

                                <div class="form-group" ><!-- form-group Starts -->

                                    <label class="control-label" > Car Price(Per 12 hrs)  * </label>

                                       <input type="number" name="product_price" class="form-control" required="required" >

                                </div><!-- form-group Ends -->
                                 <div class="form-group" ><!-- form-group Starts -->

                                    <label class="control-label" > Car Price(Per 24 hrs)  * </label>

                                       <input type="number" name="product_price1" class="form-control" required="required" >

                                </div><!-- form-group Ends -->
                                
                                <div class="form-group" ><!-- form-group Starts -->

                                    <label class="control-label" > Car Location* </label>

                                    <select type="text" name="loc" class="form-control" required="required" >
                                      
                                        <option value="0" disabled="disabled">Select Location</option>
                
                                        <option value="1">Vijayawada</option>
                  
                                        <option value="2">Tirupati</option>
                     
                                        <option value="3">Nellore</option>
                                        
                                        <option value="4">Rajahmundry</option>
                                        
                                        <option value="5">Vizag</option>
                                        <option value="6">Guntur</option>
                
                                    </select>

                                </div><!-- form-group Ends -->
                               
                                <div class="form-group" ><!-- form-group Starts -->

                                    <label class="control-label" > Car Image *  </label>

                                    <input type="file" name="product_img" class="form-control" required="required" >

                                </div><!-- form-group Ends -->
                                
                                <div class="form-group" ><!-- form-group Starts -->

                                    <label class="control-label" > Car Availability* </label>

                                    <select type="text" name="available" class="form-control" required="required">
                
                                        <option value="0">Available</option>
                 
                                        <option value="1">Un-Available</option>
                  
                                    </select>

                                </div><!-- form-group Ends -->
                                  <div class="form-group" ><!-- form-group Starts -->

                                    <label class="control-label" >Km Limit (km)</label>

                                    <input type="number" name="kmlimit" class="form-control" required="required" >

                                </div><!-- form-group Ends -->
                                 <div class="form-group" ><!-- form-group Starts -->

                                    <label class="control-label" > Excess Km Charges*(/km) </label>

                                    <input type="number" name="excess" class="form-control" required="required" >

                                </div><!-- form-group Ends -->
                                <div class="form-group" ><!-- form-group Starts -->
 
                                    <label class="control-label" ></label>

                                    <input type="submit" name="submit" value="Insert Car" class="btn btn-primary form-control" >

                                </div><!-- form-group Ends -->

                            </div><!-- col-md-6 Ends -->

                        </div><!-- row Ends -->
                        
                    </form><!-- form-horizontal Ends -->

                </div><!-- panel-body Ends -->

            </div><!-- panel panel-default Ends -->

        </div><!-- col-lg-12 Ends -->

    </div><!-- 2 row Ends -->
  
    </body>

    </html>

    <?php

    if(isset($_POST['submit'])){

        $product_title = mysqli_real_escape_string($con, $_POST['product_title']);
        
        $loc = mysqli_real_escape_string($con, $_POST['loc']);
        
        $available = mysqli_real_escape_string($con, $_POST['available']);

        $product_price = mysqli_real_escape_string($con, $_POST['product_price']);
         $product_price1 = mysqli_real_escape_string($con, $_POST['product_price1']);
        
        $p_kmlimit = mysqli_real_escape_string($con, $_POST['kmlimit']);
        
        $p_excess = mysqli_real_escape_string($con, $_POST['excess']);
        
        $catid = mysqli_real_escape_string($con, $_POST['mainparent']);

        $product_img = $_FILES['product_img']['name'];
       
        $temp_name = $_FILES['product_img']['tmp_name'];
       
        $allowed = array('jpeg','jpg','gif','png');

        $product_img_extension = pathinfo($product_img, PATHINFO_EXTENSION);

        if(!in_array($product_img_extension,$allowed)){

            echo "<script> alert('Your Product Image 1 File Extension Is Not Supported.'); </script>";

            $product_img = "";

        }else{

            move_uploaded_file($temp_name,"product_images/$product_img");

        }
 
        $insert_product = "insert into cars (product_title,product_img,price,price1,cat_id,location,availability,kmlimit,excess) values ('$product_title','$product_img','$product_price','$product_price1','$catid','$loc',' $available','$p_kmlimit','$p_excess')";

        $run_product = mysqli_query($con,$insert_product);

        if($run_products){

            echo "<script>alert('Product has been inserted successfully')</script>";

            echo "<script>window.open('index.php?insert_car','_self')</script>";

        }else {
            
            echo "<script>alert('Not Inserted')</script>";
            
        }

    }

    ?>

<?php } ?>



