<?php
    @ob_start();
    session_start();
     $nom = isset($_POST["nom"])? $_POST["nom"] : "";
     $pass= isset($_POST["pass"])? $_POST["pass"] : "";
     if ($nom != "" && $pass != "") {
		include('script/utils.php');
        include('script/bdd_users_connect.php'); 
	  
	    $sql = "SELECT Nom, MotDePasse FROM Utilisateurs";
	    $result_search = executeQuery($connexion, $sql);
		
        if (!$result_search) {
            $connexion = null;
            exit();
        }

        if ($result_search->rowCount() > 0) {
            $connexion = false;
            foreach ($result_search as $row) {
                if ($nom == $row["Nom"] && $pass == $row["MotDePasse"]){
                    $connexion = true;
                    break;
                }
                else if($nom == $row["Nom"] && $pass != $row["MotDePasse"]){
                    echo "<p class='erreur'>Le mot de passe n'est pas valide</p>";
                }
            }
        } 
         if ($connexion) {
           echo "Connexion okay.";
           echo "<script type='text/javascript'>document.location.replace('layout/dashboard.php');</script>";         
         } 
         else{
            echo "<script type='text/javascript'>document.location.replace('layout/create_user.php');</script>"; 
         }
         
    }
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
        <input type="password" name="pass"><br><br>
        <input type="submit" name="submit" value="Entrer">  
        </form>
    </div>

  </body>
</html>
