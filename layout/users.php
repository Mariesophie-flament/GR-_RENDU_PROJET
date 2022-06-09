<html>
  <head>
    <title>Approbation</title>
		<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <link href="../assets/css/approve.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  </head>

  <body>
      <form method="post">
      <?php
    

	include('../script/utils.php');
    include('../script/bdd_users_connect.php'); 
    $sql = "SELECT * FROM  Utilisateurs WHERE Approuve = '0'";
	$result_search = executeQuery($connexion, $sql);
		
        if (!$result_search) {
            $connexion = null;
            exit();
        }

        if ($result_search->rowCount() > 0) {
            $connexion = false;
            echo "<table>";
            echo "<th >" . "" . "</th>";
            echo "<th >" . "Pseudo" . "</th>";
            echo "<td>" . "<br> " . "</td>";
            echo "<td>" . "<br>" . "</td>";
            echo "<th >" . "Nom" . "</th>";
            echo "<td>" . "<br> " . "</td>";
            echo "<td>" . "<br>" . "</td>";
            echo "<td>" . "<br>" . "</td>";
            echo "<th >" . "Prénom " . "</th>";
            echo "<td>" . "<br> " . "</td>";
            echo "<td>" . "<br>" . "</td>";
            echo "<td>" . "<br>" . "</td>";
            echo "<th >" . "Date de naissance " . "</th>";
            echo "<td>" . "<br> " . "</td>";
            echo "<td>" . "<br>" . "</td>";
            echo "<th >" . "Adresse Electronique " . "</th>";
            foreach ($result_search as $row) {
                echo "<tr>";
                ?> <td ><input type="radio" name="drone" value="<?php $result_search?>"> <br/></td>
                <?php
                echo "<td >" . $row["Pseudo"] . "</td>";
                echo "<td>" . "<br> " . "</td>";
                echo "<td>" . "<br>" . "</td>";
                echo "<td>" . $row["Nom"] . "</td>";
                echo "<td>" . "<br> " . "</td>";
                echo "<td>" . "<br>" . "</td>";
                echo "<td>" . "<br>" . "</td>";
                echo "<td>" . $row["Prenom"] . "</td>";
                echo "<td>" . "<br> " . "</td>";
                echo "<td>" . "<br>" . "</td>";
                echo "<td>" . "<br>" . "</td>";
                echo "<td >" . $row["DateNaissance"] . "</td>";
                echo "<td>" . "<br> " . "</td>";
                echo "<td>" . "<br>" . "</td>";
                echo "<td>" . $row["AdresseElectronique"] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p> Personne à approuver. </p>";
        }
    ?>
<div class ="form">   
<form method="post">                                                  
      Nom de l'utilisateur <input type="text" name="nom"  /><br /><br>
      <a href="dashboard.php" text-align="center"><button style="color : #fff; background-color: #002D72" >Approuver</button></a>
    </form>
    </div>
</body>
 </html>

 <?php
        $nom = isset($_POST["nom"])? $_POST["nom"] : "";
        $sql = "UPDATE `Utilisateurs` SET `Approuve`= '1'
        WHERE `Nom` = '$nom' ";
        $result_search = executeQuery($connexion, $sql);
        echo "<p class='valide'> L'utilisateur est approuvé.</p>";
        echo "<script type='text/javascript'>document.location.replace('dashboard_admin.php');</script>"; 
?>


