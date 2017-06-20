    
    <?php 
      
      require "header.php";
    ?>
    <main>
     <div class="mainContLogin">
       <form action="../php/login.php" method="post">
         Username: <input type="text" name="userName" id="userName"><br>
         Password: <input type="password" name="password" id="password"><br>
       <input type="submit" value="Log ind">
     </div>

    </main>
  <?php require "footer.php";?>
  </div>
</body>
</html>