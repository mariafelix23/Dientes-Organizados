<!DOCTYPE html>
<html>
<head>
	<title>PACIENTES</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="Recursos/icono.png" >
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="recursos/main.js"></script>
	<style>
		.agrupar{
			margin: auto;
			text-align: center;
			background-color: #839DD2;
			opacity: 75%;
			padding-bottom: 2px;
		}
		#cabecera{
			background: #33C0FF;
			border: 1px solid #999999;
			padding: 20px;
			color: white;
		}
		#menu{
			margin: auto;
			padding-top: 10px;
			padding-bottom: 10px;
			padding-right: 0px;
			border-radius: 15px;
		}
		header nav{
			background: white;
			opacity: 95%;
			margin-bottom: 10px;
			padding-top: 10px;
			padding-bottom: 10px;
			-webkit-transition: all ease 1s;
			-o-transition: all ease 1s;
			transition: all ease 1s;
		}

		.menu-fixed{
			position: fixed;
			z-index: 1000;
			top: 0;
			width: 100%;
			padding-left: 34rem;
			box-shadow: 0px 4px 3px rgba(71,93,119,.5);
		}

		.carousel-inner img {
		    width: 10%;
		    height: 10%;
		    border-radius: 15px;
		}

		#carouselExampleCaptions{
			width: 85%
		}

		nav.carrusel{
			background-color: black;
			padding-left: 14rem;
			padding-bottom: 5px;
			padding-top: 5px;
			margin-bottom: 20px;
		}

		h3{
			color: white;
			background-color: black;
			opacity: 70%;
			border-radius: 20px;
			padding-bottom: 5px;
		}

		p.carr{
			background-color: black;
			opacity: 60%;
			border-radius: 5px;
			color: white;
		}
		article{
			font-size: 18px;
		}

		article p{
			text-align: justify;
		}
	</style>
</head>
<body background="recursos/00.jpg">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

	<!--_______________________________________CABECERA DE LA PAGINA_________________________________-->
	<div class="agrupar" id="cabecera">
		<center><h1><img src="recursos/icono0.jpg" width="3%" height="2%">&nbsp;Dientes Organizados&nbsp;<img src="recursos/icono0.jpg" width="3%" height="2%"></h1></center>
	</div>

	<!-- ______________________________________HEADER Y MENU PRINCIPAL PEGAJOSO______________________-->
	<header>
		<nav class="menu" style="position: relative; z-index: 100">
				<div class="row" style="margin-left: 5px;">
					<div class="col">
						<div>
						  	<a href="Index.html"><button class="btn btn-warning" type="button" aria-expanded="false" style="padding-left: 5px; padding-right:5px;margin-right: 5px">
						    	<font style="color: #000365; font-weight: bold">Pagina Principal</font>
						  	</button></a>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</header>
<!-- ______________________________________BOTONES DE ACCION_____________________________________-->
	<div style="background-color: #D8EFFF; border-radius: 15px; padding-top: 5px; padding-bottom: 10px; padding-left: 15px; padding-right; opacity: 80%: 15px; margin-bottom: 20px; margin-left: 20rem; margin-right: 20rem;">
		<header style="margin-top: 10px;"></header>
	  	<center>
	  		<div>
	  			<button class="btn btn-info" type="button" style="margin-right: 2rem; color: #00538D;" onclick="registrar()"><b>Registrar </b></button>
					<button class="btn btn-info" type="button" style="margin-right: 2rem; color: #00538D;" onclick="consultar()"><b>Consultar</b></button> 
					<button class="btn btn-info" type="button" style="margin-right: 2rem; color: #00538D;" onclick="consGen()"><b>Mostrar Todas los Pacientes</b></button> 
					<button class="btn btn-info" type="button" style="margin-right: 2rem; color: #00538D;" onclick="modificar()"><b>Modificar</b></button>
					<button class="btn btn-info" type="button" style="margin-right: 2rem; color: #00538D;" onclick="eliminar()"><b>Eliminar</b></button>
			</div>
		</center>
	</div>

	<?php
	include ("registPaciente.php");
	include ("eliminarPaciente.php");
	include ("modificarPaciente.php");
	?>
	<script>
		function buscar(){
			var id = document.getElementById('idPac').value;


		}
		function registrar(){
			document.getElementById('formularioPacientes').style.display = 'inline';
			document.getElementById('consultaGeneral').style.display = 'none';
			document.getElementById('consultaIndi').style.display = 'none';
			document.getElementById('tablaConIndi').style.display = 'none';
			document.getElementById('eliminarPa').style.display = 'none';
			document.getElementById('tablaEliminar').style.display = 'none';
			document.getElementById('modificarPa').style.display = 'none';
			document.getElementById('formulariomodPa').style.display = 'none';
			
		}
		function consultar(){
			document.getElementById('formularioPacientes').style.display = 'none';
			document.getElementById('consultaGeneral').style.display = 'none';
			document.getElementById('consultaIndi').style.display = 'inline';
			document.getElementById('tablaConIndi').style.display = 'inline';
			document.getElementById('eliminarPa').style.display = 'none';
			document.getElementById('tablaEliminar').style.display = 'none';
			document.getElementById('modificarPa').style.display = 'none';
			document.getElementById('formulariomodPa').style.display = 'none';

		}
		function consGen(){
			document.getElementById('formularioPacientes').style.display = 'none';
			document.getElementById('consultaGeneral').style.display = 'inline';
			document.getElementById('consultaIndi').style.display = 'none';
			document.getElementById('tablaConIndi').style.display = 'none';
			document.getElementById('eliminarPa').style.display = 'none';
			document.getElementById('tablaEliminar').style.display = 'none';
			document.getElementById('modificarPa').style.display = 'none';
			document.getElementById('formulariomodPa').style.display = 'none';
		}
		function modificar(){
			document.getElementById('formularioPacientes').style.display = 'none';
			document.getElementById('consultaGeneral').style.display = 'none';
			document.getElementById('consultaIndi').style.display = 'none';
			document.getElementById('tablaConIndi').style.display = 'none';
			document.getElementById('eliminarPa').style.display = 'none';
			document.getElementById('tablaEliminar').style.display = 'none';
			document.getElementById('modificarPa').style.display = 'inline';
			document.getElementById('formulariomodPa').style.display = 'inline';

		}
		function eliminar(){
			document.getElementById('formularioPacientes').style.display = 'none';
			document.getElementById('consultaGeneral').style.display = 'none';
			document.getElementById('consultaIndi').style.display = 'none';
			document.getElementById('tablaConIndi').style.display = 'none';
			document.getElementById('eliminarPa').style.display = 'inline';
			document.getElementById('tablaEliminar').style.display = 'inline';
			document.getElementById('modificarPa').style.display = 'none';
			document.getElementById('formulariomodPa').style.display = 'none';

		}
		
	</script>

	<!-- ______________________________________FORMULARIO DE REGISTRO DE PACIENTES___________________-->
	<div id ="formularioPacientes" style="display: none;">
		<form id="miForm" method="post">
		<div class="container" style="background-color: #00538D; border-radius: 15px; padding-top: 5px; padding-bottom: 10px; padding-left: 15px; padding-right; opacity: 80%: 15px; margin-bottom: 20px; ">
			<header style="margin-top: 10px;"><center><font face="arvo" style="color: white;" size="5">REGISTRAR PACIENTE</font></center></header>
			<hr style="background-color: white;"><br>
			<div class="row"><!--NOMBRE, ID DEL PACIENTE y ID DEL CLIENTE-->
				<div class="col-md">
					<div class="input-group mb-3">
						<span class="input-group-text" id="basic-addon1" style="border-bottom-left-radius: 4px;border-top-left-radius: 4px;">ID del Paciente</span>
						<input type="text" name="idPacc" class="form-control" required="" pattern="[0-9]+; [a-zA-Z]+" placeholder="Escriba el ID del Paciente" aria-label="IdPacient" aria-decribedby="basic-addon1" maxlength="25" style="padding-right: 15px; border-top-right-radius: 4px; border-bottom-right-radius: 4px;">&nbsp;&nbsp;&nbsp;&nbsp; 
						<span class="input-group-text" id="basic-addon1">Nombre</span>
						<input type="text" name="nombre" class="form-control" required="" pattern="[a-zA-Z]+" placeholder="Escriba el nombre del Paciente" aria-label="PacientName" aria-decribedby="basic-addon1" maxlength="25" style="padding-right: 15px; border-top-right-radius: 4px; border-bottom-right-radius: 4px;">
					</div>
				</div>
			</div>
			<div class="row"><!--APELLIDO PATERNO Y MATERNO-->
				<div class="col-md">
					<div class="input-group mb-3">
						<span class="input-group-text" id="basic-addon1">Apellido Paterno</span>
						<input type="text" name="apellidoPaterno" class="form-control" required="" pattern="[a-zA-Z]+" placeholder="Escriba el primer apellido" aria-label="PacientApellidoMaterno" aria-decribedby="basic-addon1" maxlength="25" style="padding-right: 15px; border-top-right-radius: 4px; border-bottom-right-radius: 4px;">&nbsp;&nbsp;&nbsp;&nbsp; 
					</div>
				</div>
				<div class="col-md">
					<div class="input-group mb-3">
						<span class="input-group-text" id="basic-addon1">Apellido Materno</span>
						<input type="text" name="apellidoMaterno" class="form-control" required="" pattern="[a-zA-Z]+" placeholder="Escriba el segundo apellido" aria-label="PacientApellidoPaterno" aria-decribedby="basic-addon1" maxlength="25" style="padding-right: 15px; border-top-right-radius: 4px; border-bottom-right-radius: 4px;">&nbsp;&nbsp;&nbsp;&nbsp;
					</div>
				</div>
			</div>
			<div class="row"><!--CALLE, COLONIA, CIUDAD-->
				<div class="col-md">
					<div class="input-group mb-3">
						<span class="input-group-text" id="basic-addon1">Calle</span>
						<input type="text" name="dom" class="form-control" required="" pattern="[a-zA-Z]+" placeholder="Escriba la calle de su domicilio" aria-label="Calle" aria-decribedby="basic-addon1" style="padding-right: 15px;">
					</div>
				</div>
				<div class="col-md">
					<div class="input-group mb-3">
						<span class="input-group-text" id="basic-addon1">Colonia</span>
						<input type="text" name="col" class="form-control" required="" pattern="[a-zA-Z]+" placeholder="Escriba la Colonia del Paciente" aria-label="Colony" aria-decribedby="basic-addon1" maxlength="25" style="padding-right: 15px;">
					</div>
				</div>
				<div class="col-md">
					<div class="input-group mb-3">
						<span class="input-group-text" id="basic-addon1">Ciudad</span>
						<input type="text" name="ciudad" class="form-control" required="" pattern="[a-zA-Z]+" placeholder="Escriba la Ciudad del Paciente" aria-label="City" aria-decribedby="basic-addon1" style="padding-right: 15px;">
					</div>
				</div>
			</div>
			<div class="row"><!--CODIGO POSTAL Y TELEFONO-->
				<div class="col-md">
					<div class="input-group mb-3">
						<span class="input-group-text" id="basic-addon1">Codigo Postal</span>
						<input type="text" name="cp" class="form-control" required="" placeholder="Escriba el CP del Paciente" aria-label="ZipCode" aria-decribedby="basic-addon1" maxlength="5" style="padding-right: 15px;" required="" pattern="[0-9]+">
					</div>
				</div>
				<div class="col-md">
					<div class="input-group mb-3">
						<span class="input-group-text" id="basic-addon1">Telefono</span>
						<input type="tel" name="tel" class="form-control" required="" pattern="[0-9]+" placeholder="Escriba el numero telefonico del Paciente" maxlength="10" minlength="10" style="padding-right: 15px;">
					</div>
				</div>
			</div>
			<div class="row"><!--CORREO-->
				<div class="col-md">
					<div class="input-group mb-3">
						<span class="input-group-text" id="basic-addon1">Correo Electrónico</span>
						<input type="text" name="correoo" class="form-control" required="" placeholder="Escriba el correo del Paciente" aria-label="PacientName" aria-decribedby="basic-addon1" maxlength="25" style="padding-right: 15px; border-top-right-radius: 4px; border-bottom-right-radius: 4px;">&nbsp;&nbsp;&nbsp;&nbsp;
					</div>
				</div>
			</div>
			<div class="row"><!--BOTON REGISTRAR-->
				<hr style="background-color: white">
				<div class="col-xl">
					<center><button class="btn" type="submit" name="registrar" style="padding-top: 10px;padding-bottom: 10px;padding-left: 120px;padding-right: 120px; background-color: #89D4E4;font-weight: bold;"><font face="arvo" size="4">REGISTRAR</font></button></center>
				</div>
			</div>
		</div>
		</form>	
	</div>

	<!--TABLA PARA CONSULTA GENERAL-->
	<div id="consultaGeneral" class="container" style="display:none">
            <table class="table table-hover table-hover" id="tabla" border="1" style="border-collapse: collapse;border-radius: 15px;overflow: hidden;">
                <thead class="table-dark">
                    <tr style="text-align: center; vertical-align: middle;">
                        <th class="col-md-4">Id Paciente</th>
                        <th class="col-md-4">Nombre</th>
                        <th class="col-md-4">Apellido Paterno</th>
                        <th class="col-md-4">Apellido Materno</th>
                        <th class="col-md-4">Calle</th>
                        <th class="col-md-4">Colonia</th>
                        <th class="col-md-4">Ciudad</th>
                        <th class="col-md-4">CP</th>
                        <th class="col-md-4">Telefono</th>
                        <th class="col-md-4">Correo</th>
                    </tr>
                </thead>
                <?php
                  $consulta = "SELECT * FROM pacientes";
                  $resultado = mysqli_query($conex, $consulta);

                  while($row = mysqli_fetch_array($resultado)){
                      echo "<tr>";
                      echo "<td>".$row["Id_P"]."</td>";
                      echo "<td>".$row["Nombre_P"]."</td>";
                      echo "<td>".$row["Ape_Pa"]."</td>";
                      echo "<td>".$row["Ape_Ma"]."</td>";
                      echo "<td>".$row["Calle_P"]."</td>";
                      echo "<td>".$row["Col_P"]."</td>";
                      echo "<td>".$row["Ciud_P"]."</td>";
                      echo "<td>".$row["CodPost_P"]."</td>";
                      echo "<td>".$row["Tel_P"]."</td>";
                      echo "<td>".$row["Correo_P"]."</td>";
                      echo "</tr>";
                  }
                  mysqli_free_result($resultado);
                  mysqli_close($conex);
          		?>
            </table>
	</div>

	<!--CONSULTA INDIVIDUAL-->
	<!-- ______________________________________FORMULARIO CONSULTA INDIVIDUAL___________________-->
	<div  id="consultaIndi" style="display:  none;">
		<form id="miForm" method="post">
			<div class="container" style="background-color: #00538D; border-radius: 15px; padding-top: 5px; padding-bottom: 10px; padding-left: 15px; padding-right; opacity: 80%: 15px; margin-bottom: 20px;">
				<header style="margin-top: 10px;">
				<center><font face="arvo" style="color: white;" size="5">CONSULTA INDIVIDUAL</font></center></header>
				<hr style="background-color: white;"><br>
				<div class="row">
					<div class="col-md">
						<div class="input-group mb-3">
							<span class="input-group-text" id="basic-addon1" style="margin-left: 20rem;">Paciente</span>
							<select type="text" name="idPacienteCI" id="idPacienteCI"  onchange="buscar()" class="form-control" style="padding-right: 15px; border-top-right-radius: 4px;">
									<option>---Selecciona un Paciente---</option>
									<?php
										include('dbConex.php');
										$getPaciente1="SELECT Id_P, Nombre_P FROM pacientes ORDER BY Nombre_P";
										$getPaciente2 = mysqli_query($conex,$getPaciente1);

										while($row=mysqli_fetch_array($getPaciente2)){
											echo $idP = $row['Id_P'];
											echo $nombre = $row['Nombre_P'];

									?>
									<option value="<?php echo $idP ?>"><?php echo $idP ?>, <?php echo $nombre ?></option>
									<?php
										}
									?>
							</select>
							<input type="submit" value="Consulta Individual" class="btn btn-warning" style="margin-right: 20rem;"> 
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
	<!-- ______________________________________TABLA CONSULTA INDIVIDUAL___________________-->
	<div class="container" id="tablaConIndi" style="display:none">
		<form>
			<table class="table table-hover table-hover" border="1" style="border-collapse: collapse;border-radius: 15px; overflow: hidden;">
				<thead class="table-dark">
					<tr style="text-align: center; vertical-align: middle;">
						<th class="col-md-1" style="background-color: #000A3F">Id Paciente</th>
						<th class="col-md-2" style="background-color: #000A3F">Nombre</th>
						<th class="col-md-2" style="background-color: #000A3F">Apellido Paterno</th>
						<th class="col-md-2" style="background-color: #000A3F">Apellido Materno</th>
						<th class="col-md-3" style="background-color: #000A3F">Calle</th>
						<th class="col-md-1" style="background-color: #000A3F">Colonia</th>
						<th class="col-md-2" style="background-color: #000A3F">Ciudad</th>
						<th class="col-md-2" style="background-color: #000A3F">Código Postal</th>
						<th class="col-md-2" style="background-color: #000A3F">Teléfono</th>
						<th class="col-md-2" style="background-color: #000A3F">Correo</th>
					</tr>
				</thead>
				<?php
					@$idP = $_POST['idPacienteCI'];
					if($idP){
						$consulta = "SELECT * FROM pacientes Where Id_P='$idP'";

						$resultado = mysqli_query($conex, $consulta);

						while($row = mysqli_fetch_array($resultado)){
							echo "<tr style='text-align: center; vertical-align: middle;'>";
							echo "<td>".$row["Id_P"]."</td>";
			                echo "<td>".$row["Nombre_P"]."</td>";
			                echo "<td>".$row["Ape_Pa"]."</td>";
			                echo "<td>".$row["Ape_Ma"]."</td>";
			                echo "<td>".$row["Calle_P"]."</td>";
			                echo "<td>".$row["Col_P"]."</td>";
			                echo "<td>".$row["Ciud_P"]."</td>";
			                echo "<td>".$row["CodPost_P"]."</td>";
			                echo "<td>".$row["Tel_P"]."</td>";
			                echo "<td>".$row["Correo_P"]."</td>";
							echo "</tr>";
						}
						mysqli_free_result($resultado);
					}
				?>
			</table>
		</form>
	</div>
	<!-- ELIMINAR -->
	<!-- ______________________________________FORMULARIO ELIMINAR___________________-->
	<div  id="eliminarPa" style="display:  none;">
		<form id="miForm" method="post">
			<div class="container" style="background-color: #00538D; border-radius: 15px; padding-top: 5px; padding-bottom: 10px; padding-left: 15px; padding-right; opacity: 80%: 15px; margin-bottom: 20px;">
				<header style="margin-top: 10px;">
				<center><font face="arvo" style="color: white;" size="5">ELIMINAR PACIENTE</font></center></header>
				<hr style="background-color: white;"><br>
				<div class="row">
					<div class="col-md">
						<div class="input-group mb-3">
							<span class="input-group-text" id="basic-addon1" style="margin-left: 20rem;">Paciente</span>
							<select type="text" name="idPacienteE" id="idPacienteE"  onchange="buscar()" class="form-control" style="padding-right: 15px; border-top-right-radius: 4px;">
									<option>---Selecciona un Paciente---</option>
									<?php
										include('dbConex.php');
										$getPaciente1="SELECT Id_P, Nombre_P FROM pacientes ORDER BY Nombre_P";
										$getPaciente2 = mysqli_query($conex,$getPaciente1);

										while($row=mysqli_fetch_array($getPaciente2)){
											echo $idP = $row['Id_P'];
											echo $nombre = $row['Nombre_P'];

									?>
									<option value="<?php echo $idP ?>"><?php echo $idP ?>, <?php echo $nombre ?></option>
									<?php
										}
									?>
							</select>
							<input type="submit" value="Consulta Individual" class="btn btn-warning" style="margin-right: 20rem;">
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
	<!-- ______________________________________TABLA ELIMINAR___________________-->
	<div class="container" id="tablaEliminar" style="display:none">
		<form>
			<table class="table table-hover table-hover" border="1" style="border-collapse: collapse;border-radius: 15px; overflow: hidden;">
				<thead class="table-dark">
					<tr style="text-align: center; vertical-align: middle;">
						<th class="col-md-1" style="background-color: #000A3F">Id Paciente</th>
						<th class="col-md-2" style="background-color: #000A3F">Nombre</th>
						<th class="col-md-2" style="background-color: #000A3F">Apellido Paterno</th>
						<th class="col-md-2" style="background-color: #000A3F">Apellido Materno</th>
						<th class="col-md-3" style="background-color: #000A3F">Calle</th>
						<th class="col-md-1" style="background-color: #000A3F">Colonia</th>
						<th class="col-md-2" style="background-color: #000A3F">Ciudad</th>
						<th class="col-md-2" style="background-color: #000A3F">Código Postal</th>
						<th class="col-md-2" style="background-color: #000A3F">Teléfono</th>
						<th class="col-md-2" style="background-color: #000A3F">Correo</th>
						<th class="col-md-2" style="background-color: #000A3F">Borrar</th>
						
					</tr>
				</thead>
				<?php
					@$idP = $_POST['idPacienteE'];
					if($idP){
						$consulta = "SELECT * FROM pacientes Where Id_P='$idP'";

						$resultado = mysqli_query($conex, $consulta);

						while($row = mysqli_fetch_array($resultado)){
							echo "<tr style='text-align: center; vertical-align: middle;'>";
							//echo "<td>".$row["Id_P"]."</td>";
				            //echo "<td>".$row["Nombre_P"]."</td>";
				            //echo "<td>".$row["Ape_Pa"]."</td>";
				            //echo "<td>".$row["Ape_Ma"]."</td>";
				            //echo "<td>".$row["Calle_P"]."</td>";
				            //echo "<td>".$row["Col_P"]."</td>";
			                //echo "<td>".$row["Ciud_P"]."</td>";
		                    //echo "<td>".$row["CodPost_P"]."</td>";
		 	                //echo "<td>".$row["Tel_P"]."</td>";
				            //echo "<td>".$row["Correo_P"]."</td>";
				            $idPP = $row['Id_P'];
							$nombreP = $row['Nombre_P'];
							$apePa = $row['Ape_Pa'];
							$apeMa = $row['Ape_Ma'];
							$calleP = $row['Calle_P'];
							$colP = $row['Col_P'];
							$ciudP = $row['Ciud_P'];
							$codP = $row['CodPost_P'];
							$telP = $row['Tel_P'];
							$correoP = $row['Correo_P'];  
						
				?>
				<tr align="center">
				<td><?php echo $idPP; ?></td>
				<td><?php echo $nombreP; ?></td>
				<td><?php echo $apePa; ?></td>
				<td><?php echo $apeMa; ?></td>
				<td><?php echo $calleP; ?></td>
				<td><?php echo $colP; ?></td>
				<td><?php echo $ciudP; ?></td>
				<td><?php echo $codP; ?></td>
				<td><?php echo $telP; ?></td>
				<td><?php echo $correoP; ?></td>
				<td><a href="CPacientes.php?borrar=<?php echo $idPP; ?>">Borrar</a></td>
				</tr> 
				<?php
						}
						mysqli_free_result($resultado);
					} 
				?>	   
				<?php
				if(isset($_GET['borrar'])){
					$borrar_id = $_GET['borrar'];
					$borrar = "DELETE FROM pacientes WHERE Id_P = '$borrar_id'";
					$ejecutar = mysqli_query($conex, $borrar);

					if ($ejecutar){
						echo "<script>alert('El paciente ha sido borrado')</script>";
						echo "<script>windows.open('CPacientes.php','_self')</script>";
					}

				}
				?>
			</table>
		</form>
		<div class="row"><!--BOTON ELIMINAR-->
				<hr style="background-color: white">
				<div class="col-xl">
					<center><button class="btn" type="submit" name="eliminar" style="padding-top: 10px;padding-bottom: 10px;padding-left: 120px;padding-right: 120px; background-color: #89D4E4;font-weight: bold;><font face="arvo" size="4">ELIMINAR</font></button></center>
				</div>
			</div>
	</div>
<!--MODIFICAR-->
	<!-- ______________________________________FORMULARIO CONSULTA MODIFICAR___________________-->
	<div  id="modificarPa" style="display:  none;">
		<form id="miForm" method="post">
			<div class="container" style="background-color: #00538D; border-radius: 15px; padding-top: 5px; padding-bottom: 10px; padding-left: 15px; padding-right; opacity: 80%: 15px; margin-bottom: 20px;">
				<header style="margin-top: 10px;">
				<center><font face="arvo" style="color: white;" size="5">MODIFICAR PACIENTE</font></center></header>
				<hr style="background-color: white;"><br>
				<div class="row">
					<div class="col-md">
						<div class="input-group mb-3">
							<span class="input-group-text" id="basic-addon1" style="margin-left: 20rem;">Paciente</span>
							<select type="text" name="idPacienteM" id="idPacienteM"  onchange="buscar()" class="form-control" style="padding-right: 15px; border-top-right-radius: 4px;">
									<option>---Selecciona un Paciente---</option>
									<?php
										include('dbConex.php');
										$getPaciente1="SELECT Id_P, Nombre_P FROM pacientes ORDER BY Nombre_P";
										$getPaciente2 = mysqli_query($conex,$getPaciente1);

										while($row=mysqli_fetch_array($getPaciente2)){
											echo $idP = $row['Id_P'];
											echo $nombre = $row['Nombre_P'];

									?>
									<option value="<?php echo $idP ?>"><?php echo $idP ?>, <?php echo $nombre ?></option>
									<?php
										}
									?>
							</select>
							<input type="submit" value="Consulta Individual" class="btn btn-warning" style="margin-right: 20rem;">
							<td><a href="CPacientes.php?editar=<?php echo $idP; ?>">Editar</a></td>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
	<!-- ______________________________________FORMULARIO MODIFICAR___________________-->
	<div id ="formulariomodPa" style="display: none;">
		<?php
		if(isset($_GET['editar'])){
			$editar_id = $_GET['editar'];

			$consulta = "SELECT * FROM pacientes WHERE Id_P = 'editar_id'";
			$ejecutar = mysqli_query($conex, $consulta);

			$row = mysqli_fetch_array($ejecutar);

			$idP = $row['Id_P'];
			$nombreP = $row['Nombre_P'];
			$apePa = $row['Ape_Pa'];
			$apeMa = $row['Ape_Ma'];
			$calleP = $row['Calle_P'];
			$colP = $row['Col_P'];
			$ciudP = $row['Ciud_P'];
			$codP = $row['CodPost_P'];
			$telP = $row['Tel_P'];
			$correoP = $row['Correo_P'];
		}
		?>
		<form id="miForm2" method="post">
		<div class="container2" style="background-color: #00538D; border-radius: 15px; padding-top: 5px; padding-bottom: 10px; padding-left: 15px; padding-right; opacity: 80%: 15px; margin-bottom: 20px; ">
			<header style="margin-top: 10px;"><center><font face="arvo" style="color: white;" size="5"></font></center></header>
			<hr style="background-color: white;"><br>
			<div class="row"><!--NOMBRE, ID DEL PACIENTE y ID DEL CLIENTE-->
				<div class="col-md">
					<div class="input-group mb-3">
						<span class="input-group-text" id="basic-addon1" style="border-bottom-left-radius: 4px;border-top-left-radius: 4px;">ID del Paciente</span>
						<input type="text" name="idPacc" class="form-control" placeholder="Escriba el ID del Paciente" aria-label="IdPacient" aria-decribedby="basic-addon1" maxlength="25" style="padding-right: 15px; border-top-right-radius: 4px; border-bottom-right-radius: 4px;background-color: lightgray" disabled>&nbsp;&nbsp;&nbsp;&nbsp;
						<span class="input-group-text" id="basic-addon1">Nombre</span>
						<input type="text" name="nombre" value="<?php echo $nombreP; ?>" class="form-control" required="" pattern="[a-zA-Z]+" placeholder="Escriba el nombre del Paciente" aria-label="PacientName" aria-decribedby="basic-addon1" maxlength="25" style="padding-right: 15px; border-top-right-radius: 4px; border-bottom-right-radius: 4px;">
					</div>
				</div>
			</div>
			<div class="row"><!--APELLIDO PATERNO Y MATERNO-->
				<div class="col-md">
					<div class="input-group mb-3">
						<span class="input-group-text" id="basic-addon1">Apellido Paterno</span>
						<input type="text" name="apellidoPaterno" value="<?php echo $apePa; ?>" class="form-control" required="" pattern="[a-zA-Z]+" placeholder="Escriba el primer apellido" aria-label="PacientApellidoMaterno" aria-decribedby="basic-addon1" maxlength="25" style="padding-right: 15px; border-top-right-radius: 4px; border-bottom-right-radius: 4px;">&nbsp;&nbsp;&nbsp;&nbsp; 
					</div>
				</div>
				<div class="col-md">
					<div class="input-group mb-3">
						<span class="input-group-text" id="basic-addon1">Apellido Materno</span>
						<input type="text" name="apellidoMaterno" value="<?php echo $apeMa; ?>" class="form-control" required="" pattern="[a-zA-Z]+" placeholder="Escriba el segundo apellido" aria-label="PacientApellidoPaterno" aria-decribedby="basic-addon1" maxlength="25" style="padding-right: 15px; border-top-right-radius: 4px; border-bottom-right-radius: 4px;">&nbsp;&nbsp;&nbsp;&nbsp;
					</div>
				</div>
			</div>
			<div class="row"><!--CALLE, COLONIA, CIUDAD-->
				<div class="col-md">
					<div class="input-group mb-3">
						<span class="input-group-text" id="basic-addon1">Calle</span>
						<input type="text" name="dom" value="<?php echo $calleP; ?>" class="form-control" required="" pattern="[a-zA-Z]+" placeholder="Escriba la calle de su domicilio" aria-label="Calle" aria-decribedby="basic-addon1" style="padding-right: 15px;">
					</div>
				</div>
				<div class="col-md">
					<div class="input-group mb-3">
						<span class="input-group-text" id="basic-addon1">Colonia</span>
						<input type="text" name="col" value="<?php echo $colP; ?>" class="form-control" required="" pattern="[a-zA-Z]+" placeholder="Escriba la Colonia del Paciente" aria-label="Colony" aria-decribedby="basic-addon1" maxlength="25" style="padding-right: 15px;">
					</div>
				</div>
				<div class="col-md">
					<div class="input-group mb-3">
						<span class="input-group-text" id="basic-addon1">Ciudad</span>
						<input type="text" name="ciudad" value="<?php echo $ciudP; ?>" class="form-control" required="" pattern="[a-zA-Z]+" placeholder="Escriba la Ciudad del Paciente" aria-label="City" aria-decribedby="basic-addon1" style="padding-right: 15px;">
					</div>
				</div>
			</div>
			<div class="row"><!--CODIGO POSTAL Y TELEFONO-->
				<div class="col-md">
					<div class="input-group mb-3">
						<span class="input-group-text" id="basic-addon1">Codigo Postal</span>
						<input type="text" name="cp" value="<?php echo $codP; ?>" class="form-control" required="" placeholder="Escriba el CP del Paciente" aria-label="ZipCode" aria-decribedby="basic-addon1" maxlength="5" style="padding-right: 15px;" required="" pattern="[0-9]+">
					</div>
				</div>
				<div class="col-md">
					<div class="input-group mb-3">
						<span class="input-group-text" id="basic-addon1">Telefono</span>
						<input type="tel" name="tel" value="<?php echo $telPM; ?>" class="form-control" required="" pattern="[0-9]+" placeholder="Escriba el numero telefonico del Paciente" maxlength="10" minlength="10" style="padding-right: 15px;">
					</div>
				</div>
			</div>
			<div class="row"><!--CORREO-->
				<div class="col-md">
					<div class="input-group mb-3">
						<span class="input-group-text" id="basic-addon1">Correo Electrónico</span>
						<input type="text" name="correoo" value="<?php echo $correoP; ?>" class="form-control" required="" placeholder="Escriba el correo del Paciente" aria-label="PacientName" aria-decribedby="basic-addon1" maxlength="25" style="padding-right: 15px; border-top-right-radius: 4px; border-bottom-right-radius: 4px;">&nbsp;&nbsp;&nbsp;&nbsp;
					</div>
				</div>
			</div>
			<div class="row"><!--BOTON MODIFICAR-->
				<hr style="background-color: white">
				<div class="col-xl">
					<center><button class="btn" type="submit" name="modificar" style="padding-top: 10px;padding-bottom: 10px;padding-left: 120px;padding-right: 120px; background-color: #89D4E4;font-weight: bold;"><font face="arvo" size="4">ACTUALIZAR DATOS</font></button></center>
				</div>
			</div>
		</div>
		</form>	
	</div>
	<?php
		mysqli_close($conex);
	?>
</body>
</html>