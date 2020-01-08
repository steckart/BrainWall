<!-- ACCOUNT-FORM ===================================================================================== -->		

<?php

// VIEW OR EDIT DATA ===============================================================================================
	
	if( $_COOKIE['Remember'] == $sel[0]['uname'] ) {
		
?>		
		
<main class="main">
	<form method="post" action="useracc.php">
		<p>
			<div class="input-container-account">
				<label for="accfname" class="container-acc"><b>Titel:</b></label>
					<input class="input-field" type="text" value="<?= $sel[0]['titel']; ?>" 
						   name="acctitel" id="acctitel">
			</div>
			
			<div class="input-container-account">
				<label for="accfname" class="container-acc"><b>Vorname:</b></label>
					<input class="input-field" type="text" value="<?= $sel[0]['fname']; ?>" 
						   name="accfname" id="accfname">
			</div>
			
			<div class="input-container-account">
				<label for="acclname" class="container-acc"><b>Nachname:</b></label>
					<input class="input-field" type="text" value="<?= $sel[0]['lname']; ?>" 
						   name="acclname" id="acclname">
			</div>

			<div class="input-container-account">
				<label for="accuname" class="container-acc"><b>Username:</b></label>					
					<input class="input-field" type="text" value="<?= $sel[0]['uname']; ?>" 
						   name="accuname" id="accuname" disabled>
			</div>

			<div class="input-container-account">
				<label for="accemail" class="container-acc"><b>E-Mail:</b></label>
					<input class="input-field" type="text" value="<?= $sel[0]['email']; ?>" 
						   name="accemail" id="accemail">
			</div>
			
			<div class="input-container-account">
				<label for="accemail" class="container-acc"><b>Adresse:</b></label>
					<input class="input-field" type="text" value="<?= $sel[0]['address']; ?>" 
						   name="accaddress" id="accaddress">						   
			</div>
			
			<div class="input-container-account">
				<label for="accemail" class="container-acc"><b>Telefon:</b></label>
					<input class="input-field" type="text" value="<?= $sel[0]['telephone']; ?>" 
						   name="acctelephone" id="acctelephone">
			</div>
			
			<div class="input-container-account">
				<label for="accemail" class="container-acc"><b>Alter:</b></label>
					<input class="input-field" type="text" value="<?= $sel[0]['age']; ?>" 
						   name="accage" id="accage">
			</div>
			
			<div class="input-container-account">
				<label for="accemail" class="container-acc"><b>Geschlecht:</b></label>
					<input class="input-field" type="text" value="<?= $sel[0]['gender']; ?>" 
						   name="accaddress" id="accaddress">
			</div>
			
			<div class="input-container-account">
				<label for="accemail" class="container-acc"><b>Avatar:</b></label>
					<input class="input-field" type="text" value="<?= $sel[0]['avatar']; ?>" 
						   name="accavatar" id="accavatar">
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
				<label for="accfname" class="container-acc"><b>Titel:</b></label>
					<input class="input-field" type="text" value="<?= $sel[0]['titel']; ?>" 
						   name="acctitel" id="acctitel" disabled>
			</div>
			
			<div class="input-container-account">
				<label for="accfname" class="container-acc"><b>Vorname:</b></label>
					<input class="input-field" type="text" value="<?= $sel[0]['fname']; ?>" 
						   name="accfname" id="accfname" disabled>
			</div>
			
			<div class="input-container-account">
				<label for="acclname" class="container-acc"><b>Nachname:</b></label>
					<input class="input-field" type="text" value="<?= $sel[0]['lname']; ?>" 
						   name="acclname" id="acclname" disabled>
			</div>

			<div class="input-container-account">
				<label for="accuname" class="container-acc"><b>Username:</b></label>					
					<input class="input-field" type="text" value="<?= $sel[0]['uname']; ?>" 
						   name="accuname" id="accuname" disabled>
			</div>

			<div class="input-container-account">
				<label for="accemail" class="container-acc"><b>E-Mail:</b></label>
					<input class="input-field" type="text" value="<?= $sel[0]['email']; ?>" 
						   name="accemail" id="accemail" disabled>
			</div>
			
			<div class="input-container-account">
				<label for="accemail" class="container-acc"><b>Adresse:</b></label>
					<input class="input-field" type="text" value="<?= $sel[0]['address']; ?>" 
						   name="accaddress" id="accaddress" disabled>						   
			</div>
			
			<div class="input-container-account">
				<label for="accemail" class="container-acc"><b>Telefon:</b></label>
					<input class="input-field" type="text" value="<?= $sel[0]['telephone']; ?>" 
						   name="acctelephone" id="acctelephone" disabled>
			</div>
			
			<div class="input-container-account">
				<label for="accemail" class="container-acc"><b>Alter:</b></label>
					<input class="input-field" type="text" value="<?= $sel[0]['age']; ?>" 
						   name="accage" id="accage" disabled>
			</div>
			
			<div class="input-container-account">
				<label for="accemail" class="container-acc"><b>Geschlecht:</b></label>
					<input class="input-field" type="text" value="<?= $sel[0]['gender']; ?>" 
						   name="accaddress" id="accaddress" disabled>
			</div>
			
			<div class="input-container-account">
				<label for="accemail" class="container-acc"><b>Avatar:</b></label>
					<input class="input-field" type="text" value="<?= $sel[0]['avatar']; ?>" 
						   name="accavatar" id="accavatar" disabled>
			</div>
			
		</p>
	</form>
</main>

<?php	
	}
?>
			