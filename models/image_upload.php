<?php
session_start();
include "../pdo.php";

if (isset($_POST['submit'])){
	$file = $_FILES['file'];
	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileTyp = $_FILES['file']['type'];
	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));
	$allowed = array('jpg', 'jpeg', 'png');

	if (in_array($fileActualExt, $allowed)){
		if ($fileError === 0){
			if ($fileSize < 1000000){
				// prevent existing uploaded files being overwritten by giving them a unique name made up of the file
				$fileNameNew = uniqid('', true) . "." . $fileActualExt;
				$fileDestination = '../uploads/' . $fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
				$image_path= $fileDestination;
				print_r($image_path);
				$stmt= $pdo->prepare("UPDATE profiles 
                        SET profile_image=:profile_image
												WHERE member_id=:id");
				$stmt->execute(array(":profile_image" => $image_path, ":id" => $_SESSION["id"]));
				header("Location: ../views/update_details.html");
			} else {
				echo "Oops file size is to big! Please make sure it is less than 1MB.";
				}
		} else {
			echo "There was an error uploading your file!";
			}
	} else {
		echo "Sorry, you cannot upload files of this type! Please make sure the extension is jpg, jpeg or png.";
		}
}