<?php
require 'database.php';

function get_gear() {
	global $db;
	$query = 'SELECT gear_id, gear_name, gear_description, gear_category, gear_manufacturer FROM gear;';
	$statement = $db->prepare($query);
	$statement->execute();
	$gear = $statement->fetchAll();
	$statement->closeCursor();
	return $gear;
}

function add_gear($gear_name, $gear_description, $gear_category, $gear_manufacturer) {
	global $db;
	$query = 'INSERT INTO gear (gear_name, gear_description, gear_category, gear_manufacturer) VALUES (:gear_name, :gear_description, :gear_category, :gear_manufacturer)';
	$statement = $db->prepare($query);
	$statement->bindParam(':gear_name', $gear_name);
	$statement->bindParam(':gear_description', $gear_description);
	$statement->bindParam(':gear_category', $gear_category);
	$statement->bindParam(':gear_manufacturer', $gear_manufacturer);
	try {
		$statement->execute();
		return $statement->rowCount();
	} catch (PDOException $e) {
		$error_message = 'Error Message ' . $e->getMessage();
		echo $error_message;
		exit();
	}
}

function get_gear_categories() {
	global $db;
	$query = 'SELECT DISTINCT gear_category FROM gear';
	$statement = $db->prepare($query);
	$statement->execute();
	$categories = $statement->fetchAll();
	$statement->closeCursor();
	return $categories;
}