<?php

if(!defined('DB_HOST')){ 

	define("DB_HOST", "localhost"); 

}

if(!defined('DB_DATABASE')){ 

	define("DB_DATABASE", "db_search_engine");

}

if(!defined('DB_USER')){ 

	define("DB_USER", "root"); 

}

if(!defined('DB_PASSWORD')){ 

	define("DB_PASSWORD", ""); 
	
}

$conn = new PDO("mysql:dbname=".DB_DATABASE.";host=".DB_HOST."", DB_USER, DB_PASSWORD);


?>