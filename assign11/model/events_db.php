<?php
require 'database.php';

function read_events() {
	global $db;
	$query = 'SELECT event_id, event_name, event_type, event_location, start_time, end_time, duration FROM events';
	$statement = $db->prepare($query);
	$statement->execute();
	$events = $statement->fetchAll();
	$statement->closeCursor();
	return $events;
}

function get_event_type() {
	global $db;
	$query = 'SELECT DISTINCT event_type FROM events';
	$statement = $db->prepare($query);
	$statement->execute();
	$event_type = $statement->fetchAll();
	$statement->closeCursor();
	return $event_type;
}

function get_event($event_id) {
	global $db;
	$query = 'SELECT event_id, event_name, event_type, event_location, start_time, end_time, duration FROM events WHERE event_id = :event_id';
	$statement = $db->prepare($query);
	$statement->bindParam(':event_id', $event_id);
	$statement->execute();
	$event = $statement->fetch();
	$statement->closeCursor();
	return $event;
}

function create_event($event_name, $event_type, $event_location, $start_time, $end_time, $duration) {
	global $db;
	$query = 'INSERT INTO events (event_name, event_type, event_location, start_time, end_time, duration) VALUES (:event_name, :event_type, :event_location, :start_time, :end_time, :duration)';
	$statement = $db->prepare($query);
	$statement->bindParam(':event_name', $event_name);
	$statement->bindParam(':event_type', $event_type);
	$statement->bindParam(':event_location', $event_location);
	$statement->bindParam(':start_time', $start_time);
	$statement->bindParam(':end_time', $end_time);
	$statement->bindParam(':duration', $duration);
	try {
		$statement->execute();
		return $statement->rowCount();
	} catch (PDOException $e) {
		$error_message = 'Error Message ' . $e->getMessage();
		echo $error_message;
		exit();
	}
}

function update_event($event_id, $event_name, $event_type, $event_location, $start_time, $end_time, $duration) {
	global $db;
	$query = 'UPDATE events SET event_name=:event_name, event_type=:event_type, event_location=:event_location, start_time=:start_time, end_time=:end_time, duration=:duration WHERE event_id=:event_id;';
	$statement = $db->prepare($query);
	$statement->bindParam(':event_name', $event_name);
	$statement->bindParam(':event_type', $event_type);
	$statement->bindParam(':event_location', $event_location);
	$statement->bindParam(':start_time', $start_time);
	$statement->bindParam(':end_time', $end_time);
	$statement->bindParam(':duration', $duration);
	$statement->bindParam(':event_id', $event_id);
	try {
		$statement->execute();
		return $statement->rowCount();
	} catch (PDOException $e) {
		$error_message = 'Error Message ' . $e->getMessage();
		echo $error_message;
		exit();
	}
}

function delete_event($event_id) {
	global $db;
	$query = 'DELETE FROM events WHERE event_id = :event_id;';
	$statement = $db->prepare($query);
	$statement->bindParam(':event_id', $event_id);
	try {
		$statement->execute();
		return $statement->rowCount();
	} catch (PDOException $e) {
		$error_message = 'Error Message ' . $e->getMessage();
		echo $error_message;
		exit();
	}
}