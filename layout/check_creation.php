int titre;
date datepubli;
char editeur;
char collection;
char edition;
char nom;



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
    }

  

    $sql=("INSERT INTO `Books`.`Livres` ( `Titre` , `DatePublication` , `Editeur`, `Collection`, `Edition`, `Approuve`)   <!-- on met en bdd ce qui vient d'être rempli
    VALUES ( $titre , $datepubli, $editeur, $collection, $edition, false)");

    $sql=("INSERT INTO `Books`.`LivresAuteurs` (`Livres`, `Auteurs`) 
    VALUES ( $titre, $nom) ");
    
    try{                                                                                         //pour le message d'erreur
      $connexion = new PDO("mysql:host=".$servername. ";dbname=".$dbname, $user, $password);
      foreach ($connexion->query('SELECT * FROM Utilisateurs') as $row){
          print(Votre livre a bien été enregistré);
      }
      $connexion= null;
    }
    catch(PDOException $e){
    print "Erreur!:" . $e->getMessage() ." <br/>" ;
    die();
    }
  
    titre= 'titre';                                                                 //màj des variables pour permettre la Visualisation
    datepubli= 'datepubli';
    editeur= 'editeur';
    collection= 'collection';
    edition= 'edition';
    auteur= 'nom;'

?>