<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
  </head>
    <body>
      <h1>Login to your account!</h1>
      <form method="POST" action="login.php">
        <p>
          <label>pseudo:</label>
          <input type="text" name="pseudo" required>
        </p>
        <p>
          <label>password:</label>
          <input type="password" name="password" required>
        </p>
        <p>
          <button type="submit" name="btn-sub">submit</button>
        </p>
        <br>       
      </form>

    </body>
</html>