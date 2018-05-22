<?php
session_start();
include "pdo.php";
include "models/class_lib.php";

//fetching member details
$stmt= $pdo->prepare("SELECT * FROM members m
                        JOIN profiles p ON m.member_id=p.member_id
                        WHERE m.member_id=:id");
$stmt->execute(array(":id" => $_SESSION["id"]));
$row= $stmt->fetch(PDO::FETCH_ASSOC);
$member= new Member($row["member_id"], htmlentities($row["username"]), htmlentities($row["password"]),
                            $row["security_group"], $row["registration_date"], htmlentities($row["email"]),
                            $row["profile_image"], htmlentities($row["forename"]), htmlentities($row["surname"]),
                            htmlentities($row["profile_description"]));
if(!empty($_REQUEST["password"])){
    
    print_r($member->updateDetails($pdo, $_REQUEST, $_SESSION["id"]));
    //header("Location: views/profile.html");
    //return;
} else {
    echo "Please enter your password to update your details.";
}

?>

<html>
    <head>
        <title>Update details</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    </head>
    <body>
        <h1 class="text-center">Update details</span></h1>
        <div class="container">
            <div>
                <p>Current profile image:</p>
                <img src="<?=$member->getProfile_image()?>" alt="current profile image">
            </div>
            <form method="post" id="update_details">
                <div class="form-group">
                    <label for="forename">Forename:</label>
                    <input type="text" name="forename" class="form-control" id="forename" value="<?=$member->getForename()?>"/>
                </div>
                <div class="form-group">
                    <label for="surname">Surname:</label>
                    <input type="text" name="surname" class="form-control" id="surname" value="<?=$member->getSurname()?>"/>
                </div>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" name="username" class="form-control" id="username" value="<?=$member->getUsername()?>"/>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" name="email" class="form-control" id="email" value="<?=$member->getEmail()?>"/>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" class="form-control" id="password"/>
                </div>
                <div class="form-group">
                    <label for="profile_description">Profile description:</label>
                    <input type="textarea" name="profile_description" class="form-control" id="profile_description" value="<?=$member->getProfile_description()?>"/>
                </div>
                <div>
                    <input type="submit" value="Confirm" id="confirm" class="btn btn-primary">
                    <a href="views/profile.html">Cancel</a>
                </div>
            </form>        
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    </body>
</html>