<!-- HTML ====================================================================================================== -->

<!DOCTYPE html>
<html lang="de">

	<head>
		<meta charset="UTF-8">
		<title>BrainWall</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="expires" content="0">
		<link rel="stylesheet" type="text/css" href="css/styles_home.css">
		<link rel="stylesheet" type="text/css" href="css/userMenu.css">
		<link rel="stylesheet" type="text/css" href="css/style2.css">

		<script src="js/javascript.js"></script>
	</head>
	
	<body>

<?php

// SESSION-START ===============================================================================================

	session_start();
	
	if( !isset($_COOKIE['Remember']) ) {
		require('navtop.php');
?>		
		<main id="index-main">
		<div class="divMainThread">
			
			<h2>Willkommen zu BrainWall !</h2>
			<p>
				Wenn du die Seite testen willst,<br>
				logge dich mit folgenden Logindaten ein:
			</p>
			
			<p>
			<table>
				<tr>
					<td>username:</td>
					<td><b>gast</b></td>
				</tr>
				<tr>
					<td>password:</td>
					<td><b>12345678</b></td>
				</tr>
			</table>
			</p>
			
		</div>
		</main>
<?php	
	}
	else {
		require('navtop_backend.php');
?>		
		<main id="index-main">
		<div class="divMainThread">
			<h2>Du bist eingeloggt!</h2>
			<p>
				Hier kannst du alles einsehen und gegebenfalls ändern.
			</p>
		</div>
		</main>
		
<?php
	}
?>
		
<!-- INCLUDING: FOOTER-NAVIGATION =========================================== -->

		<?php require('navfooter.php'); ?>
		
	</body>
</html> 