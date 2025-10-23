<?php
    require("database.php");

    function get_users() {
        global $db;
        $sql = 'SELECT firstName, lastName, email FROM users';
        $statement = $db->prepare($sql);
        $statement->execute();
        $users = $statement->fetchAll();
        $statement->closeCursor();
        return $users;
    }

    function login($email, $password) {
        global $db;
        $sql = 'SELECT userId, firstName, lastName, email
                FROM users
                WHERE email = :email AND password = md5(:password)';
        $statement = $db->prepare($sql);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':password', $password);
        $statement->execute();
        $user = $statement->fetch(PDO::FETCH_BOTH);
        $statement->closeCursor();
        return $user;
    }