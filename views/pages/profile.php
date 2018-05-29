<!-- <!DOCTYPE html> -->
<html>
    <head>
        <title>WWC - Profile</title>
        <meta charset="UTF-8">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <!--StyleSheets-->
        <link rel="stylesheet" type="text/css" href="../_css/style.css" />
        <link rel="stylesheet" type="text/css" href="../_css/profile.css" />
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

            <div id="about" class="right">
                <h2>About me</h2>
                <span id="profile_image"><!-- profile image --></span>
                <p>Forename: <span id="forename"><!-- forename --></span></p>
                <p>Surname: <span id="surname"><!-- surname --></span></p>
                <p>Username: <span id="username"><!-- username --></span></p>
                <p>Email: <span id="email"><!-- email --></span></p>
                <p>Profile description: <span id="profile_description"><!-- profile description --></span></p>
                <a href="update_details.php" class="" id="edit_details">Edit details</a>
            </div>

            <div class="container" id="own_posts">
                <!-- if writer: own posts -->
            </div>

            <div class="container" id="favourites">
                <!-- favourite posts -->
            </div>

            <div class="container" id="followers">
                <!-- followers -->
            </div>

            <div class="container" id="followed">
                <!-- followed members -->
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
        <script src="../../controllers/profile.js"></script>
    </body>
</html>