<?php

    $servername = "localhost"; 
    $dbname = "Utilisateurs"; 
    $user = "root"; 
    $password = ""; 

    try{
        $connexion = new PDO("mysql:host=".$servername. ";dbname=".$dbname, $user, $password);
        foreach ($connexion->query('SELECT * FROM Utilisateurs') as $row){
            print_r($row);
        }
    }catch(PDOException $e){
        print "Erreur!:" . $e->getMessage() ." <br/>" ;
        die();
    }
?>

