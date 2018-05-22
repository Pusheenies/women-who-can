<?php
include ("../connection.php");
/* I think we don't need to include the form, should work well without this line below */
//include ("signup_form.php");

if (isset($_POST['signup'])) {

    $pdo = DB::getInstance();

    $forename = $_POST['forename'];
    $surname = $_POST['surname'];
    $email = $_POST['email']; 
    $username = $_POST['username'];
    $profile_description = $_POST['profile_description'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if($password && $cpassword) {
        if($password !== $cpassword) {
            /* Can we change this die() for another kind of error message with ajax */
            /* It is not good practice to have die() in production code */
            die ("<b><font size=14 align='center'>You're passwords do not match, please type carefully</font></b>");
        } else {

        $sthandler = $pdo->prepare("SELECT username FROM members WHERE username = :name");
        $sthandler->bindParam(':name', $username);
        $sthandler->execute();

            if($sthandler->rowCount() > 0) {
                /* Can we change this die() for another kind of error message with ajax */
                /* It is not good practice to have die() in production code */
                    die("<b><font size=14 align='center'>Username already exists. Please choose another one!</font></b>") ;
            } else {

              $mysql = "CALL add_member('".$username."', '".$password."', 'reader', 
              '".$forename."','".$surname."','".$email."','".$profile_description."')";

              $query = $pdo->prepare($mysql);

              $query->execute();

              header("Location: ../views/pages/sign_in.php");
              /* I changed the line below for the header() on top as it's more straightforward and Peter mentioned the other option was unsafe */
              //echo '<script type="text/javascript">window.location.href="login/index.html";</script>';
            }  
        }
    }
}
?>
