<?php
require 'PHPMailerAutoload.php';
ob_start();
require "dbconnection.php";

$message = '';

if (isset($_POST["forget-password"])) {
    if (!empty($_POST["member-email"])) {
        $email = trim($_POST["member-email"]);
    }
    
    if (empty($error_message)) {
        $query = $con->prepare("SELECT email FROM profiles WHERE email =?");
        $query->execute(array($email));
        $member = $query->fetchAll(PDO::FETCH_ASSOC);
    }
    
    if (!empty($member)) {
        $msg = 'yes';
        $selector = bin2hex(random_bytes(8));
        $token = random_bytes(32);
        // Token expiration
        $expires = new DateTime('NOW');
        //$cal_date = DateTime::createFromFormat('d-m-Y H:i:s', $expires . ' 00:00:00');
        $interval = new DateInterval('PT01H');
        $expires->add($interval);
        $currentDate = $expires->format('U');
        // Delete any existing tokens for this user
        $query = $con->prepare("delete from password_reset where email=?");
        $query->execute(array($email));
        //Create new token
        $query = $con->prepare("insert into password_reset (email,selector,token,expires) values ('" . $email . "', '" . $selector . "','" . hash('sha256', $token) . "','" . $currentDate . "');");
        $query->execute();
        define("pusheen_blog", "localhost/women-who-can/phpmailer/");
        
        $mail = new PHPMailer;
        $mail->SMTPDebug = 0; // Enable
        $mail->isSMTP(); // Set mailer to use SMTP
        $mail->Host = "smtp.gmail.com"; // Set host name
        $mail->SMTPAuth = true; // Set this true if SMTP host requires authentification to send mail
        $mail->Username = "womenwhocan.orgs@gmail.com"; // Profile username
        $mail->Password = 'Getintotech24$'; // Profile email password
        $mail->SMTPSecure = "tls"; // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587; // TCP port to connect to
        $mail->setFrom('womenwhocan.orgs@gmail.com', 'WomenWhoCan');
        $mail->addAddress($email, $member[0]["email"]);
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = 'Forget Password Recovery';
        $mail->Body = "<div>Hello " . $member[0]["email"] . ",<br><br><p>Click here to recover your password<br>
<a href='" . pusheen_blog . "reset.php?selector=" . $selector . "&validator=" . bin2hex($token) . "'> " . pusheen_blog . "/reset.php?selector=" . $selector . "&validator=" . bin2hex($token) . "</a><br><br></p>Regards,<br>Women Who Can.</div>";

        if (!$mail->send()) {
            $message = "There was an error sending your email, please try again";
        } else {
            $message = 'Please check your email to reset your password';
        }
    } else {
        $message = "This email address doesn't match our records";
    }
}
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
                <div class="text-center">Please enter your email to reset your password</div>
                <div class="container">  
                    <form id="formforget" method="post" name="formforget" class= "single-form mb-3"> 
                        <div class="form-group">
                            <label class="sr-only" for="password">Password</label>
                            <input type="email" name="member-email" placeholder="Email address" class="form-control" required>
                        </div>
                        <input type="submit" type="submit" value="SUBMIT" class="peach btn-block button" name="forget-password" id="forget-password">
                    </form>
                    <div id="error-msg" class="text-center m-4">
                        <?=$message?>
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
        <!-- Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">
        </script>
    </body>
</html>
