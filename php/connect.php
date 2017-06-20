<?php
  $serverName = "localhost";
  $dbName = "eksa_ecoshop";
  $username = "root";
  $password = "";
  
  try {
    
  $dbh = new PDO ("mysql:host=$serverName;dbname=$dbName; charset=utf8", $username, $password);

  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  }
  catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
?>