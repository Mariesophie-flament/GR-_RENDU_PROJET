<?php
    include("bdd_users_connect.php"); 

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
    }



?>