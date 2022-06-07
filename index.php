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

      //include('script/bdd_users_connect.php'); 
     
      $database = "Utilisateurs";
      $db_handle = mysqli_connect('localhost', 'root', '' );
      $db_found = mysqli_select_db($db_handle, $database);
      if(! $db_found) {
        die('Could not connect:' . mysqli_connect_error());
      }
      else{
        $sql = "SELECT Nom, MotDePasse, Approuve FROM Utilisateurs";
        $result = mysqli_query($db_handle, $sql);
        while ($data = mysqli_fetch_array($result, 2)) {
          echo "Nom :{$data[0]}  <br> ".
          "Mot de passe : {$data[1]} <br> ";
        }
        $logs = array(
          data[0] => data[1]
        );
        $connexion = false;
        for ($i = 0; $i < count($logs); $i++) {
          if ($logs[$nom] == $password) {
            $connexion = true;
            break;
          }
          else if (! $logs[$nom] == $password){
            echo "<p class='erreur'>Le mot de passe n'est pas valide</p>";
          }
          else if(! $logs[$nom]){
            echo "<p class='erreur'>L'utilisateur n'existe pas</p>";
            echo "<script type='text/javascript'>document.location.replace('layout/create_users.php');</script>";
          }
        }
        if ($connexion) {
          echo "Connexion okay.";
          echo "<script type='text/javascript'>document.location.replace('layout/dashboard.php');</script>";         
        } 
    }
    ?>
  </body>
</html>
