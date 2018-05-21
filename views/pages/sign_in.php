<!DOCTYPE html>
<html>
    <head>
        <title>Women Who Can - Sign in</title>
        <meta charset="UTF-8">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Redirect to Home page if user is signed in -->
        <?php
            $member_id = filter_input(INPUT_COOKIE, 'member_id', FILTER_SANITIZE_STRING);
            $security = filter_input(INPUT_COOKIE, 'security', FILTER_SANITIZE_STRING);
            if ($member_id && $security) {
                header("Location:../../index.php");
            }
        ?>
    </head>
    <body>
        <!-- TODO: Here goes the navbar -->
        
        <div class="container">
            <h1>Welcome back to Women Who Can</h1>
            <h2>Sign in to access more of the amazing features of our site</h2>
            
            <div id="unique-section" class="row">
                <div class="section">
                    <form id="sign-in" method="post">
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="AdaLovelace" required autofocus/>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="••••••••••" required/>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" name="remember" value="checked" type="checkbox" id="remember">
                                <label class="form-check-label" for="remember">Remember me</label>
                            </div>
                        </div>
                        <input type="submit" value="Sign in" class="btn button"/>
                    </form>
                    <div id="error-msg" class="mt-4"><!-- Error message for unsuccessful sign in --></div>
                    
                    <!-- TODO: Amend link to registration form -->
                    <div>Not a member? <a href="#">Sign up</a> to access your personal profile<div>
                </div>
            </div>
        </div>
        <!-- Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <script src="../../controllers/sign_in_controller.js"></script>
    </body>
</html>
