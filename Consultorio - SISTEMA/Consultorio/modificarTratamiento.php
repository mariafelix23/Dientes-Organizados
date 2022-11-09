<?php
include ("dbConex.php");

if (isset($_POST['modificar'])) {
	if (strlen($_POST['idTrat']) >= 1 &&
		strlen($_POST['nombre']) >= 1 && 
		strlen($_POST['costoT']) >= 1 &&
		strlen($_POST['numSes']) >= 1) {

	 	$idT=trim($_POST['idTrat']);
	 	$nombre=trim($_POST['nombre']);
		$cost=trim($_POST['costoT']);
		$sesiones=trim($_POST['numSes']);
		

	 	$consulta = "UPDATE tratamiento set (Nom_T, Costo_T, Num_Ses) VALUES ('$nombre','$costo','$sesiones') WHERE Id_T = $idT";
	 	$resultado=mysqli_query($conex,$consulta);

	 	if ($resultado) {
	    	?> 
	    	<h3  style="text-align: center;">¡Tratamiento modificado correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un erroooor!</h3>
           <?php
	    }
	}else {
	    ?> 
	    <h3 class="bad">Por favor completa los campoooooos</h3>
        <?php
    }
}

?>