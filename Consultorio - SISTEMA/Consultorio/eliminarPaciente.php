<?php
include ("dbConex.php");

if (isset($_POST['eliminar'])) {

	 	$idP=trim($_POST['idPacienteE']);
		
	 	$consulta = "DELETE FROM  pacientes where Id_P = '$idP'";
	 	$resultado=mysqli_query($conex,$consulta);

	 	if ($resultado) {
	    	?> 
	    	<h3  style="text-align: center;">¡Paciente eliminado correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
}

?>