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
    <form method="post" action="creation.php">                                                  
      Titre  <input type="text" name="Titre"  /><br />
      Date de publication <input type="date" name="DatePublication" /><br />
      Editeur <input type="text" name="Editeur" /><br />
      Collection  <input type="text" name="Collection" /><br />
      Edition  <input type="text" name="Edition"  /><br />
      Nom de l'auteur  <input type="text" name="NomAuteur" /><br /><br>
      <input type="submit" value="Créer" />
    </form>
  </body>

  
</html>
<?php include 'check_creation.php';                                       // exécute le check qui va vérifier si tout est rempli et rentrer en bdd 
?>                                                                        











