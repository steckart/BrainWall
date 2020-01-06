<?php
session_start();
$_SESSION = [];
setcookie("Remember", "", time() - 3600);
setcookie("PHPSESSID", "" , time()-3600,"/");
header('Location:index.php');
exit;
?>