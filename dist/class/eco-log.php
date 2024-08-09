<?php

class ECOLog {
	
	function Init(){

	}

	function Close(){

	}

    /**
 	* @param int $register_id The unique identifier of the log entry.
 	* @param string $title The title or description of the event.
 	* @param string $hostname The hostname or server where the event occurred.
 	* @param string $ip_address The IP address associated with the event.
 	* @param string $severity_level The severity level of the event (e.g., INFO, WARNING, ERROR).
 	* @param string $source The source of the event (e.g., software component, service, application).
 	* @param string $date The date and time when the event occurred.
 	* @param string $path_file The path to the file where the log will be saved.
 	* @return void
 	**/
    function Add($register_id, $title, $hostname, $ip_address, $severity_level, $source, $date, $path_file){

    }
    
    /**
 	* @param string $path_file The path to the file where the log will be saved.
 	* @return void
 	**/
    function Delete($path_file){

    }
    
    /**
 	* @param string $path_file The path to the file where the log will be saved.
 	* @return void
 	**/
    function Clear($path_file){

    }

}

?>