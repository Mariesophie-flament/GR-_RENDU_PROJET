<html>
  <head>
    <title>Formulaire pour rentrer un livre</title>
  </head>
  <body>
    <form method="post" action="creation.php">                                                  
      Titre : <input type="text" name="Titre" placeholder="Entrez le titre du livre" /><br />
      DatePubli : <input type="date" name="Date de publication" placeholder="Entrez la date de publication du livre" /><br />
      Editeur : <input type="name" name="Editeur" placeholder="Entrez l'éditeur du livre" /><br />
      Collection : <input type="text" name="Collection" placeholder="Entrez la collection du livre" /><br />
      Edition : <input type="text" name="Edition" placeholder="Entrez l'édition du livre" /><br />
      NomAuteur : <input type="name" name="Nom de l'Auteur" placeholder="Entrez le nom de l'auteur" /><br />
      <input type="submit" value="SubmitLivres" />
    </form>
  </body>

  
</html>
<?php include 'check_creation.php';                                       // exécute le check qui va vérifier si tout est rempli et rentrer en bdd 
?>                                                                        











