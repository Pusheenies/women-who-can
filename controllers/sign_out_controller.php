<?php

if(!empty($_COOKIE)) {
    foreach ($_COOKIE as $key => $value) {
        setcookie($key, $value, TIME() - 3600, "/");
    }
}

header("Location:../index.php");


