<?php
require "database.php";

function checkOutBook($user_id, $book_id){
    global $db;
    $query1 = 'SELECT book_id FROM checkouts WHERE book_id = :book_id';
    $statement1 = $db->prepare($query1);
    $statement1->bindParam(':book_id', $book_id);
    $statement1->execute();
    $statement1->fetch(PDO::FETCH_BOTH);
    $alreadyCheckedOut = $statement1->rowCount();
    $statement1->closeCursor();

    if (!$alreadyCheckedOut) {
        $query2 = 'INSERT INTO checkouts(user_id, book_id, checkout_date, due_date)
                   VALUES (:user_id, :book_id, now(), now() + INTERVAL 45 DAY)';
        $statement2 = $db->prepare($query2);
        $statement2->bindParam(':user_id', $user_id);
        $statement2->bindParam(':book_id', $book_id);
        $statement2->execute();
        return $statement2->rowCount();
    } else {
        return 0;
    }
}

function getBookInfo($book_id) {
    global $db;
    $query = 'SELECT b.book_id, b.title, b.authors, c.checkout_date, c.due_date FROM books b JOIN checkouts c ON b.book_id = c.book_id WHERE b.book_id = :book_id';
    $statement = $db->prepare($query);
    $statement->bindParam(':book_id', $book_id);
    $statement->execute();
    $book = $statement->fetch(PDO::FETCH_BOTH);
    $statement->closeCursor();
    return $book;
}

function getCheckedOutBooks($user_id) {
    global $db;
    $query = 'SELECT b.book_id, b.title, b.authors, c.checkout_date, c.due_date FROM books b JOIN checkouts c ON b.book_id = c.book_id JOIN users u ON c.user_id = u.userId WHERE u.userId = :user_id';
    $statement = $db->prepare($query);
    $statement->bindParam(':user_id', $user_id);
    $statement->execute();
    $books = $statement->fetchAll();
    $statement->closeCursor();
    return $books;
}

function getUserInfo($user_id) {
    global $db;   
    $query = 'SELECT userId, firstName, lastName, email FROM users WHERE userId = :user_id';
    $statement = $db->prepare($query);
    $statement->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $statement->execute();
    $info = $statement->fetch(PDO::FETCH_BOTH);
    $statement->closeCursor();
    return $info;
}