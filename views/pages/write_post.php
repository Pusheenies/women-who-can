<!DOCTYPE html>
<html>
    <head>
        <title>WWC - Write Post</title>
        <meta charset="UTF-8">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!--StyleSheets-->
        <link rel="stylesheet" type="text/css" href="../_css/style.css" />
        <link rel="stylesheet" type="text/css" href="../_css/styles.css" />
        <!--Fonts-->
        <link rel="stylesheet" type="text/css" href="../_css/ss-pika.css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <!-- If not signed in, redirect to sign in page -->
        <?php
        session_start();
        $member_id = filter_input(INPUT_COOKIE, 'member_id', FILTER_SANITIZE_STRING);
        $security = filter_input(INPUT_COOKIE, 'security', FILTER_SANITIZE_STRING);

        if (!$member_id || !$security) {
            header("Location:sign_in.php");
        }
        // If not a writer, redirect to home page
        if ($security != 'writer') {
            header("Location:../../index.php");
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
                            <li><a href="profile.php">Profile</a></li>
                            <li><a href="#">Comedy</a></li>
                            <li><a href="#">Innovate</a></li>
                            <li><a href="#">Learn</a></li>
                            <li><a href="#">Inspire</a></li>
                            <li><a class="peach" href="#">Write</a></li>
                            <li class="icon"><a href="#">🔎</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- BOTTOM SECTION -->
            <div class="container mb-5">
                <h2>New Post</h2>

                <div class="container mt-2">
                    <form id="post_form" method="post" class="post-form mb-3" enctype="multipart/form-data" action="../../models/write_post_model.php">
                        <div class="form-group">
                            <label class="sr-only" for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Title" required autofocus/>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="category">Category</label>
                            <select id="category" name="category" class="form-control custom-select" required>
                                <option selected value="">Choose a category...</option>
                                <option value="1">Laugh</option>
                                <option value="2">Innovate</option>
                                <option value="3">Learn</option>
                                <option value="4">Inspire</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="post-image" id="post-image"/>
                                    <label class="custom-file-label" for="post-image" id="img-label">Choose an image</label>
                                </div>
                            </div>
                        </div>
                        <div id="uploaded-image"><!-- Placeholder for an uploaded image if editing --></div>
                        <div class="form-group">
                            <label class="sr-only" for="content">Content</label>
                            <textarea class="form-control" id="content" rows="20" placeholder="Tell us your story..." name="content" required></textarea>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="hashtags">Hashtags</label>
                            <input type="text" name="hashtags" id="hashtags" class="form-control" placeholder="#inspiration #creativity #learn" required />
                        </div>
                        <input type="submit" value="SUBMIT" id="submit-btn" class="peach btn-block button"/>
                    </form>
                    <div id="error-msg" class="text-center m-4"><!-- Error message for unsuccessful sign in --></div>
                </div>
            </div>


            <!-- NEXT -->
            <div id="nextlink">
              <div class="container">
                <!-- COMMENT OUT IF NEEDED -->
<!--                <a href="#" class="left">&larr; Newer Posts</a>
                <a href="#" class="right">Older Posts &rarr;</a>-->
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

        <!-- Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <script src="../../controllers/write_post_controller.js" type="text/javascript"></script>
      </body>
</html>
