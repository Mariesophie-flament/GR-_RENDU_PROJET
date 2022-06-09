 

<?php

$nombreLivres=("COUNT(*) FROM `Books` ");

for ($i=1; $i<=$nombreLivres; $i++) {
?>
<td><input type="button" name="drone" value="<?php $i ?>" ><br/></td>
<?php 
}


"DELETE FROM `Books` WHERE id= $drone"                    // car drone récupère la valeur du bouton cliqué, donc supprimera l'id voulu
?>

 