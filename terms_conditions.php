<?php
ob_start();
session_start();
if(!isset($_SESSION))

    include ("./includes/db.php");

include("./functions/functions.php");
$email = '';
if(isset($_SESSION["email"])){
    $email = $_SESSION['email'];
    $get_customer = "select * from users WHERE email='$email'";
    $run_customer = mysqli_query($db, $get_customer);
    $row = mysqli_fetch_array($run_customer);
    $uid = $row['uid'];
     $name = $row['name'];

}

?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html lang="en-US">
<head>
    <!-- META -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="JourneyWheels Bike Rental Services Terms & Conditions - View our Rental Agreement about your rights, responsibilities and limitations when hiring a motorcycle. Customers acknowledgment.">
    <meta name="keywords" content="Terms & Conditions, Hire a Motorcycle, Bike Rental Services, Rental Agreement, responsibilities and limitations, Customers acknowledgment">
    <meta name="author" content="pxtheme-govindsaini">

    <!-- PAGE TITLE -->
    <title>Terms & Conditions | Hire a Motorcycle | Bike Rental Services</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <!-- style css -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
<!--  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->

    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Distance css -->
    <link rel="stylesheet" href="css/distanced.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- modernizr js -->
    <script src="js/modernizr-2.8.3.min.js"></script>
    <style>.modal {
            z-index: 9999999999999;
            background: rgba(0,0,0,0.5);
        }
        .closeText:before {
    content: "Close";
}
#p_title{
    font-weight:bold;
}
.card{
    box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 1px 5px 0 rgba(0,0,0,0.12), 0 3px 1px -2px rgba(0,0,0,0.2);
}
    </style>
     <style>
                                              input[type="file"] {
                                                      display: none;
                                               }
                                             .custom-file-upload {
                                                   border: 1px solid #ccc;
                                                   display: inline-block;
                                                   padding: 6px 12px;
                                                   cursor: pointer;
                                              }
                                             .custom-file-upload  .overlay{
                                                  position: absolute;
  opacity:0;
  color: snow;
  font-size: 13px;
  margin-top:-1%;
  margin-left: 41%;
 }
                                              }
                                          </style>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-135221249-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-135221249-1');
</script>

</head><!--<![endif]-->

<body class="no-scroll" >
<!-- WIDE DESKTOP -->
<div id="wide-desktop">
    <!-- LOADER -->
   <?php 
   include ("header.php");
   ?>
    <!-- END HEADER -->

    <div class="clearfix"></div>
    <!-- BOOK CAB-->
    <section class="bookcab " id="bookcab" style="padding:80px 0;margin-top:50px;" >
        <div class="container ">
            <div class="row">
              <div class="col-md-12">
                 <div class="boxaccount " ><!-- box Starts -->
                     <div class="row">
                     <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="panel panel-default sidebar-menu" style="box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 1px 5px 0 rgba(0,0,0,0.12), 0 3px 1px -2px rgba(0,0,0,0.2);"><!-- panel panel-default sidebar-menu Starts -->
                           <div class="panel-heading text-center" style="background:#ffb735;">
                                <h4 id='p_title' >TERMS & CONDITIONS</h4>
                            </div>
                             <div class="panel-body customeracnt" >
                             <p><strong>    <u>DRIVING LICENCE+ADHAAR CARD or  GOVERNMENT ID IS </u></strong><strong><u>COMPULSORY</u></strong><strong><u> </u></strong><br />
  <strong>Terms  and Conditions</strong><br />
  Rider  needs to present a valid Driving License at the time of picking up the vehicle.  Original ID proof (Voter ID, Aadhaar Card or Passport) needs to be submitted at  the time of pick up.<br />
  If customer  drives the bike above 150 km/day then Rs.2 excess Fee will be levied per  Kilometer.<br />
  If the  vehicle booked for 5 hrs it will have a limit of 65 kms for bike<br />
  Late  Return fee would be Rs 100/hour plus hourly &amp; daily basis rent.<br />
  1  Complimentary helmet will be provided<br />
  Fuel  charges are not included.<br /><br />
  <strong>If  you don't bring the driving license, we will not handover the bike and  cancellation is not allowed.</strong> <br />
  If any of  the documents of the bike gets lost or damaged the fine will be as follows: <br />
  1<strong>.  R.C  – Rs 100 /-</strong>            2.    <strong>Pollution – Rs. 200 /-</strong>                    3.   <strong>Insurance  – Rs. 300 /-</strong><br />
  IF any  damage to the vehicle below 110cc Rs10000/-, below 150 cc Rs20000, 150cc to  350cc Rs 30000/- will be charged depending on the damage done to the vehicle during  rental period.<br /><br />
  <strong>Riding  Accessories:</strong><br />
  1)  We provide one helmet per Bike on rent and  the second one will be charged  a sum of  rupees 50/-on  request and they have to be  returned without any damages during the drop.<br />
  2)  Charges Applicable:<br />
  I. Fine  of Rs 1000 if helmet is lost.<br />
  ii. For  minor damages fine =Rs 350/-<br />
  iii. For  major damages fine =Rs 1500/- (The minor and major damages will be decided by  vendor.)<br /><br />
  <strong><u>Late Hour Charges (Without inform</u></strong><strong><u>)</u></strong><br />
  <strong><u>Gearless  vehicles </u>                                    <u>geared vehicles</u></strong><br />
  S.No    Late  Hours        Charges                         S.No        late Hours                    charges<br />
  <strong>1          Below  1 hour    No Charge                    1         Below 1 hour             No Charge</strong><br />
  <strong>2          1  Hour               100/-                               2          1 hour                        150/-</strong><br />
  <strong>3          2  Hours             200/-                               3          2 Hour                          200/-                                 </strong><br />
  <strong>4          3  to 5 hours       400/-                              4         3to 5 hours               600/-</strong><br />
  <strong>5          After  5 Hours    450                                5         After  5 hours             800/-</strong><br />
  <br />
  <strong>VENDORS DECISION WILL BE FINAL .ON LATE HOUR  CHARGES.</strong><br />
  When you  inform the vendor  late hour charges are different  for each bike (Please inform before 2hrs of return date &amp; time). <br /><br />
  <strong>Over  Speed Charges:</strong><br />
  S.No     Gearless (KM/hr) Charges                     Geared (KM/hr)  Charges<br />
  <strong>1          60-65                   No Charges            80-85            No CHARGE                  </strong><br />
  <strong>2          65-70                       150/-                85-90                 200/-         </strong><br />
  <strong>3          70-75                       200/-                90-95                 350/-</strong><br />
  <strong>4          75  &amp; Above             300/-              95 &amp; Above       500/-   </strong><br /><br />
  <strong>Kilometers limit perday/hours                   </strong><br />
  A Limit of  150Kms/day   every Excess kilometer Rs. 2 (below 125cc)<br />
  Above  125cc Rs 3 will be charged per kilometer<br />
  Above  180cc Rs 4 will be charged per kilometer<br />
  .In case of damage to the Bike on rent due to  accident/mishandling/carelessness, appropriate charges will be calculated by  the vendor and the customer is liable to pay the same to the vendor along with  the daily tariff until the bike is ready for renting again. <br /><br />
  <strong>1.  CONDITION OF THE VEHICLE</strong><br />
  1.1. The Customer hereby acknowledges  and accepts that the Customer has received the Vehicle from the Owner:<br />
  (a)  in a good and clean condition except as otherwise specified in the &ldquo;Vehicle  Details and Conditions Report&rdquo; prepared by the Owner prior to the handover of  the Vehicle to the Customer;<br />
  (b)  with supplied tools, spare tyre, accessories and equipment, keys, the mobile  global positioning system (GPS) (if provided) and other accessories and any  other items specified on the Vehicle Details and Condition Report;<br />
  (c) With the seal of the odometer  unbroken; and<br />
  (d) with the checked out odometer  reading and fuel reading.<br />
  1.2.  The Customer agrees that the Vehicle has been provided by the Owner to the  Customer on an &lsquo;as is&rsquo; basis, as set forth in detail at the time of delivery of  the Vehicle and nothing in this Agreement shall be construed as the Owner  giving to the Customer, any representation or warranty as to the nature,  condition, fitness for purpose, merchantability or suitability of the Vehicle.<br />
  1.3.  Upon return of the Vehicle by the Customer an inspection shall be conducted by  the maintenance staff of the Owner for assessing the condition of the Vehicle  and to identify any damage caused to Vehicle by the Customer during the Rental  Period. While the Owner shall take at least 24 hours to inspect the condition  of the Vehicle upon return, the Owner agrees that all efforts shall be made by  the Owner to complete inspection of the Vehicle by end of the business day  following the day on which the Owner received the Vehicle from the Customer. In  the event of any damage, defects or issues being identified upon such  inspection by the Owner, the same shall be notified to the Customer and such  damage or defects shall be dealt with in the manner enumerated in Clauses 1.5  to 1.9 below. Further, in the event of the Customer having committed any  traffic offence during the Rental Period and is liable for any penalty or fine,  the vendor shall charge it from the customer.<br />
  1.4.  The Customer hereby agrees that the Customer shall not be entitled to cancel,  withhold, defer or reduce the Rental Fee or any other amount payable by the  Customer in terms hereof by reason of any defect or deficiency in or damage to  the Vehicle, except otherwise as noted by the Owner at the time of providing  the Vehicle on rent to the Customer in the &ldquo;Vehicle Details and Conditions  Report&rdquo;. Any defect or deficiency in or damage to the Vehicle not observed and  noted in writing by the Owner at such time shall be deemed to have been caused  by the Customer and compensation or damages for the same shall be paid for by  the Customer to the Owner.<br />
  1.5.  In the event of any breakdown or repair of the Vehicle attributed to the  failure in routine maintenance or due to normal wear and tear, a replacement  Vehicle of closest category shall be provided by the Owner to the Customer  within reasonable time, if the Vehicle is within the city limits of the city in  which the Vehicle was hired by the Customer. However, such replacement of the  Vehicle by the Owner shall be subject to availability of a replacement vehicle  and provided such replacement has been requested by the Customer during the  normal business hours of the Owner. The Owner may at its sole discretion  require the Customer to pay additional amounts as Rental Fee towards the  replacement vehicle.<br />
  1.6.  All wear and tear and regular maintenance issues caused to the Vehicle during  the Rental Period shall be the responsibility of the Owner. However, any  major/substantial physical damage caused to the Vehicle during the Rental  Period shall be the responsibility of the Customer. The Owner shall reserve the  right to declare whether any damage caused to the Vehicle is substantial in  nature or not. In the event there is any substantial damage caused to the  Vehicle, the Customer hereby undertakes to fully compensate the Owner for such  damage, the quantum of which shall be evaluated by the Owner at market rates  for the parts damaged and the expenses to be incurred for repairs. The compensation  amounts will be charge to the customer in accordance with the terms contained  in this Agreement.<br />
  1.7.  In the event any damage has been caused to the unseen mechanical parts of the  Vehicle such as engine, gearbox, suspension, etc, during the Rental Period,  which were not identified by the Owner during the inspection upon return of the  Vehicle and is later identified by the Owner, the Customer shall be liable to  compensate the Owner for such damage caused to the Vehicle. The charges towards  repair or replacements for such damage to the Vehicle will be charge to the  customer.<br />
  1.8.  Further, the Customer hereby agrees to pay for reasonable costs of repair of  the Vehicle if: (i) the Owner has to pay extra costs to restore the vehicle to  its condition when the pre-rental inspection was carried out (for example, if  extra valeting time or special material or equipment is needed to restore the  vehicle to its pre- rental condition); or (ii) the vehicle has been damaged  internally or externally while in the possession of the Customer. These costs  shall include, but is not limited to, professional cleaning, deodorizing or  repair. The decision of Owner regarding the expenses, costs, etc. and whether  undertaking such repair of the Vehicle is required or not, shall be final in  this regard. The Customer agrees that the Customer shall also be responsible  for compensating the Owner towards any damage caused to the Vehicle on account  of hitting/colliding low-level or low lying objects, such as bridges, low  branches, etc.<br />
  1.9.  The Customer shall also be responsible for any loss or damage caused to any  additional equipment or accessories hired by the Customer at the time of  rental, including but not limited to satellite navigation equipment, etc.  Further, in the event any of the accessories, parts or equipment in the Vehicle  are removed from the Vehicle or are missing for any reason, the Customer shall  be liable to compensate the Owner for the same. In the event the keys of the  Vehicle are lost by the Customer, the Customer shall be responsible for any  charges relating to the same such as cost for key replacement and for loss of  business during the time taken to obtain replacement key, etc.<br />
  1.10.  In case any pre-existing damage had occurred to the Vehicle as mentioned in the  Vehicle Details and Conditions Report, however additional damage occurs on the  same part or area of the Vehicle during the Rental Period, the Customer shall  be charged either the proportionate cost of repair or the entire cost of repair  depending upon the extent of the damage caused by the Customer and the extent  of the pre-existing damage on the Vehicle. The decision on assessing the cost  shall be solely taken by the Owner and this decision shall be final and the  Customer agrees to accept the same without any protest whatsoever.</p>
<p><strong>2. LIMITATION OF LIABILITY:</strong><br />
  In no event shall the Owner be liable  to the Customer or any other person or entity for any special, consequential,  incidental, indirect, exemplary or punitive damages, however caused, arising  out of this Agreement.<br /><br />
  <strong>3</strong><strong>.  DAMAGE LIABILITY</strong><br />
  3.1  Not withstanding anything contained in this Agreement, in the event of any  damage or accident caused to the Vehicle while in the possession of the  Customer, the minimum damage cost liable to be paid by the Customer to the  Owner shall be the sum total of: (i) the actual amount incurred by the Owner  for repairs, restoration or rectification of the Vehicle to its old condition  and (ii) the rental fee for the intervening days, when the Vehicle is in repair  (&quot;Minimum Damage Cost&quot;).<br />
  3.2  This Minimum Damage Cost payable by the Customer to the Owner shall not be in  anyway linked to the insurance cover on the Vehicle or the process of insurance  claim initiated on the Vehicle by the Owner or the insurance paid on the  Vehicle or shall not be reduced pursuant to any insurance claims made or  received by the Owner. It is hereby clarified that the Owner shall have the  sole discretion to decide: (i) whether or not to initiate and pursue any  insurance claim on the Vehicle; and (ii) the quantum of such insurance claim.  Further, the Customer shall not have any right to request the Owner to make any  insurance claims on the Vehicle. The rights of Owner to initiate and pursue any  insurance claim shall be separate and independent of the payment obligations of  the Customer under this Agreement. The damage assessment of the Owner shall be  final in the matter and binding on the Customer and the Customer hereby agrees  and undertakes that the Customer shall not dispute the assessment either  directly or in any court of law and nor shall the Customer demand / request any  breakup of the assessment or proof of the damage assessment / cost incurred by  the Owner. The Customer also hereby agrees that the Customer shall not demand  to repair the Vehicle at the Customer's own cost at a garage of the Customer's  preference and the decision of Owner in this regard shall be final and binding  on all Parties.<br />
  3.3 While the Owner shall provide insurance cover  for theft, the Customer shall beresponsible for the difference between market  value of the Vehicle and the amount received from the insurance company. In  addition to the above, the Customer shall also be responsible to pay the Rental  Fee towards the remaining tenure of the Rental Period or until such time the  Owner's claim is successfully processed and paid by the insurance company,  whichever is later. Upon the occurrence of theft of the Vehicle, in case the  insurance claim is denied by the insurance company for any reason, the Customer  shall be liable to immediately make good to the Owner the entire loss on the  Vehicle value and revenue loss incurred by the Owner on the Vehicle for a  period of [●] months from the date of theft of the Vehicle, as determined by  the Owner.<br /><br />
  <strong>4.  NOTICES:</strong><br />
  Any  notice given hereunder shall be in writing, in the English language, and shall  be effective upon delivery to a party via courier, overnight delivery service,  or certified mail at the address set forth herein or at such other address as  may be designated in writing by a party hereto.<br /><br />
  <strong>5.  WAIVER AND AMENDMENT:</strong><br />
  No  waiver, amendment, or modification of any provision of this Agreement shall be  effective unless in writing and signed by the party against whom such waiver,  amendment, or modification is sought to be enforced. No failure or delay by  either party in exercising any right, power, or remedy, except as is expressly  provided herein, shall operate as a waiver of any such right, power, or remedy.<br /><br />
  <strong>6. REPRESENTATIONS AND WARRANTIES</strong>:<br />
  6.1.  The Owner represents and warrants to the Customer that:<br />
  (a)  he/she  has maintained the Vehicle to the  manufacturer recommended standards and that the Vehicle is roadworthy and  suitable for renting at the commencement of the Rental Period.<br />
  (b)  he/she  has the full right, power and  authority to execute, deliver and perform this Agreement and the terms and  conditions and obligations contained herein and upon execution, this Agreement  would constitute legal, valid, and binding obligation on the Owner.<br />
  6.2.  The Customer Represents and Warrants to the Owner that:<br />
  (a)  He/She is fully competent and has the full right, power and authority to  execute, deliver and perform this Agreement and the terms and conditions and  obligations contained herein and upon execution, this Agreement would  constitute legal, valid, and binding obligation on the Customer.<br />
  (b)  the entry into and performance of this Agreement would not conflict or violate  any applicable law, rule or decree, judgement or order of court of law as of  the date hereof or any agreement or document to which the Customer is a party.<br /><br />
  <strong>7. INDEMNITY:</strong><br />
  Not  withstanding any insurance claim which the Owner may initiate or pursue, the  Customer hereby undertakes that the Customer full indemnify and hold the Owner,  its directors, employees, affiliates, associates, authorised representatives  and agents (collectively, &ldquo;Indemnified Persons&rdquo;) harmless against all damage,  expenses, losses, injury, claims, fines or penalties of whatsoever nature and  howsoever arising including reasonable attorney&rsquo;s fees which may be suffered by  or instituted against or imposed on the Indemnified Persons in respect of or in  connection with the or account of (i) use of the Vehicle, possession or  enjoyment thereof by the Customer; (ii) breach of any covenants,  representations or warranties or any terms and conditions contained in this  Agreement; (iii) any action/omissions on the part of the Customer; and (iv) any  accident caused to or by the Vehicle including any bodily injury or death  resulting there from.<br /><br />
  <strong>8. REPOSSESSION:</strong><br />
  If  the Customer defaults in any of the covenants, conditions or provisions of this  Agreement, it is agreed that Owner may take possession of the Vehicle from the  Customer at any time, at the sole discretion of the Owner.<br /><br />
  <strong>9.  OWNERSHIP AND TITLE</strong><strong> </strong><br />
  Ownership  of and title to the Vehicles shall at all times remain vested in the Owner or  its affiliate or associate as the case may be. Neither the Customer nor any  person on claiming on the Customer&rsquo;s behalf shall during the Rental Period or  thereafter or upon any termination of the Agreement shall have any claim over  the ownership or title of the Vehicle or be entitled to retain the possession,  use or enjoyment of the Vehicle provided by the Owner.<br /><br />
  <strong>10. ASSIGNMENT:</strong><br />
  The  Customer shall not, by operation of law or otherwise, assign, transfer,  sublicense or delegate this Agreement or any right accruing to the Customer  hereunder without the prior written consent of the Owner. Any such prohibited  assignment, transfer, sublicense or delegation may be disregarded and shall be  void and of no effect. The Owner shall be free to assign, transfer, sublicense  or delegate this Agreement and the rights arising out of this Agreement to any  person at any time during the term of this Agreement.</p>
<p><strong>&nbsp;</strong></p>
<p><strong>11. RELATIONSHIP OF THE PARTIES:</strong><br />
  The  Parties to this Agreement are independent contractors and this Agreement will  not establish any relationship of partnership, joint venture, employment,  franchise, or agency as between the Parties. Neither Party will have the power  to bind the other or incur obligations on the other&rsquo;s behalf without the other&rsquo;s  prior specific written consent and authority.<br /><br />
  <strong>12. GOVERNING LAW AND JURISDICTION:</strong><br />
  This  Agreement shall be governed by and construed in accordance with the laws of  India. The courts at  Andhra Pradesh,  India, have exclusive jurisdiction to settle any dispute arising out of or in  connection with this Agreement (including a dispute relating to any  non-contractual obligations arising out of or in connection with this  Agreement) and the parties submit to the exclusive jurisdiction of such courts.<br /><br />
  <strong>13. DISPUTE RESOLUTION:</strong><br />
  The  Parties to this Agreement hereby agree that they intend to discharge their  obligations in utmost good faith. The Parties therefore agree that they shall,  at all times, act in good faith, and make all attempts to resolve all  differences and disputes howsoever arising out of or in connection with this  Agreement by discussion, failing which, by arbitration. Any differences and  disputes that are not resolved by mutual negotiation within a period of one (1)  month, after they have arisen, shall be referred to arbitration. The  arbitration shall be referred to a single arbitrator mutually decided by the  Parties. The arbitration shall be governed by the Arbitration and Conciliation  Act, 1996. The venue of the arbitration shall be at Vijayawada, India, and the  language of arbitration shall be English. The award by the arbitrator shall be  final and binding on the Parties.<br /><br />
  <strong>14. ENTIRE AGREEMENT:</strong><br />
  This  Agreement shall be read together with other agreements/documents entered into  and executed between the Parties and the terms and conditions and other  policies available at the website/url:&nbsp;www.journeywheels.in&nbsp;as  updated from time to time. Provided however that in the event of any conflict  between the provisions contained in this Agreement and the website, the  provision contained in this Agreement shall prevail.<br /><br />
  <strong>15. SURVIVAL:</strong><br />
  The  provisions contained in Clauses 2 (Limitation of Liability) 6 (Representations  &amp; Warranties) 7 (Indemnity)                          9 (Ownership and Title) 12(Governing Law and  Jurisdiction) 13 (Dispute Resolution) and 4 (Notices) shall survive any expiry  or termination of this Agreement.<br /><br />
  <strong>16.CAREFULL:</strong><br />
  Rental package does not include Fuel, Toll, road side assistance  and Taxes<br />
  Lessee is responsible for any traffic violations incurred due to  your use of a rented vehicle. Lessor is not liable for any costs from any such  violation.<br />
  You must report such violations to a Lessor&rsquo;s Representative as  soon as possible.<br />
  Towing service will be borne by the customer in case of unlikely  event of tire puncture or collision or breakdown due to improper usage. In the  event of mechanical or technical failure, we will take care in towing the bike  at our own cost<br />
  All our bikes have GPS tracking devices; we recommend that you  follow speed guidelines – our team gets automated updates on the bikes that  exceed speed limits.<br /><br />
  <strong>Prohibited Uses</strong><br />
  The use of a Lessor&rsquo;s vehicle under the following conditions is  prohibited:<br />
  Our  motorcycles cannot be used for rallies and rally surcharges or any format of  professional or amateur competitions and media usage.<br />
  By any person who is under the influence of (i) alcohol or (ii)  any drug or medication under the effects of which the operation of a vehicle is  prohibited or not recommended.<br />
  In carrying out of any crime or any other illegal activity.</p>
                             
       </div>
      </div>
    </div>
  </div>
              </div><!-- box Ends -->
              </div>      
            </div>
</div><!-- container Ends -->
</div><!-- content Ends -->
    </section>
    <div class="clearfix"></div>
    <!-- PASSANGER FEED END-->
    <!-- FOOTER -->
       <?php 
         include ('footer.php');
       ?>
    <!-- FOOTER END -->
    <!-- SCROLL TOP -->
    <a href="" class="scrolltop"><i class="fa fa-long-arrow-up"></i></a>
</div>
<!-- WIDE DESKTOP -->
<!-- All JS START HERE -->
<!-- jQuery Latest Version -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--<script src="js/jquery-3.2.1.min.js"></script>-->
<!-- jQuery Validation -->
<script src="js/jquery.validate.min.js"></script>
<!-- Google Map API JS -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=true&language=en&libraries=places"></script>
 <script>
                                           //preview of image before uploading
                                               var loadFile = function(event) {
                                               var output = document.getElementById('output');
                                                output.src = URL.createObjectURL(event.target.files[0]);
                                                };
                                                 var loadFile1 = function(event) {
                                               var output1 = document.getElementById('output1');
                                                output1.src = URL.createObjectURL(event.target.files[0]);
                                                };
                                                 var loadFile2 = function(event) {
                                               var output2 = document.getElementById('output2');
                                                output2.src = URL.createObjectURL(event.target.files[0]);
                                                };
                                                 var loadFile3 = function(event) {
                                               var output3 = document.getElementById('output3');
                                                output3.src = URL.createObjectURL(event.target.files[0]);
                                                };
                                          </script>
                                          <?php
                                           if(isset($_POST['imagesubmit'])) {
        $update_id = $customer_id;

        $c_image = $_FILES['c_image']['name'];

        $c_image_tmp = $_FILES['c_image']['tmp_name'];
        if(empty($c_image)){

        $c_image = $new_customer_image;

        }

        move_uploaded_file($c_image_tmp,"images/$c_image");
        
         $c_image1 = $_FILES['c_image1']['name'];

        $c_image_tmp1 = $_FILES['c_image1']['tmp_name'];
        if(empty($c_image1)){

$c_image1 = $new_customer_image1;

}

        move_uploaded_file($c_image_tmp1,"images/$c_image1");
        
         $c_image2 = $_FILES['c_image2']['name'];

        $c_image_tmp2 = $_FILES['c_image2']['tmp_name'];
        if(empty($c_image2)){

$c_image2 = $new_customer_image2;

}

        move_uploaded_file($c_image_tmp2,"images/$c_image2");
     $c_image3 = $_FILES['c_image3']['name'];

        $c_image_tmp3 = $_FILES['c_image3']['tmp_name'];
        if(empty($c_image3)){

$c_image3 = $new_customer_image3;

}

        move_uploaded_file($c_image_tmp3,"images/$c_image3");
            
        $update_c = "update users set image='$c_image',image1='$c_image1',image2='$c_image2',image3='$c_image3' WHERE uid='$update_id'";
        $run_c = mysqli_query($db, $update_c);
        if ($run_c) {
            // echo "<script>alert('Your account has been updated')</script>";
            echo "<script>window.location='profile.php'</script>";
        }
    }
?>
<!--<script>-->
<!--    $(document).ready(function() {-->

        
<!--        $("#placepicker").placepicker();-->

       
<!--        $(".placepicker").each(function() {-->

            
<!--            var target = this;-->
<!--            var $collapse = $(this).parents('.form-group').next('.collapse');-->
<!--            var $map = $collapse.find('.placepicker-map');-->

           
<!--            var placepicker = $(this).placepicker({-->
<!--                map: $map.get(0)-->
<!--            }).data('placepicker');-->

         
<!--            $collapse.on('show.bs.collapse', function () {-->

<!--                window.setTimeout(function() {-->
<!--                    placepicker.resizeMap();-->
<!--                    placepicker.reloadMap();-->
<!--                    if (!$(target).prop('value')) {-->
<!--                        placepicker.geoLocation();-->
<!--                    }-->

<!--                }, 0);-->

<!--            });-->

<!--        });-->

<!--    });-->
<!--</script>-->
<script type="text/javascript">
    $(function(){
        $('a[title]').tooltip();
    });

</script>

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
<script src="js/distanced.js"></script>
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

  <!--Modals Start -->
   <!-- [ Modal #1 ]  Login Modal-->
  <div class="modal fade" id="demo-1" tabindex="-1">
    <div class="modal-dialog">
     <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal"><i class="icon-xs-o-md"></i></button>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center caps"><strong>Login</strong></h4>
      </div>
       <div class="modal-body">
          <form class="log" id="loginForm1" method="post" >
             <div class="display-error" style="display: none;"></div>

                                            <div class="form-group ">
                                                <label >Email</label>
                                                <input type="email" class="form-control" name="lemail" placeholder="Enter Registered E-mail" style="border: 1px solid black;" required >
                                                
                                               
                                            </div>
                                            <div class="form-group ">
                                                <label>Password</label>
                                                <input type="password" class="form-control" name="lpassword"  id="Login1" placeholder="Enter Your Password" style="border: 1px solid black" required >
                                                <label ><input type="checkbox" class="logch" style=" " onclick="log1Function()"><span style="color: black" class="logsp">&nbsp;Show Password</span></label>
                                            </div>
                                             <div class="form-group ">
                                                 <a href="" data-toggle="modal" data-target="#demo-3"  data-dismiss="modal" style="color:black">Forgot Password?</a>
                                             </div>

                                           
                                       
            <button type="submit" class="btn btn-primary "value="sign In">Login</button><h5 style="display:inline;font-weight:bold"> OR </h5>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#demo-2" style="display:inline" data-dismiss="modal">Create New Account</button>
            </form>
              </div>
     </div>
    </div>
  </div>

  <!-- [ Modal #2 ] Register Modal-->
   <div class="modal fade"  id="demo-2" tabindex="-1">
    <div class="modal-dialog">
     <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal"><i class="icon-xs-o-md"></i></button>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center caps"><strong>Create New Account</strong></h4>
      </div>
      <div class="modal-body">
         <form class="log" id="registFrm" method="post">
              

                <div class="form-group regnam">
                    <label>Name</label>
                    <input type="text" class="form-control" name="rname" placeholder="Enter Your Name" style="border: 1px solid black;" required>
                </div>

                <div class="form-group regmail">
                    <label>Email</label>
                    <input type="email" class="form-control el" name="remail" placeholder="Enter Valid E-mail"style="border: 1px solid black;" required>
                </div>
                <div class="form-group regpwd">
                    <label>Password</label>
                    <input type="password" class="form-control pd" name="rpassword" id="Register" placeholder="Enter Password" style=" border: 1px solid black"required >
                    <label class="regsp"><input type="checkbox" class="regch" onclick="regFunction()"><span class="regsp" style="color: black">&nbsp;Show Password</span></label>
                </div>
                <div class="form-group regphn">
                    <label>Phone Number</label>
                    <input type="text" class="form-control" name="rmobile"  maxlength="10" pattern="[0-9]{10}" placeholder="Enter Mobile Number" style="border: 1px solid black" required>
                </div>


                
              <div class="form-group text-center">
            <button type="submit" class="btn  btn-primary" >Register</button>
            </div>
            </form>
            </div>
     </div>
    </div>
  </div>
  <!-- [ Modal #3 ] Forgot Password Modal-->
   <div class="modal fade" id="demo-3" tabindex="-1">
    <div class="modal-dialog">
     <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal"><i class="icon-xs-o-md"></i></button>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center caps"><strong> Forgot Password</strong></h4>
      </div>
      <div class="modal-body">
        <form action='forgetPassword.php' method='post'>
            <div class="form-group ">
                  <label >Email</label>
                  <input type="email" class="form-control" name="email" placeholder="Enter Registered E-mail" style="border: 1px solid black;" required >
            </div>
            <div class="form-group text-center">
              <button type="submit" class="btn btn-primary" name="frgotsubmit" >Submit</button>
              </div>

       </form>
            </div>
     </div>
    </div>
  </div>     
 <!--Modals End-->
 <div class="modal fade" id="demo-4" tabindex="-1">
    <div class="modal-dialog">
     <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal"><i class="icon-xs-o-md"></i></button>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center caps"> Partner With Us</h4>
      </div>
       <div class="modal-body">
          <form class="log"  method="post" >
             <div class="display-error" style="display: none;"></div>

                                           <div class="form-group regnam">
                    <label>Name</label>
                    <input type="text" class="form-control" name="rname" placeholder="Enter Your Name" style="border: 1px solid black;" required>
                </div>

                <div class="form-group regmail">
                    <label>Email</label>
                    <input type="email" class="form-control el" name="remail" placeholder="Enter Valid E-mail"style="border: 1px solid black;" required>
                </div>
                    <div class="form-group regphn">
                    <label>Phone Number</label>
                    <input type="text" class="form-control" name="rmobile"  maxlength="10" pattern="[0-9]{10}" placeholder="Enter Mobile Number" style="border: 1px solid black" required>
                </div>                       
                                           
               <div class="form-group text-center">                         
            <button type="submit" class="btn btn-primary">Submit</button> </div> </form>
              </div>
     </div>
    </div>
  </div>
<!--Login Form Script Starts -->
<script>
    $(document).ready(function () {
        $("#loginForm1").submit(function () {
            var data =$("#loginForm1").serialize();
            checkRecords(data);
            return false;
        });
        function checkRecords (data) {
            $.ajax({
                url:'loginProcess.php',
                data : data,
                type:'POST',
                dataType:'json',
                success:function (result) {

                    if(result.code == 200){
                        alert('You have successfully login');
                        window.location='index.php';
                    }else{
                        $(".display-error").html("<ul>"+ result.msg+"</ul>");
                        $(".display-error").css("display","block");
                    }
                },
                error: function (error) {
                    console.log(error);
                    alert("Login Failed" );
                }
            });
        }
    });

</script>
<!--Login Form Script Ends -->

<!--Signup Form Script Starts -->
<script>
    $(document).ready(function () {
        $("#registFrm").submit(function () {
            var data =$("#registFrm").serialize();
            console.log(data);
            signupRecords(data);

            return false;
        });
        function signupRecords (data) {
            $.ajax({
                url:'signupProcess.php',
                data : data,
                type:'POST',
                dataType:'json',
                success:function (data) {

                    if(data.code == 200){
                        alert('You Have Successfully Signup \n Please login now');
                        setTimeout(function () {
                            location.reload();
                        },1000 );

                    }else{
                        $(".display-error").html("<ul>"+ data.msg+"</ul>");
                        $(".display-error").css("display","block");
                    }

                },
                error: function (jqXHR,exception) {
                    console.log(jqXHR);
                }
            });
        }
    });



    //show password
    function regFunction() {
        var x = document.getElementById("Register");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

    function log1Function() {
        var x = document.getElementById("Login1");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
<!--Signup Form Script Ends -->

    <script>$(function () {
  $('.datetimepicker').datetimepicker();
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