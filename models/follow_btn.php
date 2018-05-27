<?php
session_start();
include "class_lib.php";
include "../connection.php";
$pdo = DB::getInstance();

$post_id= $_SESSION["post_id"];
$follower_id= filter_input(INPUT_COOKIE, 'member_id', FILTER_SANITIZE_STRING);

//getting the id of the author
$stmt= $pdo->prepare("SELECT member_id FROM posts
                        WHERE post_id=:post_id");
$stmt->execute(array(":post_id" => $post_id));
$row= $stmt->fetch(PDO::FETCH_ASSOC);
$author_id= $row["member_id"];

//checking the follows table
$stmt= $pdo->prepare("SELECT * FROM follows
                        WHERE member_id=:member_id AND follower_id=:follower_id");
$stmt->execute(array(":member_id" => $author_id,
                        ":follower_id" => $follower_id));
$row= $stmt->fetch(PDO::FETCH_ASSOC);
if ($row){
    echo "already following";
} else {
    echo "not following";
}