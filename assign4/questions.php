<?php
include "header.php"; 

session_start();

$cookie = FILTER_INPUT(INPUT_COOKIE, "loggedIn");
$cookiePerm = FILTER_INPUT(INPUT_COOKIE, "user");

if (isset($cookie) | isset($cookiePerm)) {
    $loggedIn = true;
} else {
    $loggedIn = false;
}

if (isset($_POST["num1"])) {
    $num1 = $_POST["num1"];
}
if (isset($_POST["num2"])) {
    $num2 = $_POST["num2"];
}
if (isset($_POST["num3"])) {
    $num3 = $_POST["num3"];
}
if (isset($_POST["num4"])) {
    $num4 = $_POST["num4"];
}
if (isset($_POST["num5"])) {
    $num5 = $_POST["num5"];
}

$question = [];
$question[] = 'What was the third number?';
$question[] = 'If you added up your numbers, what would be the result?';
$question[] = 'If you multipled all your numbers, what would be the result?';
$question[] = 'What was the second number?';
$question[] = 'What was the fourth number?';

$questionAnswers = [];
$questionAnswers['What was the thrid number?'] = $num3;
$questionAnswers['If you added up your numbers, what would be the result?'] = $num1 + $num2 + $num3 + $num4 + $num5;
$questionAnswers['If you multipled all your numbers, what would be the result?'] = $num1 * $num2 * $num3 * $num4 * $num5;
$questionAnswers['What was the second number?'] = $num2;
$questionAnswers['What was the fourth number?'] = $num4;

$random1 = random_int(0,4);
$random2 = random_int(0,4);
while ($random1 == $random2) {
    $random2 = random_int(0,4);
}
$question1 = $question[$random1];
$question2 = $question[$random2];
$_SESSION['memeroAnswerOne'] = $questionAnswers[$question1];
$_SESSION['memeroAnswerTwo'] = $questionAnswers[$question2];

?>

<body>
    <?php if ($loggedIn == true ) : ?>
        <div class="data_entry">
            <form method="post" action="result.php">
                <span><?php echo $question1 ?></span>
                <input type="text" class="textboxInput" name="answer1"><br/>
                <span><?php echo $question2 ?></span>
                <input type="text" class="textboxInput" name="answer2"><br/>
                <input type="submit" value="Submit">
            </form>
        </div>
    <?php else : ?>
        <?php header("Location: index.php"); ?>
    <?php endif ?>
</body>