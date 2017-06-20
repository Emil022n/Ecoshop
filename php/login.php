
 <?php
  $formUsername = $_POST['formUsername'];
  $formPassword = $_POST['formPassword'];
  
  require_once "connect.php";
  $statement = $dbh->prepare("SELECT * FROM users WHERE dbUsername = ? AND dbPassword = ?");
  $statement->bindParam(1, $formUsername);
  $statement->bindParam(2, $formPassword);
  $statement->execute();

  if(empty($statement->fetch()) ){
    // Brugeren har indtastet forkert login

    header("Refresh:1;url=http://http://localhost/ecoshop/Sider/logIndSide.php", true, 303);
        ?>
    <script type="text/javascript">
      window.alert("Wrong Login")
    </script>
    <?php
  } else {
    // brugeren har indtastet korrekt login
    echo "CONGLATURATION";
  }
  $dbh = null;
?>
