<?php
$servername = "localhost"; //127.0.0.1
$bddname = "Utilisateurs";
$user = "root";
$password = "root";

try {
    $connexion = new PDO("mysql:host=" . $servername . ";dbname=" . $bddname, $user, $password);
} catch (PDOException $exception) {
    echo "<p>Un problème est survenue lors de la connexion:";
    echo "<span>" . $exception . "</span></p>";
    die();
}




?>
