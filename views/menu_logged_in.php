		<div class="header">
			<div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
				<div class="header-login pure-menu-heading">
					Logged in as: <b><?php echo $_SESSION['user_name']; ?></b> &mdash;
					<a href="index.php?logout">Logout</a>
				</div>
				<ul class="pure-menu-list">
					<li class="pure-menu-item pure-menu-selected"><a href="#" class="pure-menu-link">Home</a></li>
					<li class="pure-menu-item"><a href="http://forum.manicdigger.org/" class="pure-menu-link">Forum</a></li>
					<li class="pure-menu-item"><a href="http://wiki.manicdigger.org/" class="pure-menu-link">Wiki</a></li>
					<li class="pure-menu-item"><a href="http://mdgallery.strangebutfunny.net/" class="pure-menu-link">Gallery</a></li>
					<li class="pure-menu-item"><a href="./servers.php" class="pure-menu-link">Serverlist</a></li>
				</ul>
			</div>
		</div>
