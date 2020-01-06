<div id="idDivLog" class='divLog'>
	<form action="user.php" method="post">
		<div id="container">
			<span onclick="document.getElementById('idDivLog').style.display='none'" class="close" title="Close">&times;</span>
			<h2>Login Form</h2>
			
				<div class="input-container" style="display:flex;">
					<span class="fa fa-user icon" ></span>
					<input class="input-field" type="text" placeholder="Benutzername" name="luname" id="luname" required>
				</div>
						
				
				<div class="input-container" style="display:flex;">
					<span class="fa fa-key icon"></span>
					<input class="input-field" type="password" placeholder="Passwort" name="lpswd" id="lpswd" pattern=".{8,}" required>
				</div>
				
				
				<button class="loginbtn" type="submit">Login</button>
				<div class="spantext">
				<label>
					<input type="checkbox" checked="checked" name="remember" id="remember"> angemeldet bleiben
				</label>
				</div>
				<br>
				<div class="spantext">	
					<span class="psw">Du hast noch kein Profil? Registriere dich <a onclick="document.getElementById('idDivLog').style.display='none', document.getElementById('idDivReg').style.display='block' " href="#">hier</a>.</span><br><br>
					<span class="psw"><a href="#" onclick="document.getElementById('idDivLog').style.display='none'; document.getElementById('idDivForgotPswd').style.display='block';">Passwort vergessen?</a></span>
				</div>
		</div>
	</form> 
</div>