<?php


// Vérifie qu'il provient d'un formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titre = $_POST["titre"];
    $datepubli = $_POST["Date de publication"];
    $editeur = $_POST["Editeur"];
    $collection = $_POST["Collection"];
    $edition = $_POST["Edition"];
    $nom = $_POST["Nom de l'Auteur"];


    if (!isset($titre)){
      die("S'il vous plaît entrez le titre du livre");
    }
    if (!isset($datepubli)){
      die("S'il vous plaît entrez la date de publication du livre");
    }
    if (!isset($editeur)){
        die("S'il vous plaît entrez l'éditeur du livre");
    }
    if (!isset($collection)){
        die("S'il vous plaît entrez la collection du livre");
    }
    if (!isset($edition)){
        die("S'il vous plaît entrez l'édition du livre");
    }  
    if (!isset($nom)){
      die("S'il vous plaît entrez le nom de l'auteur");
    }


//
// Mettre dans dossier script 
//

$titre = isset($_POST["Titre"])? $_POST["Titre"] : "";
$collection = isset($_POST["Collection"])? $_POST["Collection"] : "";
$dateDePublication = isset($_POST["DateDePublication"])? $_POST["DateDePublication"] : "";
$editeur = isset($_POST["Editeur"])? $_POST["Editeur"] : "";
$edition = isset($_POST["Edition"])? $_POST["Edition"] : "";
$nom = isset($_POST["Nom"])? $_POST["Nom"] : "";
$prenom = isset($_POST["Prenom"])? $_POST["Prenom"] : "";

//identifier votre BDD
$db_handle = mysqli_connect('localhost', 'root', 'root');
$database = "Books";

$db_found = mysqli_select_db($db_handle, $database);

//si le bouton est cliqué

if (isset($_POST["Mise a Jour"])) 
{
    if ($db_found) {
        $sql = "SELECT * FROM Livres";
        if($Titre !=""){
            $sql .="WHERE Titre LIKE '%$Titre%'";
            if($nom !="" AND $prenom !=""){
                $sql .= "AND Nom LIKE '%$nom%' AND Prenom LIKE '%$prenom%'"; 
            }
        }
    }

    $result = mysqli_query($db_handle, $sql);
    //tester s'il y a de résultat
    if (mysqli_num_rows($result) == 0) {
        //le livre recherché n'existe pas
        echo "Le livre n'a pas été trouvé";
    } 
    else {

        $sql ="UPDATE Livres SET $titre = :Titre, 
                $dateDePublication =: DateDePublication, 
                $editeur =: Editeur,
                /* PROBLEME 
                $collection =: Collection, 
                $edition =: Edition*/ 
                WHERE id = : id"

        //on trouve le livre recherché
        while ($data = mysqli_fetch_assoc($result)) {
            echo "ID: " . $data['ID'] . "<br>";
            echo "Titre: " . $data['Titre'] . "<br>";
            echo "DateDePublication: " . $data['dateDePublication'] . "<br>";
            echo "Editeur: " . $data['Editeur'] . "<br>";
            echo "Collection: " . $data['Collection'] . "<br>";
            echo "Edition: " . $data['Edition'] . "<br>";
        } 
    }
} 
else {
    echo "Database not found";
} 

//fermer la connexion
mysqli_close($db_handle);


