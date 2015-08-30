<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
	if ($login->errors) {
		foreach ($login->errors as $error) {
			echo $error;
		}
	}
	if ($login->messages) {
		foreach ($login->messages as $message) {
			echo $message;
		}
	}
}
?>
		<div class="header">
			<div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
				<div class="header-login">
					<form id="login" action="index.php" class="pure-form" method="post">
						<fieldset>
							<input class="pure-input-1-5" name="user_name" type="text" placeholder="Username" />
							<input class="pure-input-1-5" name="user_password" type="password" placeholder="Password" />
							<button type="submit" name="login" class="pure-button bg-success">Sign in</button>
							<a href="./register.php" class="pure-button">Register</a>
							<!-- <label for="rememberme">
								<input name="rememberme" type="checkbox" /> Remember me
							</label> -->
						</fieldset>
					</form>
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
