<div id='idDivReg' class='divReg'>	
	<form action='user.php' method='post'>
		<div id="container">
			<span onclick="document.getElementById('idDivReg').style.display='none'" class="close" title="Close">&times;</span>
			<h2>Register Form</h2>
			
			<div class="input-container">
				<span class="fa fa-user icon"></span>
				<input class="input-field" type="text" placeholder="Vorname" name="rfname" id="rfname" required>
			</div>

			<div class="input-container">
				<span class="fa fa-user icon"></span>
				<input class="input-field" type="text" placeholder="Nachname" name="rlname" id="rlname" required>
			</div>
			
			<div class="input-container">
				<span class="fa fa-user icon"></span>
				<input class="input-field" type="text" placeholder="Benutzername" name="runame" id="runame" required>
			</div>

			<div class="input-container">
				<i class="fa fa-envelope icon"></i>
				<input class="input-field" type="email" placeholder="E-Mail" name="remail" id="remail" required>
			</div>

			<div class="input-container">
				<i class="fa fa-key icon"></i>
				<input class="input-field" type="password" placeholder="Passwort" name="rpswd" id="rpswd" pattern=".{8,}" required>
			</div>

			<div class="input-container">
				<i class="fa fa-key icon"></i>
				<input class="input-field" type="password" placeholder="Passwort wiederholen" name="rpswd-repeat" id="pswd-repeat" pattern=".{8,}" required>
			</div>
			
			<div class="spantext">
			<span>By creating an account you agree to our <a href="termsprivacy.php">Terms & Privacy</a>.</span>
			</div>
			<input type="hidden" name="rformname" id="rformname" value="register"><br>

			<button type="submit" class="registerbtn">Register</button>

			
			<div class="spantext">	
			<span class="psw">Du hast bereits ein Account? <a onclick="document.getElementById('idDivReg').style.display='none', document.getElementById('idDivLog').style.display='block' " href="#">Logge dich ein</a>.</span>
			</div>
		</div>
	</form> 
</div>		