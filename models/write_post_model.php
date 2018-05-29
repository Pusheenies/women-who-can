<?php
session_start();
include "../connection.php";
include "class_lib.php";

$request_method = filter_input(INPUT_SERVER, 'REQUEST_METHOD', FILTER_SANITIZE_STRING);
$pdo = DB::getInstance();

if ($request_method === 'POST') {
    $member_id = filter_input(INPUT_COOKIE, 'member_id', FILTER_SANITIZE_STRING);
    $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
    $category = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING);
    $content = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_STRING);
    $file_uploaded = isset($_FILES['post-file']['name']) && $_FILES['post-file']['name'] !== '';

    $_SESSION['title'] = $title;
    $_SESSION['category'] = $category;
    $_SESSION['content'] = $content;

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
                    $uid = uniqid('', true);
                    $file_new_name = $uid . "." . $file_actual_ext;
                    $file_destination = '../uploads/' . $file_new_name;
                    move_uploaded_file($tmp_name, $file_destination);
                    $image_path = 'uploads/' . $file_new_name;
                } else {
                  // POST request with file size error and form data
                  header("Location:write_post.php?e=size");
                    echo "File size error";
    //                echo "Oops file size is to big! Please make sure it is less than 1MB.";
                }
            } else {
              // POST request with upload error and form data
              header("Location:write_post.php?e=upload");
                echo "Upload error";
    //            echo "There was an error uploading your file!";
            }
        } else {
          // POST request with file type error and form data
          header("Location:write_post.php?e=type");
            echo "Incorrect file type";
    //        echo "Sorry, you cannot upload files of this type! Please make sure the extension is jpg, jpeg or png.";
        }
    } else {
      $image_path = ''
    }

    $post = new Post('', '', $category, $member_id, $title, $file_path, $content);
    $post->new_post($pdo);

    // Remove session data and end session;
    header("Location:profile.php");
}
