<html>

    <head>
        <Title>
            Delete Comportement
        </Title>
    </head>

    <body>
        // Inclure dans dashboard.php ce dossier
        // Reussir à supprimer la bonne table dans la base de données 
        <table>
        <tbody>
            <form method="get" action="dashboard.php">
                <!-- Faire une boucle for pour mettre tout les Id de la Base de données sous forme de boutons radios
                De plus, voir si les boutons submit sont avec pu sur une autre page  -->
                <tr>
                    <td> 
                        
                    <!-- 1ER ID-->
                    <div>
                        <input type="radio" name="drone" value="1">
                        <label for="1"> 1er Id</label>
                    </div>
                    </td>
                </tr>

                <tr>
                    <td> 
                    <!-- 2EME ID-->
                    <div>
                        <input type="radio" name="drone" value="2">
                        <label for="2"> 2e Id</label>
                    </div>
                    </td>
                </tr>

                <td>
                    <div>
                    <input type="submit" value="Update">
                    </div>
                </td>

                <td>
                    <div>
                        <input type="submit" value="Read">
                    </div>
                </td>

                <td>
                    <div>
                        <input type="submit" name="SubmitDelete" value="Delete">
                    </div>
                </td>

            </form>

        </tbody>
        

    </table>
    <?php

    $sql="SELECT COUNT(*) AS $recuperation FROM Livres";
    echo($recuperation); // VOIR SI CA MARCHE A VIRER

    foreach($i=0; $i<$recuperation; $i++){                  // mysqli_num_rows()
         <input type="radio" name="drone" value=$i>
         <label for="1"> 1er Id</label>
            
    }
    
    
    
    if(isset ($_POST["SubmitDelete"])){
        $selected_radio = $_POST['drone']; 

        if($selected_radio == '1'){
            $sql="DELETE FROM Books.Livres WHERE id = '1'"
        }

        else if($selected_radio == '2'){
            $sql="DELETE FROM Books.Livres WHERE id = '2'"
        }
    }

    



    ?>
    



    </body>     








</html>





