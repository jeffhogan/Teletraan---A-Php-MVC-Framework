<?php

/************************
* SITEWIDE CONSTANTS
*************************/

/*define('SERVER_ROOT' , '/var/www/WEB_ROOT_FOLDER', TRUE);
define('SITE_ROOT' , 'http://localhost:8888/a1community', TRUE);
define('BASE_LIB', SITE_ROOT.'/library/class/', TRUE);*/

define("BASE_URL", "Your Base URL!", TRUE);
define("PUBLIC_SITE", BASE_URL . "/public_html", TRUE);
define("BASE_LIB", BASE_URL . "/library", TRUE);
define("BASE_CLASS", "/path-to-your-library/library" . "/class", TRUE);

/************************
* DATABASE CONFIGURATION
*************************/
$_INIT_DB[0] = array(
	"type" 	  => "mysql",
	"host"    => "localhost",
	"name"    => "",
	"user"    => "",
	"pass"    => "",
	"connect" => true
);
