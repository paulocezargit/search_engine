<?php

try {

	include("../../../config.php");
	include("../class/register.php");

	$register = new Register();

	@$name = $_POST["name"];
	@$url = $_POST["url"];
	@$description = $_POST["description"];
	@$keys = $_POST["keys"];

	if($register->Create($name, $url, $description, $keys)){

	} 

	echo '<script>window.location.href = "../../../manager.php";</script>';
	
} catch (Exception $e) {
	
}

?>