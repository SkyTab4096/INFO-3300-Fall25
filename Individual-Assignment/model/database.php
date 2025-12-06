<?php
$dsn = 'mysql:host=localhost;dbname=gear_loan';
$user = 'phpuser';
$pass = 'pa55word';

try {
	$db = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
	$error_message = $e->getMessage();
	echo 'Error Message ' . $error_message;
	exit();
}