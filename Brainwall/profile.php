<?php
session_start();

?>
<!DOCTYPE html>

<html lang="de">
	<head>
		<meta charset="UTF-8">
		<title>Brainwall - Profil |</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="expires" content="0">
		<link rel="stylesheet" type="text/css" href="css/style2.css">
		<link rel="stylesheet" type="text/css" href="css/grid.css">
		<link rel="stylesheet" type="text/css" href="css/userMenu.css">
		<link rel="stylesheet" type="text/css" href="css/styles_home.css">
		<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	
		<script src="js/javascript.js"></script>
	</head>
	<body>

<?php

// SESSION-START ===============================================================================================

	/*session_start();
	
	if( !isset($_COOKIE['Remember']) ) {
		require('navtop.php');	
	}
	else {*/
		require('navtop_backend.php');
		
		require('includes/dbparms.php');
		require('classes/class.db.php');

		$db = new Db($dbms, $host, $port, $dbname, $uname, $pword);
		$sel = $db->selectProfileDb('*', 'WHERE username="' . $_COOKIE['Remember'] . '"');

?>	

<!-- SECTION: PROFILE-GRID =========================================== -->

	<div id="gridcontainer">
		<div id="avatar"> <img src="images/Avatar_Gray.jpg" alt="avatar"></div>
		<div id="username"><h2><?= $_COOKIE['Remember'] ?></h2></div>
		
<?php
	if ( ( isset($sel[0]['profileid']) || isset($sel[0]['personalid']) ) && $_COOKIE['Remember'] == $sel[0]['username'] && ( !isset($_POST['profupdate']) || !isset($_POST['personalupdate']) ) ) {
?>
		<form method="post" action="profile.php">
			<div id="edit">
<?php
		if ( @$_GET['s'] == 'profile' ) {
?>	
				<button type="submit" class="btn">Profil Ändern</button><br>
				<input type="hidden" name="profupdate" id="profupdate" value="profupdate">
<?php
		}
		if ( @$_GET['s'] == 'personaldata' ) {
?>
				<button type="submit" class="btn">Profil Ändern</button><br>
				<input type="hidden" name="personalupdate" id="personalupdate" value="personalupdate">
<?php
		}
?>
			</div>
		</form>
<?php
	}
	if ( $_COOKIE['Remember'] != $sel[0]['username'] ) {
?>		
		<form method="post" action="useracc.php">
			<div id="edit">
				<button type="submit" class="btn">Folgen</button>
				<input type="hidden" name="follow" id="follow" value="follow">
			</div>
		</form>
		
<?php
	}
?>
		
		<div id="profil-nav">
		
			<a href="profile.php?s=profile">Profil</a> | 
			<a href="profile.php?s=personaldata">Persönliche Daten</a> |
			<a href="profile.php?s=routes">Routen</a> | 
			<a href="profile.php?s=settings">Settings</a>

		</div>
		
		<div id="profil">
<?php
	if ( @$_GET['s'] == 'profile' || isset($_POST['profupdate']) ) {
		require('forms/profile.form.php');
	}
	elseif ( @$_GET['s'] == 'personaldata' || isset($_POST['personalupdate']) ) {
		require('forms/personaldata.form.php');
	}
	else {
		require('forms/profile.form.php');
	}
?>
		</div>
	</div>



<!-- INCLUDING: FOOTER-NAVIGATION =========================================== -->

		<?php require('navfooter.php'); ?>


	</body>
</html>