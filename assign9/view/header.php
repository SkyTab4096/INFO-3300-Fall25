<?php 
if ( !isset($_SESSION['email'])) {
    header('location:loginForm.php');
}
$firstName = $_SESSION['firstName'];
$lastName = $_SESSION['lastName'];
?>
<!DOCTYPE html>
<html>
    <!--the head section-->
    <head>
        <title>The Book Loan System</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        Welcome <?=$firstName?> <?=$lastName?>
        <header><h1>The Book Loan System</h1></header>