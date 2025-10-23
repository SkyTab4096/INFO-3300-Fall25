<?php
   $dsn = 'mysql:host=localhost;dbname=book_loan';
   $username = 'phpuser';
   $password = 'pa55word';
  
   try {
       $db = new PDO($dsn, $username, $password);
   } catch (PDOException $e) {
       $error_message = $e->getMessage();
       echo 'Error Message ' . $error_message;
       exit();
   }
