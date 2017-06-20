
 <?php
  $formUsername = $_POST['userName'];
  $formPassword = $_POST['password'];
  
  require_once "connect.php";
  $statement = $dbh->prepare("SELECT * FROM users WHERE userName = ? AND password = ?");
  $statement->bindParam(1, $formUsername);
  $statement->bindParam(2, $formPassword);
  $statement->execute();

  if($row = $statement->fetch()) {
    // Brugeren har indtastet korrekt login
    echo "CONGLATURATION";
    session_start();
    
    $_SESSION['userName'] = $row['userName'];
    $_SESSION['password'] = $row['password'];
    header("Refresh:1;url=http://localhost/ecoshop/sider/logIndSide.php", true, 303);

    
  } else {
    // brugeren har indtastet forkert login
        header("Refresh:1;url=http://localhost/ecoshop/sider/logIndSide.php", true, 303);
        echo "Login fejlede";

  }
  $dbh = null;
?>
