<?php
include_once ('dbconnection.php');
include ('comments_form.php');

if (isset($_POST["comment_submit"])){
    $comment_content = $_POST['comment_content'];
        
    if (strlen($comment_content) > 100) { 
        header('location: ../index.html?error=1');
        exit;
    }

    $stmt = $con->prepare("INSERT INTO comments(comment_id, post_id, member_id, comment_content, comment_date, approved) VALUES ('', '14','5', '$comment_content','','')");
    $stmt->execute(['',14,2,'$comment_content','','1']);

    header('location: ../index.html');
} 
        
?>