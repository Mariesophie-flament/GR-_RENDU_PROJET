<?php
    @ob_start();
    session_start();
    ?>
<html>
    <head>
        <title>Connexion</title>
		    <meta charset="UTF-8">
        <link href="assets/css/UX.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="assets/js/vue-connexion.js" async></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    </head>

  <body>
    <div id="form-validation">
        <form method="post">
        Nom d'utilisateur  <br>
        <input type="text" name="nom"><br><br>
        Mot de passe <br>
        <input type="password" name="password"><br><br>
        <input type="submit" name="submit" value="Entrer">  
        </form>
    </div>


    <?php
      $nom = isset($_POST["nom"])? $_POST["nom"] : "";
      $password= isset($_POST["password"])? $_POST["password"] : "";
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
    }
    ?>
  </body>
</html>