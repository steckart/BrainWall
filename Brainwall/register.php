<?php
session_start();

?>
<!DOCTYPE html>

<html lang="de">
	<head>
	
		<meta charset="UTF-8">
		<title>BrainWall - Registrierung</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="expires" content="0">
		<link rel="stylesheet" type="text/css" href="css/style2.css">
		<link rel="stylesheet" text="text/css" href="fontawesome/css/all.min.css">
		<link rel="stylesheet" text="text/css" href="css/styleNav.css">
		<link rel="stylesheet" text="text/css" href="css/styleForm.css">
		<link rel="stylesheet" type="text/css" href="css/styles_home.css">
		<link rel="stylesheet" type="text/css" href="css/userMenu.css">
		
		<script src="js/script.js"></script>
		
	</head>
	
	<body>
	
	
	<?php require('navtop.php'); ?>
	<?php require('navfooter.php'); ?>
	
	
		<div id='idDivReg' class='divReg'>	
			<form action='user.php' method='post' onsubmit="return matchpass()">
				<div id="container">
				
					<h2>Registrierung</h2>
					
					<div class="input-container">
						<span class="fa fa-user icon"></span>
						<input class="input-field" type="text" placeholder="Benutzername" name="runame" id="runame" required>
					</div>

					<div class="input-container">
						<i class="fa fa-envelope icon"></i>
						<input class="input-field" type="email" placeholder="E-Mail" name="remail" id="remail" required>
					</div>
					
					<div class="input-container">
						<i class="fa fa-key icon"></i>
						<input class="input-field" type="password" placeholder="Passwort" name="rpswd" id="rpswd" pattern=".{8,}" required>
					</div>

					<div class="input-container">
						<i class="fa fa-key icon"></i>
						<input class="input-field" type="password" placeholder="Passwort wiederholen" name="rpswd-repeat" id="rpswd-repeat" pattern=".{8,}" required>
					</div>
					
					<div class="spantext">
					<span>Bei der Account-Erstellung akzeptierst du unsere <a href="terms.php">AGB & DSGVO</a>.</span>
					</div>
					<input type="hidden" name="rformname" id="rformname" value="register"><br>

					<button type="submit" id="regbutton" class="registerbtn" >Registrierung</button>

					
					<div class="spantext">	
					<span class="psw">Du hast bereits ein Account? <a href="login.php">Logge dich ein</a>.</span>
					</div>
				</div>
			</form> 
		</div>		
	</body>
	
	<footer>
		
	</footer>
	
</html> 