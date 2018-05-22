<?php
include ("dbconnection.php");
include ("signup_form.php");

if (isset($_POST ['signup'])){

        $forename = $_POST ['forename'];
        $surname = $_POST ['surname'];
        $email = $_POST ['email']; 
        $username = $_POST ['username'];
        $profile_description = $_POST ['profile_description'];
        $password = $_POST ['password'];
        $cpassword = $_POST ['cpassword'];
                      
        if($password && $cpassword){
        if($password!==$cpassword)
            {
            die ("<b><font size=14 align='center'>You're passwords do not match, please type carefully</font></b>");
        } else {

	$sthandler = $con->prepare("SELECT username FROM members WHERE username = :name");
	$sthandler->bindParam(':name', $username);
	$sthandler->execute();
        
        if($sthandler->rowCount() > 0){
    		die("<b><font size=14 align='center'>Username already exists. Please choose another one!</font></b>") ;
        } else {
                                        
          $mysql ="CALL add_member('".$username."', '".$password."', 'reader', 
          '".$forename."','".$surname."','".$email."','".$profile_description."')";
        
          $query = $con->prepare($mysql);

          $query->execute();
          
          echo '<script type="text/javascript">window.location.href="login/index.html";</script>';
          die();
        }  
   
}}}
?>
