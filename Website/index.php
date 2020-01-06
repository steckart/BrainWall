<?php

// SESSION-START ===============================================================================================

	session_start();
	
	if( isset($_COOKIE['remember']) ) {
		header('Location: blog.php');
		exit;
	}
?>

<!-- HTML ====================================================================================================== -->

<!DOCTYPE html>
<html lang="de">

	<head>
		<meta charset="UTF-8">
		<title>BrainWall</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="expires" content="0">
		<link rel="stylesheet" type="text/css" href="src/css/styles.css">
		<script src="src/js/javascript.js"></script>
	</head>
	
	<body>
	
<!-- TOP-NAVIGATION ============================================================================================ -->

		<nav id="topnav">
			<ul>
				<li>
					<a href="index.php" title="Home" id="home" class="active">Startseite</a>
				</li>
				<li>
					<a href="locations.php" title="Hallenübersicht" id="locations">Hallen</a>
				</li>
				<li>
					<a href="routes.php" title="Routenübersicht" id="routes">Routen</a>
				</li>			
				<li>
					<a href="builders.php" title="Routensetzerübersicht" id="builders">Routensetzer</a>
				</li>				
				<li>
					<a href="register.php"
				       title="Register"
					   id="aregister"
					   class="right">Registrierung</a>
				</li>
				<li>
					<a href="login.php"
				       title="Login"
					   class="right">Anmeldung</a>
				</li>
			</ul>
		</nav>
		
<!-- FOOTER-NAVIGATION ========================================================================================= -->

		<footer id="footernav">
			<ul>			
				<li>
					<a href="legal.php" title="Legal" id="legal"
					   class="">Impressum</a>
				</li>
				<li>
					<a href="contact.php" title="Contact" id="contact"
					   class="">Kontakt</a>
				</li>
				<li>
					<a href="terms.php" title="Terms" id="terms"
					   class="">AGB & DSGVO</a>
				</li>
			</ul>
		</footer>
		
		
<!-- INDEX-MAIN CONTENT  ======================================================================================== -->
		
		<main id="index-main">
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
		</main>

	</body>
</html> 