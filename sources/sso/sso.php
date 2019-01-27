<?php
$_ENV['RAINLOOP_INCLUDE_AS_API'] = true;


include '__FINAL_PATH__/app/index.php';

// Retrieve email and password
if (isset($_SERVER['HTTP_EMAIL']) && isset($_SERVER['PHP_AUTH_PW'])) {
	$email = $_SERVER['HTTP_EMAIL'];
	$password = $_SERVER['PHP_AUTH_PW'];
	$ssoHash = \RainLoop\Api::GetUserSsoHash($email, $password);

	// redirect to webmail sso url
	\header('Location: https://__URL__/app/index.php?sso&hash='.$ssoHash);
}
else {
	\header('Location: https://__URL__/app/index.php');
}
