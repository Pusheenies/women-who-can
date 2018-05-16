<?php
include ("dbconnection.php");
include ("registration_form.php");

if (isset($_POST ['register'])){

        $forename = $_POST ['forename'];
        $surname = $_POST ['surname'];
        $address_line1 = $_POST ['address_line1'];
        $address_line2 = $_POST ['address_line2'];
        $address_line3 = $_POST ['address_line3'];
        $city = $_POST ['city'];
        $postcode = $_POST ['postcode'];
        $phone = $_POST ['phone'];
        $email = $_POST ['email']; 
        $username = $_POST ['username'];
        $password = $_POST ['password'];
        $cpassword = $_POST ['cpassword'];
        
        
        if($password && $cpassword){
        if($password!==$cpassword)
            {
            die ("<b><font size=14 align='center'>You're passwords do not match, please type carefully</font></b>");
        } else {

	$sthandler = $con->prepare("SELECT username FROM users WHERE username = :name");
	$sthandler->bindParam(':name', $username);
	$sthandler->execute();
        
        if($sthandler->rowCount() > 0){
    		die("<b><font size=14 align='center'>Username already exists. Please choose another one!</font></b>") ;
        } else {
                                        
          $mysql ="CALL add_user('".$username."', '".$password."', 'user', 
       '".$forename."','".$surname."', '".$address_line1."' , 
       '".$address_line2."', '".$address_line3."', '".$city."', '".$postcode."', 
       '".$phone."','".$email."')";
        
          $query = $con->prepare($mysql);

          $query->execute();
          
          echo '<script type="text/javascript">window.location.href="../login/index.html";</script>';
          die();
        }  
    
}}}
?>