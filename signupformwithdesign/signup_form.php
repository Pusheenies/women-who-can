<html>

<!DOCTYPE html>
<html>
    <head>
        <title>Women Who Can - Sign in</title>
        <meta charset="UTF-8">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!--StyleSheets-->
        <link rel="stylesheet" type="text/css" href="../_css/style.css" />
        <link href="../_css/styles.css" rel="stylesheet" type="text/css"/>
        <!--Fonts-->
        <link rel="stylesheet" type="text/css" href="../_css/ss-pika.css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <!-- Redirect to Home page if user is signed in -->
</head>

<body>
    <div id="container">
     <div id="header" class="header-w-btn">
                <div id='corner-btn'>
                    <a class='btn btn-outline-light' href='index.php'>Home</a>
                </div>
                <a href="../../index.php"><img src="../_img/logo/LogoWhite.png"></a>
            </div>
    
       <div class="container mb-5">
        <h1 class="title">Welcome</h1>
        <h2>Sign up to access more of the amazing features of our site</h2><br>
        
            <div class="container mb-5">
                <form method="post" action="signup.php class="form-signin single-form mb-3">
                      <label class="sr-only">First Name:</label>
                        <input type="text" name="forename" class="form-control col-sm-5" placeholder="First Name" required autofocus/><br>
                                       
                        <label class="sr-only">Last Name</label>
                        <input type="text" name="surname" class="form-control col-sm-5" placeholder="Last Name" required/><br>
                                       
                        <label class="sr-only">Email:</label>
                        <input type="email" name="email" class="form-control col-sm-5" placeholder="Please enter a valid email address" required/><br>
                                      
                        <label class="sr-only">Username:</label>
                        <input type="text" name="username" class="form-control col-sm-5" placeholder="Username" required/><br>
                         
                        
                        <label class="sr-only">Profile Description:</label>
                        <textarea class="form-controlcol-sm-5" placeholder="Please tell us something interesting about yourself" style="height:200px; width:325px;font-size:12pt; align-vertical:" name="profile_description" required></textarea><br><br>
                            
                        <label class="sr-only">Password:</label>
                        <input type="password" name="password" class="form-controlcol-sm-5" placeholder="Enter password" required/><br><br>
                                   
                        <label class="sr-only">Confirm Password:</label>
                        <input type="password" name="cpassword" class="form-controlcol-sm-5" placeholder="Comfirm password" required/><br><br>
                               
                        <input type="submit" name="signup" class="peach btn-block button" />
                  
                 </form>
                
                <div class="text-center">Already a member? 
                    <a href="login.php">Sign in</a> to access your personal profile
                </div>
            
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
        <script src="../../controllers/sign_in_controller.js"></script>
    </body>

</html>