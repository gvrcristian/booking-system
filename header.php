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
<html>
	<head>
		<title>Hotel 4 Hotel</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
		<!--[if lt IE 9]>
			<script src="js/html5.js"></script>
		<![endif]-->
		<script type= "text/javascript" src = "js/countries.js"></script>
		<script src="js/jquery.1.9.1.js"></script>
		<script type="text/javascript" src="js/jquery.1.4.min.js"></script>
		<script>
			$(function(){
				$('a.log-reg').click(function()
				{
					$.get('p.php?p=' + $(this).attr('discount'), function(data)
					{
						$('.result').html(data);
					});
				});
			});
	
			function openDialog()
			{
				Avgrund.show( "#default-popup" );
			}
			function closeDialog()
			{
				Avgrund.hide();
			}
			$(window).scroll(function()
			{
				$('#default-popup').css({position: 'fixed'});
			});
		</script>
		<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
		<script src="js/datepicker.js"></script>
		<script>
			$(function()
			{
				$("#search_date").datepicker();
				$("#search_date2").datepicker();
			});
		</script>
		<script type="text/javascript" src="js/search.js"></script>
		<script type="text/javascript" src="js/popup.js"></script>
		<script type="text/javascript" src="js/watermark.js"></script>
	</head>

	<body>
		<?php
			if(!check_login())
			{
				$ban = mysql_query("SELECT * FROM `login_fail` WHERE `ip` = '$ip'") or die(mysql_error());
				$ban = mysql_num_rows($ban);
		?>
				<div id="default-popup" class="popup">
					<div class="close">
						<a style="cursor: pointer;" onclick="javascript:closeDialog();"><img src="images/close.png" /></a>
					</div>
					<?php
					if($ban >= 3)
					{
						echo "<div class='canlog'>".BANNED."</div>";
					} else {
					?>
					<span class="result"></span>
						<div class="login"><a discount="login" class="log-reg">Login</a></div>
						<div class="register"><a discount="register" class="log-reg">Register</a></div>
				<?php
					}
				?>
					</p>
				</div>
		<?php
			}
		?>
		<div class="contentpopup">
			<div id="menutop">
				<h2><a href="index.php">Site title</a></h2>
				<div class="link">
					<a href="index.php"><?=HOME;?></a>
					<a href="search.php"><?=HOTEL_SEARCH;?></a>
					<?php
						if(check_login())
						{
					?>
							<a href="profile.php"><?=PROFILE;?></a>
					<?php
						} else {
					?>
						<a href="">Link</a>
						<a style="cursor: pointer;" onclick="javascript:openDialog();" discount="login" class="log-reg"><?=LOGREG;?></a>
					<?php
						}
					?>
					<a href="">Contact</a>
					<?php
						if(check_login())
						{
					?>
							<a href="logout.php"><?=LOGOUT;?></a>
					<?php
						}
					?>
				</div>
			</div>
			<header><div class="icon"></div>
				<div id="top"></div>
				<div id="search">
						<div class="left">
							<div class="text1">Search a Hotel</div>
							<div class="text2">Lorem ispum solor sid ahmed loresin vane.</div>
						</div>
						<div class="right"><form id="searchform" method="post"><?php if($s == "search") { ?><input name="query" type="text" id="search_input"><input name="query" type="text" id="search_price">&nbsp;&nbsp;&nbsp;<a href="search.php?search=advanced"><?=ADV_SEARCH;?></a><?php } elseif(!isset($_GET['search'])) { ?><form method="POST" action="search.php?search=input"><input type="text" name="search_query" id="search_query"><input type="text" name="search_query2" id="search_query2"><input type="submit" name="submit" value="<?=HOTEL_SEARCH;?>" /></form><?php } ?></form<></div>
					</div>
			</header>
			<div id="display_results"></div>
			<div id="center">
			<div class="cenright">
				<div class="stats">
					<div class="title"><?=STATS;?></div>
				</div>
				<div class="text">In total sunt <font color="green">231</font> hoteluri inregistrate<br />
				Din care doar <font color="green">587</font> camere libere</div>
			</div>
			