<?php
session_start();
include "../pdo.php";
include "class_lib.php";

$_SESSION["id"]= 15;

//fetching member details
$stmt= $pdo->prepare("SELECT * FROM members m
                        JOIN profiles p ON m.member_id=p.member_id
                        WHERE m.member_id=:id");
$stmt->execute(array(":id" => $_SESSION["id"]));
$member= $stmt->fetch(PDO::FETCH_ASSOC);
$member_object= new Member($member["member_id"], htmlentities($member["username"]), htmlentities($member["password"]),
                            $member["security_group"], $member["registration_date"], htmlentities($member["email"]),
                            $member["profile_image"], htmlentities($member["forename"]), htmlentities($member["surname"]),
                            htmlentities($member["profile_description"]));

//if writer, fetching posts that member has written
if($member["security_group"]==="writer"){
    $own_posts= $member_object->getOwnPosts($pdo);
    $member["own_posts"]= [];
    foreach($own_posts as $post){
        $time_diff= (time()-strtotime($post->getPost_date())) / (60*60*24);
        $time_diff= floor($time_diff);
        $post_details= [htmlentities($post->getTitle()), $post->getPost_id(), $time_diff, htmlentities($post->getPost_content())];
        array_push($member["own_posts"], $post_details);
    }
}

//fetching member favourite posts
$favourites= $member_object->getFavourites($pdo);
$member["favourites"]= [];
foreach($favourites as $favourite){
    $time_diff= (time()-strtotime($favourite->getPost_date())) / (60*60*24);
    $time_diff= floor($time_diff);
    $favourite_details= [htmlentities($favourite->getTitle()), $favourite->getPost_id(), $time_diff, htmlentities($favourite->getPost_content())];
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