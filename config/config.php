<?php
$configDB = array();
$configDB["host"] 		= "wed1.mysql.database.azure.com";
$configDB["database"]	= "computer_store";
$configDB["username"] 	= "aovhau";
$configDB["password"] 	= "Hau@2005";
define("HOST", "wed1.mysql.database.azure.com");
define("DB_NAME", "computer_store");
define("DB_USER", "aovhau");
define("DB_PASS", "Hau@2005");
define('ROOT', dirname(dirname(__FILE__) ) );
//Thu muc tuyet doi truoc cua config; c:/wamp/www/lab/
define("BASE_URL", "http://".$_SERVER['SERVER_NAME']);//dia chi website
?>
