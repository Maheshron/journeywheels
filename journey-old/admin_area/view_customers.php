<?php

if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>

<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"></i> Dashboard / View Customers

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts --> 

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title"><!-- panel-title Starts -->

<i class="fa fa-money fa-fw"></i> View Customers

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->


<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead><!-- thead Starts -->

<tr>

<th>Id</th>
<th>Name</th>
<th>Email</th>
<th>Contact No.</th>
<th>Address</th>
<th>License Image1</th>
<th>License Image2</th>
<th>Id Proof1</th>
<th>Id Proof2</th>
<!--<th>Member Name</th>
<th>Member Mobile</th>
<th>Member Mail</th>-->
<th>Delete</th>


</tr>

</thead><!-- thead Ends -->
<?php
              $limit = 50;
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

$i=0;

$get_c = "select * from users LIMIT $start_from, $limit";

$run_c = mysqli_query($con,$get_c);

while($row_c=mysqli_fetch_array($run_c)){

$c_id = $row_c['uid'];

$c_name = $row_c['name'];

$c_email = $row_c['email'];
$dob = $row_c['dob'];
$gender = $row_c['gender'];
$nation = $row_c['nation'];
$address = $row_c['address'];
$mem_name = $row_c['mem_name'];
$mem_mobile = $row_c['mem_mobile'];
$mem_mail= $row_c['mem_mail'];

$c_image = $row_c['image'];
$c_image1 = $row_c['image1'];
$c_image2 = $row_c['image2'];
$c_image3 = $row_c['image3'];
$c_contact = $row_c['mobile'];

$i++;




?>

<tr>

<td  class="text-center"><?php echo $c_id; ?></td>

<td  class="text-center"><?php echo $c_name; ?></td>

<td  class="text-center"><?php echo $c_email; ?></td>
<td  class="text-center"><?php echo $c_contact; ?></td>
<td  class="text-center"><?php echo $address; ?></td>
<td  class="text-center">
    <?php if($c_image=='add.png'){
        echo  "Not uploaded";
    }else{?>
    <img src="../images/<?php echo $c_image; ?>" width="100" height="100" >
    <?php } ?>
    </td>
<td  class="text-center">
    <?php if($c_image=='add.png'){
        echo  "Not uploaded";
    }else{?>
    <img src="../images/<?php echo $c_image1; ?>" width="100" height="100" >
    <?php } ?>
    </td>
<td  class="text-center">
    <?php if($c_image=='add.png'){
        echo  "Not uploaded";
    }else{?>
    <img src="../images/<?php echo $c_image2; ?>" width="100" height="100" >
    <?php } ?>
    </td>
<td  class="text-center">
    <?php if($c_image=='add.png'){
        echo  "Not uploaded";
    }else{?>
    <img src="../images/<?php echo $c_image3; ?>" width="100" height="100" >
    <?php } ?>
    </td>




<!--<td  class="text-center"php echo $mem_name; ?></td>
<td  class="text-center">php echo $mem_mobile; ?></td>
<td  class="text-center">php echo $mem_mail; ?></td>-->

<td  class="text-center">

<a href="index.php?customer_delete=<?php echo $c_id; ?>" >

<i class="fa fa-trash-o" ></i> 

</a>


</td>


</tr>

<?php } ?>


</tbody><!-- tbody Ends -->



</table><!-- table table-bordered table-hover table-striped Ends -->
<div class="col-md-12 col-xs-12 col-sm-12 text-center">
                                <?php
                                $sql = "SELECT COUNT(uid) FROM users ";
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
                                    $pagLink .= "<li class='page-item $c'><a class='page-link ' style='margin-left:5px' href='index.php?view_customers&page=" . $i . "'>" . $i . "</a></li>";
                                };
                                echo $pagLink . "</ul>";


                                echo "<script type='text/javascript'>
                                            $(document).ready(function(){
                                                $('.pagination').pagination({
                                                    items:  $total_records,
                                                    itemsOnPage:$limit,
                                                    cssStyle: 'light-theme',
                                                    currentPage : $page,
                                                    hrefTextPrefix : 'index.php?view_customers&page='
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

<?php } ?>