<?php
include('includes/functions.php');
check_lang();
if(check_login())
{
	update_sts($_SESSION['user']);
}
delete_ban();
if (!empty($_SERVER['HTTP_CLIENT_IP']))
{
	$ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
{
	$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
	$ip = $_SERVER['REMOTE_ADDR'];
}
pnews(2);
?>
