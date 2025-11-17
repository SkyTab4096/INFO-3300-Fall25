<?php
require 'database.php';

function get_calendar_entries($user_id) {
	global $db;
	$query = 'SELECT e.event_id, event_name, start_time, event_type, event_location, duration, attend_probability FROM events e JOIN calendars c on e.event_id = c.event_id WHERE c.user_id = :user_id';
	$statement = $db->prepare($query);
	$statement->bindParam(':user_id', $user_id);
	$statement->execute();
	$calendars = $statement->fetchAll();
	$statement->closeCursor();
	return $calendars;
}

function get_event_info($event_id) {
	global $db;
	$query = 'SELECT event_id, event_name, event_type, event_location, start_time, duration FROM events WHERE event_id = :event_id';
	$statement = $db->prepare($query);
	$statement->bindParam(':event_id', $event_id);
	$statement->execute();
	$event = $statement->fetch();
	$statement->closeCursor();
	return $event;
}

function get_event_plan($event_id, $user_id) {
	global $db;
	$query = 'SELECT e.event_id, event_name, start_time, event_type, event_location, duration, attend_probability FROM events e JOIN calendars c on e.event_id = c.event_id WHERE e.event_id = :event_id and c.user_id = :user_id';
	$statement = $db->prepare($query);
	$statement->bindParam(':event_id', $event_id);
	$statement->bindParam(':user_id', $user_id);
	$statement->execute();
	$event = $statement->fetch();
	$statement->closeCursor();
	return $event;
}

function add_to_calendar($event_id, $user_id, $probability) {
	global $db;
	$query1 = 'SELECT calendar_id FROM calendars WHERE event_id = :event_id and user_id = :user_id';
	$statement1 = $db->prepare($query1);
	$statement1->bindParam(':event_id', $event_id);
	$statement1->bindParam(':user_id', $user_id);
	$statement1->execute();
	$already_in_calendar = $statement1->rowCount() > 0;
	$statement1->closeCursor();

	if (!$already_in_calendar) {
		$query2 = 'INSERT INTO calendars (user_id, event_id, attend_probability) VALUES (:user_id, :event_id, :probability)';
		$statement2 = $db->prepare($query2);
		$statement2->bindParam(':event_id', $event_id);
		$statement2->bindParam(':user_id', $user_id);
		$statement2->bindParam(':probability', $probability);
		$statement2->execute();
		return $statement2->rowCount();
	} else {
		return 0;
	}
}