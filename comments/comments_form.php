<html>
  <head>
    <title>Women Who Can - Comments form</title>
    <meta charset="UTF-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="../_css/style.css">
    <!--Fonts-->
    <link rel="stylesheet" type="text/css" href="../steph/_css/ss-pika.css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="../_css/styles.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
      
    <div class="container">   
      <h1>Comments</h1>
      <div id="unique-section" class="row">
        <div class="section">
            <form action="comments.php" method="post">
            <div class="form-group">
              <textarea name="comment_content" placeholder="Please add your comments here" style="height:200px; width:300px;font-size:12pt; align-vertical:" class="form-control">
              </textarea> 
            </div>
            <div class="form-group">
              <input type="submit" name="comment_submit" class="btn btn-primary" />
            </div>
          </form>
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
    <script src="ajax.js">
    </script>
  </body>
</html>