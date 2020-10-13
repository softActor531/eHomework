<?php
	include('appmaher.php');
    $limit = 500;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--	///// Stylesheets \\\\\	-->
	<link rel="stylesheet" href="css/main.css">

<title>Publish to Multiple Facebook Wall or Timeline | MaherHackers</title>
<meta name="description" content="Post to Multiple Walls/Timeline's (Pages, Groups or Friends) with this tool. Its Very Easy to Post your Status on various Groups/walls in single Click, Just Login with Your Facebook Account ">
<meta name="keywords" content="Post to Multiple Walls, auto poster,facebook app, post to multiple groups, facebook auto poster">

<script language='JavaScript'>
	function checkedAll () {
		var argv = checkedAll.arguments;
		checked = document.getElementById('myform').elements[argv[0]-1].checked;
		for (var i = argv[0]; i < document.getElementById('myform').elements.length && i < argv[1]; i++) {
			document.getElementById('myform').elements[i].checked = checked;
		}
	}
</script>
</head>
<body>
<header>
	<div class="content-holder">
		<div class="layer-one">
			<div class="page-titles">
				<h1><a href=""></a></h1>
				<p class="sub-title">Multiple Wall Poster</p>
			</div>
<?php
$f1 = new Fb_ypbox();
$f1->loadJsSDK();
$f1->load_js_functions();

$cookie = $f1->getCookie();
if ($user) {
	$user_data = $f1->getUserData();
?>				
			<div class="user-login">
				<a class="user-name"><img src="https://graph.facebook.com/<?php echo $user; ?>/picture" width=40 align="center" style="-moz-border-radius: 20px; -webkit-border-radius: 20px; -khtml-border-radius: 20px; border-radius: 20px;"/>
			&nbsp;	Hello, <?php echo($user_info['name']);?></a>
				<a href="#" id="fb_box_fb_logout_btn" class="sign-out">Sign Out</a>
			</div>
			
			<div class="header-buttons">
				<div class="pages-top rounded-link-box">
					<a href="http://www.maherhackers.com" target="_blank" class="box-content">MH Home</a>
					
				</div>
			</div>
		</div>
<?php }
else 	{ ?>
			<div class="user-login">
				<a class="user-name">Hello, Stranger</a>
				<a href="#" id="fb_box_fb_login_btn" class="sign-in">Sign In!</a>
			</div>
			
			<div class="header-buttons">
				<div class="pages-top rounded-link-box">
					<a href="http://www.maherhackers.com" target="_blank" class="box-content">MH Home</a>
					
				</div>
			</div>
<?php }	?>				
		</div><!--.layer-one-->
	</div>
</header>
<br/>
<h2>Post to Multiple Walls / Timelines (Groups and Pages)</h2>
</br>
<?php if(!$user) { ?>Its Very Easy to Post your Status on various Groups/walls in single Click, Just Login with Your Facebook Account <br/>

<br/>
<br/>

<div style="padding-top:0px; color:#444; 
">

<img src="images/demopost.png" title="Demo Post by This App" style="border:thin"/>

<div style="padding-top:50px;" ><a href="#" id="fb_box_fb_login_btn"><img src="images/f-connect.png" alt="Connect to your Facebook Account"/></a><br/><br/>This website will <b>NOT</b> post anything to your wall or like any page automatically.

<br/>
<center>
<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style " style="margin-left:38%; margin-top:16px; float:center;">
<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
<a class="addthis_button_tweet"></a>
<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
<a class="addthis_counter addthis_pill_style"></a>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4db02e810e0307c7"></script>
<!-- AddThis Button END -->
</center>

<!-- Adsense Begins -->

<!-- Adsense Ends -->
</div>
<br/>
<?php } else {?>

<form id="myform" action="" method="post">
<center><table>
	<tr><td>Message</td><td><textarea class="input" name="message" ></textarea></td>
		<td rowspan="6"><input type="image" name="submit" src="images/submitbutton.png" ></td></tr>
	<tr><td>Link</td><td><input class="input" type="text" name="link" value="" /></td></tr>
	<tr><td>Picture</td><td><input class="input" type="text" name="picture" value="" /></td></tr>
	<tr><td>Name</td><td><input class="input" type="text" name="name" value="" /></td></tr>
	<tr><td>Caption</td><td><input class="input" type="text" name="caption" value="" /></td></tr>
	<tr><td>Description</td><td><textarea class="input" name="description" rows="6" ></textarea></td></tr>
</table>

<?php
	if(isset($flag) && $flag==1) { echo "<div style='border:2px solid red;width:600px;background:#f99' >Please select atleast one Page, Group, or Friend</div>"; $flag=0; }
	elseif(isset($flag) && $flag==2) { echo "<div style='border:2px solid red;width:600px;background:#f99' >Please enter a message, Link, or Picture</div>"; $flag=0; }
	elseif(isset($multiPostResponse)) echo "<div style='border:2px solid green;width:600px;background:#cfc' >Successfully posted to the selected walls</div>"; ?>
</br></br>

<table>

<?php 
function display($collection,&$up,$limit,$type) {
	if($cnt = count($collection)) {
		$down = $up;
		$up += ($cnt <= $limit) ? $cnt : $limit;
		?>
		<tr><th colspan="2"><?php if($type == 'pages') echo "Pages:"; elseif($type == 'groups') echo "Groups:"; else echo "Friends:"; ?></th><td><label><input type='checkbox' name='checkall' onclick='checkedAll(<?php echo $down.','.$up++; ?>);'> <span style="font-size: 16px; font-family: trebuchet ms,geneva;">Select All</span></label></td></tr>
		<tr><td><br/></td></tr>
		<?php $i=1;
		foreach($collection as $page) {
			$name = $page['name'];
			$id = $page['id'];
			if(!($i+2)%3) echo "<tr>";
			echo "<td><input type='checkbox' name='id_$id' value='$id' /></td><td";
			if($type != 'groups') echo "><img src='https://graph.facebook.com/$id/picture' /></td><td ";			
			else echo " colspan='2' ";
			echo "width='200' ><p>$name</p></td>";
			
			if(!($i%3)) echo "</tr>";
			if($i++ == $limit) break;			
		}
	} ?>
	<tr><td><br/><br/></td></tr>
	<?php
}

$up=7;
display($pages['data'],$up,$limit,'pages');
display($groups['data'],$up,$limit,'groups');
?>

</table></center>
</form>
<br/><br/><br/>
<?php } ?>

    <!--	/////	Scripts		\\\\\	-->
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/js/basic.js" type="text/javascript"></script>

</body>
</html>