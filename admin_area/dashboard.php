<?php



if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {




?>

<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<h1 class="page-header"><i class="fa fa-dashboard"></i> Dashboard</h1>


</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->


    <div class="row"><!-- 2 row Starts -->



        <div class="col-lg-4 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

            <div class="panel panel-green"><!-- panel panel-green Starts -->

                <div class="panel-heading"><!-- panel-heading Starts -->

                    <div class="row"><!-- panel-heading row Starts -->

                        <div class="col-xs-3"><!-- col-xs-3 Starts -->

                            <i class="fa fa-users fa-5x"> </i>

                        </div><!-- col-xs-3 Ends -->

                        <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

                            <div class="huge"> <?php echo $count_customers; ?> </div>

                            <div>Customer Management</div>

                        </div><!-- col-xs-9 text-right Ends -->

                    </div><!-- panel-heading row Ends -->

                </div><!-- panel-heading Ends -->

                <a href="index.php?view_customers">

                    <div class="panel-footer"><!-- panel-footer Starts -->

                        <span class="pull-left"> View Details </span>

                        <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

                        <div class="clearfix"></div>

                    </div><!-- panel-footer Ends -->

                </a>

            </div><!-- panel panel-green Ends -->

        </div><!-- col-lg-3 col-md-6 Ends -->
           <div class="col-lg-4 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

            <div class="panel panel-yellow"><!-- panel panel-yellow Starts -->

                <div class="panel-heading"><!-- panel-heading Starts -->

                    <div class="row"><!-- panel-heading row Starts -->

                        <div class="col-xs-3"><!-- col-xs-3 Starts -->

                            <i class="fa fa-credit-card fa-5x"> </i>

                        </div><!-- col-xs-3 Ends -->

                        <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

                            <div class="huge"> <?php echo $count_coupons; ?></div>

                            <div>Offer Management</div>

                        </div><!-- col-xs-9 text-right Ends -->

                    </div><!-- panel-heading row Ends -->

                </div><!-- panel-heading Ends -->

                <a href="index.php?view_coupons">

                    <div class="panel-footer"><!-- panel-footer Starts -->

                        <span class="pull-left"> View Details </span>

                        <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

                        <div class="clearfix"></div>

                    </div><!-- panel-footer Ends -->

                </a>

            </div><!-- panel panel-yellow Ends -->

        </div><!-- col-lg-3 col-md-6 Ends -->


        <div class="col-lg-4 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

            <div class="panel panel-red"><!-- panel panel-red Starts -->

                <div class="panel-heading"><!-- panel-heading Starts -->

                    <div class="row"><!-- panel-heading row Starts -->

                        <div class="col-xs-3"><!-- col-xs-3 Starts -->

                            <i class="fa fa-user fa-5x"> </i>

                        </div><!-- col-xs-3 Ends -->

                        <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

                            <div class="huge"> <?php echo $count_admins; ?> </div>

                            <div>Admin Management</div>

                        </div><!-- col-xs-9 text-right Ends -->

                    </div><!-- panel-heading row Ends -->

                </div><!-- panel-heading Ends -->

                <a href="index.php?view_users">

                    <div class="panel-footer"><!-- panel-footer Starts -->

                        <span class="pull-left"> View Details </span>

                        <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

                        <div class="clearfix"></div>

                    </div><!-- panel-footer Ends -->

                </a>

            </div><!-- panel panel-red Ends -->

        </div><!-- col-lg-3 col-md-6 Ends -->

    </div><!-- 2 row Ends -->
     <div class="row"><!-- 2 row Starts -->

        <div class="col-lg-4 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

            <div class="panel panel-info"><!-- panel panel-green Starts -->

                <div class="panel-heading"><!-- panel-heading Starts -->

                    <div class="row"><!-- panel-heading row Starts -->

                        <div class="col-xs-3"><!-- col-xs-3 Starts -->

                            <i class="fa fa-motorcycle fa-5x"> </i>

                        </div><!-- col-xs-3 Ends -->

                        <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

                            <div class="huge"> <?php echo $count_pending_orders; ?> </div>

                            <div>Bikes Order Management</div>

                        </div><!-- col-xs-9 text-right Ends -->

                    </div><!-- panel-heading row Ends -->

                </div><!-- panel-heading Ends -->

                <a href="index.php?bike_all_orders">

                    <div class="panel-footer"><!-- panel-footer Starts -->

                        <span class="pull-left"> View Details </span>

                        <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

                        <div class="clearfix"></div>

                    </div><!-- panel-footer Ends -->

                </a>

            </div><!-- panel panel-green Ends -->

        </div><!-- col-lg-3 col-md-6 Ends -->
        <div class="col-lg-4 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

            <div class="panel panel-danger"><!-- panel panel-red Starts -->

                <div class="panel-heading"><!-- panel-heading Starts -->

                    <div class="row"><!-- panel-heading row Starts -->

                        <div class="col-xs-3"><!-- col-xs-3 Starts -->

                            <i class="fa fa-car fa-5x"> </i>

                        </div><!-- col-xs-3 Ends -->

                        <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

                            <div class="huge"> <?php echo $count_cars_orders; ?> </div>

                            <div>Cars Order Management</div>

                        </div><!-- col-xs-9 text-right Ends -->

                    </div><!-- panel-heading row Ends -->

                </div><!-- panel-heading Ends -->

                <a href="index.php?car_all_orders">

                    <div class="panel-footer"><!-- panel-footer Starts -->

                        <span class="pull-left"> View Details </span>

                        <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

                        <div class="clearfix"></div>

                    </div><!-- panel-footer Ends -->

                </a>

            </div><!-- panel panel-red Ends -->

        </div><!-- col-lg-3 col-md-6 Ends -->

        <div class="col-lg-4 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

            <div class="panel panel-success"><!-- panel panel-yellow Starts -->

                <div class="panel-heading"><!-- panel-heading Starts -->

                    <div class="row"><!-- panel-heading row Starts -->

                        <div class="col-xs-3"><!-- col-xs-3 Starts -->

                            <i class="fa fa-bicycle fa-5x"> </i>

                        </div><!-- col-xs-3 Ends -->

                        <div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

                            <div class="huge"> <?php echo $count_bicycles_orders; ?></div>

                            <div>Bicycles Order Management</div>

                        </div><!-- col-xs-9 text-right Ends -->

                    </div><!-- panel-heading row Ends -->

                </div><!-- panel-heading Ends -->

                <a href="index.php?bicycle_all_orders">

                    <div class="panel-footer"><!-- panel-footer Starts -->

                        <span class="pull-left"> View Details </span>

                        <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

                        <div class="clearfix"></div>

                    </div><!-- panel-footer Ends -->

                </a>

            </div><!-- panel panel-yellow Ends -->

        </div><!-- col-lg-3 col-md-6 Ends -->




    </div><!-- 2 row Ends -->

<div class="row" ><!-- 3 row Starts -->

<div class="col-lg-12" ><!-- col-lg-8 Starts -->

<div class="panel panel-primary" ><!-- panel panel-primary Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" ><!-- panel-title Starts -->

<i class="fa fa-money fa-fw" ></i> Bikes Order Managemnet

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped"><!-- table table-bordered table-hover table-striped Starts -->

<thead><!-- thead Starts -->

<tr>

<th>Order Id</th>
<th>Payment Id</th>
<th>Customer Id</th>
<th>Vehicle Id</th>
<th>Vehicle Name</th>
<th>Pick Location</th>
<th>Pick&Drop Date Time</th>
<th>Drop Location</th>
<th>Location</th>
<th>Amount Paid</th>
<th>Order Date</th>
<th>Name</th>
<th>Mail</th>
<th>Contact</th>
<th>Delete Order</th>


</tr>

</thead><!-- thead Ends -->

<?php
              $limit = 10;
              if (isset($_GET["page"])) {
                  $page = $_GET["page"];
              }
              else {
                  $page = 1;
              };
              $start_from = ($page - 1) * $limit;
              ?>

<tbody><!-- tbody Starts -->



<?php

$i = 0;

$get_pro = "select * from customers_orders ORDER BY id DESC LIMIT 5";

$run_pro = mysqli_query($con,$get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){
    

$razorpay_order_id = $row_pro['razorpay_order_id'];

$payment_id = $row_pro['payment_id'];

$customer_id = $row_pro['customer_id'];

$amount = $row_pro['amount'];

$vehicle_id = $row_pro['vehicle_id'];

$pick_location = $row_pro['pick_location'];
$drop_location = $row_pro['drop_location'];
$pick_datatime = $row_pro['pick_datetime'];
$drop_datetime= $row_pro['drop_datetime'];
$vehicle_title = $row_pro['vehicle_title'];
$order_date = $row_pro['order_date'];
$mail = $row_pro['email'];
$name = $row_pro['name'];
$location = $row_pro['location'];
$contact = $row_pro['contact_no'];
$address = $row_pro['address'];

$i++;




?>

<tr>

<td class="text-center"><?php echo $razorpay_order_id; ?></td>

<td class="text-center" ><?php echo $payment_id; ?></td>

<td class="text-center"><?php echo $customer_id; ?></td>

<td class="text-center"><?php echo $vehicle_id; ?></td>

<td class="text-center"><?php echo $vehicle_title ; ?></td>

<td class="text-center"><?php echo $pick_location; ?></td>
<td class="text-center"><?php echo $pick_datatime; ?><br>To<br><?php echo $drop_datetime; ?></td>
<td class="text-center"><?php echo $pick_location; ?></td>
<td class="text-center"> <?php if($location==1){ 
    
              echo 'Vijayawada';
              
              }elseif($location==2){
                  
              echo 'Tirupati';
              
              }elseif($location==3){
                  
              echo 'Nellore';
              
              }elseif($location==4){
                  
              echo 'Rajahmundry';
              
              }elseif($location==5){
                  
              echo 'Vizag';
              
              }  ?></td>
<td class="text-center">Rs <?php echo $amount; ?></td>
<td class="text-center"><?php echo $order_date; ?></td>
<td class="text-center"><?php echo $name; ?></td>
<td class="text-center"><?php echo $mail; ?></td>
<td class="text-center"><?php echo $contact; ?></td>

<td class="text-center">

<a href="index.php?order_delete=<?php echo $order_id; ?>" >

<i class="fa fa-trash-o" ></i>

</a>

</td>


</tr>

<?php } ?>

</tbody><!-- tbody Ends -->

</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->

<div class="text-right" ><!-- text-right Starts -->

<a href="index.php?bike_all_orders" >

View All Orders <i class="fa fa-arrow-circle-right" ></i>

</a>

</div><!-- text-right Ends -->


</div><!-- panel-body Ends -->

</div><!-- panel panel-primary Ends -->

</div><!-- col-lg-8 Ends -->



</div><!-- 3 row Ends -->

<div class="row" ><!-- 3 row Starts -->

<div class="col-lg-12" ><!-- col-lg-8 Starts -->

<div class="panel panel-primary" ><!-- panel panel-primary Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" ><!-- panel-title Starts -->

<i class="fa fa-money fa-fw" ></i> Cars Order Managemnet

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped"><!-- table table-bordered table-hover table-striped Starts -->

<thead><!-- thead Starts -->

<tr>

<th>Order Id</th>
<th>Payment Id</th>
<th>Customer Id</th>
<th>Vehicle Id</th>
<th>Vehicle Name</th>
<th>Pick Location</th>
<th>Pick&Drop Date Time</th>
<th>Drop Location</th>
<th>Location</th>
<th>Amount Paid</th>
<th>Order Date</th>
<th>Name</th>
<th>Mail</th>
<th>Contact</th>
<th>Delete Order</th>


</tr>

</thead><!-- thead Ends -->

<?php
              $limit = 10;
              if (isset($_GET["page"])) {
                  $page = $_GET["page"];
              }
              else {
                  $page = 1;
              };
              $start_from = ($page - 1) * $limit;
              ?>

<tbody><!-- tbody Starts -->



<?php

$i = 0;

$get_pro = "select * from cars_orders ORDER BY id DESC LIMIT 5";

$run_pro = mysqli_query($con,$get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){
    

$razorpay_order_id = $row_pro['razorpay_order_id'];

$payment_id = $row_pro['payment_id'];

$customer_id = $row_pro['customer_id'];

$amount = $row_pro['amount'];

$vehicle_id = $row_pro['vehicle_id'];

$pick_location = $row_pro['pick_location'];
$drop_location = $row_pro['drop_location'];
$pick_datatime = $row_pro['pick_datetime'];
$drop_datetime= $row_pro['drop_datetime'];
$vehicle_title = $row_pro['vehicle_title'];
$order_date = $row_pro['order_date'];
$mail = $row_pro['email'];
$name = $row_pro['name'];
$location = $row_pro['location'];
$contact = $row_pro['contact_no'];
$address = $row_pro['address'];

$i++;




?>

<tr>

<td class="text-center"><?php echo $razorpay_order_id; ?></td>

<td class="text-center" ><?php echo $payment_id; ?></td>

<td class="text-center"><?php echo $customer_id; ?></td>

<td class="text-center"><?php echo $vehicle_id; ?></td>

<td class="text-center"><?php echo $vehicle_title ; ?></td>

<td class="text-center"><?php echo $pick_location; ?></td>
<td class="text-center"><?php echo $pick_datatime; ?><br>To<br><?php echo $drop_datetime; ?></td>
<td class="text-center"><?php echo $pick_location; ?></td>
<td class="text-center"><?php if($location==1){ 
    
              echo 'Vijayawada';
              
              }elseif($location==2){
                  
              echo 'Tirupati';
              
              }elseif($location==3){
                  
              echo 'Nellore';
              
              }elseif($location==4){
                  
              echo 'Rajahmundry';
              
              }elseif($location==5){
                  
              echo 'Vizag';
              
              }  ?></td>
<td class="text-center">Rs <?php echo $amount; ?></td>
<td class="text-center"><?php echo $order_date; ?></td>
<td class="text-center"><?php echo $name; ?></td>
<td class="text-center"><?php echo $mail; ?></td>
<td class="text-center"><?php echo $contact; ?></td>

<td class="text-center">

<a href="index.php?order_delete1=<?php echo $order_id; ?>" >

<i class="fa fa-trash-o" ></i>

</a>

</td>


</tr>

<?php } ?>

</tbody><!-- tbody Ends -->

</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->

<div class="text-right" ><!-- text-right Starts -->

<a href="index.php?car_all_orders" >

View All Orders <i class="fa fa-arrow-circle-right" ></i>

</a>

</div><!-- text-right Ends -->


</div><!-- panel-body Ends -->

</div><!-- panel panel-primary Ends -->

</div><!-- col-lg-8 Ends -->



</div><!-- 3 row Ends -->

<div class="row" ><!-- 3 row Starts -->

<div class="col-lg-12" ><!-- col-lg-8 Starts -->

<div class="panel panel-primary" ><!-- panel panel-primary Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" ><!-- panel-title Starts -->

<i class="fa fa-money fa-fw" ></i> Bi-Cycles Order Managemnet

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped"><!-- table table-bordered table-hover table-striped Starts -->

<thead><!-- thead Starts -->

<tr>

<th>Order Id</th>
<th>Payment Id</th>
<th>Customer Id</th>
<th>Vehicle Id</th>
<th>Vehicle Name</th>
<th>Pick Location</th>
<th>Pick&Drop Date Time</th>
<th>Drop Location</th>
<th>Location</th>
<th>Amount Paid</th>
<th>Order Date</th>
<th>Name</th>
<th>Mail</th>
<th>Contact</th>
<th>Delete Order</th>


</tr>

</thead><!-- thead Ends -->

<?php
              $limit = 10;
              if (isset($_GET["page"])) {
                  $page = $_GET["page"];
              }
              else {
                  $page = 1;
              };
              $start_from = ($page - 1) * $limit;
              ?>

<tbody><!-- tbody Starts -->



<?php

$i = 0;

$get_pro = "select * from bicycles_orders ORDER BY id DESC LIMIT 5";

$run_pro = mysqli_query($con,$get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){
    

$razorpay_order_id = $row_pro['razorpay_order_id'];

$payment_id = $row_pro['payment_id'];

$customer_id = $row_pro['customer_id'];

$amount = $row_pro['amount'];

$vehicle_id = $row_pro['vehicle_id'];

$pick_location = $row_pro['pick_location'];
$drop_location = $row_pro['drop_location'];
$pick_datatime = $row_pro['pick_datetime'];
$drop_datetime= $row_pro['drop_datetime'];
$vehicle_title = $row_pro['vehicle_title'];
$order_date = $row_pro['order_date'];
$mail = $row_pro['email'];
$name = $row_pro['name'];
$location = $row_pro['location'];
$contact = $row_pro['contact_no'];
$address = $row_pro['address'];

$i++;




?>

<tr>

<td class="text-center"><?php echo $razorpay_order_id; ?></td>

<td class="text-center" ><?php echo $payment_id; ?></td>

<td class="text-center"><?php echo $customer_id; ?></td>

<td class="text-center"><?php echo $vehicle_id; ?></td>

<td class="text-center"><?php echo $vehicle_title ; ?></td>

<td class="text-center"><?php echo $pick_location; ?></td>
<td class="text-center"><?php echo $pick_datatime; ?><br>To<br><?php echo $drop_datetime; ?></td>
<td class="text-center"><?php echo $pick_location; ?></td>
<td class="text-center"><?php if($location==1){ 
    
              echo 'Vijayawada';
              
              }elseif($location==2){
                  
              echo 'Tirupati';
              
              }elseif($location==3){
                  
              echo 'Nellore';
              
              }elseif($location==4){
                  
              echo 'Rajahmundry';
              
              }elseif($location==5){
                  
              echo 'Vizag';
              
              }  ?></td>
<td class="text-center">Rs <?php echo $amount; ?></td>
<td class="text-center"><?php echo $order_date; ?></td>
<td class="text-center"><?php echo $name; ?></td>
<td class="text-center"><?php echo $mail; ?></td>
<td class="text-center"><?php echo $contact; ?></td>

<td class="text-center">

<a href="index.php?order_delete2=<?php echo $order_id; ?>" >

<i class="fa fa-trash-o" ></i>

</a>

</td>


</tr>

<?php } ?>

</tbody><!-- tbody Ends -->

</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->

<div class="text-right" ><!-- text-right Starts -->

<a href="index.php?bicycle_all_orders" >

View All Orders <i class="fa fa-arrow-circle-right" ></i>

</a>

</div><!-- text-right Ends -->


</div><!-- panel-body Ends -->

</div><!-- panel panel-primary Ends -->

</div><!-- col-lg-8 Ends -->



</div><!-- 3 row Ends -->
<?php } ?>