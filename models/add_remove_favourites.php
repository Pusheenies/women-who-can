<?php
session_start();
include "class_lib.php";
include "../connection.php";
$pdo = DB::getInstance();

$post_id= $_SESSION["post_id"];
$member_id= filter_input(INPUT_COOKIE, 'member_id', FILTER_SANITIZE_STRING);

$stmt= $pdo->prepare("SELECT * FROM favourites 
                        WHERE post_id=:post_id AND member_id=:member_id");
$stmt->execute(array(":post_id" => $post_id, ":member_id" => $member_id));

$row= $stmt->fetch(PDO::FETCH_ASSOC);
if ($row){
    //remove from favourites
    $stmt= $pdo->prepare("DELETE FROM favourites WHERE post_id=:post_id AND member_id=:member_id");
    $stmt->execute(array(":post_id" => $post_id, ":member_id" => $member_id));
} else {
    //add to favourites
    $stmt= $pdo->prepare("INSERT INTO favourites (post_id, member_id) VALUES (:post_id, :member_id)");
    $stmt->execute(array(":post_id" => $post_id, ":member_id" => $member_id));
}
header("Location: ../views/post_page.php?post=".$post_id);
return;