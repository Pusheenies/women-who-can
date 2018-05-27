<?php
session_start();
include "class_lib.php";
include "../connection.php";
$pdo = DB::getInstance();

$member_id= filter_input(INPUT_COOKIE, 'member_id', FILTER_SANITIZE_STRING);
$follower_id= 2; //author

$stmt= $pdo->prepare("SELECT * FROM follows
                        WHERE member_id=:member_id AND follower_id=:follower_id");
$stmt->execute(array(":member_id" => $member_id,
                        ":follower_id" => $follower_id));
$row= $stmt->fetch(PDO::FETCH_ASSOC);
if ($row){
    echo "already following";
} else {
    echo "not following";
}
