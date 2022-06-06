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
     if ($nom != "" && $password != "") {
      echo "<h3>" . "Bonjour, $nom. </h3>" . "<br>" ;
      /**include('script/bdd_users_connect.php'); 
        $sql_search=" SELECT * FROM Utilisateurs ORDER BY Prenom ASC";
              
        $result = $connexion->query($sql_search); 
        if(!$result){
            $connexion= null; 
            exit(); 
        }
        if($result->rowCount() >0){
            echo "<table>";
            foreach($result as $row){
                echo"<tr>";
                echo"<td>".$row["Pseudo"] . "</td>"; 
                echo"<td>".$row["Nom"] . "</td>";
                echo"<td>".$row["Prenom"] . "</td>";
                echo"<td>".$row["DateNaissance"] . "</td>";
                echo"<td>".$row["AdresseElectronique"] . "</td>";
                echo"<td>".$row["MotDePasse"] . "</td>";
                echo"<td>".$row["Approuve"] . "</td>";
                echo"</tr>";
            }
            echo "</table>";
        }
        else{
            echo "<p> Aucun résultat trouvés. </p>"; 
        }*/

        echo "<script type='text/javascript'>document.location.replace('layout/dashboard.php');</script>";
      } 
    ?>
  </body>
</html>