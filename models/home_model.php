<?php

include "../connection.php";
include "class_lib.php";

$request_method = filter_input(INPUT_SERVER, 'REQUEST_METHOD', FILTER_SANITIZE_STRING);
$pdo = DB::getInstance();

if ($request_method === 'POST') {
    $posts_list = new Posts_List();
    $posts_list->generate_posts_list($pdo);
    $posts = $posts_list->get_posts();
 
    echo $posts;
}

