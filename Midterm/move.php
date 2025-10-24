<?php
session_start();
$random = random_int(1,10);
$userGuess = filter_input(INPUT_GET, "guess", FILTER_SANITIZE_STRING);
if ($random < 6) {
    $direction = "left";
} else {
    $direction = "right";
}
$_SESSION["user_guess"] = $userGuess;
$_SESSION["actual_direction"] = $direction;

header("Location: index.php");