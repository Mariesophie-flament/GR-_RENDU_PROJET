<html>
<head>
    <title>Mise à jour</title>
    <meta charset="utf-8">
    <link href="../assets/css/dashboard.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/form.css" rel="stylesheet" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
</head> 
<body>
    <form method="post">                                                   
        Titre  <input type="text" name="titre"  /><br />
        Date de publication <input type="date" name="datepub" /><br />
        Editeur <input type="text" name="editeur" /><br />
        Collection  <input type="text" name="collection" /><br />
        Edition  <input type="text" name="edition"  /><br />
        Nom de l'auteur  <input type="text" name="nomauteur" /><br />
        Prénom de l'auteur  <input type="text" name="prenomauteur" /><br /><br>
        <a href="dashboard.php" text-align="center"><button style="color : #fff; background-color: #B12A50" >Mettre à jour</button></a>
    </form>
</body>
</head>
</html>

<?php
    include('../script/utils.php');
    include('../script/bdd_livres_connect.php');
    include('../script/check_update.php');


    // VERIFICATION QUE TOUS LES CHAMPS SONT REMPLIS
    $titre = isset($_POST["titre"])? $_POST["titre"] : "";
    $datepub= isset($_POST["datepub"])? $_POST["datepub"] : "";
    $editeur = isset($_POST["editeur"])? $_POST["editeur"] : "";
    $collection= isset($_POST["collection"])? $_POST["collection"] : "";
    $edition = isset($_POST["edition"])? $_POST["edition"] : "";
    $nomauteur= isset($_POST["nomauteur"])? $_POST["nomauteur"] : "";
    $prenomauteur= isset($_POST["prenomauteur"])? $_POST["prenomauteur"] : "";

    // REQUETE SQL QUI MET A JOUR EN BDD
    $sql = "UPDATE `Livres` SET `DatePublication`= '$datepub',`Editeur`='$editeur', `Collection`= '$collection', `Edition` = '$edition'
    WHERE `Titre` = '$titre' ";
    $result_search = executeQuery($connexion, $sql);
    $sql = "UPDATE `Auteurs` SET `Nom= '$nomauteur' 
    WHERE `Prenom` = '$prenomauteur' ";
    $result_search = executeQuery($connexion, $sql);
    $sql = "UPDATE `LivresAuteurs` SET `IdAuteurs`= '$nomauteur'
    WHERE `IdLivres` = '$titre' ";
    $result_search = executeQuery($connexion, $sql);

?>