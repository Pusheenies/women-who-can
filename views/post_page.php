<html>
    <head>
        <title>Post</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <!--StyleSheets-->
        <link rel="stylesheet" type="text/css" href="../_css/style.css" />
        <link rel="stylesheet" type="text/css" href="../_css/post_page.css" />
        <!--Fonts-->
        <link rel="stylesheet" type="text/css" href="../_css/ss-pika.css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    </head>
    <body>

        <div id="header">
            <a href="#"><img src="../_img/logo/LogoWhite.png"></a>
        </div>

        <!-- NAV -->
        <div id="nav" style="height:52px;">
            <div class="container">
                <ul>
                    <li><a href="#" class="peach">Home</a></li>
                    <li><a href="#">Personal</a></li>
                    <li><a href="#">Item 1</a></li>
                    <li><a href="#">Item 2</a></li>
                    <li><a href="#">Item 3</a></li>
                    <li class="icon"><a href="#">🔎</a></li>
                </ul>
            </div>
        </div>

        <div class="container" id="post_title">
            <!--post title-->
        </div>

        <div class="container" id="post_username_date">
            <!--post date and username-->
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
                echo "<div class='text-center no_comment'>Sign in to add a comment!</div>";
            } else {
                echo "<form action='../models/leave_comment.php' method='post'>
                        <div class='text-center'>
                        <div class='form-group row'>
                        <label for='leave_comment'>Leave a comment</label>
                        <textarea name='leave_comment' class='form-control' id='leave_comment'></textarea>
                        </div>
                        <div><input type='submit' value='Leave comment' id='confirm_comment' class='peach'></div>
                        </div></form>";
            }
            ?>
        </div>      
        



        <div class="clear"></div> <!--needed for the footer to be at the bottom-->
        <!-- FOOTER -->
        <div id="footer">
            <div class="container">
                <h4>Women Who Can &copy;</h4>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <script src="../controllers/post_controller.js"></script>
    </body>
</html>