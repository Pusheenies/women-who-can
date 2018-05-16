<?php
include "../pdo_php.php";
include "../class_lib.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
            
    $user = new User_Login($username, $password);
    $user->login($pdo);
}