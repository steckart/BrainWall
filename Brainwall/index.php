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
	

		
<!-- INCLUDING: TOP-NAVIGATION + FOOTER-NAVIGATION =========================================== -->

		<?php require('navtop.php'); ?>
		<?php require('navfooter.php'); ?>
		
		
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