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

//editing the books table: note that image_url and stock can be NULL in DB
if (!empty($_REQUEST["title"]) && !empty($_REQUEST["isbn"]) && !empty($_REQUEST["genre_id"]) &&
    !empty($_REQUEST["book_format"]) && !empty($_REQUEST["book_condition"]) && !empty($_REQUEST["publication_year"]) &&
    !empty($_REQUEST["book_location"])){
    $sql= "UPDATE books 
            SET title=:title, isbn=:isbn, genre_id=:genre_id, book_format=:book_format, book_condition=:book_condition,
            publication_year=:publication_year, book_location=:book_location
            WHERE book_id=:book_id";
    $stmt= $pdo->prepare($sql);
    $stmt->execute(array(":title" => $_REQUEST["title"],
                        ":isbn" => $_REQUEST["isbn"],
                        ":genre_id" => $_REQUEST["genre_id"],
                        ":book_format" => $_REQUEST["book_format"],
                        ":book_condition" => $_REQUEST["book_condition"],
                        ":publication_year" => $_REQUEST["publication_year"],
                        ":book_location" => $_REQUEST["book_location"],
                        ":book_id" => $_REQUEST["book_id"]
                        ));
    
    //special case for the author
    $stmt= $pdo->prepare("SELECT author_id FROM authors WHERE author_name=:author_name");
    $stmt->execute(array(":author_name" => $_REQUEST["author_name"]));
    $row= $stmt->fetch(PDO::FETCH_ASSOC);
    if ($row===false){   //=if author not in DB:
        //insert it
        $stmt= $pdo->prepare("INSERT INTO authors (author_name) VALUES (:author_name)");
        $stmt->execute(array(":author_name" => $_REQUEST["author_name"]));
        //fetch the newly created ID
        $stmt= $pdo->prepare("SELECT author_id FROM authors WHERE author_name=:author_name");
        $stmt->execute(array(":author_name" => $_REQUEST["author_name"]));
        $row= $stmt->fetch(PDO::FETCH_ASSOC);
    } 
    $stmt= $pdo->prepare("UPDATE authors_books SET author_id=:author_id WHERE book_id=:book_id");
    $stmt->execute(array(":author_id" => $row["author_id"], ":book_id" => $_REQUEST["book_id"]));
    
    //RETURN TO DASHBOARD instead?
    $_SESSION["success_edit"]= "Update successful.";
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
        <title>Pusheen Library - Edit book details</title>
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
            <h1 class="text-center">Edit details: <?=$book->getTitle()?></h1>
            <div id="unique-section" class="row">
            <div class="section" style="width:100%;">
                <div class="text-center">
                    <img src="<?=$book->getImage_url()?>" alt="<?=$book->getTitle()?>" style="margin-bottom:20px;">
                </div>
                <form action="" method="post" class="col-sm-6 offset-sm-3">
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" name="title" id="title" class="form-control" value="<?=$book->getTitle()?>"/>
                    </div>
                    <div class="form-group">
                        <label for="author_name">Author:</label>
                        <input type="text" name="author_name" id="author_name" class="form-control"  value="<?=$book->getAuthor_name()?>"/>
                    </div>
                    <div class="form-group">
                        <label for="isbn">ISBN:</label>
                        <input type="text" name="isbn" id="isbn" class="form-control"  value="<?=$book->getIsbn()?>"/>
                    </div>
                    <div class="form-group">
                        <label>Genre:</label>
                        <select class="form-control" name="genre_id">
                            <option value="<?=$book->getGenre_id()?>"><?=$book->getGenre_id()?></option>
                            <option value="4">Action and Adventure</option>
                            <option value="21">Art</option>
                            <option value="28">Autobiographies</option>
                            <option value="27">Biographies</option>
                            <option value="12">Children's</option>
                            <option value="20">Comics</option>
                            <option value="22">Cookbooks</option>
                            <option value="23">Diaries</option>
                            <option value="19">Dictionaries</option>
                            <option value="2">Drama</option>
                            <option value="18">Encyclopedias</option>
                            <option value="29">Fantasy</option>
                            <option value="10">Guide</option>
                            <option value="9">Health</option>
                            <option value="15">History</option>
                            <option value="7">Horror</option>
                            <option value="24">Journals</option>
                            <option value="16">Math</option>
                            <option value="6">Mystery</option>
                            <option value="11">Novel</option>
                            <option value="17">Poetry</option>
                            <option value="25">Prayer books</option>
                            <option value="13">Religion</option>
                            <option value="5">Romance</option>
                            <option value="3">Satire</option>
                            <option value="14">Science</option>
                            <option value="1">Science fiction</option>
                            <option value="8">Self help</option>
                            <option value="26">Series</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Format:</label><br>
                        <select class="form-control" name="book_format">
                            <option value="<?=$book->getBook_format()?>"><?=$book->getBook_format()?></option>
                            <option value="Book">Book</option>
                            <option value="Audiobook">Audiobook</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="image_url">Image URL:</label>
                        <input type="text" name="image_url" id="image_url" class="form-control"  value="<?=$book->getImage_url()?>"/>
                    </div>
                    <div class="form-group">
                        <label for="stock">Stock:</label>
                        <input type="text" name="stock" id="stock" class="form-control"  value="<?=$book->getStock()?>"/>
                    </div>
                    <div class="form-group">
                        <label for="book_condition">Book condition:</label>
                        <input type="text" name="book_condition" id="book_condition" class="form-control"  value="<?=$book->getBook_condition()?>"/>
                    </div>
                    <div class="form-group">
                        <label for="publication_year">Publication year:</label>
                        <input type="text" name="publication_year" id="publication_year" class="form-control"  value="<?=$book->getPublication_year()?>"/>
                    </div>
                    <div class="form-group">
                        <label for="book_location">Book location:</label>
                        <input type="text" name="book_location" id="book_location" class="form-control"  value="<?=$book->getBook_location()?>"/>
                    </div>
                    <div class="form-group">
                        <label for="date_added">Date added:</label>
                        <input type="text" name="date_added" id="date_added" class="form-control"  value="<?=$book->getDate_added()?>"/>
                    </div>

                    <div class="text-center">
                        <input type="submit" value="Confirm update of <?=$book->getTitle()?>" class="btn toughBtn"/>
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