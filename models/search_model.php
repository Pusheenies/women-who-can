<?php
session_start();
include "class_lib.php";
include "../connection.php";
$pdo = DB::getInstance();

$category= $_REQUEST["category"];
$hashtag= $_REQUEST["hashtag"];
$title= $_REQUEST["title"];
$author= $_REQUEST["author"];

$raw_search= new rawSearch($category, $hashtag, $title, $author);

if(!empty($category)){
    $category_id= $raw_search->getCategoryID($pdo);
} else {
    $category_id= "";
}

if (!empty($author)){
    $author_id= $raw_search->getAuthorID($pdo);
} else {
    $author_id= "";
}

if (!empty($category_id) || !empty($hashtag) || !empty($title) || !empty($author_id)){
    $search= new Search($category_id, $hashtag, $title, $author_id);
    $search_results= $search->searchByXParams($pdo);

    //in case some posts are in the array more than once (because of the posts_hashtags JOIN)
    $unique_results= array_unique($search_results, SORT_REGULAR);
    $results_array= [];
    foreach($unique_results as $unique_result){
        $results_array[]= $unique_result;
    }
    //header needed to avoid returning array as string
    header("Content-Type: application/json");
    echo json_encode($results_array);
}
