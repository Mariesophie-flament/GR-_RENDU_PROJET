<html>
    <head>
        <title>Formulaire d'inscription</title>
        <link href="../assets/css/form.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="../assets/js/vue-form-create-utilisateur.js" async></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  </head>

  <body>

    <form method="post"> <!-- MISE EN PAGE DU FORMULAIRE -->
      Pseudo  <input type="text" name="pseudo" /><br />
      Nom  <input type="text" name="nom"  /><br />
      Prénom  <input type="text" name="prenom" /><br />
      Date de Naissance  <input type="date" name="datenaissance"  /><br />
      Adresse Mail  <input type="text" name="adressemail" /><br />
      Mot de Passe  <input type="password" name="motdepasse"  /><br /><br>
      <input type="submit" style="color : #fff; background-color: #B12A50" value="Créer" />
    </form>
    
  </body>
</html>

<?php
    // LIEN AVEC LA BDD
    include('../script/utils.php');
    include('../script/bdd_users_connect.php');
  
    // ENREGISTRE LES ELEMENTS ECRITS PAR L'UTILISATEUR 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $pseudo = isset($_POST["pseudo"])? $_POST["pseudo"] : "";
        $nom= isset($_POST["nom"])? $_POST["nom"] : "";
        $prenom = isset($_POST["prenom"])? $_POST["prenom"] : "";
        $datenaissance= isset($_POST["datenaissance"])? $_POST["datenaissance"] : "";
        $adressemail = isset($_POST["adressemail"])? $_POST["adressemail"] : "";
        $motdepasse= isset($_POST["motdepasse"])? $_POST["motdepasse"] : "";

        // REQUETE SQL AFIN D'INSERER LES ELEMENTS DU NOUVEL UTLISATEUR DANS LA BDD 
        $sql = "INSERT INTO `Utilisateurs` (`Pseudo`, `Nom`, `Prenom`, `DateNaissance`, `AdresseElectronique`, `MotDePasse`) VALUES
        ('$pseudo', '$nom', '$prenom', '$datenaissance', '$adressemail', '$motdepasse')";

        $result_search = executeQuery($connexion, $sql);

        // LIEN VERS LA PAGE DE CONNEXION
        echo "<script type='text/javascript'> document.location.replace('../index.php'); </script>"; 
    }
?>
