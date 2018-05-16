<?php

include "../pdo_php.php";
include "../class_lib.php";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = filter_input(INPUT_POST, 'title');
    $author = filter_input(INPUT_POST, 'author');
    $isbn = filter_input(INPUT_POST, 'isbn');
    $genre = filter_input(INPUT_POST, 'genre');
    $format = filter_input(INPUT_POST, 'format');
    $condition = filter_input(INPUT_POST, 'condition');
    $image_url = filter_input(INPUT_POST, 'image');
    $year = filter_input(INPUT_POST, 'publication-year');
    $section = filter_input(INPUT_POST, 'section');
            
    $book = new Book('', $isbn, $title, $image_url, $genre, $format, 1, $condition, $year, $section, '', '', $author);
    $book->add_book($pdo);
}
