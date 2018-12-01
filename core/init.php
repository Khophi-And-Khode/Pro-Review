<?php
session_start();
// error_reporting(0);
$GLOBALS['config'] = array(
	'mysql' => array(
		'host' => 'localhost',
		'username' => 'root',
		'password' => '',
		'db' => 'isbn_db'
		),
	'remember' => array(
		'cookie_name' => 'hash',
		'cookie_expiry' => 604800
		),
	'session' => array(
		'user' => ''
		)
	);
require '../vendor/autoload.php';
\Cloudinary::config(array(
    'cloud_name' => 'wendolin',
    'api_key'=> '447918465166282',
    'api_secret'=> 'RCoyVQF9Gbxc6oNCNDfoNTK9-Nw'
)
);
// require_once('../functions/sanitize.php');
spl_autoload_register(function($class) {
	require_once('../classes/'.$class.'.class.php');
});
?>