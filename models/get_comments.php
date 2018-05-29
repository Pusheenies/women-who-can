<?php
session_start();
include "class_lib.php";
include "../connection.php";
$pdo = DB::getInstance();

$post_id= $_SESSION["post_id"];

$stmt= $pdo->prepare("SELECT * FROM comments c
                        JOIN members m ON c.member_id=m.member_id
                        WHERE post_id=:post_id");
$stmt->execute(array(":post_id" => $post_id));
while($row= $stmt->fetch(PDO::FETCH_ASSOC)){
    if($row["approved"]!=="0"){
        $comments[]= $row;
    }
}
echo json_encode($comments);