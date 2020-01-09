<?php

// VIEW OR EDIT DATA ===============================================================================================
	
	if( isset($_POST['accupdate']) ) {
		
?>	

<!-- PROFILE-FORM ===================================================================================== -->		

	<main class="main">
	<form method="post" action="useracc.php">
		<p>

			<div class="input-container-account">
				<label for="accfname" class="container-acc"><b>Körpergröße:</b></label>
					<input class="input-field" type="text" value="<?= $sel[0]['height']; ?>" 
						   name="accheight" id="accheight"> cm
			</div>
			
			<div class="input-container-account">
				<label for="accfname" class="container-acc"><b>Affenindex:</b></label>
					<input class="input-field" type="text" value="<?= $sel[0]['apeindex']; ?>" 
						   name="accapeindex" id="accapeindex">
			</div>
			
			<div class="input-container-account">
				<label for="acclname" class="container-acc"><b>Klettergrad:</b></label>
					<input class="input-field" type="text" value="<?= $sel[0]['climbingscore']; ?>" 
						   name="accclimbingscore" id="accclimbingscore">
			</div>
			
			<hr>
			<br>

			<div class="input-container-account">
				<label for="accpswd" class="container-acc"><b>Bestätige Änderungen mit deinem Passwort:</b></label>
					<input class="input-field" type="password" placeholder="Passwort" 
						   name="accpswd" id="accpswd" required>
			</div>

			<input type="hidden" name="accformupdate" id="accformupdate" value="accformupdate">

			<button type="submit" class="registerbtn">Bestätigen</button>
		</p>
	</form>
	</main>

<?php	
	} elseif ( isset($sel[0]['profileid']) ) {
?>
	
	<main class="main">
	
		<p>

			<div class="input-container-account">
				<label for="accfname" class="container-acc"><b>Körpergröße:</b></label>
					<?= $sel[0]['height']; ?> cm
			</div>
			
			<div class="input-container-account">
				<label for="accfname" class="container-acc"><b>Affenindex:</b></label>
					<?= $sel[0]['apeindex']; ?>
			</div>
			
			<div class="input-container-account">
				<label for="acclname" class="container-acc"><b>Klettergrad:</b></label>
					<?= $sel[0]['climbingscore']; ?>
			</div>
			
		</p>
	
	</main>

<?php	
	} else {
?>

	<main class="main">
	<form method="post" action="useracc.php">
		<p>
		
			<h2> Vervollständige dein Profil:</h2>
		
			<div class="input-container-account">
				<label for="accfname" class="container-acc"><b>Körpergröße:</b></label>
					<input class="input-field" type="text" value="" 
						   name="accheight" id="accheight"> cm
			</div>
			
			<div class="input-container-account">
				<label for="accfname" class="container-acc"><b>Affenindex:</b></label>
					<input class="input-field" type="text" value="" 
						   name="accapeindex" id="accapeindex">
			</div>
			
			<div class="input-container-account">
				<label for="acclname" class="container-acc"><b>Klettergrad:</b></label>
					<input class="input-field" type="text" value="" 
						   name="accclimbingscore" id="accclimbingscore">
			</div>
			
			<hr>
			<br>

			<div class="input-container-account">
				<label for="accpswd" class="container-acc"><b>Bestätige mit deinem Passwort:</b></label>
					<input class="input-field" type="password" placeholder="Passwort" 
						   name="accpswd" id="accpswd" required>
			</div>

			<input type="hidden" name="accforminsert" id="accforminsert" value="accforminsert">

			<button type="submit" class="registerbtn">Bestätigen</button>
		</p>
	</form>
	</main>
<?php	
	}
?>
