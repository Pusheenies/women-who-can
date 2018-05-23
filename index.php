<!DOCTYPE html>
<html>
    <head>
        <title>Women Who Can - Home</title>
        <meta charset="UTF-8">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!--StyleSheets-->
        <link rel="stylesheet" type="text/css" href="/women-who-can/views/_css/style.css" />
        <!--Fonts-->
        <link rel="stylesheet" type="text/css" href="/women-who-can/views/_css/ss-pika.css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="views/_css/styles.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="container">
            <div id="header">
                <!-- Display Sign in or Sign out button -->
                <?php
                    $member_id = filter_input(INPUT_COOKIE, 'member_id', FILTER_SANITIZE_STRING);
                    $security = filter_input(INPUT_COOKIE, 'security', FILTER_SANITIZE_STRING);
                    if (!$member_id || !$security) {
                        echo "<div id='sign-in'>
                                <a class='btn btn-outline-light' href='views/pages/sign_in.php'>Sign in</a>
                              </div>";
                    } else {
                        echo "<div id='sign-out'>
                                <a class='btn btn-outline-light' href='controllers/sign_out_controller.php'>Sign out</a>
                              </div>";
                    }
                ?>
              <a href="#"><img src="/women-who-can/views/_img/logo/LogoWhite.png"></a>
            </div>
            <!-- NAV -->
            <div id="nav">
              <div class="container">
                <!-- TODO: Expandable menu when screen size is small -->
                <ul>
                  <li><a href="#" class="peach">Home</a></li>
                  <li><a href="#">Comedy</a></li>
                  <li><a href="#">Innovation</a></li>
                  <li><a href="#">Learning</a></li>
                  <li><a href="#">Role Models</a></li>
                  <li><a href="#">Science</a></li>
                  <li><a href="#">Sign In</a></li>
                  <li class="icon"><a href="#">🔎</a></li>
                </ul>
              </div>
            </div>
            
            <!-- NEXT -->
            <div id="nextlink">
              <div class="container">
                <!-- COMMENT OUT IF NEEDED -->
                <a href="#" class="left">&larr; Newer Posts</a>
                <a href="#" class="right">Older Posts &rarr;</a>
              </div>
              <div class="clear"></div>
            </div>

            <!-- FOOTER -->
            <div id="footer">
                <div class="container">
                  <h4>Women Who Can &copy;</h4>
                  <p>Ts and Cs Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>

        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script>
            var myDiv = $('.review');
            myDiv.text(myDiv.text().substring(0,150))
        </script>
        <!-- Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
      </body>
</html>
