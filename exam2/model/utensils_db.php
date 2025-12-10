<?php
require 'database.php';

function get_utensils() {
	global $db;
	$query = 'SELECT utensil_name, utensil_description, utensil_type, utensil_year_purchased FROM utensils';
	$statement = $db->prepare($query);
	$statement->execute();
	$utensils = $statement->fetchAll();
	$statement->closeCursor();
	return $utensils;
}

function get_utensil_types() {
	global $db;
	$query = 'SELECT DISTINCT utensil_type FROM utensils';
	$statement = $db->prepare($query);
	$statement->execute();
	$utensil_types = $statement->fetchAll();
	$statement->closeCursor();
	$utensilTypes = [];
	foreach ($utensil_types as $array) {
		foreach ($array as $utensil_type) {
			if (!in_array($utensil_type, $utensilTypes)) {
				$utensilTypes[] = $utensil_type;
			}
		}
	}
	return $utensilTypes;
}

function add_utensil($utensil_name, $utensil_description, $utensil_type, $utensil_year_purchased) {
	global $db;
	$query = 'INSERT INTO utensils (utensil_name, utensil_description, utensil_type, utensil_year_purchased) VALUES (:utensil_name, :utensil_description, :utensil_type, :utensil_year_purchased)';
	$statement = $db->prepare($query);
	$statement->bindParam(':utensil_name', $utensil_name);
	$statement->bindParam(':utensil_description', $utensil_description);
	$statement->bindParam(':utensil_type', $utensil_type);
	$statement->bindParam(':utensil_year_purchased', $utensil_year_purchased);
	try {
		$statement->execute();
		$row_count = $statement->rowCount();
		$statement->closeCursor();
		return $row_count;
	} catch (PDOException $e) {
		$error_message = 'Error Message ' . $e->getMessage();
		echo($error_message);
		exit();
	}
}