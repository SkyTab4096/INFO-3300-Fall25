<?php
require "database.php";

function getAllBooks(){
    global $db;
    $query = "SELECT book_id, title, authors FROM books";
    $statement = $db->prepare($query);
    $statement->execute();
    $books = $statement->fetchAll();
    $statement->closeCursor();
    return $books;
}

function getAvailableBooks(){
    global $db;
    $query = "SELECT book_id, title, authors FROM books WHERE book_id NOT IN (SELECT book_id FROM checkouts WHERE actual_return_date is NULL)";
    $statement = $db->prepare($query);
    $statement->execute();
    $books = $statement->fetch(PDO::FETCH_BOTH);
    $statement->closeCursor();
    return $books;
}