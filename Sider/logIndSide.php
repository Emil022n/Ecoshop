    <?php require "header.php";?>
    <main>
     <div id="mainCont1">
       <p>Log Ind</p>
       <form action="php/login.php" method="post">
         Username: <input type="text" name="formUsername" id="formUsername"><br>
         Password: <input type="password" name="formPassword" id="formPassword"><br>
       <input type="submit" value="Log ind">
     </div>
     <div id="mainCont3">
        <p>Registrer dig</p>
        <form action="php/register.php" method="post">
          Username: <input type="text" name="formUsername" id="formUsername"><br>
          Password: <input type="password" name="formPassword" id="formPassword"><br>
          <input type="submit" value="Log ind">
     </div>
    </main>
  <?php require "footer.php";?>
  </div>
</body>
</html>