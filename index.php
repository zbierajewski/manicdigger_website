<?php
// checking for minimum PHP version
if (version_compare(PHP_VERSION, '5.3.7', '<')) {
    exit("Sorry, Simple PHP Login does not run on a PHP version smaller than 5.3.7 !");
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
    // if you are using PHP 5.3 or PHP 5.4 you have to include the password_api_compatibility_library.php
    // (this library adds the PHP 5.5 password hashing functions to older versions of PHP)
    require_once("libraries/password_compatibility_library.php");
}

// include the configs / constants for the database connection
require_once("config/db.php");

// load the login class
require_once("classes/Login.php");

// create a login object. when this object is created, it will do all login/logout stuff automatically
$login = new Login();

if (isset($_GET["location"])) {
    $view_location = $_GET["location"];
} else {
    $view_location = 'index';
}

// display content corresponding to requested location
switch ($view_location) {
    case 'servers':
        $page_title = 'Servers';
        include("views/header.php");
        include("views/menu_bar.php");
        include("views/content_servers.php");
        break;
    case 'index':
    default:
        $page_title = 'Home';
        include("views/header.php");
        include("views/menu_bar.php");
        include("views/content_main.php");
        break;
}
include("views/footer.php");
