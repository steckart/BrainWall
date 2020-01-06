<?php
session_start();

include("includes/dbparms.php");
require('classes/class.db.php');
$db = new Db($dbms, $host, $port, $dbname, $username, $password);
$inhalt = "hello";


$selUname = $db->selectDbThread('uname, Text, t_date');
$forThread = [];
for ($i = 0; $i < count($selUname); $i++ ) {
 array_push($forThread, [$selUname[$i]['t_date'] . " <br><br> " . "<a href='profil.php'>" . $selUname[$i]['uname'] . "</a>"  => $selUname[$i]['Text']]);
}

$forThread = array_reverse($forThread);
$selThreadDate = $db->selectDbThread('t_date');

$selpost	= $db->selectDbPost('Text, Thread_ID, uname, p_date');

?>
<!DOCTYPE html>

<html lang="de">
	<head>
	
		<meta charset="UTF-8">
		<title>F:IT</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="expires" content="0">
		<link rel="stylesheet" type="text/css" href="css/style2.css">
		<link rel="stylesheet" text="text/css" href="fontawesome/css/all.min.css">
		<link rel="stylesheet" text="text/css" href="css/styleNav.css">
		<link rel="stylesheet" text="text/css" href="css/styleForm.css">
		
		<script src="js/script.js"></script>
		
	</head>
	
	<body>
		
		<?php 
			if(isset($_COOKIE['Remember'])){
				include 'tpl/navLog.tpl.php';
			} else {
				include 'tpl/navIndex.tpl.php';
			}
		?>
		<?php include 'tpl/head.tpl.php'; ?>
		<div class="divMainThread">
			<div class="divLogOrReg">
				<p>Bitte logge dich ein!</p>
				<button class="loginbtn" onclick="document.getElementById('idDivLog').style.display='block'" type="submit">Login</button>
			</div>
		</div>

		<?php include 'forms/login.form.php'; ?>
		<?php include 'forms/register.form.php'; ?>
		<?php include 'forms/forgotpswd.form.php'; ?>
		
	</body>
	
	<footer>
		<?php include 'tpl/foot.tpl.php'; ?>
	</footer>
	
</html> 