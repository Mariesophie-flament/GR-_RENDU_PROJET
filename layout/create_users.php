<html>
<head>
    <title>Formulaire d'inscription</title>
  </head>
  <body>
    <form method="post" action="creation.php">
      Pseudo : <input type="text" name="Pseudo" placeholder="Entrez votre pseudo" /><br />
      Nom : <input type="name" name="Nom" placeholder="Entrez votre nom" /><br />
      Prenom : <input type="name" name="Prenom" placeholder="Entrez votre prenom" /><br />
      DateNaissance : <input type="date" name="DateNaissance" placeholder="Entrez votre date de naissance" /><br />
      AdresseMail : <input type="email" name="AdresseMail" placeholder="Entrez votre adresse mail" /><br />
      MotDePasse : <input type="text" name="MotDePasse" placeholder="Entrez un mot de passe" /><br />
      <input type="submit" value="Submit" />
    </form>

    <?php
  // Vérifie qu'il provient d'un formulaire
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pseudo = $_POST["Pseudo"];                          
    $nom = $_POST["Nom"];
    $prenom = $_POST["Prenom"];
    $datenaissance = $_POST["Date de Naissance"];
    $adressemail = $_POST["Adresse Mail"];
    $motdepasse = $_POST["Mot de Passe"];

   
    if (!isset($pseudo)){
      die("S'il vous plaît entrez votre pseudo");
    }
    if (!isset($nom)){
      die("S'il vous plaît entrez votre nom");
    }
    if (!isset($prenom)){
        die("S'il vous plaît entrez votre prenom");
    }
    if (!isset($datenaissance)){
        die("S'il vous plaît entrez votre date de naissance");
    }
    if (!isset($adressemail)){
      die("S'il vous plaît entrez votre adresse mail");
  }  
    if (!isset($motdepasse)){
        die("S'il vous plaît entrez votre mot de passe");
    }  
  }

 

  $sql=("INSERT INTO `Utilisateurs`.`Utilisateurs` ( `Pseudo` , `Nom` , `Prenom`, `Date de Naissance`, `Adresse mail`, `Mot de Passe`)   <!-- on met en bdd ce qui vient d'être remplie
  VALUES ( $pseudo, $nom, $prenom, $datenaissance, $adressemail, $motdepasse)");

?>
  </body>
</html>
