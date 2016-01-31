<?php
$connection = mysql_connect('localhost', 'mohammad_script', 'diablo2');
$db = mysql_select_db('mohammad_script', $connection);
$term = strip_tags(substr($_POST['searchit'],0, 100));
$terms = $_POST['searchit']; // Attack Prevention
$price = $_POST['price'];

if($terms)
{
	$query = mysql_query("select * from users where name like '%$terms%'", $connection);
	$string = '';
}
if($price)
{
	$query = mysql_query("select * from users where prices like '{$price}%'", $connection);
	$string = '';
}

if($terms && $price)
{
	$query = mysql_query("select * from users where name like '%$terms%' and prices like '{$price}%'", $connection);
	$string = '';
}

if (mysql_num_rows($query)){
while($row = mysql_fetch_assoc($query)){
$string .= '<div class="left" id="left2">
		<div class="ntitle"><div class="nt">
		<span class="title"></span>
		<span class="auth"></span>
		</div></div>
		<div class="ptd">
			
			</div>
			<div class="ntext"><b>'.$row['name'].'</b> - ';
$string .= $row['email']."</a></div>
			</div>";
$string .= "<br/>\n";
}

}else{
$string = '';

}

echo $string;
?>