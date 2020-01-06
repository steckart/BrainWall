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
		<link rel="stylesheet" type="text/css" href="src/css/styles.css">
		
		<script src="js/script.js"></script>
		
	</head>
	
	
	<?php require('navtop.php'); ?>
	<?php require('navfooter.php'); ?>
	
	
	
	
	<body>
		<div id="idDivLog" class='divLog'>
			<form action="user.php" method="post">
				<div id="container">
					
					<h2>BRAINWALL</h2>
					
						<div class="input-container" style="display:flex;">
							<span class="fa fa-user icon" ></span>
							<input class="input-field" type="text" placeholder="Benutzername" name="luname" id="luname" required>
						</div>
								
						
						<div class="input-container" style="display:flex;">
							<span class="fa fa-key icon"></span>
							<input class="input-field" type="password" placeholder="Passwort" name="lpswd" id="lpswd" pattern=".{8,}" required>
						</div>
						
						
						<button class="loginbtn" type="submit">Login</button>
						<div class="spantext">
						<label>
							<input type="checkbox" checked="checked" name="remember" id="remember"> angemeldet bleiben
						</label>
						</div>
						<br>
						<div class="spantext">	
							<span class="psw">Du hast noch kein Profil? Registriere dich <a href="register.php">hier</a>.</span><br><br>
							<span class="psw"><a href="forgpasswd.php">Passwort vergessen?</a></span>
						</div>
				</div>
			</form> 
		</div>
	</body>
	
	<footer>
		
	</footer>
	
</html> 