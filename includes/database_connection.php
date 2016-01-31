<?php

$host = "localhost";
$user22 = "mohammad_script";
$pwd22 = "diablo2";
$db = "mohammad_script";
$conn = mysql_connect($host, $user22, $pwd22) or die(mysql_error());
$sell = mysql_select_db($db, $conn) or die(mysql_error());
?>