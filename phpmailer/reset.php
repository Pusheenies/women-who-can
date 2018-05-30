<?php
require_once "dbconnection.php";

// Check for tokens
$selector = filter_input(INPUT_GET, 'selector');
$validator = filter_input(INPUT_GET, 'validator');

if ( false !== ctype_xdigit( $selector ) && false !== ctype_xdigit( $validator ) ) :
?>


<!DOCTYPE html>
<html>
    <head>
        <title>WWC - Password Reset</title>
        <meta charset="UTF-8">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!--StyleSheets-->
        <link rel="stylesheet" type="text/css" href="../views/_css/style.css" />
        <link rel="stylesheet" type="text/css" href="../views/_css/styles.css"/>
        <!--Fonts-->
        <link rel="stylesheet" type="text/css" href="../views/_css/ss-pika.css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    </head>

    <body>
        <div id="container">
            <div id="header" class="header-w-btn">
                <div id='corner-btn'>
                    <a class='btn btn-outline-light' href='../index.php'>Home</a>
                </div>
                <a href="../index.php">
                    <img src="../views/_img/logo/LogoWhite.png">
                </a>
            </div>
          
            <div class="container">
                <h1 class="title">Welcome back</h1>
                <div class="text-center">Please enter a new password</div>
                <div class="container">
                    <form action="resetPassword.php" method="post" class="single-form mb-3"> 
                        <div class="form-group">
                            <input type="hidden" name="selector" value="<?php echo $selector; ?>">
                            <input type="hidden" name="validator" value="<?php echo $validator; ?>">
                            <label class="sr-only" for="password">Password</label>
                            <input type="password" name="password" placeholder="••••••••••" class="form-control" required>
                        </div>
                        <input type="submit" type="submit" value="SUBMIT" class="peach btn-block button">
                    </form>
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
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script>
            var myDiv = $('.review');
            myDiv.text(myDiv.text().substring(0,150));
        </script>
        <!-- Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script> 
    </body>
</html>   
        
        
        
        
        
        
        <?php endif; ?>
