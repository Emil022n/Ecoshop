<?php
  $formImgSrc = $_POST['imgSrc'];
  $formImgAlt = $_POST['imgAlt'];
  $formHeading = $_POST['heading'];
  $formContent = $_POST['content'];
  $formPrice = $_POST['price'];
  $published = time();
  

  require_once "connect.php";

  $statement = $dbh->prepare("INSERT INTO products(heading, imgSrc, imgAlt,  published, content, price ) 
  VALUES(?, ?, ?, ?, ?, ?) ");
  $statement->bindParam(1, $formHeading);
  $statement->bindParam(2, $formImgSrc);
  $statement->bindParam(3, $formImgAlt);
  $statement->bindParam(4, $published);
  $statement->bindParam(5, $formContent);
  $statement->bindParam(6, $formPrice);
  $statement->execute();
  header("location: ../sider/shop.php");
?>