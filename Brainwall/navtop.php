<!-- TOP-NAVIGATION ============================================================================================ -->

		<nav id="topnav">
			<ul>
				<li>
					<a href="index.php" title="Startseite" id="home">Startseite</a>
				</li>
				<li>
					<a href="locations.php" title="Hallenübersicht" id="locations">Hallen</a>
				</li>
				<li>
					<a href="routes.php" title="Routenübersicht" id="routes">Routen</a>
				</li>			
				<li>
					<a href="builders.php" title="Routensetzerübersicht" id="builders">Routensetzer</a>
				</li>				
				<li>
					<a href="register.php"
				       title="Register"
					   id="aregister"
					   class="right">Registrierung</a>
				</li>
				<li>
					<a href="login.php"
				       title="Login"
					   class="right">Anmeldung</a>
				</li>
			</ul>
		</nav>

<script>
	for (var i = 0; i < document.links.length; i++) {
		if (document.links[i].href == document.URL) {
			document.links[i].className += ' active';
		}
	}
</script>