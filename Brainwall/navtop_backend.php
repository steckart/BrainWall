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
					<a href="affenindex.php" title="Affenindex" id="apeindex">Affenindex</a>
				</li>					
				<li class="dropdown">
					
					<a href="#" title="User" id="user">
					<div class="user-avatar">
						<img src="images/Avatar_Gray.jpg" alt="avatar" class="img-fluid">
					</div>
					<?= $_COOKIE['Remember']; ?></a>
					    <div class="dropdown-content">
							<a href="#">Profil</a>
							<a href="#">Personal Data</a>
							<a href="#">Routes</a>
							<a href="#">Settings</a>
							<a href="logout.php">Log Out</a>
						</div>
						
					
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