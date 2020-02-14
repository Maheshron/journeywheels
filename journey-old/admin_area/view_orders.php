<?php


if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>

<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts  --->

<li class="active">

<i class="fa fa-dashboard"></i> Dashboard / View Orders

</li>

</ol><!-- breadcrumb Ends  --->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->


<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title"><!-- panel-title Starts -->

<i class="fa fa-money fa-fw"></i> View Orders

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<div class="table-responsive"><!-- table-responsive Starts -->

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
if(isset($_GET['view_orders'])){
   $id=$_GET['view_orders'];

$i = 0;

$get_pro = "select * from customers_orders where location='$id' ORDER BY id DESC LIMIT $start_from, $limit";

$run_pro = mysqli_query($con,$get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){
    

$razorpay_order_id = $row_pro['razorpay_order_id'];

$payment_id = $row_pro['payment_id'];

$customer_id = $row_pro['customer_id'];

$amount = $row_pro['amount'];

$vehicle_id = $row_pro['vehicle_id'];

$pick_location = $row_pro['pick_location'];
$drop_location = $row_pro['drop_location'];
$pick_datetime= $row_pro['pick_datetime'];

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
<td class="text-center"><?php echo $pick_datetime; ?> <br>To<br><?php echo $drop_datetime; ?></td>
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

<?php }} ?>

</tbody><!-- tbody Ends -->

</table><!-- table table-bordered table-hover table-striped Ends -->
<div class="col-md-12 col-xs-12 col-sm-12 text-center">
                                <?php
                                $sql = "SELECT COUNT(id) FROM customers_orders where location='$id'";
                                $result = mysqli_query($con, $sql);

                                $row = mysqli_fetch_row($result);

                                $total_records = $row[0];

                                $total_pages = ceil($total_records / $limit);
                                $pagLink = "<ul class='pagination pagination-md justify-content-center' >";
                                for ($i = 1; $i <= $total_pages; $i++) {
                                    $c="active";
                                    if($page==$i)
                                    {
                                        $c="active";
                                    }
                                    else
                                    {
                                        $c="";
                                    }
                                    $pagLink .= "<li class='page-item $c'><a class='page-link ' style='margin-left:5px' href='index.php?view_orders=" . $id . "&page=" . $i . "'>" . $i . "</a></li>";
                                };
                                echo $pagLink . "</ul>";


                                echo "<script type='text/javascript'>
                                            $(document).ready(function(){
                                                $('.pagination').pagination({
                                                    items:  $total_records,
                                                    itemsOnPage:$limit,
                                                    cssStyle: 'light-theme',
                                                    currentPage : $page,
                                                    hrefTextPrefix : 'index.php?view_orders=" . $id . "&page='
                                                });
                                            });
                                        </script>";

                                ?>
                            </div>
</div><!-- table-responsive Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->

<!--pattern="(6|7|8|9)\d{9}"-->
<?php } ?>