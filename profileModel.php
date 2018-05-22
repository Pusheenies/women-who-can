<?php
session_start();
include "pdo.php";
include "class_lib.php";

$_SESSION["id"]= 15;

//fetching member details
$stmt= $pdo->prepare("SELECT * FROM members WHERE member_id=:id");
$stmt->execute(array(":id" => $_SESSION["id"]));
$member= $stmt->fetch(PDO::FETCH_ASSOC);
$member_object= new Member($member["member_id"], htmlentities($member["username"]), htmlentities($member["password"]),
                            $member["security_group"], $member["registration_date"]);

//if writer, fetching posts that member has written
if($member["security_group"]==="writer"){
    $own_posts= $member_object->getOwnPosts($pdo);
    $member["own_posts"]= [];
    foreach($own_posts as $post){
        $post_details= [htmlentities($post->getTitle()), $post->getPost_id(), $post->getPost_date()];
        array_push($member["own_posts"], $post_details);
    }
}

//fetching member favourite posts
$favourites= $member_object->getFavourites($pdo);
$member["favourites"]= [];
foreach($favourites as $favourite){
    $favourite_details= [htmlentities($favourite->getTitle()), $favourite->getPost_id(), $favourite->getPost_date()];
    array_push($member["favourites"], $favourite_details);
}

//fetching member followers
$followers= $member_object->getFollowers($pdo);
$member["followers"]= [];
foreach($followers as $follower){
    array_push($member["followers"], htmlentities($follower));
}

//fetching followed members
$followed= $member_object->getFollowed($pdo);
$member["followed"]= [];
foreach($followed as $followed_member){
    array_push($member["followed"], htmlentities($followed_member));
}

echo json_encode($member);
