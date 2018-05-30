<!DOCTYPE html>
<html>
    <head>
        <title>WWC - Edit details</title>
        <meta charset="UTF-8">    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <!--StyleSheets-->
        <link rel="stylesheet" type="text/css" href="../_css/style.css" />
        <link rel="stylesheet" type="text/css" href="../_css/edit_details.css" />
        <link rel="stylesheet" type="text/css" href="../_css/styles.css" />
        <!--Fonts-->
        <link rel="stylesheet" type="text/css" href="../_css/ss-pika.css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <!-- If not signed in, redirect to sign in page -->
        <?php
        $member_id = filter_input(INPUT_COOKIE, 'member_id', FILTER_SANITIZE_STRING);
        $security = filter_input(INPUT_COOKIE, 'security', FILTER_SANITIZE_STRING);
        if (!$member_id || !$security) {
            header("Location:sign_in.php");
        }
        ?>
    </head>

    <body>
        <div id="container">
            <div id="header" class="header-w-btn">
                <div id='corner-btn'>
                    <a class='btn btn-outline-light' href='../../controllers/sign_out_controller.php'>Sign out</a>
                </div>
                <a href="../../index.php"><img src="../_img/logo/LogoWhite.png"></a>
            </div>

            <!-- NAV --> 
            <div id="nav" class="navbar navbar-expand-md navbar-light">
                <div class="container">
                    <ul>
                        <li><a href="../../index.php">Home</a></li>
                    </ul>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav full">
                            <li><a class="peach" href="profile.php">Profile</a></li>
                            <li><a href="nav_search_results.php?cat=1">Laugh</a></li>
                            <li><a href="nav_search_results.php?cat=2">Innovate</a></li>
                            <li><a href="nav_search_results.php?cat=3">Learn</a></li>
                            <li><a href="nav_search_results.php?cat=4">Inspire</a></li>
                            <?php
                            $security = filter_input(INPUT_COOKIE, 'security', FILTER_SANITIZE_STRING);
                            if ($security === 'writer') {
                                echo "<li><a href='write_post.php'>Write</a></li>";
                            }
                            ?>
                            <li class="icon"><a href="search.php">🔎</a></li>
                        </ul>
                    </div>       
                </div>
            </div>

            <h2 class="text-center" style="font-size:24px;">Edit details</h2>
            <div class="container" id="form_container">
                <div>
                    <span id="profile_image"><!--current profile image--></span>
                </div>

                <div>
                    <form action="../../models/image_upload.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group row mt-4">
                            <p>Upload a new profile picture:</p>
                            <input type="file" name="file">
                            <input type="submit" name="submit" value="UPLOAD" class="peach" id="upload_image">
                        </div>
                    </form>
                </div>

                <form method="post" id="update_details" action="../../models/update_detailsModel.php">
                    <div class="form-group row">
                        <label for="forename">Forename:</label>
                        <input type="text" name="forename" class="form-control" id="forename" autofocus/>
                    </div>
                    <div class="form-group row">
                        <label for="surname">Surname:</label>
                        <input type="text" name="surname" class="form-control" id="surname"/>
                    </div>
                    <div class="form-group row">
                        <label for="username">Username:</label>
                        <input type="text" name="username" class="form-control" id="username"/>
                    </div>
                    <div class="form-group row">
                        <label for="email">Email:</label>
                        <input type="text" name="email" class="form-control" id="email"/>
                    </div>
                    <div class="form-group row">
                        <label for="password">Password:</label>
                        <input type="password" name="password" class="form-control" id="password" required/>
                    </div>
                    <div class="form-group row">
                        <label for="profile_description">Profile description:</label>
                        <textarea name="profile_description" class="form-control" id="profile_description"></textarea>
                    </div>
                    <div>
                        <input type="submit" value="CONFIRM" id="confirm" class="peach"><br>
                        <a href="profile.php">Cancel</a>
                    </div>
                </form>        
            </div>
            
            <!-- needed for the footer to be at the bottom -->
            <!-- NEXT -->
            <div id="nextlink">
              <div class="container">
                <!-- COMMENT OUT IF NEEDED -->
                <!-- <a href="#" class="left">&larr; Newer Posts</a>
                <a href="#" class="right">Older Posts &rarr;</a> -->
              </div>
              <div class="clear"></div>
            </div>
            
            <!-- FOOTER -->
            <div id="footer">
                <div class="container">
                  <h4>Women Who Can &copy;</h4>
                  <p>Designed and created with <span class="icon">&#x2665;</span> by <a href="https://github.com/annaecc">@annaecc</a>,
                      <a href="https://github.com/LauraCollard">@lauracollard</a>, <a href="https://github.com/loujean">@loujean</a>,
                      <a href="https://github.com/alysanne">@alysanne</a> and <a href="https://github.com/StephBrooks88">@stephbrooks88</a>. 
                      We use cookies to give you a smooth experience. We will never share your details with third parties. 
                      In order to use Women Who Can, you must agree to our Privacy Policy and our cookie policy.</p>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <script src="../../controllers/update_details.js"></script>
    </body>
</html>