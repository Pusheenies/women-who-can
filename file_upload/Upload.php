<!DOCTYPE html>

<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
        
        <title>Uploads</title>
        <?php require_once('pdo.php'); ?>
    </head>
    <body>
        <nav class="navbar navbar-light justify-content-center">
            <a class="navbar-brand" href="#">
                <img class="box-icon" src="images/box2.png"/>
                Uploads</a>
        </nav>
        
        <div class="container mt-5">
            <div class="row justify-content-center">
                <form id="form" action="Upload.php" method="POST" enctype="multipart/form-data" class="d-flex flex-column align-items-end col-sm-5">
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="uploaded_file" id="uploadedFile"/>
                            <label class="custom-file-label" for="uploadedFile" id="label">Choose an image</label>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-outline-secondary mt-2" value="Upload"/>
                </form>
            </div>
            <div id="callout" class="row justify-content-center">
                <?php
                error_reporting(0);

                const InputFileName = 'uploaded_file';            
                const ValidTypes = ['image/gif', 'image/png', 'image/jpeg'];

                if (!empty($_FILES[InputFileName])) {

                    if ($_FILES[InputFileName]['name'] === '' && $_FILES[InputFileName]['type'] === '') {
                        echo "<div class='callout warning rounded m-3 p-3 col-sm-5'>
                                Please select a file to upload.
                              </div>";

                    } else if ($_FILES[InputFileName]['error'] !== 0) {
                        // TODO: Explain the error
                        echo "<div class='callout error rounded m-3 p-3 col-sm-5'>
                                There was an error uploading the file.
                              </div>";

                    } else if (!in_array($_FILES[InputFileName]['type'], ValidTypes)) {
                        echo "<div class='callout error rounded m-3 p-3 col-sm-5'>
                                The file type is invalid. Please upload an image.
                              </div>";

                    } else {
                        $tmpFile = $_FILES[InputFileName]['tmp_name'];
                        $fileDestination = 'Uploads/' . $_FILES[InputFileName]['name'];      
                        $uploadSuccessful = move_uploaded_file($tmpFile, $fileDestination);

                        if ($uploadSuccessful) {
                            
                            $sql = "INSERT INTO pictures (pic_path) VALUES (:path);";
                            $statement = $pdo->prepare($sql);
                            $statement->execute([
                                'path' => $fileDestination
                            ]);

                            $sql = "SELECT pic_path FROM pictures WHERE pic_path = :path;";
                            $statement = $pdo->prepare($sql);
                            $statement->execute([
                                'path' => $fileDestination
                            ]);

                            $result = $statement->fetch(PDO::FETCH_ASSOC);
                            
                            echo "<img src='" . $result['pic_path'] . "'/>";
                            
                            echo "<div class='callout info rounded m-3 p-3 col-sm-5'>
                                    Upload successful!
                                  </div>";

                        } else {
                            echo "<div class='callout error rounded m-3 p-3 col-sm-5'>
                                    There was a problem uploading the file.
                                  </div>";

                        }

                        if (file_exists($tmpFile)) {
                            unlink($tmpFile);
                        }
                    }
                }
                ?>
            </div>
        </div>
        
        <!-- jQuery, Popper & Bootstrap's JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="scripts.js"></script>
    </body>
</html>
