<?php
session_start();
include "class_lib.php";
include "../connection.php";
$pdo = DB::getInstance();

$post_id= $_SESSION["post_id"];

//fetching post details
$stmt= $pdo->prepare("SELECT * FROM posts p
                        JOIN categories c ON p.category_id=c.category_id
                        JOIN members m ON m.member_id=p.member_id
                        WHERE p.post_id=:post_id");
$stmt->execute(array(":post_id" => $post_id));
$post= $stmt->fetch(PDO::FETCH_ASSOC);

//fetching hashtags and adding them to $post
$stmt= $pdo->prepare("SELECT hashtag_id FROM posts_hashtags
                        WHERE post_id=:post_id");
$stmt->execute(array(":post_id" => $post_id));
while($row= $stmt->fetch(PDO::FETCH_ASSOC)){
    $hashtags[]= $row["hashtag_id"]; 
}
$post["hashtags"]= $hashtags;
$post["post_date"] = date_format(date_create($post["post_date"]),"d/m/Y");
$post["post_content"]= utf8_encode(nl2br($post["post_content"]));
echo json_encode($post);