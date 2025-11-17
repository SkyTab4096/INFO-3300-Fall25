<?php
session_start();
if ( isset($_SESSION['email'])) {
	header('location: /index.php');
}
$errors='';
$errors = filter_input(INPUT_GET, 'errors');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/styles.css" type="text/css">
	<title>The Utah County Event Tracker</title>
</head>
<body>
	<br/><br/>
	<form action="/users/index.php" method="post">
		Email: <input type="text" name="email" placeholder="Email" size="10">
		Password: <input type="password" name="password" placeholder="Password" size="10">
		<input type="hidden" name="action" value="login">
		<input type="submit" value="Submit">
		<div class="errors"><?=$errors?></div>
	</form>
<?php include 'view/footer.php';?>