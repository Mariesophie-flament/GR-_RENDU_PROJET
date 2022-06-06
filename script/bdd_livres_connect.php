<?php

$servername = "localhost"; 
$dbname = "Books"; 
$user = "root"; 
$password = "root"; 

try{

    $connexion = new PDO("mysql:host=".$servername. ";dbname=".$dbname, $user, $password);
}

catch(PDOException $e){
    
    echo "<p> Un problème est survenu lors de la connexion";
    echo "<span>" .$e . "</span></p>";
    die();

}

?>