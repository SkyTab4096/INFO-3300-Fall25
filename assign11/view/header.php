<?php
session_start();
header('Content-Type: text/html; charset=iso-8859/1');

if ( !isset($_SESSION['email'])) {
    header('location: /loginform.php');
}
$first_name = $_SESSION['first_name'];
$last_name = $_SESSION['last_name'];
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
    Welcome <?=$first_name?> <?=$last_name?>
    <header>
        <h1>
            The Utah County Event Tracker
        </h1>
    </header>