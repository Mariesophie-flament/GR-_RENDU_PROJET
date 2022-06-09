<html>

    <head>
        <Title>
            Delete Comportement
        </Title>
    </head>

    <body>
    <?php

    if (isset($_POST['Delete'])) {
        $sql = "SELECT * FROM Books";
        if ($titre != "") {
            $sql .= " WHERE Titre LIKE '%$titre%'"; 
        }
        if (mysqli_num_rows($result_search) == 0) {
        //LIVRE INEXISTANT
        echo "Cannot delete. Book not found. <br>"; } 
        else {
            while ($data = mysqli_fetch_assoc($result_search) ) { 
                $id = $data['ID'];
                echo "<br>"; }
        // ON SUPPRIME L ELEMENT
        $sql = "DELETE FROM Books WHERE ID = valeur"; 

        echo "Delete successful. <br>";

        //ON AFFICHE LES AUTRES LIVRES DANS LA BDD
        $sql = "SELECT * FROM Books";

        while ($data = mysqli_fetch_assoc($result_search)) {
            echo "ID: " . $data['ID'] . "<br>";
            echo "Titre: " . $data['Titre'] . "<br>"; 
            echo "Prenom : " . $data['Prenom'] . "<br>"; 
            echo "IdAuteurs: " . $data['IdAuteurs'] . "<br>"; 
            echo "DatePublication: " . $data['DatePublication'] . "<br>"; 
            echo "Editeur: " . $data['Editeur'] . "<br>"; 
            echo "Edition: " . $data['Edition'] . "<br>";
            echo "Collection: " . $data['Collection'] . "<br>"; 
            echo "<br>";
        } 
        }
    }
    echo "</table>";
    ?>

    </body>     

</html>