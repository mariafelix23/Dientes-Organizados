<?php
include ("dbConex.php");

if (isset($_POST['eliminar'])) {

	 	$idT=trim($_POST['idTratamientoE']);
		
	 	$consulta = "DELETE FROM tratamiento where Id_T = '$idT'";
	 	$resultado=mysqli_query($conex,$consulta);

	 	if ($resultado) {
	    	?> 
	    	<h3  style="text-align: center;">¡Tratamiento eliminado correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
}

?>