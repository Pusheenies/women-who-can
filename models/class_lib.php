<?php

class Member_Sign_In {
    private $username;
    private $text_password;
    private $member_id;
    private $security_group;
    
    function __construct($username, $text_password) {
        $this->username = $username;
        $this->text_password = $text_password;
    }
    
    function sign_in($pdo) {
        $sql = "SELECT member_id, security_group FROM members WHERE username = :username AND password = PASSWORD(:password);";
        $statement = $pdo->prepare($sql);
        $statement->execute([
            'username' => $this->username,
            'password' => $this->text_password
        ]);
        
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        
        if ($result) {
            $this->member_id = $result['member_id'];
            $this->security_group = $result['security_group'];

            $response = "Sign in successful";
        } else {
            $response = "Sign in unsuccessful";
        }
        return $response;
    }
    
    function create_cookies($remember) {
        date_default_timezone_set('UTC');
        $oneWeek = time() + (60 * 60 * 24 * 7);
        $expiry = $remember ? $oneWeek : 0;
        
        setcookie('member_id', $this->member_id, $expiry, '/');
        setcookie('security', $this->security_group, $expiry, '/');
    }
}
