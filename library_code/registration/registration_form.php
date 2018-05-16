<html>
<head>
     <title>Pusheen Library - Registration</title>
        <meta charset="UTF-8">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="../_css/style.css">
        <!--Fonts-->
        <link rel="stylesheet" type="text/css" href="../steph/_css/ss-pika.css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="../_css/styles.css" rel="stylesheet" type="text/css"/>
</head>
    <body>              
        <div class="container">
            <h1>Register</h1>
            <div>
                <b class="text-white" style="float:right">Already a member? <a href="../login/index.html" class="text-white" style="text-decoration:underline;">Sign in</b></a>
                <br>
            </div>
            <div id="unique-section" class="row">
                <div class="section">
                    <form method="post" action="register.php">  
                        <div class="form-group">
                            <label>First Name:</label>
                            <input type="text" name="forename" class="form-control" placeholder="First Name" required autofocus/>
                        </div> 
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="surname" class="form-control" placeholder="Last Name" required/>
                        </div>
                        <div class="form-group">
                            <label>Address 1:</label>
                            <input type="text" name="address_line1" class="form-control" placeholder="Address line 1" required/>
                        </div> 
                        <div class="form-group">
                            <label>Address 2:</label>
                            <input type="text" name="address_line2" class="form-control" placeholder="Address line 2"/>
                        </div>
                        <div class="form-group">
                            <label>Address 3:</label>
                            <input type="text" name="address_line3" class="form-control" placeholder="Address line 3"/>
                        </div>  
                        <div class="form-group">
                            <label>City:</label>
                            <input type="text" name="city" class="form-control" placeholder="City" required/>
                        </div>   
                        <div class="form-group">
                            <label>Postcode:</label>
                            <input type="text" name="postcode" class="form-control" placeholder="Post Code" required/>
                        </div>              
                        <div class="form-group">
                            <label>Email:</label>
                        <input type="email" name="email" class="form-control" placeholder="pusheen@pusheen.com" required/>
                        </div> 
                        <div class="form-group">
                            <label>Phone:</label>
                        <input type="text" name="phone" class="form-control" placeholder="Phone" required/>
                        </div> 
                        <div class="form-group">
                            <label>Username:</label>
                            <input type="text" name="username" class="form-control" placeholder="Username" required/>
                        </div>  
                        <div class="form-group">
                            <label>Password:</label>
                        <input type="password" name="password" class="form-control" placeholder="*******" required/>
                        </div> 
                        <div class="form-group">
                            <label>Confirm Password:</label>
                            <input type="password" name="cpassword" class="form-control" placeholder="*******" required/>
                        </div>   
                        <div class="form-group">
                            <input type="submit" name="register" class="btn btn-primary"/>
                        </div>
                    </form>
                </div>  
            </div>
        </div>
      
               
         <!-- Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <script src="ajax.js"></script>
    </body>
</html>
