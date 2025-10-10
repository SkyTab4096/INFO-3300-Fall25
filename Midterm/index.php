<?php 
session_start();
$user_guess_display = "";
$actual_direction_display = "";
$result = "";

if (isset($_SESSION["user_guess"])) {
    $user_guess_display = "Your guess was " . $_SESSION["user_guess"] . "<br>";
}

if (isset($_SESSION["actual_direction"])) {
    $actual_direction_display = "The actual direction was " . $_SESSION["actual_direction"] . "<br>";
}

if ($user_guess_display != "" && $actual_direction_display != "") {
    if ($_SESSION["user_guess"] == $_SESSION["actual_direction"]) {
        $result = "<div id='result'>Way to go, you guessed it!</div>";
    } else {
        $result = "<div id='result'>Good try, do you want to try again?</div>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>RoboMovers</title>
</head>
<body>
    <h1>Guess the robot's movement (left or right)</h1>
    <div id="page_content">
        <form id="guessForm" action="move.php" method="get">
            <?php echo $user_guess_display ?>
            <?php echo $actual_direction_display ?>
            <?php echo $result ?>
            <input name="guess" type="textbox">
            <button type="submit" value="Submit">Submit</button>
        </form>
    </div>
</body>
</html>