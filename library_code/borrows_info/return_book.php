<?php

include "../pdo_php.php";
include "../class_lib.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $book_id = $_REQUEST['book-id'];
            
    $borrow = new Borrow($book_id);
    $result = $borrow->return_book($pdo);
    
    echo $result;
}

