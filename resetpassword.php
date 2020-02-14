<?php
require_once 'includes/dbconnection.php';
if(isset($_POST["reset-password"])){
    $id = $_GET["id"];
    $password = trim($_POST["password"]);
    $confirmPassword = trim($_POST["confirmPassword"]);
    if($password == $confirmPassword){
        $password = password_hash($password,PASSWORD_DEFAULT);
        $stmt = $db->prepare("UPDATE users SET password = ? WHERE uid= ?");
        $stmt->execute(array($password,$id));
        $affected_rows= $stmt->rowCount();
        if($affected_rows){
            $success_message = "Password is reset successfully.<br> Now you are redirecting";
            header("Refresh:3; url=index.php");
        }else{
            $error_message="Failed : <br> Password not updated ";
        }
    }else{
        $error_message= "
        Password not matched";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <!-- META -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="pxtheme-govindsaini">

    <!-- PAGE TITLE -->
    <title>Journey Wheels</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <!-- style css -->

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/formstyle.css">
    <link rel="stylesheet" href="css/form-design.css">

		<link rel="stylesheet"
			  href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.10/css/ripples.min.css"/>

		<link rel="stylesheet" href="css/bootstrap-material-datetimepicker.css" />
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

		<script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.10/js/ripples.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.10/js/material.min.js"></script>
		
	<script type="text/javascript" src="http://momentjs.com/downloads/moment-with-locales.min.js"></script>
		<script type="text/javascript" src="js/bootstrap-material-datetimepicker.js"></script>

    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Distance css -->
    <link rel="stylesheet" href="css/distanced.css">
    
    <!-- modernizr js -->
    <script src="js/modernizr-2.8.3.min.js"></script>
    <style>.modal {
            z-index: 9999999999999;
            background: rgba(0,0,0,0.5);
        }
        .closeText:before {
    content: "Close";
}

.btn-flat{
   background-color:black; 
   border-radius:5px;
   color:white;
}
.btn-flat:hover{
    color:#ffb735;
}
body{
    background-color:white;
}
.navbar-brand img{
    padding:10px;
}
.pkg-item {
    background: #ffb735;
}
.wrapper-800 .form-group{
    padding:5px;
}
#style_img{
    padding-top:50px;
}
.pkg-item.active {
    background: white;
    color: black;
	border-bottom: solid 2px #ffb735;
}
.datetimepicker-widget.dropdown-menu  {
    width: 90px;
    margin-left:-100px ! important;
}

#frm-ele-styl{
    background-color:#ffb735 ! important;
    color:#000 ! important;
    border-bottom:1px solid #8c8c8c;
    font-weight:bold;
}

#frm-ele-styl::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: black;
}
#frm-ele-styl::-moz-placeholder { /* Firefox 19+ */
  color: black;
}
#frm-ele-styl:-ms-input-placeholder { /* IE 10+ */
  color: black;
}
#frm-ele-styl:-moz-placeholder { /* Firefox 18- */
  color: black;
}
  @media only screen and (max-width: 1199px) and (min-width: 992px){
.app-phone {
   
    top: 0px;
}
}
        @media (min-width: 768px)
        {
.navbar-toggle {
    display: block;
}

        }
        label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
   
    color: #777;
            margin-left: 20px;
}
@media only screen and (max-width: 1600px) and (min-width: 320px){
.absulate-pos {
    right: 15px!important;
}
}
@media  (max-width: 479px) and (min-width: 320px){
    .sm_dspy{
        display:none;
    }
    .download-info h2 small{
        color:black;
    }
}
    </style>
	<style>
	@media only screen and (max-width: 990px) and (min-width: 768px){
	    .testimonials {
	        display:none;
	    }
	}
	    @media only screen and (min-width: 320px) and (max-width: 1600px) {
	       .dtp-picker-month{
	           display:none;
	       } 
	      .dtp{
	          top:5%;
	         
	      }
	      .dtp-content{
	          border-radius:5px;
	      }
	      .dtp-header{
	      border-top-left-radius:5px;
	       border-top-right-radius:5px;
	      }
	      #dtp-svg-clock{
	          height:200px;
	      }
	      .svg-clock{
	      height:200px;
	      }
	      .dtp table.dtp-picker-days tr > td{
	          padding:0em 0em;
	      }
	      .dtp table.dtp-picker-days tr > th{
	          padding:0em 0em;
	      }
	      .dtp-picker{
	          height:250px;
	      }
	      .year-picker-item {
              padding-top: 0px; 
              font-size: unset; 
	    }
	    .dtp-picker-year .btn{
	        padding: 0px 0px;
	    }
	    }
	    @media only screen and (min-width: 1200px) and (max-width: 1360px) {
	       
	    }
	    @media only screen and (max-width: 1199px) and (min-width: 992px) {
	        
	    }
	    
       @media only screen and (min-width: 768px) and (max-width: 990px) {
       }
       @media only screen and (min-width: 480px) and (max-width: 767px) {
       }
       @media only screen and (min-width: 320px) and (max-width: 479px) {
           .dtp{
	          top:10%;
	      }
       }
       
}
.form-control{
    padding:10px;
}
  @media (min-width: 768px){
      .bookcab{
          margin-top:80px;
      }
  }
	</style>
	
</head><!--<![endif]-->

<body >
    <?php
    include ("header.php");
    ?>
      <section class="bookcab" id="bookcab" style="background: #ffb735;
    background-image: url(../images/texture.png);margin-top:70px">
        <div class="container container-shadow">

    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-3 col-xs-2"></div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-8 ">
    <form id="resetPassword" name="resetPassword" method="post">
         <?php  if(!empty($success_message)){?>
            <div class="success_message text-center" style="color: green"><?php echo $success_message ?></div>
        <?php }?>

        <?php  if(!empty($error_message)){?>
            <div class="error_message text-center" style="color: red"><?php echo $error_message ?></div>
        <?php }?>
         <h4 class="heading-padding text-center" style="color:black;"><b>Reset Password</b></h4>
        <div class="row mt-3">
           
                 <div class="form-group">
                    <!--<label>Enter New Password</label>-->
                    <input  class="form-control" type="password" id="password" name="password" placeholder="Enter New Password" style="border-radius:5px;border:1px solid gray;padding:10px;" required>
                </div>
                 <div class="form-group">
                    <!--<label>Confirm New Password</label>-->
                    <input  class="form-control" type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm New Password" style="border-radius:5px;border:1px solid gray;padding:10px;" required>
                </div>
                <div class="form-group text-center">
                 <button type="submit" class="btn btn-default btn-book" name="reset-password" id="reset-password" >Reset</button>
                 </div>
       
       
          

            </div>
       
    </form>
        </div>
        <div class="col-lg-4"></div>
    </div>
    </div></section>
</div>
<?php
    include ("footer.php");
    ?>
    <script src="js/jquery.validate.min.js"></script>

<!-- Gmap3 JS -->
<script type="text/javascript" src="js/map/gmap3.js"></script>
<!-- Geocomplete JS -->
<script src="js/jquery.geocomplete.min.js"></script>
<!-- Bootstrap JS -->
<script src="js/bootstrap-3.3.7/bootstrap.min.js"></script>
<script src="js/bootstrap-3.3.7/bootstrap-select.min.js"></script>
<script src="js/bootstrap-3.3.7/moment-with-locales.js"></script>
<script src="js/bootstrap-3.3.7/bootstrap-datetimepicker.js"></script>
<!-- OwlCarousel JS -->
<script src="js/owl.carousel.min.js"></script>
<!-- Theme JS -->
<script src="js/wow.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>
<script type="text/javascript">
    $('.px-datepicker').datetimepicker({
        format: 'DD/MM/YYYY',
        widgetPositioning: {
            horizontal: 'right',
            vertical: 'bottom'
        }
    });
    $('.styleStitcher').click(function(){
        $('.style_warrper').toggleClass('active')
    })

    $('.style_warrper ul li a').each(function(){

        $(this).click(function(e){
            e.preventDefault();
            var css = $(this).attr('href');
            var link_ = $('#styler')
            var path = $('#styler').data('cssrot')
            var cssLink = path+css;
            link_.attr('href',cssLink)
        })
    })
</script>
<script type="text/javascript">
    $(function(){
        $('a[title]').tooltip();
    });

</script>

<script>
    $(document).ready(function() {
  
    var numItems = $('li.fancyTab').length;
	
			  if (numItems == 12){
					$("li.fancyTab").width('8.3%');
				}
			  if (numItems == 11){
					$("li.fancyTab").width('9%');
				}
			  if (numItems == 10){
					$("li.fancyTab").width('10%');
				}
			  if (numItems == 9){
					$("li.fancyTab").width('11.1%');
				}
			  if (numItems == 8){
					$("li.fancyTab").width('12.5%');
				}
			  if (numItems == 7){
					$("li.fancyTab").width('14.2%');
				}
			  if (numItems == 6){
					$("li.fancyTab").width('16.666666666666667%');
				}
			  if (numItems == 5){
					$("li.fancyTab").width('20%');
				}
			  if (numItems == 4){
					$("li.fancyTab").width('25%');
				}
			  if (numItems == 3){
					$("li.fancyTab").width('33.3%');
				}
			  if (numItems == 2){
					$("li.fancyTab").width('50%');
				}
		  
	
		});

$(window).load(function() {

  $('.fancyTabs').each(function() {

    var highestBox = 0;
    $('.fancyTab a', this).each(function() {

      if ($(this).height() > highestBox)
        highestBox = $(this).height();
    });

    $('.fancyTab a', this).height(highestBox);

  });
});
    
    </script>
   
<script type="text/javascript">
		$(document).ready(function()
		{
			$('#date').bootstrapMaterialDatePicker
			({
				time: false,
				clearButton: true
			});

			$('#time').bootstrapMaterialDatePicker
			({
				date: false,
				shortTime: false,
				format: 'HH:mm'
			});

			$('#date-format').bootstrapMaterialDatePicker
			({
				format: 'dddd DD MMMM YYYY - HH:mm'
			});
			$('#date-fr').bootstrapMaterialDatePicker
			({
				format: 'DD/MM/YYYY HH:mm',
				lang: 'fr',
				weekStart: 1, 
				cancelText : 'ANNULER',
				nowButton : true,
				switchOnClick : true
			});

			$('#date-end').bootstrapMaterialDatePicker
			({
				weekStart: 0, format: 'DD/MM/YYYY HH:mm'
			});
			$('#date-start').bootstrapMaterialDatePicker
			({
				weekStart: 0, format: 'DD/MM/YYYY HH:mm', shortTime : true
			}).on('change', function(e, date)
			{
				$('#date-end').bootstrapMaterialDatePicker('setMinDate', date);
			});

			$('#min-date').bootstrapMaterialDatePicker({ format : 'DD/MM/YYYY HH:mm', minDate : new Date() });

			$.material.init()
		});
		</script>

    <script>$(function () {
  $('.datetimepicker').datetimepicker({});
});</script>
<script type="text/javascript">
    $(document).ready(function(){

        $('#type').on("change",function () {
            var categoryId = $(this).find('option:selected').val();
            $.ajax({
                url: "ajax.php",
                type: "POST",
                data: "categoryId="+categoryId,
                success: function (response) {
                    console.log(response);
                    $("#type1").html(response);
                },
            });
        });

    });
     $(document).ready(function(){

        $('#type').on("change",function () {
            var categoryId1 = $(this).find('option:selected').val();
            $.ajax({
                url: "ajax.php",
                type: "POST",
                data: "categoryId1="+categoryId1,
                success: function (response) {
                    console.log(response);
                    $("#type2").html(response);
                },
            });
        });

    });
    
</script>

</body>
</html>
