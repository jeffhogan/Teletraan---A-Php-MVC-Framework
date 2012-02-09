<?php 

/**
* Custom class to handle autoloading of needed classes. When a class is called for, php will use spl_autoload and use this class to look for its needed includes
* @param {class} the class php is looking for
* @return {class} the newly included class, on demand.
*/
class Autobot {
	
	function __construct($class) {

	
	}

	/**
	 * STATIC METHOD: attempts to find the class that php is looking for - ie called in another part of the app as $blah = new Blah()
	 *
	 * @return void
	 * @author 
	 **/
	public static function rollout($class) {

		//setup the path that php should start looking in for the needed class
		$path = BASE_CLASS . "/class." . strtolower($class) . ".php";

		echo $path;

		if (file_exists($path)) {
			
			require_once($path);

		} else {
			
			echo "Sometimes even the wisest of men and machines can be in error";
				
		}

	}

} //END of Class

?>