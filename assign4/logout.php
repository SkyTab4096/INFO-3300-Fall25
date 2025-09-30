<?php
session_start();
#setcookie('user','first',strtotime('-1 year'),'/');
setcookie('loggedIn','player',strtotime('-1 year'),'/');
session_destroy();
header('location:index.php');
?>