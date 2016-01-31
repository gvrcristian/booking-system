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
	$page = "Acasa";
?>
<html>
	<head>
		<title><?php if(check_login()) { settings('hotel_name', $_SESSION['user']); ?> - <?php $page; } else ?>Cauta un profil</title>
		<link rel="stylesheet" type="text/css" href="css/profile.css" />
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<script type= "text/javascript" src = "js/countries.js"></script>
		<script src="js/jquery.1.9.1.js"></script>
		<script type="text/javascript" src="js/jquery.1.4.min.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
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



		</script>
		<script type="text/javascript" src="js/popup.js"></script>

		<script type="text/javascript" src="js/watermark.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<link type="text/css" rel="stylesheet" href="css/css/jquery.mmenu.all.css" />
		<script type="text/javascript" src="js/js/jquery.mmenu.min.all.js"></script>
		<script type="text/javascript">
			$(function() {
				$('nav#menu').mmenu({
					extensions	: [ 'effect-slide-menu', 'pageshadow' ],
					searchfield	: true,
					counters	: true,
					navbars		: [
						{
							position	: 'top'
						}, {
							position	: 'bottom',
							content		: [ '<a discount="about" class="profm">About us</a>' ]
						}
					]
				});
			});
		</script>
		
		
		<script>
			$(function()
			{
				$('a.profm').click(function()
				{
					$.get('prof.php?p=' + $(this).attr('discount'), function(data)
					{
						$('.result2').html(data);
					});
				});
			});
		</script>

	</head>

	<body>
		<?php
			if(check_login())
			{
				if(check_admin(1))
				{
		?>
			<nav id="menu">
				<ul>
					<li><a discount="settings/photo" class="profm"><div class="profe"></div>
					<div class="tittle"><?php settings('hotel_name', $_SESSION['user']); ?></div></a></li>
					<li><a discount="profile" class="profm"><img src="images/profil/menu/profile.png" width="20" height="20" />&nbsp;Profile</a></li>
					<li><a><img src="images/profil/menu/settings.png" width="20" height="20" />&nbsp;Profile</a>
						<ul>
							<li><a discount="settings/hotel_detail" class="profm"><img src="images/profil/menu/hotel_detail.png" width="20" height="20" />&nbsp;Hotel details</a></li>
							<li><a discount="settings/design" class="profm"><img src="images/profil/menu/template.png" width="20" height="20" />&nbsp;Profile Template</a>
								<ul>
									<li><a discount="settings/dcolors" class="profm"><img src="images/profil/menu/colors.png" width="20" height="20" />&nbsp;Colors</a></li>
									<li><a discount="settings/dimages" class="profm"><img src="images/profil/menu/images.png" width="20" height="20" />&nbsp;Images</a></li>
									<li><a discount="settings/dadvanced" class="profm"><img src="images/profil/menu/advanced.png" width="20" height="20" />&nbsp;Advanced</a></li>
								</ul>
							</li>
							<li><a discount="settings/privacy" class="profm"><img src="images/profil/menu/privacy.png" width="20" height="20" />&nbsp;Privacy Settings</a></li>
							<?php if(check_admin(2)) { ?><li><a discount="settings/logs" class="profm"><img src="images/profil/menu/logs.png" width="20" height="20" />&nbsp;Logs</a></li><?php } ?>
						</ul>
					</li>
					<li><a discount="add_post" class="profm"><img src="images/profil/menu/post.png" width="20" height="20" />&nbsp;Write Post</a></li>
					<li><a discount="manage_rooms" class="profm"><img src="images/profil/menu/rooms.png" width="20" height="20" />&nbsp;Manage rooms</a>
						<!--<ul>
							<li><a href="#managerooms/Room1">Room 1</a></li>
							<li><a href="#managerooms/Room2">Room 2</a>
								<ul>
									<li><a href="#managerooms/Room2/Room2.1">Room 2.1</a></li>
									<li><a href="#managerooms/Room2/Room2.2">Room 2.2</a></li>
									<li><a href="#managerooms/Room2/Room2.3">Room 2.3</a></li>
								</ul>
							</li>
							<li><a href="#managerooms/Room3">Room 3</a></li>
						</ul>-->
					</li>
					<li><a href="#logout"><img src="images/profil/menu/logout.png" width="20" height="20" />&nbsp;LogOut</a></li>
				</ul>
			</nav>
			
			<?php
				}
			} else {
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
				<h2><?php settings('hotel_name', $_SESSION['user']); ?></h2>
				<div class="link">
				<a href="index.php"><?=HOME;?></a>
				<?php
				if(check_login())
				{
				?>
				<a discount="profile" class="profm">Profile</a>
				<a href="#menu"><?=SETTINGS;?></a>
				<?php
				}
				?>
				<a href="">Link</a>
				<a href="">Contact</a>
<?php
if(!check_login())
{
?>
				<a style="cursor: pointer;" onclick="javascript:openDialog();" discount="login" class="log-reg">Login/Register</a>
<?php
} else {
?>
<a href="logout.php"><?=LOGOUT;?></a>
<?php
}
?>

				</div>
			</div>
			
			<header>
				<div id="top">
<?php
if(check_login())
{
?>
					<div class="t">
						<div class="t1"><?php settings('hotel_name', $_SESSION['user']); ?></div>
						<div class="t2">Lorem ipsum dolor sit amet, consectetur adipiscingVivamus sit amet ligula non lectus cursus egestas. </div>
						<div class="t3">Read more ></div>
					</div>
<?php
}
?>
				</div>
</header>

				<div id="center">
					<div class="left">
					<div class="prof"></div>
<?php
if(check_login())
{
?>
						<li><a href="">home</a></li>
						<li><a href="">gallery</a></li>
						<li><a href="">about us</a></li>
<?php
} else {
?>
<li><a href="">home</a></li>
<li><a style="cursor: pointer;" onclick="javascript:openDialog();" discount="login" class="log-reg"><?=LOGREG;?></a></li>
<?php
}
?>
					</div>
					<div class="cent2">