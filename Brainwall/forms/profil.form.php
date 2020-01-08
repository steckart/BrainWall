<!-- ACCOUNT-FORM ===================================================================================== -->		

<?php

// VIEW OR EDIT DATA ===============================================================================================
	
	if( $_COOKIE['Remember'] == $sel[0]['uname'] ) {
		
?>	
<main class="main">
	<form method="post" action="useracc.php">
		<p>
			<div class="input-container-account">
				<label for="accfname" class="container-acc"><b>Körpergröße:</b></label>
					<input class="input-field" type="text" value="<?= $sel[0]['height']; ?>" 
						   name="accheight" id="accheight">
			</div>
			
			<div class="input-container-account">
				<label for="accfname" class="container-acc"><b>Affenindex:</b></label>
					<input class="input-field" type="text" value="<?= $sel[0]['apeindex']; ?>" 
						   name="accapeindex" id="accapeindex">
			</div>
			
			<div class="input-container-account">
				<label for="acclname" class="container-acc"><b>Klettergrad:</b></label>
					<input class="input-field" type="text" value="<?= $sel[0]['degree']; ?>" 
						   name="accdegree" id="accdegree">
			</div>
			
			<hr>
			<br>

			<div class="input-container-account">
				<label for="accpswd" class="container-acc"><b>Bestätige die Änderungen mit deinem Passwort:</b></label>
					<input class="input-field" type="password" placeholder="Passwort" 
						   name="accpswd" id="accpswd" required>
			</div>

			<input type="hidden" name="accformname" id="accformname" value="accformname">

			<button type="submit" class="registerbtn">Bestätigen</button>
		</p>
	</form>
</main>

<?php	
	} else {
?>
	<main class="main">
		<p>
			<div class="input-container-account">
				<label for="accfname" class="container-acc"><b>Körpergröße:</b></label>
					<input class="input-field" type="text" value="<?= $sel[0]['titel']; ?>" 
						   name="accheight" id="accheight" disabled>
			</div>
			
			<div class="input-container-account">
				<label for="accfname" class="container-acc"><b>Affenindex:</b></label>
					<input class="input-field" type="text" value="<?= $sel[0]['fname']; ?>" 
						   name="accapeindex" id="accapeindex" disabled>
			</div>
			
			<div class="input-container-account">
				<label for="acclname" class="container-acc"><b>Klettergrad:</b></label>
					<input class="input-field" type="text" value="<?= $sel[0]['lname']; ?>" 
						   name="accdegree" id="accdegree" disabled>
			</div>
		</p>
	</main>

