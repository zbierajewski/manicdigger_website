<?php
require_once("../config/db.php");
require_once("../config/hash.php");
require_once("../classes/Server.php");
header('Content-type: text/plain');
function ServerPulse() {
	$server = new Server();

	//Get server address
	$server->setAddress($_SERVER['REMOTE_ADDR']);

	//Grab input
	if (isset($_REQUEST["port"])) {
		$server->setPort($_REQUEST["port"]);
	}
	if (isset($_REQUEST["name"])) {
		$server->setName($_REQUEST["name"]);
	}
	if (isset($_REQUEST["version"])) {
		$server->setVersion($_REQUEST["version"]);
	}
	if (isset($_REQUEST["fingerprint"])) {
		$server->setPrivateKey($_REQUEST["fingerprint"]);
	}
	if (isset($_REQUEST["max"])) {
		$server->setMaxClients($_REQUEST["max"]);
	}
	if (isset($_REQUEST["public"])) {
		$server->setPublic($_REQUEST["public"]);
	}
	if (isset($_REQUEST["passwordProtected"])) {
		$server->setPasswordProtected($_REQUEST["passwordProtected"]);
	}
	if (isset($_REQUEST["allowGuests"])) {
		$server->setAllowGuests($_REQUEST["allowGuests"]);
	}
	if (isset($_REQUEST["users"])) {
		$server->setUserCount($_REQUEST["users"]);
	}
	if (isset($_REQUEST["players"])) {
		$server->setUserList($_REQUEST["players"]);
	}
	if (isset($_REQUEST["motd"])) {
		$server->setMotd($_REQUEST["motd"]);
	}
	if (isset($_REQUEST["gamemode"])) {
		$server->setGameMode($_REQUEST["gamemode"]);
	}

	//Update (or create) server record
	return Server::updateServer($server);
}
try {
	echo ServerPulse();
} catch (Exception $e) {
	echo $e->getMessage();
}
