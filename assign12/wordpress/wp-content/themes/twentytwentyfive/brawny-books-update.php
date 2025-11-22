<?php
/**
 * Template Name: Brawny Books Update
 */
$book_id = filter_input(INPUT_POST, 'book_id');
$book_title = filter_input(INPUT_POST, 'book_title');
$book_authors = filter_input(INPUT_POST, 'book_authors');

if (isset($book_id) && isset($book_title) && isset($book_authors) ){
 $mydb = new wpdb('phpuser','pa55word','book_loan','localhost');
 $books = $mydb->update('books',array( 'title' => $book_title, 
 'authors' => $book_authors ), array('book_id'=>$book_id) );
   $book = $books[0];
   header('location:/index.php/?page_id=6?message=Book updated');
} else{
   header('location:/index.php/?page_id=6message=Missing Book Data');
}
?>
