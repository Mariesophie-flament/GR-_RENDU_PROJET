int titre;
date datepubli;



<?php
  // Vérifie qu'il provient d'un formulaire
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titre = $_POST["titre"]; 
    $datepubli = $_POST["Date de publication"];
    $editeur = $_POST["Editeur"]; 
    $collection = $_POST["Collection"];
    $edition = $_POST["Edition"]; 

    
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
  }

  

  $sql=("INSERT INTO `Books`.`Livres` ( `Titre` , `DatePublication` , `Editeur`, `Collection`, `Edition`, `Approuve`)   <!-- on met en bdd ce qui vient d'être remplie
  VALUES ( $titre , $datepubli, $editeur, $collection, $edition, false)");

  
  
    titre= 'titre';                                                                 //màj des variables pour permettre la Visualisation
    datepubli= 'datepubli';
    editeur= 'editeur';
    collection= 'collection';
    edition= 'edition';


?>
