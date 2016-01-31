<?php
include('templates/boca/header_p.php');

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
	
	if(isset($_POST['formtype']))
		if($_POST['formtype'] == "settings")
		{
			
			//$h_name = $_POST['h_name'];
			$aname = $_POST['aname'];
			//$email = $_POST['email'];
			//$country = $_POST['country'];
			$lang = $_POST['lang'];
			//$username = $_POST['user_name'];
			//$h_id = $_POST['h_id'];
			$error = array();
			
			/*if(empty($h_name))
				array_push($error, "Campul `Nume hotel` nu poate fi liber!");*/
			if(empty($aname))
				array_push($error, "Campul `Nume admin` nu poate fi liber!");
			/*if(strlen($email) == 0)
				array_push($error, "Campul `Email` nu poate fi liber!");
			if(!filter_var($email, FILTER_VALIDATE_EMAIL))
				array_push($error, "Ne pare rau dar adresa de email nu este valida!")
			if(EmailValidation($emai) == false)
				array_push($error, "Ne pare rau dar adresa de email introdusa nu exista!");*/
			
			//$cntr = mysql_query("SELECT * FROM `countries` WHERE `short_name` = '$country'");
			$lgng = mysql_query("SELECT * FROM `countries` WHERE `short_name` = '$lang'");
			
			//if(mysql_num_rows($cntr) == 0)
				//array_push($error, "Ne pare rau dar tara selectata nu exista in baza noastra de date!");
			
			if(mysql_num_rows($lgng) == 0)
				array_push($error, "Ne pare rau dar limba selectata nu exista in baza noastra de date!");
			//if(strlen($username) == 0)
				//array_push($error, "Campul `Username` nu poate fi liber!");
			//if(strlen($h_id) == 0)
				//array_push($error, "Campul `ID Profil Hotel` nu poate fi liber!");
			
			$output = '';
			foreach($error as $val)
			{
				$output .= "<div>$val</div>";
			}
			
			if(!$error)
			{
				$nmd = $_SESSION['user'];
				$piad = mysql_query("SELECT * FROM `settings` WHERE `username` = '$nmd'");
				$piad = mysql_fetch_array($piad);
				$piad = $piad['profile_id'];
				$seq = mysql_query("UPDATE `users` SET `name` = '$aname', `lang` = '$lang' WHERE `id` = '$piad'") or die(mysql_error());
				if($seq) $formtype = "Profilul a fost modificat cu success!";
				else $formtype = "Ne pare rau dar exista cateva erori!";
			} else $formtype = "Ne pare rau dar exista cateva erori!";
		} else $formtype = "Pagina cautata nu exista";
		
?>

<script>
			$(function()
			{
				$('a.profm2').click(function()
				{
					$.get('prof2.php?p=' + $(this).attr('discount'), function(data)
					{
						$('.result3').html(data);
					});
				});
			});
		</script>
<div class="result2">
<div class="result3">

<div class="cent">
	<div class="ntitle">
		<div class="nt">
			<span class="title"><?=$formtype;?></span>
		</div>
	</div>
	<div class="ntext">
	<?php echo $output; ?>
	<br /><br />
		<a discount="settings/hotel_detail" class="profm2">&nbsp;<< Inapoi</a>
	</div>
</div>
</div>
</div>
<?php
include('templates/boca/footer_p.php');
?>