<?php
include('functions.php');
$keyword = $_POST['keyword'];
$price = $_POST['price'];
search($keyword, $price);
?>