<?php 

session_start();


require_once "process/conn.php";



if (isset($_POST["password"]) && isset($_POST["pseudo"])) {
    $password=$_POST["password"];
    $pseudo=$_POST["pseudo"];
  
      // header("Location: /connexion.php?error=Login and password field must be filled in!");

      

      $sql = $conn->prepare("SELECT * FROM user WHERE pseudo = ?");
      $sql->execute(array($pseudo));

      $user = $sql->fetch(PDO::FETCH_OBJ);

      // var_dump($user);

    if($sql->rowCount() > 0) {

      #Verificação do password_hash
      if (password_verify($password, $user->password)) {

        $_SESSION['pseudo'] = $pseudo;

        // echo $_SESSION['pseudo'];

        header("Location: /dashboard.php?error=Welcome $pseudo!");
        
        echo "Welcome $pseudo";

      } else {
         echo "Le pseudo et le password ne correspondent pas";
      }
    }

}
  
