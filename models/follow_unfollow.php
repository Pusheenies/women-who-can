<?php
session_start();
include "class_lib.php";
include "../connection.php";
$pdo = DB::getInstance();

$member_id= filter_input(INPUT_COOKIE, 'member_id', FILTER_SANITIZE_STRING);

$stmt= $pdo->prepare("SELECT * FROM follows WHERE member_id=:member_id AND follower_id=:follower_id");
$stmt->execute(array(":member_id" => $_REQUEST["author"],
                    ":follower_id" => $member_id));

$row= $stmt->fetch(PDO::FETCH_ASSOC);
if ($row){
    //unfollow
    $stmt= $pdo->prepare("DELETE FROM follows WHERE member_id=:member_id AND follower_id=:follower_id");
    $stmt->execute(array(":member_id" => $_REQUEST["author"],
                    ":follower_id" => $member_id));
} else {
    //follow
    $stmt= $pdo->prepare("INSERT INTO follows (member_id, follower_id) VALUES (:member_id, :follower_id)");
    $stmt->execute(array(":member_id" => $_REQUEST["author"],
                    ":follower_id" => $member_id));
}
header("Location: ../views/post_page.php");
return;