<?php
session_start();

//redirect if not logged in
if (!isset($_SESSION["id"])){
    header("Location: ../login/index.html");
    return;
}

include "../pdo_php.php";
include "../class_lib.php";

//creating a new Search instance if one of the fields is not empty
if (!empty($_REQUEST["title"]) || !empty($_REQUEST["author"]) || !empty($_REQUEST["isbn"]) ||
    !empty($_REQUEST["genre"]) || !empty($_REQUEST["rating"]) || !empty($_REQUEST["book_format"])){
    $search= new Search($_REQUEST["title"], $_REQUEST["author"], $_REQUEST["isbn"],
                        $_REQUEST["genre"], $_REQUEST["rating"], $_REQUEST["book_format"]);
                        
    $search_results= $search->searchByXParams($pdo);
    $_SESSION["search_results"]= $search_results;
    header("Location: search_results.php");
    return;
}
?>

<html>
    <head>
        <title>Pusheen Library - Search & Borrow Books</title>
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
                <li class="nav-item active">
                    <a class="nav-link" href="book_search.php">Search & Borrow Books</a>
                </li>
              </ul>
              <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../logout/logout.php">Logout</a>
                </li>
              </ul>
        </nav>
        
        <div class="container">
            <h1>Search & Borrow Books</h1>
            <div id="unique-section" class="row">
                <div class="section" style="width:100%;">
                <?php
                //////notifications///////
                if (isset($_SESSION["success_delete"])){
                    echo "<p style='text-align:center;'>" . $_SESSION["success_delete"] . "</p>";
                    unset($_SESSION["success_delete"]);

                }
                if (isset($_SESSION["success_edit"])){
                    echo "<p style='text-align:center;'>" . $_SESSION["success_edit"] . "</p>";
                    unset($_SESSION["success_edit"]);
                }
                if (isset($_SESSION["rating"])){
                    echo "<p style='text-align:center;'>" . $_SESSION["rating"] . "</p>";
                    unset($_SESSION["rating"]);
                }
                if (isset($_SESSION["success_borrow"])){
                    echo "<p style='text-align:center;'>" . $_SESSION["success_borrow"] . "</p>";
                    unset($_SESSION["success_borrow"]);
                }
                ?>
                <form action="" method="post" class="col-sm-6 offset-sm-3">
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="The Hobbit" autofocus/>
                    </div>
                    <div class="form-group">
                        <label for="author">Author:</label>
                        <input type="text" name="author" id="author" class="form-control" placeholder="J. R. R. Tolkien"/>
                    </div>
                    <div class="form-group">
                        <label for="isbn">ISBN:</label>
                        <input type="text" name="isbn" id="isbn" class="form-control" placeholder="618260307"/>
                    </div>
                    <div class="form-group">
                        <label>Genre:</label>
                        <select class="form-control" name="genre">
                            <option value="">Select a genre (optional)</option>
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
                        <label>Rating:</label>
                        <select class="form-control" name="rating">
                            <option value="">Select a rating (optional)</option>
                            <option value="5">5</option>
                            <option value="4">4</option>
                            <option value="3">3</option>
                            <option value="2">2</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Format:</label><br>
                        <input type="hidden" name="book_format" value="">
                        <input type="radio" name="book_format" value="Book"> Book<br>
                        <input type="radio" name="book_format" value="Audiobook"> Audiobook<br>
                    </div>
                    <div class="text-center">
                        <input type="submit" value="Search" class="btn button toughBtn"/>
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