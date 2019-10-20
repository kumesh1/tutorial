<?php 
	
	session_start();

	require './vendor/autoload.php';

	$fb = new Facebook\Facebook([

		'app_id' =>'3082685238413597',
		'app_secret' => '5796a91997cfab767ab6976a153e3695',
		'default_graph_version' => 'v2.7'

	]);
	$helper = $fb->getRedirectLoginHelper();
	$login_url = $helper->getLoginUrl("http://localhost/fb-api/");
	try {
		$accessToken = $helper->getAccessToken();
		if(isset($accessToken)){
			$_SESSION['accessToken'] = (string)$accessToken;
			header("location:index.php");
		}
	} catch (Exception $e) {
		// echo $e;
		
	}
 ?>

