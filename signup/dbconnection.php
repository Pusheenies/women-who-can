<?php
try {
    
  $con = new PDO ("mysql:host=localhost; dbname=pusheen_blog", "root", "");

//echo "connected";
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  }  
  catch(PDOException $e)
  
  {
      echo "error" .$e->getMessage();
  }   

