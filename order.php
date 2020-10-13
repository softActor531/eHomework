<?php
	//echo dirname(__FILE__);
	if(isset($_POST['submit']))
	{
		
		//print_r($_FILES);
		
		//first file
		$file_prefix = strtotime("now");		
		
		if(!empty($_FILES["assignment_attachment"]["tmp_name"]))
		{
			$file_name = str_replace(' ','_',$_FILES["assignment_attachment"]["name"]);
			$file_name = preg_replace('@[^0-9a-z\.]+@i', '-', $file_name);
			$file_exists = true;
		}
		
		if($file_exists)
		{
			if ($_FILES["assignment_attachment"]["error"] > 0)
			{
				$err_msg = "File upload error!";
			}
			else
			{
				$extension = end(explode(".", $_FILES["assignment_attachment"]["name"]));
				
				if(strpos($extension,'php') !== false)
				{
					$err_msg = "Invalid File!";
				}
				else
				{								
					if($file_exists and !move_uploaded_file($_FILES["assignment_attachment"]["tmp_name"],"reference_files/$file_prefix" . $file_name ))
					{
						$err_msg = "Error in Uploading File!";
					}				
				}
			}
		}
		
		//Second File	
		$file_prefix_2 = strtotime("now")."2";				
		if(!empty($_FILES["assignment_attachment_2"]["tmp_name"]))
		{
			$file_name_2 = str_replace(' ','_',$_FILES["assignment_attachment_2"]["name"]);
			$file_name_2 = preg_replace('@[^0-9a-z\.]+@i', '-', $file_name_2);
			$file_exists_2 = true;
		}
		
		if($file_exists_2)
		{
			if ($_FILES["assignment_attachment_2"]["error"] > 0)
			{
				$err_msg = "File upload error!";
			}
			else
			{
				$extension = end(explode(".", $_FILES["assignment_attachment_2"]["name"]));
				
				if(strpos($extension,'php') !== false)
				{
					$err_msg = "Invalid File!";
				}
				else
				{								
					if($file_exists_2 and !move_uploaded_file($_FILES["assignment_attachment_2"]["tmp_name"],"reference_files/$file_prefix_2" . $file_name_2 ))
					{
						$err_msg = "Error in Uploading File!";
					}				
				}
			}
		}
		
		
		//Third File	
		$file_prefix_3 = strtotime("now")."3";				
		if(!empty($_FILES["assignment_attachment_3"]["tmp_name"]))
		{
			$file_name_3 = str_replace(' ','_',$_FILES["assignment_attachment_3"]["name"]);
			$file_name_3 = preg_replace('@[^0-9a-z\.]+@i', '-', $file_name_3);
			$file_exists_3 = true;
		}
		
		if($file_exists_3)
		{
			if ($_FILES["assignment_attachment_3"]["error"] > 0)
			{
				$err_msg = "File upload error!";
			}
			else
			{
				$extension = end(explode(".", $_FILES["assignment_attachment_3"]["name"]));
				
				if(strpos($extension,'php') !== false)
				{
					$err_msg = "Invalid File!";
				}
				else
				{								
					if($file_exists_3 and !move_uploaded_file($_FILES["assignment_attachment_3"]["tmp_name"],"reference_files/$file_prefix_3" . $file_name_3 ))
					{
						$err_msg = "Error in Uploading File!";
					}				
				}
			}
		}
    
    //Fourth File	
		$file_prefix_4 = strtotime("now")."4";				
		if(!empty($_FILES["assignment_attachment_4"]["tmp_name"]))
		{
			$file_name_4 = str_replace(' ','_',$_FILES["assignment_attachment_4"]["name"]);
			$file_name_4 = preg_replace('@[^0-9a-z\.]+@i', '-', $file_name_4);
			$file_exists_4 = true;
		}
		
		if($file_exists_4)
		{
			if ($_FILES["assignment_attachment_4"]["error"] > 0)
			{
				$err_msg = "File upload error!";
			}
			else
			{
				$extension = end(explode(".", $_FILES["assignment_attachment_4"]["name"]));
				
				if(strpos($extension,'php') !== false)
				{
					$err_msg = "Invalid File!";
				}
				else
				{								
					if($file_exists_4 and !move_uploaded_file($_FILES["assignment_attachment_4"]["tmp_name"],"reference_files/$file_prefix_4" . $file_name_4 ))
					{
						$err_msg = "Error in Uploading File!";
					}				
				}
			}
		}
    
    //Fifth File	
		$file_prefix_5 = strtotime("now")."5";				
		if(!empty($_FILES["assignment_attachment_5"]["tmp_name"]))
		{
			$file_name_5 = str_replace(' ','_',$_FILES["assignment_attachment_5"]["name"]);
			$file_name_5 = preg_replace('@[^0-9a-z\.]+@i', '-', $file_name_5);
			$file_exists_5 = true;
		}
		
		if($file_exists_5)
		{
			if ($_FILES["assignment_attachment_5"]["error"] > 0)
			{
				$err_msg = "File upload error!";
			}
			else
			{
				$extension = end(explode(".", $_FILES["assignment_attachment_5"]["name"]));
				
				if(strpos($extension,'php') !== false)
				{
					$err_msg = "Invalid File!";
				}
				else
				{								
					if($file_exists_5 and !move_uploaded_file($_FILES["assignment_attachment_5"]["tmp_name"],"reference_files/$file_prefix_5" . $file_name_5 ))
					{
						$err_msg = "Error in Uploading File!";
					}				
				}
			}
		}
		
		
		
		if(!isset($err_msg))
		{
			if(empty($_POST['course_name']) or empty($_POST['subject']) or empty($_POST['topic_description']) or empty($_POST['referencing_style']) or empty($_POST['type_deliverable']) or empty($_POST['academic_year']) or empty($_POST['no_required_references']) or empty($_POST['no_pages']) or empty($_POST['due_date']) or empty($_POST['name']) or empty($_POST['email']) or empty($_POST['hear_about_us']))
			{			
				$err_msg = "Please enter all the fields!";
				//print_r($_POST);
				//echo $_POST['course_name']." - ".$_POST['subject']." - ".$_POST['topic_description']." - ".$_POST['referencing_style']." - ".$_POST['type_deliverable']." - ".$_POST['academic_year']." - ".$_POST['no_required_references']." - ".$_POST['no_pages']." - ".$_POST['due_date']." - ".$_POST['name']." - ".$_POST['email']." - ".$_POST['hear_about_us'];
			}
		}
			// Softronikx code
			DEFINE('DATABASE_USER', 'learnonc_ehome');
			DEFINE('DATABASE_PASSWORD', 'ehome123');
			DEFINE('DATABASE_HOST', 'localhost');
			DEFINE('DATABASE_NAME', 'learnonc_ehomework');
			$dbc = mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD,DATABASE_NAME);
			if (!$dbc) 
			{
				trigger_error('Could not connect to MySQL: ' . mysqli_connect_error());
			}
			$course_name =  $_POST['course_name'];
			$subject =  $_POST['subject'];
			$topic_description =  $_POST['topic_description'];
			$referencing_style =  $_POST['referencing_style'];
			$type_deliverable =  $_POST['type_deliverable'];
			$academic_year =  $_POST['academic_year'];
			$no_required_references =  $_POST['no_required_references'];
			$no_pages =  $_POST['no_pages'];
			$due_date =  date($_POST['due_date']);
			$instructions =  $_POST['instructions'];
			/*$assignment_attachment =  $_POST['assignment_attachment'];
			$assignment_attachment_2 =  $_POST['assignment_attachment_2'];
			$assignment_attachment_3 =  $_POST['assignment_attachment_3'];
			$assignment_attachment_4 =  $_POST['assignment_attachment_4'];
        	$assignment_attachment_5 =  $_POST['assignment_attachment_5'];*/
			
			$assignment_attachment =  $file_name;
			$assignment_attachment_2 =  $file_name_2;
			$assignment_attachment_3 =  $file_name_3;
			$assignment_attachment_4 =  $file_name_4;
			$assignment_attachment_5 =  $file_name_5;
			
			$assignment_text =  $_POST['assignment_text'];
			$name =  $_POST['name'];
			$email =  $_POST['email'];
			$phone =  $_POST['phone'];
			$hear_about_us =  $_POST['hear_about_us'];
			
			//Insert Query
			$sql_insert="INSERT INTO `order_form_details`(`course_name`,`subject`,`topic_description`,`referencing_style`,`type_deliverable`,`academic_year`,`no_required_references`,`no_pages`,`due_date`,`instructions`,`assignment_attachment`,`assignment_attachment_2`,`assignment_attachment_3`,`assignment_attachment_4`,`assignment_attachment_5`,`assignment_text`,`name`,`email`,`phone`,`hear_about_us`,`validation`)VALUES('$course_name','$subject','$topic_description','$referencing_style','$type_deliverable','$academic_year','$no_required_references','$no_pages','$due_date','$instructions','$assignment_attachment','$assignment_attachment_2','$assignment_attachment_3','$assignment_attachment_4','$assignment_attachment_5','$assignment_text','$name','$email','$phone','$hear_about_us','no')";
			$result_query = mysqli_query($dbc,$sql_insert);
			
			// SELECT LAST_INSERT_ID() From order_form_details;
			$select_id = mysqli_insert_id($dbc);
		
		if(!isset($err_msg))
		{
			$update_query = "UPDATE order_form_details SET validation = 'yes' WHERE id = '$select_id'";
			$result_update_query  = mysqli_query($dbc,$update_query);
			
			//code to email the information
			$msg = "<b>Course Name: </b>".$_POST['course_name']."<br>"."<br>";
			$msg .= "<b>Assignment Subject: </b>".$_POST['subject']."<br>"."<br>";
			$msg .= "<b>Specific Topic Description: </b>".$_POST['topic_description']."<br>"."<br>";
			$msg .= "<b>Referencing Style: </b>".$_POST['referencing_style']."<br>"."<br>";
			$msg .= "<b>Assignment Type (essay, question/answer etc..) </b>".$_POST['type_deliverable']."<br>"."<br>";
			$msg .= "<b>Academic Level/Year: </b>".$_POST['academic_year']."<br>"."<br>";
			$msg .= "<b># of Required Sources/References: </b>".$_POST['no_required_references']."<br>"."<br>";
			$msg .= "<b># of Pages/Words: </b>".$_POST['no_pages']."<br>"."<br>";
			$msg .= "<b>Due Date: </b>".$_POST['due_date']."<br>"."<br>";
			$msg .= "<b>Special Instructions: </b>".$_POST['instructions']."<br>"."<br>";
			if($file_exists)
			{
				$msg .= "<b>Attachment 1: </b> <a href='http://www.ehomework.ca/reference_files/$file_prefix".$file_name."'>File Link</a> <br>"."<br>";
			}
			if($file_exists_2)
			{
				$msg .= "<b>Attachment 2: </b> <a href='http://www.ehomework.ca/reference_files/$file_prefix_2".$file_name_2."'>File Link</a> <br>"."<br>";
			}
			if($file_exists_3)
			{
				$msg .= "<b>Attachment 3: </b> <a href='http://www.ehomework.ca/reference_files/$file_prefix_3".$file_name_3."'>File Link</a> <br>"."<br>";
			}
      	if($file_exists_4)
			{
				$msg .= "<b>Attachment 4: </b> <a href='http://www.ehomework.ca/reference_files/$file_prefix_4".$file_name_4."'>File Link</a> <br>"."<br>";
			}		
      	if($file_exists_5)
			{
				$msg .= "<b>Attachment 5: </b> <a href='http://www.ehomework.ca/reference_files/$file_prefix_5".$file_name_5."'>File Link</a> <br>"."<br>";
			}					
			$msg .= "<b>Assignment Text: </b>".$_POST['assignment_text']."<br>"."<br>";
			$msg .= "<b>Name: </b>".$_POST['name']."<br>"."<br>";
			$msg .= "<b>Email: </b>".$_POST['email']."<br>"."<br>";
			$msg .= "<b>Phone: </b>".$_POST['phone']."<br>"."<br>";
			$msg .= "<b>Heard From: </b>".$_POST['hear_about_us']."<br>"."<br>";
						
			$user_email = 'orders@ehomework.ca';
                                         // $user_email = 'shab.t786@gmail.com';
			$subject = 'NEW ORDER DETAILS - '.$_POST['name'];
			$body = $msg;	
			send_email($user_email,$subject,$body);			
			$suc_msg = "Order Form sent Succesfully!";
			
			$confirmation_msg = "Dear ".$_POST['name'].",<br>"."<br>";
			$confirmation_msg .= "Your Order has been submitted.  If we require any more information we will contact you. <br>"."<br>";
			$confirmation_msg .= "Thanks,"."<br>";
			$confirmation_msg .= "eHomework";
			
			$subject = 'Order Confirmation';
			$body = $confirmation_msg;	
			$user_email = $_POST['email'];			
			@send_email($user_email,$subject,$body);		

			unset($_POST);
		}
	}
	
	
	function send_email($user_email,$subject,$body)
	{
		require_once 'class.phpmailer.php';		
		
		$mail            = new PHPMailer();
		$mail->Host      = "mail.sweetgarden.ca";
		$mail->SMTPAuth  = true;
		$mail->Username  = "orders@ehomework.ca";
		$mail->Password  = "Wagingay2828@";
		$mail->From      = "orders@ehomework.ca";
		$mail->FromName  = "eHomework.ca";
		$mail->WordWrap  = 0;
		$mail->ClearAddresses();
		$mail->AddAddress($user_email);
		$mail->IsHTML(true);
		$mail->Subject = $subject;
		$mail->Body    = $body;
		$mail->Send();
		
	}
?>


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

<style type="text/css">
      
      form {
          margin: 0;
      }
      input.parsley-success, textarea.parsley-success {
        color: #468847 !important;
        background-color: #DFF0D8 !important;
        border: 1px solid #D6E9C6 !important;
      }
      input.parsley-error, textarea.parsley-error {
        color: #B94A48 !important;
        background-color: #F2DEDE !important;
        border: 1px solid #000 !important;
      }
    
      ul.parsley-error-list {
          font-size: 11px;
          margin: 2px;
          list-style-type:none;
      }
      ul.parsley-error-list li {
          line-height: 11px;
      }
     
    </style>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="parsley.min.js"></script>
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
    <?php if(isset($err_msg))	{ echo "<br><p style='font-size:25px;'><font color=\"#FF0000\">".$err_msg."</font></p></br>"; } 
if(isset($suc_msg)) { echo "<br><p style='font-size:25px;'><font color=\"#AA0000\">".$suc_msg."</font></p></br>"; }  else { ?>
				<h1>Order Essay</h1>				<p>Our #1 Priority is to write your assignment as best as we can, to do this we need as much detail from you as possible.  Please fill out the form below. 				</p>				<p>Please email us any extra files, info, readings or attachments that you need to give us.</p>

            <p>&nbsp;</p>
			
			<!-- Begin myContactForm.com Form HTML -->
			

			
<form name="contactForm" method="post" enctype="multipart/form-data" action="order.php" data-validate="parsley">
<input name="user" type="hidden" id="user" value="wiz9" /><input name="formid" type="hidden" id="formid" value="225872" /><input name="subject" type="hidden" id="subject" value="eHomework - assignment & essay help" />
<table width="100%" style="border: 0px solid #000000; margin: 0; padding: 0; background-color: #F7F4E7 url(images/homepage01.jpg;"><tr><td>
<table width="100%" border="0" cellspacing="0" cellpadding="5">
<tr bgcolor=""><td><span class="style6"><font color="#000000" face="Verdana">Course Name:<font color="#FF0000"> *</font></font></span></td><td><font color="#000000" size="2" face="Verdana"><input data-required="true" name="course_name" type="text" value="<?php if(isset($_POST['course_name'])){echo $_POST['course_name'];}?>" size="20" maxlength="" style="font-family: Verdana; font-size: 14px; font-weight: normal; color: #000000; background-color: #FFFFFF; border: 1px solid #000000; vertical-align: middle; padding-left: 4px;" /></font></td></tr>
<tr bgcolor=""><td><span class="style6"><font color="#000000" face="Verdana">Assignment Subject:<font color="#FF0000"> *</font></font></span></td><td><font color="#000000" size="2" face="Verdana"><input data-required="true" name="subject" type="text" value="<?php if(isset($_POST['subject'])){echo $_POST['subject'];}?>" size="20" maxlength="" style="font-family: Verdana; font-size: 14px; font-weight: normal; color: #000000; background-color: #FFFFFF; border: 1px solid #000000; vertical-align: middle; padding-left: 4px;" /></font></td></tr>
<tr bgcolor=""><td><span class="style6"><font color="#000000" face="Verdana">Specific Topic Description:<font color="#FF0000"> *</font></font></span></td><td><font color="#000000" size="2" face="Verdana"><input data-required="true" name="topic_description" type="text" value="<?php if(isset($_POST['topic_description'])){echo $_POST['topic_description'];}?>" size="20" maxlength="" style="font-family: Verdana; font-size: 14px; font-weight: normal; color: #000000; background-color: #FFFFFF; border: 1px solid #000000; vertical-align: middle; padding-left: 4px;" /></font></td></tr>
<tr bgcolor=""><td><span class="style6"><font color="#000000" face="Verdana">Referencing Style:<font color="#FF0000"> *</font></font></span></td><td><font color="#000000" size="2" face="Verdana"><select data-required="true" name="referencing_style">	<option value="APA" >APA</option>	<option value="MLA" >MLA</option>	<option value = "Chicago" >Chicago</option>	<option value = "Other" >Other</option></select></font></td></tr>
<tr bgcolor=""><td><span class="style6"><font color="#000000" face="Verdana">Assignment Type (essay, question/answer etc..):<font color="#FF0000"> *</font></font></span></td><td><font color="#000000" size="2" face="Verdana"><input data-required="true" name="type_deliverable" type="text" value="<?php if(isset($_POST['type_deliverable'])){echo $_POST['type_deliverable'];}?>" size="20" maxlength="" style="font-family: Verdana; font-size: 14px; font-weight: normal; color: #000000; background-color: #FFFFFF; border: 1px solid #000000; vertical-align: middle; padding-left: 4px;" /></font></td></tr>
<tr bgcolor=""><td><span class="style6"><font color="#000000" face="Verdana">Academic Level/Year:<font color="#FF0000"> *</font></font></span></td><td><font color="#000000" size="2" face="Verdana"><input data-required="true" name="academic_year" type="text" value="<?php if(isset($_POST['academic_year'])){echo $_POST['academic_year'];}?>" size="20" maxlength="" style="font-family: Verdana; font-size: 14px; font-weight: normal; color: #000000; background-color: #FFFFFF; border: 1px solid #000000; vertical-align: middle; padding-left: 4px;" /></font></td></tr>
<tr bgcolor=""><td><span class="style6"><font color="#000000" face="Verdana"># of Required Sources/References:<font color="#FF0000"> *</font></font></span></td><td><font color="#000000" size="2" face="Verdana"><input data-required="true" name="no_required_references" type="text" value="<?php if(isset($_POST['no_required_references'])){echo $_POST['no_required_references'];}?>" size="20" maxlength="" style="font-family: Verdana; font-size: 14px; font-weight: normal; color: #000000; background-color: #FFFFFF; border: 1px solid #000000; vertical-align: middle; padding-left: 4px;" /></font></td></tr>
<tr bgcolor=""><td><span class="style6"><font color="#000000" face="Verdana"># of Pages/Words:<font color="#FF0000"> *</font></font></span></td><td><font color="#000000" size="2" face="Verdana"><input data-required="true" name="no_pages" type="text" value="<?php if(isset($_POST['no_pages'])){echo $_POST['no_pages'];}?>" size="20" maxlength="" style="font-family: Verdana; font-size: 14px; font-weight: normal; color: #000000; background-color: #FFFFFF; border: 1px solid #000000; vertical-align: middle; padding-left: 4px;" /></font></td></tr>
<tr bgcolor=""><td><span class="style6"><font color="#000000" face="Verdana">Due Date:<font color="#FF0000"> *</font></font></span></td><td><font color="#000000" size="2" face="Verdana"><input data-required="true" name="due_date" type="text" value="<?php if(isset($_POST['due_date'])){echo $_POST['due_date'];}?>" size="20" maxlength="" style="font-family: Verdana; font-size: 14px; font-weight: normal; color: #000000; background-color: #FFFFFF; border: 1px solid #000000; vertical-align: middle; padding-left: 4px;" /></font></td></tr>
<tr bgcolor=""><td><span class="style6"><font color="#000000" face="Verdana">Special Instructions:</font></span></td><td><font color="#000000" size="2" face="Verdana"><textarea name="instructions" cols="30" rows="5" style="font-family: Verdana; font-size: 14px; font-weight: normal; color: #000000; background-color: #FFFFFF; border: 1px solid #000000; vertical-align: middle; padding-left: 4px;"><?php if(isset($_POST['instructions'])){echo $_POST['instructions'];}?></textarea></font></td></tr>


<tr bgcolor=""><td colspan=2><span class="style6"><font color="#000000" face="Verdana">Do you have the assignment outline???<br/><br/>Please attach files or email them:  info@eHomework.ca</font></span></td></tr>

<tr bgcolor=""><td><span class="style6"><font color="#000000" face="Verdana">Attachment 1</font></span></td><td><font color="#000000" size="2" face="Verdana"><input name="assignment_attachment" type="file" value="" size="20" maxlength="" style="font-family: Verdana; font-size: 14px; font-weight: normal; color: #000000; background-color: #FFFFFF; border: 1px solid #000000; vertical-align: middle; padding-left: 4px;" /></font></td></tr>

<tr bgcolor=""><td><span class="style6"><font color="#000000" face="Verdana">Attachment 2</font></span></td><td><font color="#000000" size="2" face="Verdana"><input name="assignment_attachment_2" type="file" value="" size="20" maxlength="" style="font-family: Verdana; font-size: 14px; font-weight: normal; color: #000000; background-color: #FFFFFF; border: 1px solid #000000; vertical-align: middle; padding-left: 4px;" /></font></td></tr>

<tr bgcolor=""><td><span class="style6"><font color="#000000" face="Verdana">Attachment 3</font></span></td><td><font color="#000000" size="2" face="Verdana"><input name="assignment_attachment_3" type="file" value="" size="20" maxlength="" style="font-family: Verdana; font-size: 14px; font-weight: normal; color: #000000; background-color: #FFFFFF; border: 1px solid #000000; vertical-align: middle; padding-left: 4px;" /></font></td></tr>
<tr bgcolor=""><td><span class="style6"><font color="#000000" face="Verdana">Attachment 4</font></span></td><td><font color="#000000" size="2" face="Verdana"><input name="assignment_attachment_4" type="file" value="" size="20" maxlength="" style="font-family: Verdana; font-size: 14px; font-weight: normal; color: #000000; background-color: #FFFFFF; border: 1px solid #000000; vertical-align: middle; padding-left: 4px;" /></font></td></tr>
<tr bgcolor=""><td><span class="style6"><font color="#000000" face="Verdana">Attachment 5</font></span></td><td><font color="#000000" size="2" face="Verdana"><input name="assignment_attachment_5" type="file" value="" size="20" maxlength="" style="font-family: Verdana; font-size: 14px; font-weight: normal; color: #000000; background-color: #FFFFFF; border: 1px solid #000000; vertical-align: middle; padding-left: 4px;" /></font></td></tr>

<tr bgcolor=""><td><span class="style6"><font color="#000000" face="Verdana">or copy paste below</font></span></td><td><font color="#000000" size="2" face="Verdana"><textarea name="assignment_text" cols="30" rows="5" style="font-family: Verdana; font-size: 14px; font-weight: normal; color: #000000; background-color: #FFFFFF; border: 1px solid #000000; vertical-align: middle; padding-left: 4px;"></textarea></font></td></tr>

<tr bgcolor="">
	<td colspan="2">&nbsp;
	</td>
</tr>

<tr bgcolor="">
	<td colspan="2"><span class="style6"><font color="#000000" face="Verdana">NOTE:  ALL contact information is CONFIDENTIAL and will NOT be shared with anyone.<font color="#FF0000"> </font></font></span>
	</td>
</tr>

<tr bgcolor=""><td><span class="style6"><font color="#000000" face="Verdana">Name:<font color="#FF0000"> *</font></font></span></td><td><font color="#000000" size="2" face="Verdana"><input data-required="true" name="name" type="text" value="<?php if(isset($_POST['name'])){echo $_POST['name'];}?>" size="20" maxlength="" style="font-family: Verdana; font-size: 14px; font-weight: normal; color: #000000; background-color: #FFFFFF; border: 1px solid #000000; vertical-align: middle; padding-left: 4px;" /></font></td></tr>
<tr bgcolor=""><td><span class="style6"><font color="#000000" face="Verdana">Email:<font color="#FF0000"> *</font></font></span></td><td><font color="#000000" size="2" face="Verdana"><input data-type="email" data-required="true" name="email" type="text" value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>" size="20" maxlength="" style="font-family: Verdana; font-size: 14px; font-weight: normal; color: #000000; background-color: #FFFFFF; border: 1px solid #000000; vertical-align: middle; padding-left: 4px;" /></font></td></tr>
<tr bgcolor=""><td><span class="style6"><font color="#000000" face="Verdana">Phone:</font></span></td><td><font color="#000000" size="2" face="Verdana"><input name="phone" type="text" value="<?php if(isset($_POST['phone'])){echo $_POST['phone'];}?>" size="20" maxlength="" style="font-family: Verdana; font-size: 14px; font-weight: normal; color: #000000; background-color: #FFFFFF; border: 1px solid #000000; vertical-align: middle; padding-left: 4px;" /></font></td></tr><tr bgcolor=""><td><span class="style6"><font color="#000000" face="Verdana">Where did you hear about us:</font></span></td><td><font color="#000000" size="2" face="Verdana"><select name="hear_about_us">	<option value="friend">friend</option>	<option value="google">google</option>	<option value="facebook">facebook</option>	<option value="flyer on campus">flyer on campus</option>	<option value="Other">Other</option></select></font></td></tr>

<tr><td><font color="#FF0000" size="1" face="Verdana, Arial, Helvetica, sans-serif"><b>*</b></font> <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Required</font></td>
  <td><input name="submit" type="submit" value="Submit"/></td>
</tr>
</table></td></tr></table></form> 

<!-- End myContactForm.com Form HTML -->
			
			<p>&nbsp;</p><table border="0" cellspacing="0" cellpadding="0"> <tr><td width="105" valign="top">&nbsp;</td> <td width="311" valign="top"><p align="center"><a href="mailto:info@eHomework.ca" class="style3">info@eHomework.ca</a></p>
			      <p align="center"><img src="images/credit card.jpg" width="163" height="35" /></p></td></tr> </table><p>&nbsp;</p>
            <?php } ?>
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
