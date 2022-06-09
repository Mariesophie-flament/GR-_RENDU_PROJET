<html>
  <head>
    <title>Formulaire pour rentrer un livre</title>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <link href="../assets/css/form.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="../assets/js/vue-form-create-livre.js" async></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  </head>
  <body>
    <form method="post">                                                  
      Titre  <input type="text" name="titre"  /><br />
      Nom de l'auteur  <input type="text" name="nomauteur" /><br />
      Prénom de l'auteur  <input type="text" name="prenomauteur" /><br />
      Date de publication <input type="date" name="datepub" /><br />
      Editeur <input type="text" name="editeur" /><br />
      Collection  <input type="text" name="collection" /><br />
      Edition  <input type="text" name="edition"  /><br /><br>
      <input type="submit" style="color : #fff; background-color: #B12A50" value="Créer" />
    </form>  
  </body>
</html>

<?php 
  include('../script/utils.php');
  include('../script/bdd_livres_connect.php');
  include('../script/check_creation.php');

  $titre = isset($_POST["titre"])? $_POST["titre"] : "";
  $datepub= isset($_POST["datepub"])? $_POST["datepub"] : "";
  $editeur = isset($_POST["editeur"])? $_POST["editeur"] : "";
  $collection= isset($_POST["collection"])? $_POST["collection"] : "";
  $edition = isset($_POST["edition"])? $_POST["edition"] : "";
  $nomauteur= isset($_POST["nomauteur"])? $_POST["nomauteur"] : "";
  $prenomauteur= isset($_POST["prenomauteur"])? $_POST["prenomauteur"] : "";

  if ($titre == ""){
    echo "<p class='erreur'>Le formulaire n'est pas valide.</p>";
  }
  else if($datepub == ""){
    echo "<p class='erreur'>Le formulaire n'est pas valide.</p>";
  }
  else if($editeur ==""){
    echo "<p class='erreur'>Le formulaire n'est pas valide.</p>";
  }
  else if($collection ==""){
    echo "<p class='erreur'>Le formulaire n'est pas valide.</p>";
  }
  else if($edition == ""){
    echo "<p class='erreur'>Le formulaire n'est pas valide.</p>";
  }
  else if($nomauteur ==""){
    echo "<p class='erreur'>Le formulaire n'est pas valide.</p>";
  }
  else if($prenomauteur ==""){
    echo "<p class='erreur'>Le formulaire n'est pas valide.</p>";
  }
  else{
    $sql = "INSERT INTO `Livres` (`Titre`, `DatePublication`, `Editeur`, `Collection`, `Edition`)
    VALUES('$titre', '$datepub', '$editeur', '$collection', '$edition');";
    $result_search = executeQuery($connexion, $sql);
    $sql = "INSERT INTO `Auteurs` (`Nom`,`Prenom`) 
    VALUES ('$nomauteur','$prenomauteur');";
    $result_search = executeQuery($connexion, $sql);
    $sql = "INSERT INTO `LivresAuteurs`(`IdLivres`,`IdAuteurs`) VALUES ('$titre','$nomauteur');";
    $result_search = executeQuery($connexion, $sql);

    echo "<p class='valide'> L'enregistrement a été enregistré et est en attente d'approbation.</p>";
    echo "<script type='text/javascript'>document.location.replace('dashboard.php');</script>"; 
  }

  
                                    
?> 






