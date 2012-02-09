<?php 
/************************
* CORE
*************************/

/**
* Core class for Teletraan I
* @constructor
* @param {whatever} temporary tester constructor
*/
class Core {

	public $db = array();
	
	function __construct($_INIT_DB){
		
		/************************
		* INITIALIZE DBS
		* pass in the db array from config.php
		*************************/
        include_once("adodb5/adodb.inc.php");
		
		foreach($_INIT_DB as $key => $item){

			if($item["connect"] == true){

				$this->db[$key] = $this->dbConnect($item);				
			}
		}

	} //end __construct
	
	/**
	* Connect to the DB (uses ADODB)
	* @param array $num Iteration of _INIT_DB Array
	* @return obj Database connection object
	*/
	public function dbConnect($num){

		$dsn = $num["type"]."://".$num["user"].":".rawurlencode($num["pass"])."@".rawurlencode($num["host"])."/".$num["name"];

		return NewADOConnection($dsn);

	}	

}


