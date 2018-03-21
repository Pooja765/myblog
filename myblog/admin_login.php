<html>
  <head>
    <title>Login page</title>
  </head>

  <body>
    <div style="margin-left:450px">
    <form action="admin.php" method="post">
      <h1>Login</h1>
      Username: <input type="text" name="uname" required><br>
      Password: <input type="text" name="pwd" required><br>
     <input type="submit" value="Submit" onclick="myfunction()">
    </form>
    </div>

    <script>
     function myfunction()
     {
       alert("Successfully logged in");
     }
    </script>
  </body>
</html>
