<?php

try {
    $username = 'root';
    $dsn = 'mysql:host=localhost;dbname=Pusheen_Library';

    $pdo = new PDO($dsn, $username);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // TODO: Manage the error. i.e. redirect to error page
    die("Couldn't connect to database");
} 