<?php
    include("header.php");
    $cookie = filter_input(INPUT_COOKIE, "user")
?>
<body>
    <?php if (!isset($cookie)) : ?>
        <div class="data_entry">
            <form method="POST" action="login.php">
                <span>Username: </span>
                <input class="textboxInput" type="text" width="3" id="username" name="username">
                <span>Password: </span>
                <input class="textboxInput" type="password" width="3" id="password" name="password">
                <input type="checkbox" id="stayLoggedIn" name="stayLoggedIn">
                <span>Stay logged in?</span>
                <input type="submit" value="Submit">
            </form>
        </div>
    <?php else : ?>
        <a href="enterNums.php">Click here to begin</a><br/>
        <a href="logout.php">Click here to logout</a>
    <?php endif ?>
</body>