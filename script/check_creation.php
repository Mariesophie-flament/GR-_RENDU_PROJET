


<?php


  // Vérifie qu'il provient d'un formulaire
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titre = $_POST["titre"]; 
    $datepubli = $_POST["Date de publication"];
    $editeur = $_POST["Editeur"]; 
    $collection = $_POST["Collection"];
    $edition = $_POST["Edition"];
    $nom = $_POST["Nom de l'Auteur"];
  }

  

  $sql=("INSERT INTO `Books`.`Livres` ( `Titre` , `DatePublication` , `Editeur`, `Collection`, `Edition`, `Approuve`)   -- on met en bdd ce qui vient d'être rempli--
  VALUES ( $titre , $datepubli, $editeur, $collection, $edition, false)");

  $sql=("INSERT INTO `Books`.`LivresAuteurs` (`Livres`, `Auteurs`) 
  VALUES ( $titre, $nom) ");
  
  
    $titre= 'titre';                                                                 //màj des variables pour permettre la Visualisation
    $datepubli= 'datepubli';
    $editeur= 'editeur';
    $collection= 'collection';
    $edition= 'edition';
    $auteur= 'nom';

?>







