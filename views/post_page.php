<?php
session_start();
$_SESSION["post_id"]= $_REQUEST["post"];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>WWC</title>
        <meta charset="UTF-8">  
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <!--StyleSheets-->
        <link rel="stylesheet" type="text/css" href="_css/style.css" />
        <link rel="stylesheet" type="text/css" href="_css/post_page.css" />
        <link rel="stylesheet" type="text/css" href="_css/styles.css" />
        <!--Fonts-->
        <link rel="stylesheet" type="text/css" href="_css/ss-pika.css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    </head>
    <body>

        <div id="container">      
            <div id="header" class="header-w-btn">
                <div id='corner-btn'>
                    <a class='btn btn-outline-light' href='../controllers/sign_out_controller.php'>Sign out</a>
                </div>
                <a href="../index.php"><img src="_img/logo/LogoWhite.png"></a>
            </div>

            <!-- NAV --> 
            <div id="nav" class="navbar navbar-expand-md navbar-light">
                <div class="container">
                    <ul>
                        <li><a class="peach" href="../index.php">Home</a></li>
                    </ul>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav full">
                            <li><a href="pages/profile.php">Profile</a></li>
                            <li><a href="pages/nav_search_results.php?cat=1">Laugh</a></li>
                            <li><a href="pages/nav_search_results.php?cat=2">Innovate</a></li>
                            <li><a href="pages/nav_search_results.php?cat=3">Learn</a></li>
                            <li><a href="pages/nav_search_results.php?cat=4">Inspire</a></li>
                            <li class="icon"><a href="pages/search.html">🔎</a></li>
                        </ul>
                    </div>       
                </div>
            </div>

        <div class="container" id="post_title">
            <!--post title-->
        </div>

        <div class="container" id="post_username_div">
            <span id="post_username"><!--post author's username--></span>
            <?php
            $member_id= filter_input(INPUT_COOKIE, 'member_id', FILTER_SANITIZE_STRING);
            if(!$member_id){
                echo "<p><a href='pages/sign_in.php' class='peach'>To follow/unfollow this member, please sign in!</a></p>";
            } else {
                echo "<p><span id='follow_btn'></span></p>";
            }
            ?>
        </div>

        <div class="container" id="post_category_date">
            <!--post category and date-->
        </div>

        <div class="container" id="add_fav">
        <?php
        $member_id= filter_input(INPUT_COOKIE, 'member_id', FILTER_SANITIZE_STRING);
        if(!$member_id){
            echo "<p><a href='pages/sign_in.php' class='peach'>To add this post to your favourites, please sign in!</a></p>";
        } else {
            echo "<p><span id='favourites_btn'></span></p>";
        }
        ?>
        </div>


        <div class="container" id="post_content">
            <!--post content-->
        </div>

        <div class="container" id="hashtags">
            <!--post hashtags-->
        </div>

        <div class="container" id="comments">
            <!--post comments-->
        </div>

        <div class="container" id="leave_comment">
            <?php
            $member_id= filter_input(INPUT_COOKIE, 'member_id', FILTER_SANITIZE_STRING);
            if(!$member_id){
                echo "<div class='text-center no_comment'><a href='pages/sign_in.php' class='peach'>To comment, please sign in!</a></div>";
            } else {
                echo "<form action='../models/leave_comment.php' method='post'>
                        <div class='text-center'>
                        <div class='form-group row'>
                        <label for='leave_comment'>Leave a comment</label>
                        <textarea name='leave_comment' class='form-control' id='leave_comment'></textarea>
                        </div>
                        <input type='hidden' name='member_id' value='".$member_id."'>
                        <input type='hidden' name='post_id' value='".$_SESSION["post_id"]."'>
                        <div><input type='submit' value='Leave comment' id='confirm_comment' class='peach'></div>
                        </div></form>";
            }
            ?>
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

        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <script src="../controllers/post_controller.js"></script>
    </body>
</html>