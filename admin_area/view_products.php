<?php

if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<div class="row"><!--  1 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<ol class="breadcrumb" ><!-- breadcrumb Starts -->

<li class="active" >

<i class="fa fa-dashboard"></i> Dashboard / View Bike

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!--  1 row Ends -->

<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" ><!-- panel-title Starts -->

<i class="fa fa-money fa-fw" ></i> View Bikes

</h3><!-- panel-title Ends -->


</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead>

<tr>
    
<th>Bike ID</th>

<th>Bike Title</th>

<th>Bike Image</th>

<th>Bike Price</th>

<th>Location</th>

<th>Availabilty</th>

<th> Delete</th>

<th> Edit</th>

</tr>

</thead>

<tbody>
<tr style="background-color:#ffe6ff">
    <td></td>
    <td><b>Tirupati</b></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    
</tr>
<?php

$i = 0;

$get_pro = "select * from products  where location=2 ";

$run_pro = mysqli_query($con,$get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){

$pro_id = $row_pro['id'];

$pro_title = $row_pro['product_title'];

$pro_image = $row_pro['product_img'];

$pro_price = $row_pro['price'];

$p_location = $row_pro['location'];

$p_availability= $row_pro['availability'];

$cat_id= $row_pro['cat_id'];

$i++;

?>

<tr>

<td><?php echo $pro_id; ?></td>

<td><?php echo $pro_title; ?></td>

<td><img src="product_images/<?php echo $pro_image; ?>" width="200" height="100"></td>

<td><i class="fa fa-inr"></i> <?php echo $pro_price; ?></td>



<td>  <?php if($p_location==1){ 
    
              echo 'Vijayawada';
              
              }elseif($p_location==2){
                  
              echo 'Tirupati';
              
              }elseif($p_location==3){
                  
              echo 'Nellore';
              
              }elseif($p_location==4){
                  
              echo 'Rajahmundry';
              
              }elseif($p_location==5){
                  
              echo 'Vizag';
              
              }elseif($p_location==6){
                  
              echo 'Guntur';
              
              }  ?>
              
</td>

<td> <?php if($p_availability==0){ 
    
              echo 'Available';
              
              }elseif($p_availability==1){
                  
              echo 'Un-Available';
              
              } ?>
              
</td>

<td>

<a href="index.php?delete_product=<?php echo $pro_id; ?>">

<i class="fa fa-trash-o"> </i> Delete

</a>

</td>

<td>

<a href="index.php?edit_product=<?php echo $pro_id; ?>">

<i class="fa fa-pencil"> </i> Edit

</a>

</td>

</tr>

<?php } ?>
<tr style="background-color:#ffe6ff">
    <td></td>
    <td><b>Vijayawada</b></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    
</tr>
<?php

$i = 0;

$get_pro = "select * from products  where location=1 ";

$run_pro = mysqli_query($con,$get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){

$pro_id = $row_pro['id'];

$pro_title = $row_pro['product_title'];

$pro_image = $row_pro['product_img'];

$pro_price = $row_pro['price'];

$p_location = $row_pro['location'];

$p_availability= $row_pro['availability'];

$cat_id= $row_pro['cat_id'];

$i++;

?>

<tr>

<td><?php echo $pro_id; ?></td>

<td><?php echo $pro_title; ?></td>

<td><img src="product_images/<?php echo $pro_image; ?>" width="200" height="100"></td>

<td><i class="fa fa-inr"></i> <?php echo $pro_price; ?></td>



<td>  <?php if($p_location==1){ 
    
              echo 'Vijayawada';
              
              }elseif($p_location==2){
                  
              echo 'Tirupati';
              
              }elseif($p_location==3){
                  
              echo 'Nellore';
              
              }elseif($p_location==4){
                  
              echo 'Rajahmundry';
              
              }elseif($p_location==5){
                  
              echo 'Vizag';
              
              }
              
              elseif($p_location==6)
              {
                  
              echo 'Guntur';
              
              }
              
              elseif($p_location==7)
              {
                  
              echo 'Kakinada';
              
              }
              elseif($p_location==8)
              {
                  
              echo 'Kadapa';
              
              }
              elseif($p_location==9)
              {
                  
              echo 'Ananthapuram';
              
              }
              elseif($p_location==10)
              {
                  
              echo 'Chittoor';
              
              }
              
              ?>
              
</td>

<td> <?php if($p_availability==0){ 
    
              echo 'Available';
              
              }elseif($p_availability==1){
                  
              echo 'Un-Available';
              
              } ?>
              
</td>

<td>

<a href="index.php?delete_product=<?php echo $pro_id; ?>">

<i class="fa fa-trash-o"> </i> Delete

</a>

</td>

<td>

<a href="index.php?edit_product=<?php echo $pro_id; ?>">

<i class="fa fa-pencil"> </i> Edit

</a>

</td>

</tr>

<?php } ?>
<tr style="background-color:#ffe6ff">
    <td></td>
    <td><b>Nellore</b></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    
</tr>
<?php

$i = 0;

$get_pro = "select * from products  where location=3 ";

$run_pro = mysqli_query($con,$get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){

$pro_id = $row_pro['id'];

$pro_title = $row_pro['product_title'];

$pro_image = $row_pro['product_img'];

$pro_price = $row_pro['price'];

$p_location = $row_pro['location'];

$p_availability= $row_pro['availability'];

$cat_id= $row_pro['cat_id'];

$i++;

?>

<tr>

<td><?php echo $pro_id; ?></td>

<td><?php echo $pro_title; ?></td>

<td><img src="product_images/<?php echo $pro_image; ?>" width="200" height="100"></td>

<td><i class="fa fa-inr"></i> <?php echo $pro_price; ?></td>



<td>  <?php if($p_location==1){ 
    
              echo 'Vijayawada';
              
              }elseif($p_location==2){
                  
              echo 'Tirupati';
              
              }elseif($p_location==3){
                  
              echo 'Nellore';
              
              }elseif($p_location==4){
                  
              echo 'Rajahmundry';
              
              }elseif($p_location==5){
                  
              echo 'Vizag';
              
              }elseif($p_location==6){
                  
              echo 'Guntur';
              
              }  
              elseif($p_location==7)
              {
                  
              echo 'Kakinada';
              
              }
              elseif($p_location==8)
              {
                  
              echo 'Kadapa';
              
              }
              elseif($p_location==9)
              {
                  
              echo 'Ananthapuram';
              
              }
              elseif($p_location==10)
              {
                  
              echo 'Chittoor';
              
              }
              ?>
              
</td>

<td> <?php if($p_availability==0){ 
    
              echo 'Available';
              
              }elseif($p_availability==1){
                  
              echo 'Un-Available';
              
              } ?>
              
</td>

<td>

<a href="index.php?delete_product=<?php echo $pro_id; ?>">

<i class="fa fa-trash-o"> </i> Delete

</a>

</td>

<td>

<a href="index.php?edit_product=<?php echo $pro_id; ?>">

<i class="fa fa-pencil"> </i> Edit

</a>

</td>

</tr>

<?php } ?>
<tr style="background-color:#ffe6ff">
    <td></td>
    <td><b>Rajahmundry</b></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    
</tr>
<?php

$i = 0;

$get_pro = "select * from products  where location=4 ";

$run_pro = mysqli_query($con,$get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){

$pro_id = $row_pro['id'];

$pro_title = $row_pro['product_title'];

$pro_image = $row_pro['product_img'];

$pro_price = $row_pro['price'];

$p_location = $row_pro['location'];

$p_availability= $row_pro['availability'];

$cat_id= $row_pro['cat_id'];

$i++;

?>

<tr>

<td><?php echo $pro_id; ?></td>

<td><?php echo $pro_title; ?></td>

<td><img src="product_images/<?php echo $pro_image; ?>" width="200" height="100"></td>

<td><i class="fa fa-inr"></i> <?php echo $pro_price; ?></td>



<td>  <?php if($p_location==1){ 
    
              echo 'Vijayawada';
              
              }elseif($p_location==2){
                  
              echo 'Tirupati';
              
              }elseif($p_location==3){
                  
              echo 'Nellore';
              
              }elseif($p_location==4){
                  
              echo 'Rajahmundry';
              
              }elseif($p_location==5){
                  
              echo 'Vizag';
              
              }elseif($p_location==6){
                  
              echo 'Guntur';
              
              } 
              elseif($p_location==7)
              {
                  
              echo 'Kakinada';
              
              }
              elseif($p_location==8)
              {
                  
              echo 'Kadapa';
              
              }
              elseif($p_location==9)
              {
                  
              echo 'Ananthapuram';
              
              }
              elseif($p_location==10)
              {
                  
              echo 'Chittoor';
              
              }


              ?>
              
</td>

<td> <?php if($p_availability==0){ 
    
              echo 'Available';
              
              }elseif($p_availability==1){
                  
              echo 'Un-Available';
              
              } ?>
              
</td>

<td>

<a href="index.php?delete_product=<?php echo $pro_id; ?>">

<i class="fa fa-trash-o"> </i> Delete

</a>

</td>

<td>

<a href="index.php?edit_product=<?php echo $pro_id; ?>">

<i class="fa fa-pencil"> </i> Edit

</a>

</td>

</tr>

<?php } ?>
<tr style="background-color:#ffe6ff">
    <td></td>
    <td><b>Vizag</b></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    
</tr>
<?php

$i = 0;

$get_pro = "select * from products  where location=5";

$run_pro = mysqli_query($con,$get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){

$pro_id = $row_pro['id'];

$pro_title = $row_pro['product_title'];

$pro_image = $row_pro['product_img'];

$pro_price = $row_pro['price'];

$p_location = $row_pro['location'];

$p_availability= $row_pro['availability'];

$cat_id= $row_pro['cat_id'];

$i++;

?>

<tr>

<td><?php echo $pro_id; ?></td>

<td><?php echo $pro_title; ?></td>

<td><img src="product_images/<?php echo $pro_image; ?>" width="200" height="100"></td>

<td><i class="fa fa-inr"></i> <?php echo $pro_price; ?></td>



<td>  <?php if($p_location==1){ 
    
              echo 'Vijayawada';
              
              }elseif($p_location==2){
                  
              echo 'Tirupati';
              
              }elseif($p_location==3){
                  
              echo 'Nellore';
              
              }elseif($p_location==4){
                  
              echo 'Rajahmundry';
              
              }elseif($p_location==5){
                  
              echo 'Vizag';
              
              }elseif($p_location==6){
                  
              echo 'Guntur';
              
              } 
              
              elseif($p_location==7)
              {
                  
              echo 'Kakinada';
              
              }
              elseif($p_location==8)
              {
                  
              echo 'Kadapa';
              
              }
              elseif($p_location==9)
              {
                  
              echo 'Ananthapuram';
              
              }
              elseif($p_location==10)
              {
                  
              echo 'Chittoor';
              
              }
              
              ?>
              
</td>

<td> <?php if($p_availability==0){ 
    
              echo 'Available';
              
              }elseif($p_availability==1){
                  
              echo 'Un-Available';
              
              } ?>
              
</td>

<td>

<a href="index.php?delete_product=<?php echo $pro_id; ?>">

<i class="fa fa-trash-o"> </i> Delete

</a>

</td>

<td>

<a href="index.php?edit_product=<?php echo $pro_id; ?>">

<i class="fa fa-pencil"> </i> Edit

</a>

</td>

</tr>

<?php } ?>
<tr style="background-color:#ffe6ff">
    <td></td>
    <td><b>Guntur</b></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    
</tr>
<?php

$i = 0;

$get_pro = "select * from products  where location=6";

$run_pro = mysqli_query($con,$get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){

$pro_id = $row_pro['id'];

$pro_title = $row_pro['product_title'];

$pro_image = $row_pro['product_img'];

$pro_price = $row_pro['price'];

$p_location = $row_pro['location'];

$p_availability= $row_pro['availability'];

$cat_id= $row_pro['cat_id'];

$i++;

?>

<tr>

<td><?php echo $pro_id; ?></td>

<td><?php echo $pro_title; ?></td>

<td><img src="product_images/<?php echo $pro_image; ?>" width="200" height="100"></td>

<td><i class="fa fa-inr"></i> <?php echo $pro_price; ?></td>



<td>  <?php if($p_location==1){ 
    
              echo 'Vijayawada';
              
              }elseif($p_location==2){
                  
              echo 'Tirupati';
              
              }elseif($p_location==3){
                  
              echo 'Nellore';
              
              }elseif($p_location==4){
                  
              echo 'Rajahmundry';
              
              }elseif($p_location==5){
                  
              echo 'Vizag';
              
              }elseif($p_location==6){
                  
              echo 'Guntur';
              
              }
              
              elseif($p_location==7)
              {
                  
              echo 'Kakinada';
              
              }
              elseif($p_location==8)
              {
                  
              echo 'Kadapa';
              
              }
              elseif($p_location==9)
              {
                  
              echo 'Ananthapuram';
              
              }
              elseif($p_location==10)
              {
                  
              echo 'Chittoor';
              
              }
              ?>
              
</td>

<td> <?php if($p_availability==0){ 
    
              echo 'Available';
              
              }elseif($p_availability==1){
                  
              echo 'Un-Available';
              
              } ?>
              
</td>

<td>

<a href="index.php?delete_product=<?php echo $pro_id; ?>">

<i class="fa fa-trash-o"> </i> Delete

</a>

</td>

<td>

<a href="index.php?edit_product=<?php echo $pro_id; ?>">

<i class="fa fa-pencil"> </i> Edit

</a>

</td>

</tr>

<?php } ?>


<tr style="background-color:#ffe6ff">
    <td></td>
    <td><b>Kakinada</b></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    
</tr>
<?php

$i = 0;

$get_pro = "select * from products  where location=7";

$run_pro = mysqli_query($con,$get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){

$pro_id = $row_pro['id'];

$pro_title = $row_pro['product_title'];

$pro_image = $row_pro['product_img'];

$pro_price = $row_pro['price'];

$p_location = $row_pro['location'];

$p_availability= $row_pro['availability'];

$cat_id= $row_pro['cat_id'];

$i++;

?>

<tr>

<td><?php echo $pro_id; ?></td>

<td><?php echo $pro_title; ?></td>

<td><img src="product_images/<?php echo $pro_image; ?>" width="200" height="100"></td>

<td><i class="fa fa-inr"></i> <?php echo $pro_price; ?></td>



<td>  <?php if($p_location==1){ 
    
              echo 'Vijayawada';
              
              }elseif($p_location==2){
                  
              echo 'Tirupati';
              
              }elseif($p_location==3){
                  
              echo 'Nellore';
              
              }elseif($p_location==4){
                  
              echo 'Rajahmundry';
              
              }elseif($p_location==5){
                  
              echo 'Vizag';
              
              }elseif($p_location==6){
                  
              echo 'Guntur';
              
              } 
              
              elseif($p_location==7)
              {
                  
              echo 'Kakinada';
              
              }
              elseif($p_location==8)
              {
                  
              echo 'Kadapa';
              
              }
              elseif($p_location==9)
              {
                  
              echo 'Ananthapuram';
              
              }
              elseif($p_location==10)
              {
                  
              echo 'Chittoor';
              
              }
              
              ?>
              
</td>

<td> <?php if($p_availability==0){ 
    
              echo 'Available';
              
              }elseif($p_availability==1){
                  
              echo 'Un-Available';
              
              } ?>
              
</td>

<td>

<a href="index.php?delete_product=<?php echo $pro_id; ?>">

<i class="fa fa-trash-o"> </i> Delete

</a>

</td>

<td>

<a href="index.php?edit_product=<?php echo $pro_id; ?>">

<i class="fa fa-pencil"> </i> Edit

</a>

</td>

</tr>

<?php } ?>


<tr style="background-color:#ffe6ff">
    <td></td>
    <td><b>Kadapa</b></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    
</tr>
<?php

$i = 0;

$get_pro = "select * from products  where location=8";

$run_pro = mysqli_query($con,$get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){

$pro_id = $row_pro['id'];

$pro_title = $row_pro['product_title'];

$pro_image = $row_pro['product_img'];

$pro_price = $row_pro['price'];

$p_location = $row_pro['location'];

$p_availability= $row_pro['availability'];

$cat_id= $row_pro['cat_id'];

$i++;

?>

<tr>

<td><?php echo $pro_id; ?></td>

<td><?php echo $pro_title; ?></td>

<td><img src="product_images/<?php echo $pro_image; ?>" width="200" height="100"></td>

<td><i class="fa fa-inr"></i> <?php echo $pro_price; ?></td>



<td>  <?php if($p_location==1){ 
    
              echo 'Vijayawada';
              
              }elseif($p_location==2){
                  
              echo 'Tirupati';
              
              }elseif($p_location==3){
                  
              echo 'Nellore';
              
              }elseif($p_location==4){
                  
              echo 'Rajahmundry';
              
              }elseif($p_location==5){
                  
              echo 'Vizag';
              
              }elseif($p_location==6){
                  
              echo 'Guntur';
              
              } 
              
              elseif($p_location==7)
              {
                  
              echo 'Kakinada';
              
              }
              elseif($p_location==8)
              {
                  
              echo 'Kadapa';
              
              }
              elseif($p_location==9)
              {
                  
              echo 'Ananthapuram';
              
              }
              elseif($p_location==10)
              {
                  
              echo 'Chittoor';
              
              }
              
              ?>
              
</td>

<td> <?php if($p_availability==0){ 
    
              echo 'Available';
              
              }elseif($p_availability==1){
                  
              echo 'Un-Available';
              
              } ?>
              
</td>

<td>

<a href="index.php?delete_product=<?php echo $pro_id; ?>">

<i class="fa fa-trash-o"> </i> Delete

</a>

</td>

<td>

<a href="index.php?edit_product=<?php echo $pro_id; ?>">

<i class="fa fa-pencil"> </i> Edit

</a>

</td>

</tr>

<?php } ?>
<tr style="background-color:#ffe6ff">
    <td></td>
    <td><b>Ananthapuram</b></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    
</tr>
<?php

$i = 0;

$get_pro = "select * from products  where location=9";

$run_pro = mysqli_query($con,$get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){

$pro_id = $row_pro['id'];

$pro_title = $row_pro['product_title'];

$pro_image = $row_pro['product_img'];

$pro_price = $row_pro['price'];

$p_location = $row_pro['location'];

$p_availability= $row_pro['availability'];

$cat_id= $row_pro['cat_id'];

$i++;

?>

<tr>

<td><?php echo $pro_id; ?></td>

<td><?php echo $pro_title; ?></td>

<td><img src="product_images/<?php echo $pro_image; ?>" width="200" height="100"></td>

<td><i class="fa fa-inr"></i> <?php echo $pro_price; ?></td>



<td>  <?php if($p_location==1){ 
    
              echo 'Vijayawada';
              
              }elseif($p_location==2){
                  
              echo 'Tirupati';
              
              }elseif($p_location==3){
                  
              echo 'Nellore';
              
              }elseif($p_location==4){
                  
              echo 'Rajahmundry';
              
              }elseif($p_location==5){
                  
              echo 'Vizag';
              
              }elseif($p_location==6){
                  
              echo 'Guntur';
              
              }  
              elseif($p_location==7)
              {
                  
              echo 'Kakinada';
              
              }
              elseif($p_location==8)
              {
                  
              echo 'Kadapa';
              
              }
              elseif($p_location==9)
              {
                  
              echo 'Ananthapuram';
              
              }
              elseif($p_location==10)
              {
                  
              echo 'Chittoor';
              
              }
              ?>
              
</td>

<td> <?php if($p_availability==0){ 
    
              echo 'Available';
              
              }elseif($p_availability==1){
                  
              echo 'Un-Available';
              
              } ?>
              
</td>

<td>

<a href="index.php?delete_product=<?php echo $pro_id; ?>">

<i class="fa fa-trash-o"> </i> Delete

</a>

</td>

<td>

<a href="index.php?edit_product=<?php echo $pro_id; ?>">

<i class="fa fa-pencil"> </i> Edit

</a>

</td>

</tr>

<?php } ?>
<tr style="background-color:#ffe6ff">
    <td></td>
    <td><b>Chittor</b></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    
</tr>
<?php

$i = 0;

$get_pro = "select * from products  where location=10";

$run_pro = mysqli_query($con,$get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){

$pro_id = $row_pro['id'];

$pro_title = $row_pro['product_title'];

$pro_image = $row_pro['product_img'];

$pro_price = $row_pro['price'];

$p_location = $row_pro['location'];

$p_availability= $row_pro['availability'];

$cat_id= $row_pro['cat_id'];

$i++;

?>

<tr>

<td><?php echo $pro_id; ?></td>

<td><?php echo $pro_title; ?></td>

<td><img src="product_images/<?php echo $pro_image; ?>" width="200" height="100"></td>

<td><i class="fa fa-inr"></i> <?php echo $pro_price; ?></td>



<td>  <?php if($p_location==1){ 
    
              echo 'Vijayawada';
              
              }elseif($p_location==2){
                  
              echo 'Tirupati';
              
              }elseif($p_location==3){
                  
              echo 'Nellore';
              
              }elseif($p_location==4){
                  
              echo 'Rajahmundry';
              
              }elseif($p_location==5){
                  
              echo 'Vizag';
              
              }elseif($p_location==6){
                  
              echo 'Guntur';
              
              }
              elseif($p_location==7)
              {
                  
              echo 'Kakinada';
              
              }
              elseif($p_location==8)
              {
                  
              echo 'Kadapa';
              
              }
              elseif($p_location==9)
              {
                  
              echo 'Ananthapuram';
              
              }
              elseif($p_location==10)
              {
                  
              echo 'Chittoor';
              
              }


              ?>
              
</td>

<td> <?php if($p_availability==0){ 
    
              echo 'Available';
              
              }elseif($p_availability==1){
                  
              echo 'Un-Available';
              
              } ?>
              
</td>

<td>

<a href="index.php?delete_product=<?php echo $pro_id; ?>">

<i class="fa fa-trash-o"> </i> Delete

</a>

</td>

<td>

<a href="index.php?edit_product=<?php echo $pro_id; ?>">

<i class="fa fa-pencil"> </i> Edit

</a>

</td>

</tr>

<?php } ?>






</tbody>

</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->

<?php } ?>