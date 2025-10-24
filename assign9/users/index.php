<?php
    session_start();
    require("../model/usersDb.php");
    $action = filter_input(INPUT_POST, 'action');
    if ( $action == NULL ) {
        $action = filter_input(INPUT_GET, 'action');
        if ($action == NULL) {
            $action = 'list_users';
        }
    }
    if ($action == 'list_users') {
        $users = get_users();
        include('usersList.php');
    } elseif ($action == 'login') {
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        
        $user = login($email, $password);

        if ($user == NULL) {
            header('Location:/loginForm.php?errors=Incorrect login credentials');
        } else {
            $_SESSION['email'] = $user['email'];
            $_SESSION['firstName'] = $user['firstName'];
            $_SESSION['lastName'] = $user['lastName'];
            $_SESSION['userId'] = $user['userId'];
            header('Location:/index.php');
        }
    }