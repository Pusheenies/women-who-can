<?php
session_start();

$title = $_SESSION['title'] ?? '';
$category = $_SESSION['category'] ?? '';
$content = $_SESSION['content'] ?? '';
$hashtags = $_SESSION['hashtags'] ?? '';

$request_method = filter_input(INPUT_SERVER, 'REQUEST_METHOD', FILTER_SANITIZE_STRING);

if ($request_method === 'POST') {
    $response = [];
    $response[] = $title;
    $response[] = $category;
    $response[] = $content;
    $response[] = $hashtags;

    echo json_encode($response);
}
