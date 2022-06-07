<html>
    <head>
        <title>Connexion</title>
		    <meta charset="UTF-8">
        <link href="assets/css/UX.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="assets/js/vue-connexion.js" async></script>
    </head>

  <body>
    <form method="post">
      Nom d'utilisateur  <br>
      <input type="text" name="nom"><br><br>
      Mot de passe <br>
      <input type="password" name="password"><br><br>
      <input type="submit" name="button2" value="Ajouter">  
    </form>

    <?php
     $nom = isset($_POST["nom"])? $_POST["nom"] : "";
     $password= isset($_POST["password"])? $_POST["password"] : "";
     //$approuve = isset($_POST["approuve"])? $_POST["approuve"] : "";
     if ($nom != "" && $password != "") {
      echo "<h3>" . "Bonjour, $nom. </h3>" . "<br>" ;

      include('script/bdd_users_connect.php'); 
     
        
      
    }
    ?>
  </body>
</html>