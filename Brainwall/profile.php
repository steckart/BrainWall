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

?>	

<!-- SECTION: PROFILE-GRID =========================================== -->

	<div id="gridcontainer">
		<div id="avatar"> <img src="images/Avatar_Gray.jpg" alt="avatar"></div>
		<div id="username"><h2><?= $_COOKIE['Remember'] ?></h2></div>
		
		<div id="edit">
		<button type="submit" class="btn" onclick="return false;">Profil Ändern</button><br>
		<button type="submit" class="btn" onclick="return false;">Folgen</button>
		</div>
		
		<div id="profil-nav">
			<a href="profile.php">Profil</a> | <a href="personaldata.php">Persönliche Daten</a> | <a href="user_routes.php">Routen</a> | <a href="settings.php">Settings</a>  
		</div>
		
		<div id="profil">
			<?php require('forms/profile.form.php'); ?>
		</div>
	</div>



<!-- INCLUDING: FOOTER-NAVIGATION =========================================== -->

		<?php require('navfooter.php'); ?>


	</body>
</html>