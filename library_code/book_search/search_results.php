<?php
session_start();

//redirect if not logged in
if (!isset($_SESSION["id"])){
    header("Location: ../login/index.html");
    return;
}

include "../class_lib.php";
$security= $_SESSION["security"];
$results= $_SESSION["search_results"];
$book_objects= [];

foreach($results as $book){
    $book_objects[]= new Book($book["book_id"], $book["isbn"], $book["title"], $book["image_url"],
                            $book["genre_id"], $book["book_format"], $book["stock"], $book["book_condition"],
                            $book["publication_year"], $book["book_location"], $book["date_added"],
                            $book["author_id"], $book["author_name"]);
}
?>

<html>
    <head>
    <title>Pusheen Library - Search results</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="../_css/search_results.css">
        <link rel="stylesheet" href="../_css/style.css">
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
        <h1 class="text-center">Your results</h1>
        <div class="flex-container">
            
        <?php
            if (!empty($book_objects)){
                foreach($book_objects as $book){
                    echo "<div class='card'>";
                    echo "<div class='card-body'>";
                    echo "<img src=" . $book->getImage_url() . "><br>";
                    echo "<h5>" . $book->getTitle() . "</h5><br>";
                    echo "By " . $book->getAuthor_name() . " (" . $book->getPublication_year() . ")" . "<br>";
                    echo "<em>" . $book->getBook_format() . "</em><br>";
                    echo "</div>";
                    echo "<div class='card-footer'>";
                    if ($security=="staff" || $security=="admin"){
                        echo "<a href='../edit_book/edit.php?book_id=".$book->getBook_id()."' class='button' style='margin-bottom:5px;'>Edit</a>";
                        echo "<a href='../delete_book/delete.php?book_id=".$book->getBook_id()."' class='button'>Delete</a>";
                    } else {
                        if($book->getStock()>=1){
                            echo "<a href='../borrow_book/borrow.php?book_id=".$book->getBook_id()."' class='button' style='margin-bottom:5px;'>Borrow</a>";
                        } else {
                            echo "Unavailable at the moment.";
                        }
                        echo "<a href='../leave_rating/rating.php?book_id=".$book->getBook_id()."' class='button'>Review</a>";
                    }
                    echo "</div></div>";
                    
                }
            } else {
                echo "<div class='text-center' style='width:100%;margin-top:70px;'><p style='color:white;font-size:20px;'>Sorry, no results match your search.</p></div>";
            }
        ?>
        </div>
            <div class="text-center">
                <a href="book_search.php" class="button" style="margin-top:20px; margin-bottom:40px;">Search again</a>
            </div>
        </div>

        <!-- Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    </body>
</html>