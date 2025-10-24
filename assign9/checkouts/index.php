<?php
session_start();
require '../model/checkoutsDb.php';

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_available_books';
    }
}

if ($action == 'list_available_books') {
    header('Location:/books/index.php?action=list_available_books');
} else if ($action == 'checkout') {
    $book_id = filter_input(INPUT_GET, 'book_id');
    $user_id = $_SESSION['userId'];

    if (checkOutBook($user_id, $book_id) == 1) {
        $message = "Success";
    } else {
        $message = "Book already checked out";
    }

    $book_info = getBookInfo($book_id);
    $user = getUserInfo($user_id);
    include 'booksCheckouts.php';
} else if ($action == 'checked_out_by_user') {
    $user_id = filter_input(INPUT_GET, 'user_id');
    $user = getUserInfo($user_id);
    $books = getCheckedOutBooks($user_id);
    include 'booksCheckoutsByUser.php';
}