<?php


if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {




?>

<nav class="navbar navbar-inverse navbar-fixed-top" ><!-- navbar navbar-inverse navbar-fixed-top Starts -->

<div class="navbar-header" ><!-- navbar-header Starts -->

<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse" ><!-- navbar-ex1-collapse Starts -->


<span class="sr-only" >Toggle Navigation</span>

<span class="icon-bar" ></span>

<span class="icon-bar" ></span>

<span class="icon-bar" ></span>


</button><!-- navbar-ex1-collapse Ends -->

<a class="navbar-brand" href="index.php?dashboard" ><img style="height:40px ;width:150px" src="product_images/logo1.jpg" alt="logo"></a>


</div><!-- navbar-header Ends -->

<img src="admin_images/<?php echo $admin_image; ?>" class="rounded img-responsive " style="height: 50px;width: 50px;float:right">

<ul class="nav navbar-right top-nav" ><!-- nav navbar-right top-nav Starts -->

<li class="dropdown" ><!-- dropdown Starts -->

<a href="#" class="dropdown-toggle" data-toggle="dropdown" ><!-- dropdown-toggle Starts -->

<h4><?php echo $admin_name; ?> <b class="caret" ></b></h4>


</a><!-- dropdown-toggle Ends -->

<ul class="dropdown-menu" ><!-- dropdown-menu Starts -->

<li><!-- li Starts -->

<a href="index.php?user_profile=<?php echo $admin_id; ?>" >

<i class="fa fa-fw fa-user" ></i> My Profile


</a>

</li><!-- li Ends -->
<li><!-- li Starts -->

<a href="index.php?view_users" >

<i class="fa fa-fw fa-users" ></i> Admins

<span class="badge" ><?php echo $count_admins; ?></span>


</a>

</li><!-- li Ends -->

<!--<li><!-- li Starts -->
<!---->
<!--<a href="index.php?view_products" >-->
<!---->
<!--<i class="fa fa-fw fa-envelope" ></i> Products -->
<!---->
<!--<span class="badge" >--><?php //echo $count_products; ?><!--</span>-->
<!---->
<!---->
<!--</a>-->
<!---->
<!--</li><!-- li Ends -->
<!--<li><!-- li Starts -->

<!--<a href="index.php?view_customers" >-->

<!--<i class="fa fa-fw fa-users" ></i> Customers-->

<!--<span class="badge" ><?php echo $count_customers; ?></span>-->


<!--</a>-->

<!--</li><!-- li Ends -->



<li class="divider"></li>

<li><!-- li Starts -->

<a href="logout.php">

<i class="fa fa-fw fa-power-off"> </i> Log Out

</a>

</li><!-- li Ends -->

</ul><!-- dropdown-menu Ends -->




</li><!-- dropdown Ends -->


</ul><!-- nav navbar-right top-nav Ends -->

<div class="collapse navbar-collapse navbar-ex1-collapse"><!-- collapse navbar-collapse navbar-ex1-collapse Starts -->

<ul class="nav navbar-nav side-nav"><!-- nav navbar-nav side-nav Starts -->

<li><!-- li Starts -->

<a href="index.php?dashboard">

<i class="fa fa-fw fa-dashboard"></i> Dashboard

</a>

</li><!-- li Ends -->

<li><!-- Bikes Section li Starts -->

<a href="#" data-toggle="collapse" data-target="#bikes"><!-- anchor Starts -->

<i class="fa fa-motorcycle" style="font-size:18px"></i> Bikes

<i class="fa fa fa-angle-down" style="float:right"></i>

</a><!-- anchor Ends -->

<ul id="bikes" class="collapse"><!-- ul collapse Starts -->

<li>
<a href="index.php?insert_product"> Insert Bike </a>
</li>

<li>
<a href="index.php?view_products"> View Bike </a>
</li>

</ul><!-- ul collapse Ends -->

</li><!-- Bikes Section li Ends -->
<li><!-- Bi-Cycles Section li Starts -->

<a href="#" data-toggle="collapse" data-target="#bicycles"><!-- anchor Starts -->

<i class="fa fa-bicycle" style="font-size:18px"></i> Bi-Cycles

<i class="fa fa fa-angle-down" style="float:right"></i>

</a><!-- anchor Ends -->

<ul id="bicycles" class="collapse"><!-- ul collapse Starts -->

<li>
<a href="index.php?insert_bicycle"> Insert Bi-Cycle </a>
</li>

<li>
<a href="index.php?view_bicycles"> View Bi-Cycles </a>
</li>

</ul><!-- ul collapse Ends -->

</li><!-- Bicycles Section li Ends -->
<li><!--cars Section li Starts -->

<a href="#" data-toggle="collapse" data-target="#cars"><!-- anchor Starts -->

<i class="fa fa-car" style="font-size:18px"></i> Cars

<i class="fa fa fa-angle-down" style="float:right"></i>

</a><!-- anchor Ends -->

<ul id="cars" class="collapse"><!-- ul collapse Starts -->

<li>
<a href="index.php?insert_car"> Insert Car </a>
</li>

<li>
<a href="index.php?view_cars"> View Cars </a>
</li>

</ul><!-- ul collapse Ends -->

</li><!-- Cars Section li Ends -->




<li>
    

<a href="#" data-toggle="collapse" data-target="#coupons">
<i class="fa fa-tags"></i> Special Offers

<i class="fa fa fa-angle-down" style="float:right"></i>

</a>

<ul id="coupons" class="collapse">
<li>
<a href="index.php?insert_coupon"> Insert Coupon </a>
</li>

<li>
<a href="index.php?view_coupons"> View Coupons </a>
</li>

</ul>

</li>

<!--<li>-->

<!--<a href="index.php?insert_cat">-->

<!--<i class="fa fa-fw fa-edit"></i> Insert Categories-->

<!--</a>-->

<!--</li>-->

<!--<li>-->

<!--<a href="index.php?insert_p_cat">-->

<!--<i class="fa fa-fw fa-edit"></i> Insert Sub Categories-->
<!--</a>-->

<!--</li>-->
<!--<li><!-- li Starts -->

<!--<a href="#" data-toggle="collapse" data-target="#vehicle">-->

<!--<i class="fa fa-fw fa-diamond" style="font-size:18px"></i> Vehicle Management-->
<!--<i class="fa fa fa-angle-down" style="float:right"></i>-->


<!--</a>-->

<!--<ul id="vehicle" class="collapse">-->

<!--<li>-->
<!--<a href="index.php?manage_bikes"> Manage Bikes  </a>-->
<!--</li>-->

<!--<li>-->
<!--<a href="index.php?manage_cars"> Manage Cars  </a>-->
<!--</li>-->
<!--<li>-->
<!--<a href="index.php?manage_bicycles"> Manage Bi-Cycles </a>-->
<!--</li>-->


<!--</ul>-->

<!--</li><!-- li Ends -->
<li><!-- li Starts -->

<a href="#" data-toggle="collapse" data-target="#orders">

<i class="fa fa-fw fa-list" style="font-size:18px"></i> Order Management
<i class="fa fa fa-angle-down" style="float:right"></i>


</a>

<ul id="orders" class="collapse">

<li>
<a href="index.php?bike_all_orders"> Bike Orders </a>
</li>

<li>
<a href="index.php?car_all_orders"> Car Orders </a>
</li>
<li>
<a href="index.php?bicycle_all_orders"> Bi-Cycle Orders</a>
</li>


</ul>

</li><!-- li Ends -->
<!--<li>-->

<!--<a href="index.php?view_payments">-->

<!--<i class="fa fa-fw fa-credit-card" style="font-size:18px"></i> Payment Management-->

<!--</a>-->

<!--</li>-->
<li><!-- li Starts -->

<a href="#" data-toggle="collapse" data-target="#users">

<i class="fa fa-fw fa-users" style="font-size:18px"></i> User Management
<i class="fa fa fa-angle-down" style="float:right"></i>


</a>

<ul id="users" class="collapse">

<!--<li>-->
<!--<a href="index.php?insert_user"> Insert Admin </a>-->
<!--</li>-->

<li>
<a href="index.php?view_customers"> View Customers</a>
</li>



</ul>

</li><!-- li Ends -->
<li><!-- li Starts -->

<a href="#" data-toggle="collapse" data-target="#admins">

<i class="fa fa-fw fa-user" style="font-size:18px"></i> Admin Management
<i class="fa fa fa-angle-down" style="float:right"></i>


</a>

<ul id="admins" class="collapse">

<li>
<a href="index.php?insert_user"> Insert Admin </a>
</li>

<li>
<a href="index.php?view_users"> View Admins </a>
</li>



</ul>

</li><!-- li Ends -->

<li><!-- li Starts -->

<a href="logout.php">

<i class="fa fa-fw fa-power-off"></i> Log Out

</a>

</li><!-- li Ends -->

</ul><!-- nav navbar-nav side-nav Ends -->

</div><!-- collapse navbar-collapse navbar-ex1-collapse Ends -->

</nav><!-- navbar navbar-inverse navbar-fixed-top Ends -->

<?php } ?>