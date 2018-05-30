<?php
    require_once "dbconnection.php";

    $selector = $_POST["selector"];
    $validator = $_POST["validator"];
    $password =  $_POST["password"];

    $stmt =  $con->prepare("SELECT * FROM password_reset WHERE selector = '".$selector."' AND expires >= '".time()."';");
    $stmt->execute();
    $auth_token=$stmt->fetch();
    
    if ( empty($auth_token) ) {
        echo 'There was an error processing your request. Error Code: 002';
        return;
    }
    
    $calc = hash('sha256', hex2bin($validator));
    
    if (hash_equals($calc, $auth_token['token'] ) )  {
        $stmt1 = $con->prepare("select * from profiles where email= '".$auth_token['email']."'; ");
        $stmt1->execute();
        $profile=$stmt1->fetch();
        if ( empty( $profile ) ) {
             //echo ('status'=>0,'message'=>'There was an error processing your request. Error Code: 003');
              echo ('There was an error processing your request. Error Code: 003');
              return;
        } else {
       
        $stmt2 = $con->prepare("update members set password=PASSWORD('".$password."') where member_id=".$profile['member_id'].";");
        $stmt2->execute();

            // Delete any existing tokens for this user
        $query = $con->prepare("delete from password_reset where email=?");        
        $query->execute(array($auth_token['email']));
        
        //echo  array('status'=>1,'message'=>'Password updated successfully. <a href="index.php">Login here</a>');
        echo 'Password updated successfully. <a href="index.php">Login here</a>';
        session_destroy();

            
            return;
        }
}
