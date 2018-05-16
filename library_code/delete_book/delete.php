<?php
session_start();

//redirect if not logged in
if (!isset($_SESSION["id"])){
    header("Location: ../login/index.html");
    return;
}

//if not staff, redirect to login
if ($_SESSION["security"]==="user"){
    header("Location: ../login/index.html");
    return;
}

include "../pdo_php.php";
include "../class_lib.php";

if(isset($_REQUEST["delete"]) && isset($_REQUEST["book_id"])){
    $sql="CALL deleteBook(:bookid)";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(":bookid" => $_REQUEST["book_id"]));
    
    //RETURN TO DASHBOARD instead?
    $_SESSION["success_delete"]= "Deletion successful.";
    header("Location: ../book_search/book_search.php");
    return;
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
    <title>Pusheen Library - Delete book</title>
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
            <h1 class="text-center">Delete: <?=$book->getTitle()?></h1>
            <div id="unique-section" class="row">
            <div class="section" style="width:100%;">
                <div class="text-center">
                    <img src="<?=$book->getImage_url()?>" alt="<?=$book->getTitle()?>" style="margin-bottom:20px;">
                </div>
                <div class="col-sm-6 offset-sm-3">
                    <p><b>Title: </b><?=$book->getTitle()?></p>
                    <p><b>Author: </b><?=$book->getAuthor_name()?></p>
                    <p><b>ISBN: </b><?=$book->getIsbn()?></p>
                    <p><b>Genre: </b><?=$book->getGenre_id()?></p>
                    <p><b>Format: </b><?=$book->getBook_format()?></p>
                    <p><b>Stock: </b><?=$book->getStock()?></p>      <!-- to delete? -->
                    <p><b>Book condition: </b><?=$book->getBook_condition()?></p>
                    <p><b>Publication year: </b><?=$book->getPublication_year()?></p>
                    <p><b>Book location: </b><?=$book->getBook_location()?></p>
                    <p><b>Date added: </b><?=$book->getDate_added()?></p>
                </div>
                <form action="" method="post" class="col-sm-6 offset-sm-3">
                    <div class="text-center">
                        <input type="submit" name="delete" value="Confirm deletion of <?=$book->getTitle()?>" class="btn toughBtn"/>
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