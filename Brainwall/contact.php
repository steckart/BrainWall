<!-- HTML ====================================================================================================== -->

<!DOCTYPE html>
<html lang="de">

	<head>
		<meta charset="UTF-8">
		<title>BrainWall - Kontakt</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="expires" content="0">
		<link rel="stylesheet" type="text/css" href="css/styles_home.css">
		<link rel="stylesheet" type="text/css" href="css/style2.css">
		<link rel="stylesheet" type="text/css" href="css/userMenu.css">
		<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
		<script src="js/javascript.js"></script>
	</head>
	
	<body>
		
<?php

// SESSION-START ===============================================================================================

	session_start();
	
	if( !isset($_COOKIE['Remember']) ) {
		require('navtop.php');	
	}
	else {
		require('navtop_backend.php');
	}
?>
		
<!-- INCLUDING: FOOTER-NAVIGATION =========================================== -->

		<?php require('navfooter.php'); ?>	
		
<!-- MAIN CONTACT-FORM ============================================================================================ -->
		
		<main id="index-main">
		<div class="divMainThread">
			<h2>Kontakt</h2>
					
			<p>Du willst uns kontaktieren?<br>
			Schreib uns hier:</p>
		
			<div id="contactform">
				<form action="mailto:contact@brainwall.de" method="post" enctype="text/plain">
					<p>
						<label><b>Deine E-Mail*</b></label><br> 
						<input class="input-field" type="email" id="contemail" name="contemail"
						pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" size="30" required>
					</p>
					
					<p>
						<label><b>Deine Nachricht*</b></label><br>
						<textarea class="input-field" id="conttext" name="conttext" rows="10" required></textarea>
					</p>
					
					<p>
						<input type="checkbox" id="check1" name="check1" checked required>
						<label>Ich stimme der Übertragung meiner Daten zu.</label>
					</p>
					
					<p id="loginbtn">
						<button class="loginbtn" type="submit">Sende Nachricht</button>
					</p>
				</form>
			</div>
			
		</main>

	</body>
</html> 