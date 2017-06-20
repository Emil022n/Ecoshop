 <?php 
  session_start();
  

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans" rel="stylesheet">
  <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
</head>
<body>
 <script src="https://use.fontawesome.com/d333651ce6.js"></script> 
  <div class="wrapper">
    <header>
      <div id="headerCont">
        <div id="headerIcons">
          <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
          <a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
        </div>
        <div id="headerCart">
          <a href="#">Min konto</a>
          <i class="fa fa-shopping-cart" aria-hidden="true"></i>
          <a href="#">Min kurv</a>
        </div>
      </div>
      <img src="img/banner.jpg" alt="Organic Surge hudcreme">
      <nav>
        <a href="index.php">Forside</a>
        <a href="shop.php">Shop</a>
        <a href="#">Garanti</a>
        <a href="#">Om os</a>
        <a href="#">Kontakt</a>
        <?php
          if(isset($_SESSION['userName']) && !empty($_SESSION['userName'])){
            echo "<a href='../php/logOut.php'>Log ud</a>";
          }
          else {
            echo "<a href='logIndSide.php'>Log ind</a>";
          }
        ?>
        
      </nav>
      <?php 
       if(isset($_SESSION['userName'])){
        echo "<p id='welcomeMsg'> Velkommen ".$_SESSION['userName']."</p>";
       
       }
      ?>
    </header>