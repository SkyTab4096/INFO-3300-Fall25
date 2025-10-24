<?php
session_start();
require '../model/booksDb.php';

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action == filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_all_books';
    }
}

if ($action == 'list_all_books') {
    $books = getAllBooks();
    include 'booksListAll.php';
} else if ($action == 'list_available_books') {
    $books = getAvailableBooks();
    include 'booksListAvailable.php';
}