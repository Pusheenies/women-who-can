<?php
session_start();

include "../pdo_php.php";
include "../class_lib.php";

if (isset($_SESSION['id']) && isset($_SESSION['security'])) {
    $id = $_SESSION['id'];
    $security = $_SESSION['security'];

    $user = new User_Profile($id, $security, $pdo);
  
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_REQUEST['username'])) {
            $username = $_REQUEST['username'];
            $result = $user->update_username($username, $pdo);
        }
        
        if (isset($_REQUEST['email'])) {
            $email = $_REQUEST['email'];
            $result = $user->update_email($email, $pdo);
        }
        
        if (isset($_REQUEST['password']) && isset($_REQUEST['confirmation'])) {
            $password = $_REQUEST['password'];
            $confirmation = $_REQUEST['confirmation'];
            
            if ($password === $confirmation) {
                $result = $user->update_password($password, $pdo);
            } else {
                $result = 'Mismatch';
            }
        }
        
        echo $result;
    }
}
