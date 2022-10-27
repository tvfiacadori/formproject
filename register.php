<?php

session_start();

require_once "process/conn.php";


if (isset($_POST["password"]) && isset($_POST["pseudo"])) {
   $password=$_POST["password"];
   $pseudo=$_POST["pseudo"];

   #Senha segura

   $pwd = password_hash($password, PASSWORD_DEFAULT);



   #teste de senha segura com caracter, letra maiuscula, minuscula e numeros 

   $regex = '/(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z !"#$%&\'()*+,-.\/:;<=>?@\[\\\\\]^_`{|}~]{8,255}/';
   $carac = preg_match($regex, $password);


   
      # Conexão com DB
      $sql = $conn->prepare("SELECT * FROM user WHERE pseudo = ?");
      $sql->execute(array($pseudo));


      #pesquisa na tablela
      $user = $sql->fetch(PDO::FETCH_OBJ);


      #Verificar se o nickname nao existe 
      if($sql->rowCount() > 0) {
        echo "Pseudo déjà existant <br><hr>";

        #E se nao existir, registrar
      } else {
         
         #Verificar se o espaço não esta vazio
         if ((!empty($pseudo)) && (!empty($pwd)) && $carac) {
            
            $result=$conn->query("INSERT INTO user(pseudo, password) VALUE('$pseudo', '$pwd')");
            // echo "Les données ont été transmises";


            $_SESSION['pseudo'] = $pseudo;

            header("Location: /dashboard.php?error=Welcome $pseudo!");
            
         } else {
         echo "Votre mot de passe doit comporter 8 caractères et au moins une majuscule";
         }
      
      }
}
   
