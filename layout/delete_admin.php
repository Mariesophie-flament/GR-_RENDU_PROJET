<html>
  <head>
        <title>Suppression</title>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
        <link href="../assets/css/approve.css" rel="stylesheet" type="text/css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  </head>

  <body> 
    <a href="dashboard_admin.php" text-align="center"><button style="color : #fff; background-color: #002D72" >Retour</button></a>
    <div class ="form">   
    <form method="post">                                                  
        Titre <input type="text" name="titre"  /><br /><br>
        <a href="dashboard_admin.php" text-align="center"><button style="color : #fff; background-color: #002D72" >Supprimer</button></a>
    </form>
    </div>
</body>
</html>
<?php
    /** Connexion aux BDD */
    include('../script/utils.php');
    include('../script/bdd_livres_connect.php');
    /** Variables formulaire */
    $titre = isset($_POST["titre"])? $_POST["titre"] : "";
    /** Supprimer dans les 3 tables */
    $sql = "DELETE FROM Livres WHERE Titre = '$titre'";
    $result_search = executeQuery($connexion, $sql);
    $sql = "DELETE FROM LivresAuteurs WHERE IdLivres = '$titre'";
    $result_search = executeQuery($connexion, $sql);
    echo "<p> Les livres à supprimer:</p>";
    $sql = "SELECT * FROM  LivresAuteurs";
	$result_search = executeQuery($connexion, $sql);
	if (!$result_search) {
        $connexion = null;
        exit();
    }
    /** Afficher la liste de livres */
    if ($result_search->rowCount() > 0) {
        $connexion = false;
        echo "<table>";
        echo "<th >" . "Titre" . "</th>";
        echo "<td>" . "<br> " . "</td>";
        echo "<td>" . "<br>" . "</td>";
        echo "<th >" . "Auteur" . "</th>";
        foreach ($result_search as $row) {
            echo "<tr>";
            echo "<td >" . $row["IdLivres"] . "</td>";
            echo "<td>" . "<br> " . "</td>";
            echo "<td>" . "<br>" . "</td>";
            echo "<td>" . $row["IdAuteurs"] . "</td>";
            echo "<td>" . "<br> " . "</td>";
            echo "<td>" . "<br>" . "</td>";
            echo "<td>" . "<br>" . "</td>";
            echo "<td>" . $row["Editeur"] . "</td>";
            echo "</tr>";
        }
            echo "</table>";
        } else {
            echo "<p> Aucun résultats trouvés. </p>";
        }    
?>

