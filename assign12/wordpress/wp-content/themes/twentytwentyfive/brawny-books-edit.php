<?php
/**
 * Template Name: Brawny Books Edit
 */
$book_id = filter_input(INPUT_GET, 'book_id');
$book = new stdClass();
if (isset($book_id)){
   $mydb = new wpdb('phpuser','pa55word','book_loan','localhost');
   $books = $mydb->get_results("SELECT book_id, title, authors 
                                FROM books 
                                WHERE book_id = $book_id");
   $book = $books[0];
}
get_header();
?>
<div class="wrap">
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
     <h1>Edit <?=$book->title?></h1>
     <form action="../?page_id=15" method="POST">
     <input type="hidden" name="book_id" value="<?=$book->book_id?>"/>
     Book Title 
     <input name="book_title" type="text" value="<?=$book->title?>"></input>
     <br/>
     Book Author(s) 
     <input name="book_authors" type="text" value="<?=$book->authors?>"></input>
     <br/>
     <input type="submit" value="Update"/>
     </form>
   </main><!-- #main -->
 </div><!-- #primary -->
</div><!-- .wrap -->
<?php get_footer();?>
