<?php
session_start();
include "class_lib.php";
include "../connection.php";
$pdo = DB::getInstance();

$category_id= $_REQUEST["category"];
$hashtag= $_REQUEST["hashtag"];
$title= $_REQUEST["title"];
$author= $_REQUEST["author"];

//put the # back
if(!empty($hashtag)){
    $hashtag= "#" . $hashtag;
}

if (!empty($category_id) || !empty($hashtag) || !empty($title) || !empty($author)){
    $search= new Search($category_id, $hashtag, $title, $author);
    $search_results= $search->searchByXParams($pdo);
    //in case some posts are in the array more than once (because of the posts_hashtags JOIN)
    $unique_results= array_map("unserialize", array_unique(array_map("serialize", $search_results)));

    //header needed to avoid returning array as string
    header("Content-Type: application/json");
    echo json_encode($unique_results);
}