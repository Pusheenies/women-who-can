<?php
include "../connection.php";
include "class_lib.php";

$request_method = filter_input(INPUT_SERVER, 'REQUEST_METHOD', FILTER_SANITIZE_STRING);
$pdo = DB::getInstance();

if ($request_method === 'POST') {
    $member_id = filter_input(INPUT_COOKIE, 'member_id', FILTER_SANITIZE_STRING);    
    $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
    $category = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING);
    $content = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_STRING);
    $file = filter_input(INPUT_POST, 'file', FILTER_SANITIZE_STRING);
    
    if (!$file) {
        // Insert Blog Post
        $post = new Post('', '', $category, $member_id, $title, '', $content);
        $post->new_post($pdo);
    } else {
        // Insert Blog Post - w/temp file placeholder
        $file_placeholder = uniqid('', true);
        $post = new Post('', '', $category, $member_id, $title, $file_placeholder, $content);
        $post->new_post($pdo);
    }
    
    // File upload
    if ($file_uploaded) {
        $file = $_FILES['post-image'];  
        $file_name = $file['name'];
        $tmp_name = $file['tmp_name'];
        $file_size = $file['size'];
        $file_error = $file['error'];
        $file_type = $file['type'];
        $file_ext = explode('.', $file_name);
        $file_actual_ext = strtolower(end($file_ext));
        $allowed = ['jpg', 'jpeg', 'png'];
        
        if (in_array($file_actual_ext, $allowed)) {
            if ($file_error === 0) {
                if ($file_size < 1000000) {

                    // prevent existing uploaded files being overwritten by giving them a unique name made up of the file
                    $file_new_name = uniqid('', true) . "." . $file_actual_ext;
                    $file_destination = '../uploads/' . $file_new_name;
                    move_uploaded_file($tmp_name, $file_destination);
                    $image_path = 'uploads/' . $file_new_name;

                } else {
                    echo "File size error";
    //                echo "Oops file size is to big! Please make sure it is less than 1MB.";
                }
            } else {
                echo "Upload error";
    //            echo "There was an error uploading your file!";
            }
        } else {
            echo "Incorrect file type";
    //        echo "Sorry, you cannot upload files of this type! Please make sure the extension is jpg, jpeg or png.";
        }
    } else {
        $image_path = '';
    }
    echo "Post uploaded";
}