<?php
include "../connection.php";
include "class_lib.php";

$request_method = filter_input(INPUT_SERVER, 'REQUEST_METHOD', FILTER_SANITIZE_STRING);
$pdo = DB::getInstance();

if ($request_method === 'POST') {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $remember = filter_input(INPUT_POST, 'remember', FILTER_SANITIZE_STRING) ? true : false;
    
    $member = new Member_Sign_In($username, $password);
    $response = $member->sign_in($pdo);
    $member->create_cookies($remember);

    echo $response;
}