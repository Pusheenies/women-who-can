<?php
session_start();
include "pdo.php";
include "class_lib.php";

// //redirect if not logged in
// if (!isset($_SESSION["id"])){
//     header("Location: ");
//     return;
// }

/////// DEV
$_SESSION["id"]= 2;
///////

//fetching member details
$stmt= $pdo->prepare("SELECT * FROM members WHERE member_id=:id");
$stmt->execute(array(":id" => $_SESSION["id"]));
$row= $stmt->fetch(PDO::FETCH_ASSOC);
$member= new Member($row["member_id"], $row["username"], $row["password"],
                    $row["security_group"], $row["registration_date"]);

//fetching member favourite posts (returns array of Post objects)
$favourites= $member->getFavourites($pdo);

//fetching member followers
$followers= $member->getFollowers($pdo);

//fetching followed members
$followed= $member->getFollowed($pdo);

//if writer, fetching posts that member has written
if($member->getSecurity_group()==="writer"){
    $own_posts= $member->getOwnPosts($pdo);
}
?>

<html>
    <head>
        <title>Profile</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    </head>

    <body>
        <h1 class="text-center">Welcome back <?=$member->getUsername()?></h1>
        <div class="container" id="details">
            <div>
                <h2>Your details</h2>
                <p>Username: <?=$member->getUsername()?></p>
                <p>Password: *********</p>
                <a href="#" class="btn btn-primary">Edit</a>
            </div>
        </div>
        <div class="container" id="favourites">
            <h2>Your favourite posts</h2>
            <div class="flex-container">
                <?php
                if(!empty($favourites)){
                    foreach($favourites as $favourite){
                        echo "<div class='card'>";
                        echo "<div class='card-body'>";
                        echo "<h5>" . $favourite->getTitle() . "</h5>";
                        echo "<em>" . $favourite->getPost_content() . "</em>";
                        echo "</div></div>";
                    }
                }  
                ?>
            </div>
        </div>


        <div class="container" id="follows">
            <h2>Follows</h2>
            <p>Followers:
            <?php
            if(!empty($followers)){
                foreach($followers as $follower){
                    echo $follower . " ";
                }
            }
            ?>
            </p>
            <p>Members you follow: 
                <?php
                if(!empty($followed)){
                    foreach($followed as $member){
                        echo $member . " ";
                    }
                }
                ?>
            </p>
        </div>


        <?php
        if(isset($own_posts)){
            echo "<div class='container' id='own_posts'>";
            echo "<h2>Your posts</h2>";
            foreach($own_posts as $post){
                echo $post->getTitle();
            }
        }

        ?>

        
        <!-- Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    </body>
</html>