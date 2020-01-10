<?php

// VIEW OR EDIT DATA ===============================================================================================
	
	if( isset($_POST['personalupdate']) ) {
		
?>		

<!-- PERSONAL DATA-FORM ===================================================================================== -->	
		
<main class="main-profile">
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
				<label for="accemail" class="container-acc"><b>Adresse:</b></label>
					<input class="input-field" type="text" value="<?= $sel[0]['street']; ?>" 
						   name="accaddress" id="accaddress">						   
			</div>
			
			<div class="input-container-account">
				<label for="accemail" class="container-acc"><b>Postleitzahl:</b></label>
					<input class="input-field" type="text" value="<?= $sel[0]['zip']; ?>" 
						   name="acczip" id="acczip">						   
			</div>
			
			<div class="input-container-account">
				<label for="accemail" class="container-acc"><b>Ort:</b></label>
					<input class="input-field" type="text" value="<?= $sel[0]['location']; ?>" 
						   name="acclocation" id="acclocation">						   
			</div>
			
			<div class="input-container-account">
				<label for="accemail" class="container-acc"><b>Telefon:</b></label>
					<input class="input-field" type="text" value="<?= $sel[0]['phone']; ?>" 
						   name="accphone" id="accphone">
			</div>
			
			<div class="input-container-account">
				<label for="accemail" class="container-acc"><b>Geburtstag:</b></label>
					<input class="input-field" type="text" value="<?= date('d.m.Y', strtotime($sel[0]['birth_date'])); ?>" 
						   name="accbday" id="accbday">
			</div>
			
			<hr>
			<br>
			
			<div class="input-container-account">
				<label for="accpswd" class="container-acc"><b>Bestätige Änderungen mit deinem Passwort:</b></label>
					<input class="input-field" type="password" placeholder="Passwort" 
						   name="accpswd" id="accpswd" required>
			</div>

			<input type="hidden" name="personalupdate" id="personalupdate" value="personalupdate">

			<button type="submit" class="registerbtn">Bestätigen</button>
		</p>
	</form>
</main>
		
<?php	
	} elseif ( isset($sel[0]['personalid']) ) {
?>
		
<main class="main-profile">
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
				<label for="accemail" class="container-acc"><b>Adresse:</b></label>
					<?= $sel[0]['street']; ?>						   
			</div>
						
			<div class="input-container-account">
				<label for="accemail" class="container-acc"><b>Postleitzahl:</b></label>
					<?= $sel[0]['street']; ?>						   
			</div>
						
			<div class="input-container-account">
				<label for="accemail" class="container-acc"><b>Ort:</b></label>
					<?= $sel[0]['zip']; ?>						   
			</div>
			
			<div class="input-container-account">
				<label for="accemail" class="container-acc"><b>Telefon:</b></label>
					<?= $sel[0]['phone']; ?>
			</div>
			
			<div class="input-container-account">
				<label for="accemail" class="container-acc"><b>Geburtstag:</b></label>
					<?= date('d.m.Y', strtotime($sel[0]['birth_date'])); ?>
			</div>
			
		</p>
	</form>
</main>

<?php	
	} else {
?>

<main class="main-profile">
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
				<label for="accemail" class="container-acc"><b>Adresse:</b></label>
					<input class="input-field" type="text" value="" 
						   name="accaddress" id="accaddress">						   
			</div>
			
			<div class="input-container-account">
				<label for="accemail" class="container-acc"><b>Postleitzahl:</b></label>
					<input class="input-field" type="text" value="" 
						   name="acczip" id="acczip">						   
			</div>
			
			<div class="input-container-account">
				<label for="accemail" class="container-acc"><b>Ort:</b></label>
					<input class="input-field" type="text" value="" 
						   name="acclocation" id="acclocation">						   
			</div>
			
			<div class="input-container-account">
				<label for="accemail" class="container-acc"><b>Telefon:</b></label>
					<input class="input-field" type="text" value="" 
						   name="accphone" id="accphone">
			</div>
			
			<div class="input-container-account">
				<label for="accemail" class="container-acc"><b>Geburtstag:</b></label>
					<input class="input-field" type="text" value="" 
						   name="accbday" id="accbday">
			</div>
			
			<hr>
			<br>
			
			<div class="input-container-account">
				<label for="accpswd" class="container-acc"><b>Bestätige Änderungen mit deinem Passwort:</b></label>
					<input class="input-field" type="password" placeholder="Passwort" 
						   name="accpswd" id="accpswd" required>
			</div>

			<input type="hidden" name="personalinsert" id="personalinsert" value="personalinsert">

			<button type="submit" class="registerbtn">Bestätigen</button>
		</p>
	</form>
</main>

<?php	
	}
?>
			