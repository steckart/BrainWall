<?php

// VIEW OR EDIT DATA ===============================================================================================
	
	if( isset($_POST['accupdate']) ) {
		
?>		

<!-- PERSONAL DATA-FORM ===================================================================================== -->	
		
<main class="main">
	<form method="post" action="useracc.php">
		<p>
			
			<div class="input-container-account">
				<label for="accfname" class="container-acc"><b>Vorname:</b></label>
					<input class="input-field" type="text" value="<?= $sel[0]['first_name']; ?>" 
						   name="accfname" id="accfname">
			</div>
			
			<div class="input-container-account">
				<label for="acclname" class="container-acc"><b>Nachname:</b></label>
					<input class="input-field" type="text" value="<?= $sel[0]['last_name']; ?>" 
						   name="acclname" id="acclname">
			</div>

			<div class="input-container-account">
				<label for="accuname" class="container-acc"><b>Username:</b></label>					
					<input class="input-field" type="text" value="<?= $sel[0]['username']; ?>" 
						   name="accuname" id="accuname" disabled>
			</div>

			<div class="input-container-account">
				<label for="accemail" class="container-acc"><b>E-Mail:</b></label>
					<input class="input-field" type="text" value="<?= $sel[0]['email']; ?>" 
						   name="accemail" id="accemail">
			</div>
			
			<div class="input-container-account">
				<label for="accemail" class="container-acc"><b>Straße:</b></label>
					<input class="input-field" type="text" value="<?= $sel[0]['street'] . ', ' . $sel[0]['zip'] . ' ' . $sel[0]['location'] ; ?>" 
						   name="accaddress" id="accaddress">						   
			</div>
			
			<div class="input-container-account">
				<label for="accemail" class="container-acc"><b>Telefon:</b></label>
					<input class="input-field" type="text" value="<?= $sel[0]['phone']; ?>" 
						   name="acctelephone" id="acctelephone">
			</div>
			
			<div class="input-container-account">
				<label for="accemail" class="container-acc"><b>Geburtstag:</b></label>
					<input class="input-field" type="text" value="<?= $sel[0]['birthdate']; ?>" 
						   name="accage" id="accage">
			</div>
			
			<hr>
			<br>
			
			<div class="input-container-account">
				<label for="accpswd" class="container-acc"><b>Bestätige Änderungen mit deinem Passwort:</b></label>
					<input class="input-field" type="password" placeholder="Passwort" 
						   name="accpswd" id="accpswd" required>
			</div>

			<input type="hidden" name="accupdate" id="accupdate" value="accupdate">

			<button type="submit" class="registerbtn">Bestätigen</button>
		</p>
	</form>
</main>
		
<?php	
	} elseif ( isset($sel[0]['personalid']) ) {
?>
		
<main class="main">
		<p>			
			<div class="input-container-account">
				<label for="accfname" class="container-acc"><b>Vorname:</b></label>
					<?= $sel[0]['first_name']; ?>						  
			</div>
			
			<div class="input-container-account">
				<label for="acclname" class="container-acc"><b>Nachname:</b></label>
					<?= $sel[0]['last_name']; ?>
			</div>

			<div class="input-container-account">
				<label for="accuname" class="container-acc"><b>Username:</b></label>					
					<?= $sel[0]['username']; ?>
			</div>

			<div class="input-container-account">
				<label for="accemail" class="container-acc"><b>E-Mail:</b></label>
					<?= $sel[0]['email']; ?>
			</div>
			
			<div class="input-container-account">
				<label for="accemail" class="container-acc"><b>Adresse:</b></label>
					<?= $sel[0]['street'] . ', ' . $sel[0]['zip'] . ' ' . $sel[0]['location'] ; ?>						   
			</div>
			
			<div class="input-container-account">
				<label for="accemail" class="container-acc"><b>Telefon:</b></label>
					<?= $sel[0]['phone']; ?>
			</div>
			
			<div class="input-container-account">
				<label for="accemail" class="container-acc"><b>Geburtstag:</b></label>
					<?= $sel[0]['birthdate']; ?>
			</div>
			
			<!-- 
			
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
			
			-->
			
		</p>
	</form>
</main>

<?php	
	} else {
?>

<main class="main">
	<form method="post" action="useracc.php">
		<p>
				
			<h2> Vervollständige dein Profil:</h2>
			
			<div class="input-container-account">
				<label for="accfname" class="container-acc"><b>Vorname:</b></label>
					<input class="input-field" type="text" value="" 
						   name="accfname" id="accfname">
			</div>
			
			<div class="input-container-account">
				<label for="acclname" class="container-acc"><b>Nachname:</b></label>
					<input class="input-field" type="text" value="" 
						   name="acclname" id="acclname">
			</div>

			<div class="input-container-account">
				<label for="accuname" class="container-acc"><b>Username:</b></label>					
					<input class="input-field" type="text" value="<?= $sel[0]['username']; ?>" 
						   name="accuname" id="accuname" disabled>
			</div>

			<div class="input-container-account">
				<label for="accemail" class="container-acc"><b>E-Mail:</b></label>
					<input class="input-field" type="text" value="<?= $sel[0]['email']; ?>" 
						   name="accemail" id="accemail">
			</div>
			
			<div class="input-container-account">
				<label for="accemail" class="container-acc"><b>Adresse:</b></label>
					<input class="input-field" type="text" value="" 
						   name="accaddress" id="accaddress">						   
			</div>
			
			<div class="input-container-account">
				<label for="accemail" class="container-acc"><b>Telefon:</b></label>
					<input class="input-field" type="text" value="" 
						   name="acctelephone" id="acctelephone">
			</div>
			
			<div class="input-container-account">
				<label for="accemail" class="container-acc"><b>Geburtstag:</b></label>
					<input class="input-field" type="text" value="" 
						   name="accage" id="accage">
			</div>
			
			<hr>
			<br>
			
			<div class="input-container-account">
				<label for="accpswd" class="container-acc"><b>Bestätige Änderungen mit deinem Passwort:</b></label>
					<input class="input-field" type="password" placeholder="Passwort" 
						   name="accpswd" id="accpswd" required>
			</div>

			<input type="hidden" name="accupdate" id="accupdate" value="accupdate">

			<button type="submit" class="registerbtn">Bestätigen</button>
		</p>
	</form>
</main>

<?php	
	}
?>
			