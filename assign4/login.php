<?php
if (isset($_POST["username"])) {
    $user = $_POST['username'];
}
if (isset($_POST['password'])) {
    $password = $_POST['password'];
}
if (isset($_POST['stayLoggedIn'])) {
    $stayLoggedIn = $_POST['stayLoggedIn'];
} else {
    $stayLoggedIn = "off";
}

#if ($_SERVER["REQUEST_METHOD"] == "POST") {
#    if (isset($_POST['username'])) {
#        $user = $_POST['username'];
#    }
#    if (isset($_POST['password'])) {
#        $password = $_POST['password'];
#    }
#    if (isset($_POST['stayLoggedIn'])) {
#        $stayLoggedIn = $_POST['stayLoggedIn'];
#    }
#}

#$user = FILTER_INPUT(INPUT_POST, "username");
#$password = FILTER_INPUT(INPUT_POST, "password");
#$stayLoggedIn = FILTER_INPUT(INPUT_POST, "stayLoggedIn");

if ($user == "rock") {
    if ($password == "password") {
        if ($stayLoggedIn != "on") {
            #setcookie("loggedIn", TRUE, 0, "/");
            setcookie("user", $user, 0, "/");
            $page = "enterNums.php";
            session_start();
            header("Location: $page");
        } else {
            setcookie("loggedIn", true, time()+60*60*24*30, "/");
            $page = "enterNums.php";
            header("Location: $page");
        }
    } else {
        $e .= "Invalid Password";
    }
} else {
    $e .= "User not found";
}

?>

<body>
    <div class="errors">
    <?php if (isset($e)) {echo $e;} ?><br/>
    <a href="index.php">Return to login</a>
    </div>
</body>