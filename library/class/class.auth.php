<?php

/************************
* AUTH
*************************/

/**
* Authorization class for Teletraan I
*/
class Auth {

	private $db;
	
	function __construct($var) {

		echo "<br>YAY GODDAMNIT YAY I SAID <br>";

		/**
		 * setup the database connection/connection type
		 */
        GLOBAL $_core;  
        $this->db = $_core->db[0];
        $this->db->SetFetchMode(ADODB_FETCH_ASSOC);


		$test = $this->db->GetAll("SELECT event, value FROM jhogan_glucose WHERE value='133'");
		echo '<pre>';
		print_r($test);
		echo '</pre>';

	}



} //end of CLASS
