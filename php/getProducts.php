<?php 
  require_once "connect.php";
  
  $statement = $dbh->prepare("SELECT * FROM products ORDER BY id DESC");
  $statement->execute();
  
  while ($row = $statement->fetch()) {
    ?>
  
    <div class="products">
      <img src="img/<?php echo $row['imgSrc']; ?>" alt="<?php echo $row['imgAlt']; ?>">
        <p class="pHead2"><?php echo $row['heading']; ?></p>
         <hr>
          <p><?php echo $row['content']; ?></p>
          <div class="priceCont"><p>Pris: <?php echo $row['price']; ?>kr.</p></div>
          <p>Udgivet: <?php echo $row['published']; ?></p>
          <div class="buttonCont">
            <button type="button">Køb</button>
          </div>
    </div>
  
    <?php
  }
$dbh = null;
?>