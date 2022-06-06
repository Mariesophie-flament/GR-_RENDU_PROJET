<?php

$servername = "localhost"; 
$dbname = "utilisateurs"; 
$user = "root"; 
$password = "root"; 

try{
    $connexion = new PDO("mysql:host=".$servername. ";dbname=".$dbname, $user, $password);
}

catch(PDOException $e){
    echo "<p> Un problème est survenu lors de la connexion</p>";
    die()
}
?>