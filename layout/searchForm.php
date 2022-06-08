<html>
  <head>
    <title>Recherche</title>
	<meta charset="UTF-8">
    <link href="../assets/css/dashboard.css" rel="stylesheet" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  </head>

  <body>
    <div >
        <form method="post">
        Titre du livre 
        <input type="text" name="titre">
        Nom de l'auteur 
        <input type="text" name="auteur">
        Date de publication
        <input type="date" name="date">
        <input type="submit" name="Rechercher" value="Rechercher">  
        </form>
    </div>
  </body>
</html>


<?php
/* 
    $titre = isset($_POST["titre"])? $_POST["titre"] : "";
    $auteur= isset($_POST["auteur"])? $_POST["auteur"] : "";
    $date = isset($_POST["date"])? $_POST["date"] : "";
    if ($titre != "" && $auteur != "") {
        include('../script/utils.php');
        include('../script/bdd_livres_connect.php'); 
        $sql = "SELECT Titre, DatePublication FROM Livres";
        echo($sql);
        $result_search = executeQuery($connexion, $sql);
        if ($result_search->rowCount() > 0) {
            echo "<table>";
            foreach ($result_search as $row) {
                echo "<tr>";
                    echo "<td>" . $row["Titre"] . "</td>";
                    echo "<td>" . $row["DatePublication"] . "</td>";
                    echo "</tr>";
                if ($titre == $row["Nom"]){
                    echo "<tr>";
                    echo "<td>" . $row["Titre"] . "</td>";
                    echo "<td>" . $row["DatePublication"] . "</td>";
                    echo "</tr>";
                }
            }
            echo "</table>";
        }

       
    }
    else{
        echo("Pas trouvé");
    }
    */
?>

