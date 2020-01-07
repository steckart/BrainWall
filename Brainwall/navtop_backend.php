<!-- TOP-NAVIGATION BACKEND ============================================================================================ -->

		<nav id="topnav">
			<ul>
				<li>
					<a href="index.php" title="Home" id="home">Startseite</a>
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
					<a href="#"
				       title="User"
					   id="user"
					   class="right">Benutzer</a>
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