<?php
include('functions.php');
$email = addslashes(trim($_POST['email']));
$password = addslashes(trim($_POST['password']));

login($email, $password);