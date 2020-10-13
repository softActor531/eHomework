<?php
	
	if(!is_valid_email($_POST['email']))
	{
		$err_msg = "Please Enter Your Email Address!";
		$error_code = 1;
	}
	
	if(!isset($err_msg))
	{
		if(empty($_POST['email']) or empty($_POST['q']['1']) or empty($_POST['q']['2']) or empty($_POST['q']['5']))
		{			
			$err_msg = "Please enter all * marked fields!";
			$error_code = 2;
			//print_r($_POST);		
		}
	}
	
	if(!isset($err_msg))
	{
		$subject = 'eHomework - assignment & essay help';
		
		//code to email the information
		$msg .= "<b>From: </b>".$_POST['email']."<br>";
		$msg .= "<b>Subject: </b>".$subject."<br>";
		$msg .= "<b>Date: </b>".date("Y-m-d H:i:s")."<br>"."<br>";
		
		$msg .= "<b>Name: </b>".$_POST['q']['1']."<br>";
		$msg .= "<b>City + State/Province: </b>".$_POST['q']['2']."<br>";
		$msg .= "<b>E-mail Address: </b>".$_POST['email']."<br>";
		$msg .= "<b>Message: </b>".$_POST['q']['5']."<br>";
							
		$user_email = 'info@ehomework.ca';  
		//$user_email = 'nikhil.oza@softronikx.com';
		
		$body = $msg;	
		@send_email($user_email,$subject,$body);			
			
		
		/*$confirmation_msg = "Dear ".$_POST['name'].",<br>"."<br>";
		$confirmation_msg .= "Your Order has been submitted.  If we require any more information we will contact you. <br>"."<br>";
		$confirmation_msg .= "Thanks,"."<br>";
		$confirmation_msg .= "eHomework";
		
		$subject = 'Order Confirmation';
		$body = $confirmation_msg;	
		$user_email = $_POST['email'];			
		@send_email($user_email,$subject,$body);*/		
		
		header('Location: http://www.ehomework.ca/thanks.html');
		exit(0);
		
	}
	else
	{
		$display_err_msg = true;
	}
	
	function send_email($user_email,$subject,$body)
	{
		require_once 'class.phpmailer.php';		
		
		$mail            = new PHPMailer();
		$mail->Host      = "mail.sweetgarden.ca";
		$mail->SMTPAuth  = true;
		$mail->Username  = "orders@ehomework.ca";
		$mail->Password  = "Wagingay2828@";
		$mail->From      = $_POST['email'];
		$mail->FromName  = $_POST['q']['1'];
		$mail->WordWrap  = 0;
		$mail->ClearAddresses();
		$mail->AddAddress($user_email);
		$mail->IsHTML(true);
		$mail->Subject = $subject;
		$mail->Body    = $body;
		$mail->Send();
		
	}	
	
	//check if email format is valid.
	function is_valid_email($email)
	{
		if (preg_match("/^(\w+((-\w+)|(\w.\w+))*)\@(\w+((\.|-)\w+)*\.\w+$)/",$email))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

?>

<?php if($display_err_msg) { ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Custom Essay, Essay Help, College Essay, Term Paper, Writing Services, Buy Essay, Order Essay</title>
<meta name="description" content="Custom essays, term, research papers, help with all homework.">
<meta name="keywords" content="essay writing help, essays writing help, essay paper writing help, essay papers writing help, essay help, professional essay help, professional essay writing help, custom essay help, custom essay writing help, custom essay paper help, custom essay paper writing help, essays help, custom essays help, custom essays writing help, writing help with essays, writing help with essay papers, need essay help, need essay writing help, help in writing essays, college essay, English Essays, University of Waterloo, York University, McMaster University, University of Toronto, University of Alberta, University of Calgary, University of Western Ontario, Toronto Essay Help, Toronto Custom Essays, Writing Services, Research Paper, Critical Essay, Annotated Bibliography, College Essays, Term Paper, Essays, Research Papers, Persuasive Essay, Compare and Contrast Essay, Descriptive Essay, Narrative Essay ">

<META name="description" content="Essay Writing Services, Essay Help, Order Custom Essay.  Assignments, Term Papers, Research Papers, College Essays, Online quizzes, ALL HOMEWORK HELP!">

<META name="revisit-after" content="5 days">

<META NAME="Author" CONTENT="info@ehomework.ca">

<META name="Robots" content="All">
<link href="default.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
	@import url("layout.css");
.style2 {color: #0099CC}
.style3 {font-size: 20px}
.style6 {font-size: 10; font-weight: bold; }
-->
</style>
</head>
<body>
<div id="header">
	<div id="logo">
		<h1>Education Site</h1>
		<h2>Lorem ipsum dolor amet</h2>
	</div>
	<div id="menu">
		<ul>
			<li><a href="index.html" id="menu1" accesskey="1" title=""><span>Events</span></a></li>
			<li><a href="services.html" id="menu2" accesskey="2" title=""><span>Resources</span></a></li><li><a href="rates.html" id="menu20" accesskey="5" title=""><span>Rates</span></a></li>
			<li><a href="how.html" id="menu3" accesskey="3" title=""><span>About</span></a></li>
			<li><a href="contact.html" id="menu4" accesskey="4" title=""><span>Contact</span></a></li>
		</ul>
	</div>
</div>
<!-- end header -->
<div id="page" class="bg1">
	<div class="bg2">
		<div class="bg3">
		<div id="content">
				
			<br><br><br><br><br><br><br>
				<p style="text-align:center;font-size:20px;color:#990000"><?php echo $err_msg; ?></p>
			<br><br><br><br><br><br><br>
				
		</div>
			<!-- end content -->
		  <div id="sidebar">
		    <div id="box4">
		      <h2>CONTACT US </h2>
		      <ul class="list1">
<li class="first">
  <p>Send us an email:<br />
    <a href="mailto: info@eHomework.ca">info@eHomework.ca</a><br />
    <br />
    <strong>Skype Username:</strong><br />
    &quot;eHomework.ca&quot;</p>
</li>
		        <li>
		          <h2>Online Payment </h2>
		          <p>To make a payment:<br />
                  <a href="payment.html">Click here for Payment</a></p>
	            </li>
		        <li>
		          <p><br />
	              </p>
	            </li>
	          </ul>
	        </div>
		    <p>&nbsp;</p>
		  </div>
			<!-- end sidebar -->
			<div style="clear: both;">&nbsp;</div>
		</div>
	</div>
</div>
<!-- end page -->
<div id="footer" class="bg6">
	<p class="text2"><a href="index.html">Home</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="services.html">Services</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="how.html">How It Works </a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="rates.html">Rates</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="terms.html">Terms</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="contact.html">Contact</a></p>
    <p class="text3">Copyright (c) 2013 eHomework. All rights reserved.</p></div>
	
	        <script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-1506553-4");
pageTracker._trackPageview();
} catch(err) {}</script>
	
	
</body>
</html>



<?php } ?>