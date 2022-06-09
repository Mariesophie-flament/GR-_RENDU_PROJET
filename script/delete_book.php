<html>

    <head>
        <Title>
            Delete Comportement
        </Title>
    </head>

    <body>
    <?php
    
    /*if(isset ($_POST["SubmitDelete"])){
        $selected_radio = $_POST['drone']; 

        if($selected_radio == '1'){
            $sql="DELETE FROM Books.Livres WHERE id = '1'"
        }

        else if($selected_radio == '2'){
            $sql="DELETE FROM Books.Livres WHERE id = '2'"
        }
    }*/

    if (isset($_POST['Delete'])) {
        $sql = "SELECT * FROM Books";
        if ($titre != "") {
            $sql .= " WHERE Titre LIKE '%$titre%'"; 
        }
        if (mysqli_num_rows($result_search) == 0) {
        //Livre inexistant
        echo "Cannot delete. Book not found. <br>"; } 
        else {
            while ($data = mysqli_fetch_assoc($result_search) ) { 
                $id = $data['ID'];
                echo "<br>"; }
        $sql = "DELETE FROM Books WHERE ID = valeur"; 

        echo "Delete successful. <br>";

        //on affiche les autres livres dans la BDD
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
    echo "</table>";
    ?>

    </body>     

</html>





