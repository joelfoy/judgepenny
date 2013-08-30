
  
  <?php

include("includes/header.php");

?>
<div id="wrapper">

<!-- .content2 starts here-->
<div class="content2">

<!-- .right-area starts here-->
<div class="right-area1">
<h1>Speaking Requests</h1>
<!-- .entry2 starts here-->
<div class="entry3">
<!-- .main-area starts here-->
<div class="main-area">
<!--<div class="bread-crumbs"><a href="index.html">The Judge</a><span> >> Beyond The Robe</span></div>-->

<img src="images/speaking.jpg"/ style="float:left; margin:0px 6px 6px 0px;">
<p>Judge Penny Brown Reynolds conducts speaking engagements across the country. If you are interested in booking Judge Penny for a future speaking engagement, complete the contact form below.</p>
<div class="contact-form">
<script language="javascript" type="text/javascript">
if(document.location.href == 'http://judgepenny.com/speaking-requests.php?thank-you'){
document.write ('<div class="a" align="center" style="font-size:20px; color:#D66001;">Thank You<br> For booking Judge Penny for a future speaking engagement</div>');}
</script> 

<?php
  
  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    echo ("<b><font color='red'>The reCAPTCHA wasn't entered correctly. Try it again.</font></b>");
  ?>
  
<form  name="formvalidation" method="POST" action="verify.php" id="formvalidation" >



<table width="100%" border="0" cellspacing="4" cellpadding="4">
  <tr>
    <td width="20%"><label id="title4" for="Field4"> <span id="req_4">*</span>First Name </label></td>
    <td width="70%"> <span id="sprytextfield1">
      <input autocomplete="off" id="Field4" name="Field4" value="<?php ?>" size="18" tabindex="1" type="text">
       </span></td>
  </tr>
  <tr>
    <td><label id="title4" for="Field4"> <span id="req_4">*</span>Last Name </label></td>
    <td> <input id="Field5" name="Field5" value="" size="18" tabindex="2" type="text"></td>
  </tr>
  <tr>
    <td><label id="title2" for="Field2"> <span id="req_2">*</span>Email Address </label></td>
    <td><input autocomplete="off" id="Field2" name="Field2" value="" maxlength="255" tabindex="3" type="text"></td>
  </tr>
  <tr>
    <td><label id="title13" for="Field13"> <span id="req_13">*</span>Phone Number </label></td>
    <td> <span id="sprytextfield3">
      <input autocomplete="off" id="Field13" name="Field13" value="" size="3" maxlength="3" tabindex="4" type="text">
    <!---   		<label for="Field13"></label>-->
    <input id="Field13-1" name="Field13-1" value="" size="3" maxlength="3" tabindex="5" type="text">
    <!---   		<label for="Field13-1">###</label>-->
    <input id="Field13-2" name="Field13-2" value="" size="4" maxlength="4" tabindex="6" type="text"></span>
    <!--<label for="Field13-2">####</label>--></td>
  </tr>
  <tr>
    <td><label id="title6" for="Field6">Cell Phone Number </label></td>
    <td>    <span id="sprytextfield4">
      <input autocomplete="off" id="Field6" name="Field6" value="" size="3" maxlength="3" tabindex="7" type="text">
    
    <!---   		<label for="Field6">(###)</label>-->
    <input id="Field6-1" name="Field6-1" value="" size="3" maxlength="3" tabindex="8" type="text">
    <!---   		<label for="Field6-1">###</label>-->
    <input id="Field6-2" name="Field6-2" value="" size="4" maxlength="4" tabindex="9" type="text"></span>
    <!--<label for="Field6-2">####</label>--></td>
  </tr>
  <tr>
    <td><label id="title7" for="Field7"> <span id="req_7">*</span>Organization </label></td>
    <td><span id="sprytextfield5">
      <input autocomplete="off" id="Field7" name="Field7" value="" maxlength="255" tabindex="10" type="text"></span></td>
  </tr>
  <tr>
    <td><label id="title8" for="Field8"> <span id="req_8">*</span>Event Date </label></td>
    <td><span id="sprytextfield6">
      <input autocomplete="off" id="Field8-2" name="Field8-2" value="" size="2" maxlength="2" tabindex="11" type="text">
    <!-- /  		<label for="Field8-1">MM</label>-->
    <input id="Field8-1" name="Field8-1" value="" size="2" maxlength="2" tabindex="12" type="text">
    <!--/  		<label for="Field8-2">DD</label>-->
    <input id="Field8" name="Field8" value="" size="4" maxlength="4" tabindex="13" type="text"></span>
    <!--<label for="Field8">YYYY</label>-->
    <span id="cal8">(mm/dd/yyyy) </span></td>
  </tr>
  <tr>
    <td><label id="title9" for="Field9"> <span id="req_9">*</span>Event Location</label></td>
    <td><span id="sprytextfield7"><input autocomplete="off" id="Field9" name="Field9" value="" maxlength="255" tabindex="14" type="text"></span></td>
  </tr>
  <tr>
    <td><label id="foli10a" for="Field10a"> <span id="req_10a">*</span>Event Time(HH:MM AM/PM)</label></td>
    <td><span id="sprytextfield8"><input autocomplete="off" id="Field10a" name="Field10a" value="" maxlength="255" tabindex="14" type="text"></span></td>
  </tr>
  <tr>
    <td> <label id="title11a" for="Field11a">Time Zone</label></td>
    <td><span id="spryselect1">
      <select id="Field11a" name="Field11a" tabindex="16">
        <option value="Pacific"> Pacific </option>
        <option value="Mountain"> Mountain </option>
        <option value="Central"> Central </option>
        <option value="Eastern"> Eastern </option>
        <option value="Alaskan"> Alaskan </option>
        <option value="Hawaii"> Hawaii </option>
      </select>
 </span></td>
  </tr>
  <tr>
    <td><label id="title12" for="Field12"> <span id="req_12">*</span>City</label></td>
    <td> <span id="sprytextfield9"><input autocomplete="off" id="Field12" name="Field12" value="" maxlength="255" tabindex="15" type="text"></span></td>
  </tr>
  <tr>
    <td><label id="title11" for="Field11"> State </label></td>
    <td> <span id="spryselect2">
      <select id="Field11" name="Field11" tabindex="16">
        <option value="Alabama"> Alabama </option>
        <option value="Alaska"> Alaska </option>
        <option value="Arizona"> Arizona </option>
        <option value="Arkansas"> Arkansas </option>
        <option value="California"> California </option>
        <option value="Colorado"> Colorado </option>
        <option value="Connecticut"> Connecticut </option>
        <option value="Delaware"> Delaware </option>
        <option value="Florida"> Florida </option>
        <option value="Georgia"> Georgia </option>
        <option value="Hawaii"> Hawaii </option>
        <option value="Idaho"> Idaho </option>
        <option value="Illinois"> Illinois </option>
        <option value="Indiana"> Indiana </option>
        <option value="Iowa"> Iowa </option>
        <option value="Kansas"> Kansas </option>
        <option value="Kentucky"> Kentucky </option>
        <option value="Louisiana"> Louisiana </option>
        <option value="Maine"> Maine </option>
        <option value="Maryland"> Maryland </option>
        <option value="Massachusetts"> Massachusetts </option>
        <option value="Michigan"> Michigan </option>
        <option value="Minnesota"> Minnesota </option>
        <option value="Mississippi"> Mississippi </option>
        <option value="Missouri"> Missouri </option>
        <option value="Montana"> Montana </option>
        <option value="Nebraska"> Nebraska </option>
        <option value="Nevada"> Nevada </option>
        <option value="New Hampshire"> New Hampshire </option>
        <option value="New Jersey"> New Jersey </option>
        <option value="New Mexico"> New Mexico </option>
        <option value="New York"> New York </option>
        <option value="North Carolina"> North Carolina </option>
        <option value="North Dakota"> North Dakota </option>
        <option value="Ohio"> Ohio </option>
        <option value="Oklahoma"> Oklahoma </option>
        <option value="Oregon"> Oregon </option>
        <option value="Pennsylvania"> Pennsylvania </option>
        <option value="Rhode Island"> Rhode Island </option>
        <option value="South Carolina"> South Carolina </option>
        <option value="South Dakota"> South Dakota </option>
        <option value="Tennessee"> Tennessee </option>
        <option value="Texas"> Texas </option>
        <option value="Utah"> Utah </option>
        <option value="Vermont"> Vermont </option>
        <option value="Virginia"> Virginia </option>
        <option value="Washington"> Washington </option>
        <option value="West Virginia"> West Virginia </option>
        <option value="Wisconsin"> Wisconsin </option>
        <option value="Wyoming"> Wyoming </option>
      </select>
</span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

<ul>
<li id="foli1">
    <label id="title1" for="Field1"> <span id="req_1">*</span>Message and Additional Information </label>
    <div><span id="sprytextarea1">
      <textarea autocomplete="off" id="Field1" name="Field1" rows="10" cols="50" tabindex="17"></textarea>
 </span></div>
    <p id="instruct1"></p>
  </li>
  <p>* Required Fields</p>
  <script type="text/javascript">
 var RecaptchaOptions = {
    theme : 'clean'
 };
 </script>
  
  <?php
          require_once('recaptchalib.php');
          $publickey = "6LdF-8cSAAAAALO8_Z8rSVHo8mID1iff9N52h8ni"; 
          echo recaptcha_get_html($publickey);
        ?>


  <li>
    <input name="submit" type="submit" id="saveForm" value="Submit"  >
  </li>
</ul>
  
</form>
<?php require_once('recaptchalib.php');
  $privatekey = "6LdF-8cSAAAAANDYaolQ6B2j1Ztd0Sn1OUF85TKG";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);
?>

</div>
</div>
<img src="images/main-btm.png"/>
<!-- .main-area ends here-->
</div>
<!-- .entry2 ends here-->
</div>
<!-- .right-area ends here-->

<!-- .left-area starts here-->
<div class="left-area">
<!-- .sidebar2 starts here-->
<div class="sidebar2">
<h1>Media</h1>
<!--<img src="images/side-top.png"/>-->
<div class="sidebar-text">
<iframe width="312" height="210" src="http://www.youtube.com/embed/DS7OLR5LTig" frameborder="0" allowfullscreen></iframe>
<br/><br/>
<iframe width="312" height="210" src="http://www.youtube.com/embed/szG0oJ66oDQ" frameborder="0" allowfullscreen></iframe>

</div>
<!--<img src="images/side-btm.png"/>-->
</div>
<!-- .sidebar2 ends here-->

<!-- .sidebar2 starts here-->
<div class="sidebar2" style="margin-top:30px;">
<h1 style="padding-left:4px;">Events</h1>
<div class="upcoming-events">
<p><strong>103rd Alpha Kappa Alpha Sorority Founder’s Day<br />
Little Rock, Arkansas</strong> <br /><br />
Trinity Broadcasting Network (TBN)<br />
Praise the Lord Program<br />
Atlanta, Georgia<br /><br />

<strong>Sisters Who Care Mission Summit<br />
Christian Fellowship Baptist Church<br />
College Park, Georgia</strong></p>
<!--<img src="images/judge-book.png"/><h2></h2>
<p>7 Steps to Peace of Mind is an engaging and transformative guide in which Judge Penny Brown Reynolds presents straight forward and time tested perspectives on how to live a better life and how to obtain the peace of mind you deserve.</p>-->
</div>
</div>
<!-- .sidebar2 ends here-->
</div>
<!-- .left-area ends here-->

</div>
<!-- .content2 ends here-->


</div>
<!-- #wrapper ends here-->
<?php
include("includes/footer.php");
} 
else {
    // Your code here to handle a successful verification
  } 
  
?>