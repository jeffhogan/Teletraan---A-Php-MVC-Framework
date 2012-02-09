<?php

/*
       	  _____        _____
        /|     |______|     |\
       / |     |\____/|     | \
    __|  |     |/ __ \|     |  |__
   /  |  |     | /  \ |     |  |  \
  / /| \ |     ||____||     | / |\ \
 / |_|  \|     |      |     |/  |_| |
 | |_|   |_____|______|_____|   |_| |
 | |_|  /  _____\____/_____  \  |_| |
 | |_| /__/_____\|  |/_____\__\ |_| |
 | |_||  | |     |  |     | |  ||_| |
 | |_||  | |     |  |     | |  ||_| |
 | |_||__| |     |__|     | |__||_| |
 | |_|\   \|     |__|     |/   /|_| |
 | |_| \___|    ______    |___/ |_| |
 | |_| |   |    \____/    |   | |_| |
 | |_| |   |      __      |   | |_| |
  \ \| |   ||            ||   | |/ /
   \_| |   | \          / |   | |_/
      \|   |\ \________/ /|   |/
       \___|-\|________|/-|___/

*/

/**
* Master Controller for Teletraan I
* jeffreyhogan - 102811
*/

/************************
* OUTPUT BUFFERING
* Super cool Caddell trick to manage page content
*************************/
ob_start();

/************************
* SESSION CONTROL
* Setup session control for user authentication, et all
*************************/
session_start();


require_once '../library/config/config.php';

require_once '../library/class/class.core.php';
$_core = new Core($_INIT_DB);

require_once '../library/class/class.autobot.php';

//Using a custom autoloader class to handle spl_autoload. We need to define a custom setup since spl_autoload uses a default implementation of __autoload() and we need a little more control
spl_autoload_register('Autobot::rollout');

/************************
* URL ROUTING and CONTROL
* TODO: splitting the request page on ? sucks..I like the class name in URL and split there. 
*************************/

//fetch the passed request
$request = $_SERVER['QUERY_STRING'];

//parse the page request and other GET variables
$parsed = explode('&' , $request);

//the page is the first element
$page = array_shift($parsed);

//the rest of the array are get statements, parse them out.
$getVars = array();

foreach ($parsed as $argument) {

    //split GET vars along '=' symbol to separate variable, values
    list($variable , $value) = explode('=' , $argument);

    $getVars[$variable] = $value;
}

/************************ TEST ***********************/

print "The page you requested is '$page'";
print '<br/>';
$vars = print_r($getVars, TRUE);
print "The following GET vars were passed to the page:<pre>".$vars."</pre>"; 

echo BASE_URL;
echo '<hr>';
echo PUBLIC_SITE;
echo '<hr>';
echo BASE_LIB;
echo '<hr>';
$_auth = new Auth("yay");
echo "<hr>";
echo "<pre>";
print_r($_SERVER);
echo "</pre>";