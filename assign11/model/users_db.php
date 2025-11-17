<?php
require 'database.php';

function get_users() {
	global $db;
	$query = 'SELECT user_id, first_name, last_name, email FROM users';
	$statement = $db->prepare($query);
	$statement->execute();
	$users = $statement->fetchAll();
	$statement->closeCursor();
	return $users;
}

function login($email, $password) {
	global $db;
	$query = 'SELECT user_id, first_name, last_name, email FROM users WHERE email = :email and password = md5(:password)';
	$statement = $db->prepare($query);
	
	$statement->bindParam(':email', $email);
	$statement->bindParam(':password', $password);

	$statement->execute();
	$user = $statement->fetch(PDO::FETCH_BOTH);
	return $user;
}