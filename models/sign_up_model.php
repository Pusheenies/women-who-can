<?php
include "../connection.php";

$pdo = DB::getInstance();
$request_method = filter_input(INPUT_SERVER, 'REQUEST_METHOD', FILTER_SANITIZE_STRING);

if ($request_method === 'POST') {
    $forename = filter_input(INPUT_POST, 'forename', FILTER_SANITIZE_STRING);
    $surname = filter_input(INPUT_POST, 'surname', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $profile_description = filter_input(INPUT_POST, 'profile_description', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $cpassword = filter_input(INPUT_POST, 'cpassword', FILTER_SANITIZE_STRING);

    if($password && $cpassword) {
        if($password !== $cpassword) {
            echo "Password mismatch";
        } else {

        $sthandler = $pdo->prepare("SELECT username FROM members WHERE username = :name");
        $sthandler->bindParam(':name', $username);
        $sthandler->execute();

            if($sthandler->rowCount() > 0) {
                echo "Username exists";
            } else {

              $mysql = "CALL add_member('".$username."', '".$password."', 'reader', 
              '".$forename."','".$surname."','".$email."','".$profile_description."')";

              $query = $pdo->prepare($mysql);
              $query->execute();

              echo "Sign up successful";
            }  
        }
    }
}
