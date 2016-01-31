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
?>
<div class="result2">
	<div class="cent">
		<div class="ntitle">
			<div class="nt">
				<span class="title">Privacy Settings</span>
			</div>
		</div>
		<div class="ntext">
			safasfadfdsfs
		</div>
	</div>
</div>