<?php

class DB {
    
    private static $instance = NULL;
            
    //Singleton Design Pattern
    public static function getInstance() {
      if (!isset(self::$instance)) {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $dsn = 'mysql:host=localhost;dbname=Pusheen_Blog';
        $user = 'root';
        $password = '';
        self::$instance = new PDO($dsn, $user, $password, $pdo_options);
      }
      return self::$instance;
    }
}