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

if (isset($_POST['answer1'])) {
    $answer1 = $_POST['answer1'];
}
if (isset($_POST['answer2'])) {
    $answer2 = $_POST['answer2'];
}


if (isset($_SESSION['memeroAnswerOne']) & isset($_SESSION['memeroAnswerTwo'])) {
    if ($_SESSION['memeroAnswerOne'] == $answer1 && $_SESSION['memeroAnswerTwo'] == $answer2) {
        $result = "Your a genius!!";
    } else {
        $result = "Keep trying";
    }
} else {
    $result = "Answer both questions";
}

?>

<body>
    <?php if ($loggedIn == true) : ?>
        <div class="data_entry">
            <span id="title" style="top: 0" style="margin-left: 5px"><b>
                <?php echo $result ?></b>
            </span>
        </div>
    <?php else : ?>
        <?php header("Location: index.php"); ?>
    <?php endif ?>
</body>