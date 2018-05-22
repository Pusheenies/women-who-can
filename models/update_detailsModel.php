<?php
include "../pdo.php";
include "class_lib.php";

if($_SERVER["REQUEST_METHOD"]==="POST"){
    $forename= filter_input(INPUT_POST, "forename");
}

