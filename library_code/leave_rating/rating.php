<?php
session_start();

//redirect if not logged in
if (!isset($_SESSION["id"])){
    header("Location: ../login/index.html");
    return;
}

include "../pdo_php.php";
include "../class_lib.php";

if(isset($_REQUEST["confirm_rating"]) && isset($_REQUEST["book_id"])){
    // $sql="CALL deleteBook(:bookid)";
    // $stmt= $pdo->prepare($sql);
    // $stmt->execute(array(":bookid" => $_REQUEST["book_id"]));

    //has the user borrowed the book before?
    $sql= "SELECT * FROM borrows WHERE user_id=:user_id AND book_id=:book_id";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(":user_id" => $_SESSION["id"], ":book_id" => $_REQUEST["book_id"]));
    $row= $stmt->fetch(PDO::FETCH_ASSOC);
    if($row===false){
        //RETURN TO DASHBOARD instead?
        $_SESSION["rating"]= "Sorry, you cannot leave a rating for a book you haven't borrowed.";
        header("Location: ../book_search/book_search.php");
        return;
    } else { //does a rating exist already?
        $sql= "SELECT * FROM ratings WHERE user_id=:user_id AND book_id=:book_id";
        $stmt= $pdo->prepare($sql);
        $stmt->execute(array(":user_id" => $_SESSION["id"], ":book_id" => $_REQUEST["book_id"]));
        $row= $stmt->fetch(PDO::FETCH_ASSOC);
        if($row===false){ //if not rated yet, create new rating
            $sql= "INSERT INTO ratings (user_id, book_id, rating) VALUES (:user_id, :book_id, :rating)";
            $stmt= $pdo->prepare($sql);
            $stmt->execute(array(":user_id" => $_SESSION["id"],
                                    ":book_id" => $_REQUEST["book_id"],
                                    ":rating" => $_REQUEST["rating"]));
            //RETURN TO DASHBOARD instead?
            $_SESSION["rating"]= "Your rating has been recorded.";
            header("Location: ../book_search/book_search.php");
            return;
        } else { //update the rating
            $sql= "UPDATE ratings SET rating=:rating WHERE user_id=:user_id AND book_id=:book_id";
            $stmt= $pdo->prepare($sql);
            $stmt->execute(array(":user_id" => $_SESSION["id"],
                                    ":book_id" => $_REQUEST["book_id"],
                                    ":rating" => $_REQUEST["rating"]));
            //RETURN TO DASHBOARD instead?
            $_SESSION["rating"]= "Rating update successful.";
            header("Location: ../book_search/book_search.php");
            return;
        }
    }
}


//looking for book details (id passed in GET request)
$stmt= $pdo->prepare("SELECT *
                        FROM books b
                        JOIN authors_books ab ON ab.book_id = b.book_id
                        JOIN authors a ON a.author_id = ab.author_id
                        WHERE b.book_id = :id");
$stmt->execute(array(":id" => $_REQUEST["book_id"]));
$row= $stmt->fetch(PDO::FETCH_ASSOC);
$book= new Book($row["book_id"], $row["isbn"], $row["title"], $row["image_url"],
                $row["genre_id"], $row["book_format"], $row["stock"], $row["book_condition"],
                $row["publication_year"], $row["book_location"], $row["date_added"],
                $row["author_id"], $row["author_name"]);
?>

<html>
    <head>
    <title>Pusheen Library - Leave a rating</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="../_css/style.css">
        <link rel="stylesheet" href="../_css/toughBtn.css">
        <!--Fonts-->
        <link rel="stylesheet" type="text/css" href="../steph/_css/ss-pika.css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="../_css/styles.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
    <nav class="navbar navbar-expand navbar-dark" style="height:70px;"> 
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../profile/index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../book_search/book_search.php">Search & Borrow Books</a>
                </li>
              </ul>
              <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../logout/logout.php">Logout</a>
                </li>
              </ul>
        </nav>
        <div class="container">
            <h1>Leave a rating: <?=$book->getTitle()?></h1>
            <div id="unique-section" class="row">
            <div class="section" style="width:100%;">
                <div class="text-center">
                    <img src="<?=$book->getImage_url()?>" alt="<?=$book->getTitle()?>" style="margin-bottom:20px;">
                </div>
                <div class="col-sm-6 offset-sm-3">
                    <p><b>Title: </b><?=$book->getTitle()?></p>
                    <p><b>Author: </b><?=$book->getAuthor_name()?></p>
                    <p><b>ISBN: </b><?=$book->getIsbn()?></p>
                    <p><b>Format: </b><?=$book->getBook_format()?></p>
                    <p><b>Publication year: </b><?=$book->getPublication_year()?></p>
                </div>
    
                <form action="" method="post" class="col-sm-6 offset-sm-3">
                    <div class="form-group">
                        <p><b>Rating: </b>
                        <input type="hidden" name="rating" value="">
                        <input type="radio" name="rating" value="1" class="rating" style="margin-left:20px;"> 1
                        <input type="radio" name="rating" value="2" class="rating" style="margin-left:20px;"> 2
                        <input type="radio" name="rating" value="3" class="rating" style="margin-left:20px;"> 3
                        <input type="radio" name="rating" value="4" class="rating" style="margin-left:20px;"> 4
                        <input type="radio" name="rating" value="5" class="rating" style="margin-left:20px;"> 5
                        </p>
                    </div>
                    <div class="text-center">
                        <input type="submit" name="confirm_rating" value="Confirm rating of <?=$book->getTitle()?>"  class="btn toughBtn"/>
                        <br>
                        <a href="../book_search/search_results.php">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
        </div>

        
     
        <!-- Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    </body>
</html>