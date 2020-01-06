<?php

// SESSION-START ===============================================================================================

	session_start();
	
	if( isset($_COOKIE['Remember']) ) {
		header('Location: jobs_backend.php');
		exit;
	}
?>

<!-- HTML ====================================================================================================== -->

<!DOCTYPE html>
<html lang="de">

	<head>
		<meta charset="UTF-8">
		<title>BrainWall - Jobs</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="expires" content="0">
		<link rel="stylesheet" type="text/css" href="css/styles_home.css">
		<script src="js/javascript.js"></script>
	</head>
	
	<body>
		
<!-- INCLUDING: TOP-NAVIGATION + FOOTER-NAVIGATION =========================================== -->

		<?php require('navtop.php'); ?>
		<?php require('navfooter.php'); ?>	
		
<!-- INDEX-MAIN CONTENT  ======================================================================================== -->
		
		<main id="index-main">
			<h2>Jobs</h2>
			<p>
				Hier findest du aktuelle Jobangebote.
			</p>
		</main>

	</body>
</html> 