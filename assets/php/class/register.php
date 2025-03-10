<?php

class Register{
	
	function __construct(){
		
	}

	function Create($name, $url, $description, $keys) {

		try {

			$conn = new PDO("mysql:dbname=" . DB_DATABASE . ";host=" . DB_HOST, DB_USER, DB_PASSWORD);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$stmt = $conn->prepare("INSERT INTO tb_register (name, url, description, site_keys) VALUES (:NAME, :URL, :DESCRIPTION, :SITE_KEYS)");

			$stmt->bindValue(":NAME", $name);
			$stmt->bindValue(":URL", $url);
			$stmt->bindValue(":DESCRIPTION", $description);
			$stmt->bindValue(":SITE_KEYS", $keys);

			if ($stmt->execute()) {

				return ["status" => true, "message" => "Register created successfully."];

			} else {

				return ["status" => false, "message" => "Failed to create register."];

			}

		} catch (PDOException $e) {

			return ["status" => false, "message" => "Error: " . $e->getMessage()];

		}

	}

	function Edit($id_register, $name, $url, $description, $keys) {
		
		try {

			$conn = new PDO("mysql:dbname=" . DB_DATABASE . ";host=" . DB_HOST, DB_USER, DB_PASSWORD);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$stmt = $conn->prepare("UPDATE tb_register SET name = :NAME, url = :URL, description = :DESCRIPTION, site_keys = :SITE_KEYS WHERE id = :ID");

			$stmt->bindValue(":ID", $id_register, PDO::PARAM_INT);
			$stmt->bindValue(":NAME", $name);
			$stmt->bindValue(":URL", $url);
			$stmt->bindValue(":DESCRIPTION", $description);
			$stmt->bindValue(":SITE_KEYS", $keys);

			if ($stmt->execute()) {

				return ["status" => true, "message" => "Register updated successfully."];

			} else {

				return ["status" => false, "message" => "Failed to update register."];

			}

		} catch (PDOException $e) {

			return ["status" => false, "message" => "Error: " . $e->getMessage()];

		}

	}

	function Delete($id_register) {

		try {

			$conn = new PDO("mysql:dbname=" . DB_DATABASE . ";host=" . DB_HOST, DB_USER, DB_PASSWORD);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$stmt = $conn->prepare("DELETE FROM tb_register WHERE id = :ID");

			$stmt->bindValue(":ID", $id_register, PDO::PARAM_INT);

			if ($stmt->execute()) {

				return ["status" => true, "message" => "Site deleted successfully."];

			} else {

				return ["status" => false, "message" => "Failed to delete site."];

			}

		} catch (PDOException $e) {

			return ["status" => false, "message" => "Error: " . $e->getMessage()];

		}


	}


	function DeleteAll(){

		try {

			$conn = new PDO("mysql:dbname=" . DB_DATABASE . ";host=" . DB_HOST, DB_USER, DB_PASSWORD);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$stmt = $conn->prepare("DELETE FROM tb_register");

			if ($stmt->execute()) {

				return ["status" => true, "message" => "Site deleted successfully."];

			} else {

				return ["status" => false, "message" => "Failed to delete site."];

			}

		} catch (PDOException $e) {

			return ["status" => false, "message" => "Error: " . $e->getMessage()];

		}

	}

}

?>