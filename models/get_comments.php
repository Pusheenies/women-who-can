<?php
session_start();
include "../pdo.php";
include "class_lib.php";

$post_id= 2;

$stmt= $pdo->prepare("SELECT * FROM comments c
                        JOIN members m ON c.member_id=m.member_id
                        WHERE post_id=:post_id");
$stmt->execute(array(":post_id" => $post_id));
while($row= $stmt->fetch(PDO::FETCH_ASSOC)){
    $comments[]= $row;
}
echo json_encode($comments);