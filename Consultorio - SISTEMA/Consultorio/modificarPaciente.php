<?php
include ("dbConex.php");

if (isset($_POST['modificar'])) {
	if (strlen($_POST['nombre']) >= 1 && 
		strlen($_POST['apellidoPaterno']) >= 1 &&
		strlen($_POST['apellidoMaterno']) >= 1 &&
		strlen($_POST['dom']) >= 1 &&
		strlen($_POST['col']) >= 1 &&
		strlen($_POST['ciudad']) >= 1 &&
		strlen($_POST['cp']) >= 1 &&
		strlen($_POST['tel']) >= 1 &&
		strlen($_POST['correoo']) >= 1) {

	 	$idP=trim($_POST['idPacienteM']);
	 	$nombre=trim($_POST['nombre']);
		$apePa=trim($_POST['apellidoPaterno']);
		$apeMa=trim($_POST['apellidoMaterno']);
		$dom=trim($_POST['dom']);
		$col=trim($_POST['col']);
		$ciudad=trim($_POST['ciudad']);
		$cp=trim($_POST['cp']);
		$tel=trim($_POST['tel']);
		$correo=trim($_POST['correoo']);
		

	 	$consulta = "UPDATE pacientes set (Nombre_P, Ape_Pa, Ape_Ma, Calle_P, Col_P, Ciud_P, CodPost_P, Tel_P, Correo_P) VALUES ($nombre','$apePa','$apeMa','$dom','$col','$ciudad','$cp','$tel','$correo') WHERE Id_P = $idP";
	 	$resultado=mysqli_query($conex,$consulta);

	 	if ($resultado) {
	    	?> 
	    	<h3  style="text-align: center;">¡Paciente modificado correctamente!</h3>
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