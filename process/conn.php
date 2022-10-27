<?php

$user = "root";
$pass = "";
$dbname = "account";
$host = "localhost";
$path = "mysql:host=$host;dbname=$dbname;charset=utf8";



try {

  $conn = new PDO($path, $user, $pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

  

} catch (PDOException $e) {

  throw new PDOException($e->getMessage() , (int)$e->getCode());

  // mensagem de erro plus completa, onde expecifica o erro em si
}



?>




