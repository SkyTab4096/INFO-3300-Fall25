<?php
/**
 * Template Name: Brawny Books Read
 */
$mydb = new wpdb('phpuser','pa55word','book_loan','localhost');
$books = $mydb->get_results("SELECT book_id, title, authors FROM books");
$message = filter_input(INPUT_GET, 'message');
if(!isset($message)){ $message = ''; }
get_header();
?>

<div class="wrap">
  <div id="primary" class="content-area">
   <main id="main" class="site-main" role="main">
     <h1>All Books</h1>
      <?=$message?>
     <table style="border: 1px solid black">
     <tr>
      <td>Title</td>
      <td>Author</td>
      <td>Action</td>
     </tr>
     <?php foreach ($books as $book) :?>
         <tr>
          <td width="400"><?=$book->title?></td>
          <td width="200"><?=$book->authors?></td>
          <td><a href="../?page_id=11&book_id=<?=$book->book_id?>">
              Edit</a></td>
         </tr>
     <?php endforeach; ?>
     </table>
   </main><!-- #main -->
  </div><!-- #primary -->
</div><!-- .wrap -->
<?php get_footer();?>
