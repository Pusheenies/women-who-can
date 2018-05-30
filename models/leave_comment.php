<?php
session_start();
include "class_lib.php";
include "../connection.php";
$pdo = DB::getInstance();

if(!empty($_REQUEST["leave_comment"])){
    $stmt= $pdo->prepare("INSERT INTO comments (post_id, member_id, comment_content) 
                            VALUES (:post_id, :member_id, :comment_content)");

    $stmt->execute(array(":post_id" => $_REQUEST["post_id"],
                        ":member_id" => $_REQUEST["member_id"],
                        ":comment_content" => $_REQUEST["leave_comment"]));   
}

header("Location: ../views/pages/post_page.php?post=".$_SESSION["post_id"]);
return;