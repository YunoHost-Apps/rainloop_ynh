<?php

if (!defined('APP_VERSION'))
{
	define('APP_VERSION', '1.12.1');
	define('APP_VERSION_TYPE', 'community');
	define('APP_INDEX_ROOT_FILE', __FILE__);
	define('APP_INDEX_ROOT_PATH', str_replace('\\', '/', rtrim(dirname(__FILE__), '\\/').'/'));
}

if (file_exists(APP_INDEX_ROOT_PATH.'rainloop/v/'.APP_VERSION.'/include.php'))
{
	include APP_INDEX_ROOT_PATH.'rainloop/v/'.APP_VERSION.'/include.php';
}
else
{
	echo '[105] Missing version directory';
	exit(105);
}
// Retrieve email and password
if (isset($_SERVER['HTTP_EMAIL']) && isset($_SERVER['PHP_AUTH_PW'])) {
	$email = $_SERVER['HTTP_EMAIL'];
	$password = $_SERVER['PHP_AUTH_PW'];
	$ssoHash = \RainLoop\Api::GetUserSsoHash($email, $password);

	// redirect to webmail sso url
	\header('Location: https://__URL__/index.php?sso&hash='.$ssoHash);
}
else {
	\header('Location: https://__URL__/index.php');
}
