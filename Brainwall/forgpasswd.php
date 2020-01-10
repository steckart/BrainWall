<?php
session_start();

?>
<!DOCTYPE html>

<html lang="de">
	<head>
	
		<meta charset="UTF-8">
		<title>BRAINWALL</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="expires" content="0">
		<link rel="stylesheet" type="text/css" href="css/style2.css">
		<link rel="stylesheet" text="text/css" href="fontawesome/css/all.min.css">
		<link rel="stylesheet" text="text/css" href="css/styleNav.css">
		<link rel="stylesheet" text="text/css" href="css/styleForm.css">
		<link rel="stylesheet" type="text/css" href="css/styles_home.css">
		
		<script src="js/script.js"></script>
		
	</head>
	
	<body>
	
	
	<?php require('navtop.php'); ?>
	<?php require('navfooter.php'); ?>
	
	
	
		<div id="idDivForgotPswd" class="divForgotPswd">
			<form>
				<div id="container">
				
					<h2>Passwort vergessen?</h2>
					<p>Hiermit senden wir Ihnen ein temporäres Passwort</p>
					
					<div class="input-container">
						<span class="fa fa-user icon"></span>
						<input class="input-field" type="email" placeholder="E-mail" name="forgemail" id="forgemail" required>
					</div>
					
					<button class="loginbtn" type="submit">Senden</button>
				</div>
			</form>
		</div>
	</body>
	
	<footer>
		
	</footer>
	
</html> 