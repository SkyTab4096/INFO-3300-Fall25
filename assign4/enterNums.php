<?php
include "header.php"; 

$cookie = FILTER_INPUT(INPUT_COOKIE, "loggedIn");
$cookiePerm = FILTER_INPUT(INPUT_COOKIE, "user");

if (isset($cookie) | isset($cookiePerm)) {
    $loggedIn = true;
}

?>
<body>
    <?php if ($loggedIn == true) : ?>
        <div class="data_entry">
            <form method="POST" action="questions.php">
                <span>Number 1:</span>
                <input type="text" name="num1" class="textboxInput"><br/>
                <span>Number 2:</span>
                <input type="text" name="num2" class="textboxInput"><br/>
                <span>Number 3:</span>
                <input type="text" name="num3" class="textboxInput"><br/>
                <span>Number 4:</span>
                <input type="text" name="num4" class="textboxInput"><br/>
                <span>Number 5:</span>
                <input type="text" name="num5" class="textboxInput"><br/>
                <input type="submit" value="Submit">
            </form>
        </div>
    <?php else : ?>
        <?php header("Location: index.php") ?>
    <?php endif ?>
</body>