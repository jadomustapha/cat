<?php
session_start();
include_once('php-graph-sdk-5.x/src/Facebook/autoload.php');
$fb = new Facebook\Facebook(array(
	'app_id' => '1198961777582518', // Replace with your app id
	'app_secret' => '8d710409e45fcd5be3b2c98baa9dc51a',  // Replace with your app secret
	'default_graph_version' => 'v3.2',
));

$helper = $fb->getRedirectLoginHelper();
?>