<?php
if(isset($_POST['submit']))
{
	echo '<div>'.$_POST['par'].'</div>';
	echo '<div>'.md5($_POST['par']).'</div>';
} else {
?>
<form action="" method="POST">
<input type="text" name="par" /><br />
<input type="submit" name="submit" value="Cript" />
</form>
<?php
}
?>