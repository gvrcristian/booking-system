<?php
include('templates/boca/header.php');

if(isset($_GET['id']))
{
	$ies = $_GET['id'];
	
	echo fnews($ies);
} else {
	echo news(5);
}

include('templates/boca/footer.php');
?>