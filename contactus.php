<html>
<head>
<title>Preservation - Northern Shenandoah Valley</title>
<script src='https://www.google.com/recaptcha/api.js'></script>
<link rel="stylesheet" type="text/css" media="screen,projection" href="style.css" />
</head>
<body>


<div id="container">
<img src="./images/accent_strip1.jpg" width="100%" height="6">
<div id="banner">&nbsp;&nbsp;<a href="index.html"> homepage</a> | <a href="mailto:info@preserveshenandoah.org">contact</a> |
	<div id="titletext">
		<font size="+3">Preservation Northern Shenandoah Valley</font><BR>
		Frederick <img src="./images/blu_dot.gif" height=5 width=5> Clarke <img src="./images/blu_dot.gif" height=5 width=5> Shenandoah <img src="./images/blu_dot.gif" height=5 width=5> Warren <img src="./images/blu_dot.gif" height=5 width=5> Page <img src="./images/blu_dot.gif" height=5 width=5> City of Winchester<BR><BR>
		<BR>
		<font size="+1"> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;http://www.preserveshenandoah.org</font>
	</div>

</div>
<div>
<img src="./images/accent_strip2.jpg" width="100%" height="6">
</div>


<!-- PULL DOWN MENU - BEGIN -->
<!--main table-->

<div class="mainmenu">

<ul>
      <li class="li_nc"><a href="index.html" target="_self" >Home</a></li>
      <li class="li_hc"><a href="about.html">About PNSV</a><ul class="ul_ch">
         <li class="li_nc"><a href="foundation.html"  >The Foundation</a></li>
         <li class="li_nc"><a href="ourwork.html" target="_self" >Our Work</a></li>
      </ul></li>
      <li class="li_nc"><a href="publications.html"  >Publications/Forms</a><ul class="ul_ch">
	<li class="li_nc"><a href="whitepapers.html">Preservation White Papers</a></li>
      	<li class="li_nc"><a href="forms.html">VDHR &amp; NRHP Forms</a></li>
      </ul></li>
      <li class="li_nc"><a href="wp"  >Our Blog</a></li>
      <li class="li_hc"><a href="donations.html" >Donations</a><ul class="ul_ch">
	<li class="li_nc"><a href="makedonations.html">Make a Donation</a></li>
      	<li class="li_nc"><a href="plangive.html">Planned Giving</a></li>
      </ul></li>

      <li class="li_nc"><a href="links.html"  >Preservation Links</a></li>
      <li class="li_nc"><a href="contactus.html"  >Contact Us</a></li>
      <li class="li_nc"><a href="join.html"  >Join PNSV</a></li>
</ul>


</div>

<!-- END OF PULL DOWN MENU -->

<div id="sidebar-a">
<img class="border" src="images/white_papers.jpg" alt="box" />

<h2>White Papers</h2>


<p>Do you have an historic preservation cause or project and don't know where to begin?
<P>  
Learn about the solutions, current trends and ideas from our library of white papers.
</div>

<div id="sidebar-b">

<div class="center"><h3>Engage The Past</h3></div>

<p><I>"It has been said that, at it’s best, preservation engages the past in a conversation with the present over a a mutual concern for the future."
</I><BR>---<BR>
William Murtagh, first keeper of the National Register of Historic Places
<div class="center"><h3>Virginia Historic Landmarks</h3></div>
<div class="center"><a href="./forms.html"><img class="border2" src="images/vahistreg.jpg" alt="box" /></a></div>
<p>Virginia Preservation Tax Credits are available to those buildings and places that are on the Virginia Historic Landmarks Registry.
<P> Find out how Preservation Northern Shenandoah Valley can help you get listed!</p>

</div>

<div id="content">
<div id="bodytext">

<!-- this can be a page header area-->
<h1>Contact Us</h1>


<!-- main text of the page goes here -->
		<div id="contact-area">
    <form action="" method="post">
        <table>
	<tr>
		<td class="left"><label for="Name">Name:</label></td>
		<td><input type="text" name="Name" value="<?php echo @$_POST['Name']; ?>"/></td>
	</tr>
	<tr>
		<td class="left"><label for="City">City:</label></td>
		<td><input type="text" name="City" value="<?php echo @$_POST['City']; ?>"/></td>
	</tr>
	<tr>
		<td class="left"><label for="Email">Email:</label></td>
		<td><input type="text" name="Email" value="<?php echo @$_POST['Email']; ?>"/></td>
	</tr>
	<tr>
		<td class="left"><label for="Message">Message:</label></td>
		<td><textarea name="Message" rows="20" cols="40"><?php echo @$_POST['Message']; ?></textarea></td>
	</tr>
	</table>
<?php

require_once('recaptchalib.php');

// Get a key from https://www.google.com/recaptcha/admin/create
$publickey = "6LdpGwgUAAAAAPoUNHA4i4B3zQJ8byBif9m9-63b";
$privatekey = "[google private captcha key goes here]";

# the response from reCAPTCHA
$resp = null;
# the error code from reCAPTCHA, if any
$error = null;

# was there a reCAPTCHA response?
if ($_POST["recaptcha_response_field"]) {
        $resp = recaptcha_check_answer ($privatekey,
                                        $_SERVER["REMOTE_ADDR"],
                                        $_POST["recaptcha_challenge_field"],
                                        $_POST["recaptcha_response_field"]);

        if ($resp->is_valid) {
		  
		  //Email information
		  $admin_email = "info@preserveshenandoah.org";
		  $email = $_POST['Email'];
		  $subject = "PreserveShenandoah ContactUs Email";
		  $comment = $_POST['Message'] . "--" . $_POST['Name'] . "--" . $_POST['City'];
		  $headers = 'From:' . $_POST['Email'] . "\r\n";
		  
		  //send email
		  mail("info@preserveshenandoah.org", $subject, $comment, $headers);
		    
  
	 ?>
		<script type="text/javascript">
		window.location = "http://www.preserveshenandoah.org/emailsent.html";
		</script>      
	    <?php
		   exit();
        } else {
                # set the error code so that we can display it
                $error = $resp->error;
        }
}
echo recaptcha_get_html($publickey, $error);
?>
    <br/>
    <input type="submit" value="submit" />
    </form>

	</div>
</div>

<!-- footer area -->
<div class="float_center">
<div class="float_center2">
<div id="footer">
<table>
<tr><td><hr width="75%"></td></tr>
<tr><td width=750><div class="center"><font face="Arial,hevetica,sans-serif"><a href="./index.html">Home</a> - 
<a href="./about.html">About PNSV</a> - <a href="./publications.html">Publications/Forms</a>
</font></div></td></tr>

<tr><td width=750><div class="center"><font face="Arial,hevetica,sans-serif"><!--<a href="./plangive.html">Planned Giving</a> - -->

<a href="wp">Our Blog</a> - <a href="./makedonations.html">Donations</a> - <a href="./links.html">Preservation Links</a>
 - <a href="./contactus.html">Contact Us</a> - <a href="./join.html">Join Us!</a></font></div>
</td></tr></table>

<BR><BR>
 <font size=-1>
 Copyright 2014-2015 Preservation Northern Shenandoah Valley
 </font>

</div><!-- end div footer -->
</div></div><!--  end float center 1 and 2 -->
</div><!-- end div content -->
</div><!-- end div container -->