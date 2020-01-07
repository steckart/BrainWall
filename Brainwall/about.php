<!-- HTML ====================================================================================================== -->

<!DOCTYPE html>
<html lang="de">

	<head>
		<meta charset="UTF-8">
		<title>BrainWall - Über</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="expires" content="0">
		<link rel="stylesheet" type="text/css" href="css/styles_home.css">
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
		
<!-- INDEX-MAIN CONTENT  ======================================================================================== -->
		
		<main id="index-main">
			<h2>Über diese Seite</h2>
			<p>
				Hier erzählen wir etwas über dieses Datenbank & Websiteprojekt.
			</p>
		</main>

	</body>
</html> 