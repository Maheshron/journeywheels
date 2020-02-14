 <footer class="footer ftr-padding" id="footer">
        <div class="container">
            <div class="row">
    	<div class="hidden-md hidden-lg visible-xs text-center">
                    <center class="hidden-md visible-xs"><br/> <br/><div class="buttons">
                       <center> <a href="" class="btn btn-default wow bounceIn text-center ftr-btn-styl hidden-md"  data-toggle='modal' data-target='#demo-4' data-wow-duration="0.5s" data-wow-delay="0.5s"><i class="fa fa-handshake-o" aria-hidden="true"></i>&nbsp&nbsp; Partner With Us</a> </center>
                     <br/>
                    </div> </center>
           </div>
                <div class="col-md-3 wow fadeInRight"  data-wow-duration="0.5s" data-wow-delay="0.2s">
                    
               
				<div class="ftr-cnt-icn">
                   <i class="fa fa-address-book" style="" > </i></div>
                  <div class="mobl-view-cnt-cntr">
				   <h1 class="title">contact</h1>
                    <!-- ADDRESS -->
                    <address>
                        <strong>HEAD OFFICE</strong>
                        <p>JOURNEY WHEELS,<br> #19-1-112/A, JM COMPLEX <br>OLD EXHIBITION GROUND,<br> NEAR OPP RTC BUS STAND, TIRUPATI,<br> ANDHRA PRADESH-517501</p>
                        <ul class="contact-info">
                            <li><i class="fa fa-phone"></i> (+91) 8106454599,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(+91) 8759999969 </li>
                            <!--<li><i class="fa fa-fax"></i> 123-456-7890 </li>-->
                            <li><i class="fa fa-envelope-o"></i>Contact@journeywheels.in</li>
                            <!--<li><i class="fa fa-briefcase "></i> <a href="mailTo:career@joueneywheels.com">career@joueneywheels.com</a> </li>-->
                        </ul>
                    </address>
                    <!-- ADDRESS -->
                    <!-- SCIAL ICON -->
                    <i class="fa fa-globe icon-siz-styl" aria-hidden="true"></i>
                    <h6 style="display:inline-block; color:#fff; font-size:18px;">Social Media</h6>
                    <ul class="social-icon">
                        
                        <li><a href="https://www.facebook.com/journeywheelsoffical/" id="scl-icon-siz" target="_blank" class="fa fa-facebook-square"></a></li>
                        <li><a href="https://www.twitter.com/journey_wheels" id="scl-icon-siz" target="_blank" class="fa fa-twitter-square"></a></li>
                        <li><a href="" class="fa fa-youtube-square" target="_blank"></a></li>
                        <li><a href="https://www.linkedin.com/in/journey-wheels-offical" id="scl-icon-siz" target="_blank" class="fa fa-linkedin-square"></a></li>
                         <li><a href="https://www.instagram.com/journey_wheels/" id="scl-icon-siz" target="_blank" class="fa fa-instagram"></a></li>
                        <li><a href="https://in.pinterest.com/journeywheels/" id="scl-icon-siz" target="_blank" class="fa fa-pinterest-square"></a></li>
                    </ul>
                    <!-- SCIAL ICON END -->
                    <p class="copyright">© 2018 <i>Journey Wheels</i> All Rights Reserved</p>
                    <ul class="legal">
                        <li><a href="terms_conditions.php">Terms & Condition</a></li>
                        <li><a href="privacy_policy.php">Privacy Policy </a></li>
                    </ul>
                </div>
				</div>
                <!-- MESSSAGE FORM  -->
                
                <div class="col-md-5  message-form wow fadeInLeft">
                        
				<div class="hidden-xs">
                    <h3 class="toll-free"> Call Us <a href="#">(+91) 939 - 1090 -908</a>
                        <small>If you have a question ? fill the form</small>
                    </h3>
                   
                    <form action=" " method="post">
                        <div class="row">
                            <div class="col-md-12  wow bounce" >
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-user-o"></i></div>
                                    <input name="nam" type="text" class="form-control" placeholder="Enter Name" required="required" >
                                </div>
                            </div>
                            <div class="col-md-12  wow bounce" >
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                    <input name="numbe" type="text" class="form-control"  pattern="[6789][0-9]{9}" title="10 digits number only & start with 6,7,8,9" minlength="10" maxlength="10" placeholder="Mobile Number" required="required">
                                    <!--onkeydown="javascript: return event.keyCode == 69 ? false : true"-->
                                </div>
                            </div>
                            <div class="col-md-12  wow bounce" >
                                <div class="input-group ">
                                    <div class="input-group-addon"><i class="fa fa-envelope-o"></i></div>
                                    <input  name="emai" type="email"  class="form-control" placeholder="Enter Email" required="required">
                                </div>
                            </div>
                            <div class="col-md-12  wow bounce">
                                <div class="input-group ">
                                    <textarea name="typemessag" id="typemessage" cols="30" rows="5" class="form-control" placeholder="Type Message" required="required"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12  wow bounce">
                                <div class="buttons no-padding">
                                    <button type="submit" name="sendquery" class="btn btn-primary ">
                                        <i class="fa fa-send"></i> Send Query
                                    </button>
                                </div>
                            </div>
                        </div>
                  <?php
    if(isset($_POST['sendquery']))
    {
       
  $name = $_POST['nam'];
  $mobile = $_POST['numbe'];
  $email = $_POST['emai'];
  $query = $_POST['typemessag'];
	
/*$to='Contact@journeywheels.in';*/
		$mailBodyContent='';
            $mailBodyContent.="<html>
            <body>
                <table style='width:600px;'>
                    <tbody>
                        <tr>
                            <td style='width:150px'><strong>Name: </strong></td>
                            <td style='width:400px'>$name</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Mobile: </strong></td>
                            <td style='width:400px'>$mobile</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Email: </strong></td>
                            <td style='width:400px'>$email</td>
                        </tr>
                         <tr>
                            <td style='width:150px'><strong>Message: </strong></td>
                            <td style='width:400px'>$query</td>
                        </tr>
                    </tbody>
                </table>
            </body>
        </html>";
  			$headers = 'From: Journey Wheels<Journeywheels@gmail.com>' . "\r\n";
  			$headers .= "MIME-Version: 1.0\r\n";
  			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";		 
  			$issueSubject="";
  			$issueSubject="Journey Wheels Contact Us Query";
  			$mailsent=mail("Contact@journeywheels.in",stripslashes($issueSubject),$mailBodyContent,$headers);
                    if($mailsent){
                        echo"<script>alert('Thanks $name | We Have Received Your Query, We will contact you shortly '); 
                        window.location.href='our_vehicle.php';
                        </script>";
                    }
                     else {
             echo "<script>
                    alert('Error in submission ');
                </script>";
        }
                    
        }  
       
	
?>
                    </form>
                    </div>
                </div>
                
                <!-- MESSSAGE FORM  -->
                <!-- GOOGLE MAP  -->
                <div class="col-md-4 hidden-xs no-padding map-container wow fadeInRight">
                    <!--  <div id="gmap" class="gmap"
                        data-address="The Heights, Jersey City, NJ, United States"
                        data-marker-icon="assets/theme/img/mar_marker.png">
                     </div> -->
                     <iframe width="100%" height="540" src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=%2319-1-112%2FA%2C%20SHOP%20NO%3A-6%20JM%20COMPLEX%20PARKING%20Chainthalathenu%20Road%20NEAR%20SUBWAY%20Opp%20RTC%20bus%20stand%20Old%20exhibition%20Grounds%2C%20Kothapalli%2C%20Tirupati%2C%20Andhra%20Pradesh%20517501%20%20%20%20+(Title)&amp;ie=UTF8&amp;t=&amp;z=10&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
				</div>
				

                <!-- GOOGLE MAP  -->
            </div>
        </div>
    </footer>