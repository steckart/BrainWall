<?php

// SESSION-START ===============================================================================================

	session_start();
	
	if( isset($_COOKIE['remember']) ) {
		header('Location: locations_backend.php');
		exit;
	}
?>

<!-- HTML ====================================================================================================== -->

<!DOCTYPE html>
<html lang="de">

	<head>
		<meta charset="UTF-8">
		<title>BrainWall - Hallen</title>
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
			<h2>Hallen</h2>
			<p>
				Hier findest du aktuelle Boulder-Hallen.
			</p>
		</main>

	</body>
</html> 