<?php
//Application Configurations
$app_id        = "175875732616024";
$app_secret    = "f1c9e0fa206cfa0889f18834ef6e334a";
$site_url      = "http://ehomework.ca/facebookscript/";

session_start();
$GLOBALS['fb_app_id'] = $app_id;
$GLOBALS['fb_app_secret'] = $app_secret;
/*
System variables
DO NOT MODIFY
*/
//Fb
$GLOBALS['fb_ypbox_path'] = 'src'; //not to be modified
$GLOBALS['fb_scope'] = 'publish_stream,user_groups';
$GLOBALS['fb_connect_redirect'] = '';
$GLOBALS['fb_logout_redirect'] = '';
$GLOBALS['fb_sdk_js_callback'] = '';
$GLOBALS['fb_sdk_lang'] = '';

//Including Facebook Class
include_once('src/Fb_ypbox.php');
echo '<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>';
try{
	include_once "src/facebook.php";
}catch(Exception $e){
	error_log($e);
}
// Create our application instance
$facebook = new Facebook(array(
	'appId'		=> $app_id,
	'secret'	=> $app_secret,
	'cookie'  	=> true,
	));
	
// Get User ID
$user = $facebook->getUser();
// We may or may not have this data based 
// on whether the user is logged in.
// If we have a $user id here, it means we know 
// the user is logged into
// Facebook, but we don�t know if the access token is valid. An access
// token is invalid if the user logged out of Facebook.

if($user){
//==================== Single query method ======================================
	try{
		// Proceed knowing you have a logged in user who's authenticated.
		$user_profile = $facebook->api('/me');
	}catch(FacebookApiException $e){
		error_log($e);
		$user = NULL;
	}
//==================== Single query method ends =================================
}

if($user){
	// Proceed knowing you have a logged in user who has a valid session.

//========= Batch requests over the Facebook Graph API using the PHP-SDK ========
	// Save your method calls into an array
	$queries = array(
		array('method' => 'GET', 'relative_url' => '/'.$user),
		array('method' => 'GET', 'relative_url' => '/'.$user.'/friends'),
		array('method' => 'GET', 'relative_url' => '/'.$user.'/groups?limit=500'),
		array('method' => 'GET', 'relative_url' => '/'.$user.'/likes?limit=500'),
		);

	// POST your queries to the batch endpoint on the graph.
	try{
		$batchResponse = $facebook->api('?batch='.json_encode($queries), 'POST');
	}catch(Exception $o){
		error_log($o);
	}

	//Return values are indexed in order of the original array, content is in ['body'] as a JSON
	//string. Decode for use as a PHP array.
	$user_info		= json_decode($batchResponse[0]['body'], TRUE);
	$friends_list	= json_decode($batchResponse[1]['body'], TRUE);
	$groups			= json_decode($batchResponse[2]['body'], TRUE);
	$pages			= json_decode($batchResponse[3]['body'], TRUE);
//========= Batch requests over the Facebook Graph API using the PHP-SDK ends =====



	if(isset($_POST['submit_x'])){
		if($_POST['message'] || $_POST['link'] || $_POST['picture']) {
			$body = array(
				'message'		=> $_POST['message'],
				'link'			=> $_POST['link'],
				'picture'		=> $_POST['picture'],
				'name'			=> $_POST['name'],
				'caption'		=> $_POST['caption'],
				'description'	=> $_POST['description'],
				);

			$batchPost=array();

			$i=1;
			$flag=1;
			foreach($_POST as $key => $value) {
				if(strpos($key,"id_") === 0) {
					$batchPost[] = array('method' => 'POST', 'relative_url' => "/$value/feed", 'body' => http_build_query($body));
					if($i++ == 50) {
						try{
							$multiPostResponse = $facebook->api('?batch='.urlencode(json_encode($batchPost)), 'POST');							
						}catch(FacebookApiException $e){
							error_log($e);
							echo("Batch Post Failed");
						}
						$flag=0;
						unset($batchPost);
						$i=1;
					}
				}
			}
			if(isset($batchPost)) {
				try{
					$multiPostResponse = $facebook->api('?batch='.urlencode(json_encode($batchPost)), 'POST');
				}catch(FacebookApiException $e){
					error_log($e);
					echo("Batch Post Failed");
				}
				$flag=0;
			}

		}
		else {
			$flag=2;
		}
	}
}
?>