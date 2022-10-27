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
      <h1>Register to your account!</h1>
      <form method="POST" action="register.php">
        <p>
          <label class="pseudo">pseudo:</label>
          <input type="text" name="pseudo" required>
        </p>
        <p>
          <label class="password">password:</label>
          <input type="password" name="password" required>
        </p>
        <p>
          <button type="submit" name="btn-sub">submit</button>
        </p>
      </form>

      <div class="log">
        <a href="connexion.php">If you already have an account click <span>here!<span></a>
      </div>
    </body>
</html>