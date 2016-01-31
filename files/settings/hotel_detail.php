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

<div class="cent">
	<div class="ntitle">
		<div class="nt">
			<span class="title">Detalii Hotel</span>
		</div>
	</div>
	<div class="ntext">
		<form method="POST" action="success.php">
			<table>
				<tr>
					<td>Nume hotel: </td>
					<td><input type="text" name="h_name" value="<?php settings("hotel_name", $_SESSION['user']);?>" disabled /></td>
				</tr>
				
				<tr>
					<td>Nume admin: </td>
					<td><input type="text" name="aname" value="<?php settings("name", $_SESSION['user']);?>" /></td>
				</tr>
				
				<tr>
					<td>Email: </td>
					<td><input type="text" name="email" value="<?php settings("email", $_SESSION['user']);?>" disabled /></td>
				</tr>
				
				<tr>
					<td>Country: </td>
					<td><select name="country" disabled>
						<option value="<?=settings("country", $_SESSION['user']);?>" selected><?=settings("country", $_SESSION['user']);?></option>
						<option value="en">English</option>
						<option value="it">Italy</option>
						<option value="sp">Spanish</option>
					</select></td>
				</tr>
				
				<tr>
					<td>Language: </td>
					<td><select name="lang">
						<option value="<?=settings("lang", $_SESSION['user']);?>" selected><?=settings("country", $_SESSION['user']);?></option>
						<option value="en">English</option>
						<option value="it">Italy</option>
						<option value="sp">Spanish</option>
					</select></td>
				</tr>
				
				<tr>
					<td>Username: </td>
					<td><input type="text" name="user_name" value="<?php settings("username", $_SESSION['user']);?>" disabled /></td>
				</tr>
				
				<tr>
					<td>ID Profil Hotel: </td>
					<td><input type="text" name="h_id" value="<?php settings("profile_id", $_SESSION['user']);?>" disabled /></td>
				</tr>
				
				<tr>
					<td><input type="hidden" name="formtype" id="formtype" value="settings" /></td>
					<td><input type="submit" name="submit" id="change" value="Submit" /></td>
				</tr>
			</table>
		</form>
	</div>
</div>