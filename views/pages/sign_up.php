<!DOCTYPE html>
<html>
    <head>
        <title>WWC - Sign up</title>
        <meta charset="UTF-8">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!--StyleSheets-->
        <link rel="stylesheet" type="text/css" href="../_css/style.css" />
        <link rel="stylesheet" type="text/css" href="../_css/styles.css"/>
        <!--Fonts-->
        <link rel="stylesheet" type="text/css" href="../_css/ss-pika.css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    </head>

    <body>
        <div id="container">
            <div id="header" class="header-w-btn">
                <div id='corner-btn'>
                    <a class='btn btn-outline-light' href='index.php'>Home</a>
                </div>
                <a href="../../index.php"><img src="../_img/logo/LogoWhite.png"></a>
            </div>
    
            <div class="container">
                <h1 class="title">Welcome</h1>
            </div>
            <div class="text-center">Already a member? 
                <a href="sign_in.php" class="peach">Sign in</a> to access your personal profile
            </div>
        
            <div class="container">
                <form method="post" action="../../models/sign_up_model.php" class="single-form">
                    <label class="sr-only">First Name:</label>
                    <input type="text" name="forename" class="form-control" placeholder="First Name" required autofocus/>
                    <br>            
                    <label class="sr-only">Last Name</label>
                    <input type="text" name="surname" class="form-control" placeholder="Last Name" required/>
                    <br>             
                    <label class="sr-only">Email:</label>
                    <input type="email" name="email" class="form-control" placeholder="Please enter a valid email address" required/>
                    <br>               
                    <label class="sr-only">Username:</label>
                    <input type="text" name="username" class="form-control" placeholder="Username" required/>
                    <br>                       
                    <label class="sr-only">Profile Description:</label>
                    <textarea class="form-control" placeholder="Please tell us something about yourself" style="height:200px;" name="profile_description" required></textarea>
                    <br> 
                    <label class="sr-only">Password:</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter password" required/>
                    <br>           
                    <label class="sr-only">Confirm Password:</label>
                    <input type="password" name="cpassword" class="form-control" placeholder="Confirm password" required/>
                    <br>       
                    <input type="submit" name="signup" value="SIGN UP" class="peach btn-block button"/>
                </form>
            </div>
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