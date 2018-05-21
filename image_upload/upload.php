<?php

if (isset($_POST['submit']))
	{
	$file = $_FILES['file'];

	// print_r($file);
	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileTyp = $_FILES['file']['type'];
	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));
	$allowed = array(
		'jpg',
		'jpeg',
		'png'
	);
	if (in_array($fileActualExt, $allowed))
		{
		if ($fileError === 0)
			{
			if ($fileSize < 1000000)
				{

				// prevent existing uploaded files being overwritten by giving them a unique name made up of the file
				$fileNameNew = uniqid('', true) . "." . $fileActualExt;
				$fileDestination = 'uploads/' . $fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
				header("location:login/index.html?uploadsuccess");
				}
			  else
				{
				echo "Oops file size is to big please make sure it is less than 1MB";
				}
			}
		  else
			{
			echo "There was an error uploading your file!";
			}
		}
	  else
		{
		echo "You cannot upload files of this type!";
		}
	}
