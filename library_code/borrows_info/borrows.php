<?php
session_start();

include "../pdo_php.php";
include "../class_lib.php";

if (isset($_SESSION['id']) && isset($_SESSION['security'])) {
    $id = $_SESSION['id'];
    $security = $_SESSION['security'];

    if ($security === 'user') {
        $user = new General_User_Profile($id, $security, $pdo);
        $user->borrows($pdo);
        
        $borrows = $user->get_borrowed_books_html();
        echo '{ "borrows": "' . $borrows . '"}';
    }
}