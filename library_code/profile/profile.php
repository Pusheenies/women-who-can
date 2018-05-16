<?php
session_start();

include "../pdo_php.php";
include "../class_lib.php";

if (isset($_SESSION['id']) && isset($_SESSION['security'])) {
    $id = $_SESSION['id'];
    $security = $_SESSION['security'];
    
    if ($security === 'admin' || $security === 'staff') {
        $staff = new Staff_User_Profile($id, $security, $pdo);
        $staff->overdue_borrows($pdo);
        
        $title = $staff->get_title();
        $personal_details = $staff->get_personal_details_html();
        $overdue_books = $staff->get_overdue_borrows_html();
        
        echo '{ "title": "' . $title . '",' . 
                '"personal-details": "' . $personal_details . '",' .
                '"borrows": "' . $overdue_books . '"}'; 
    }
    
    if ($security === 'user') {
        $user = new General_User_Profile($id, $security, $pdo);
        $user->borrows($pdo);
        $user->set_recent_books($pdo);
        
        $title = $user->get_title();
        $personal_details = $user->get_personal_details_html();
        $past_borrows = $user->get_past_borrows_html();
        $recent_books = $user->get_recent_books_html();
        
        echo '{ "title": "' . $title . '",' . 
                '"personal-details": "' . $personal_details . '",' .
                '"borrows": "' . $past_borrows . '",' .
                '"column-1": "' . $recent_books . '"}';
    }           
}