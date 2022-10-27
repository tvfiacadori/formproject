<?php

session_start();
//require_once "process/conn.php";

$pseudo = $_SESSION['pseudo'];

// var_dump($_SESSION);

echo "<h1>Bonjour $pseudo</h1>";

?>


<div>
<a href="index.php">Logout</a>
</div>