<?php
$aname = addslashes(trim($_POST['aname']));
$lang = addslashes(trim($_POST['lang']));

details_ch($aname, $lang);
?>