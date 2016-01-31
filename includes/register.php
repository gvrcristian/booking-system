<?php
include('functions.php');
$name = addslashes(trim($_POST['name']));
$email = addslashes(trim($_POST['email']));
$password = addslashes(trim($_POST['password']));
$rpassword = addslashes(trim($_POST['rpassword']));
$lang = $_POST['lang'];

register($name, $email, $password, $rpassword, $lang);
?>
