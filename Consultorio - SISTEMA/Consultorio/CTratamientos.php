<!DOCTYPE html>
<html>
<head>
	<title>TRATAMIENTOS</title>
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
						    	<font style="color: #000365; font-weight: bold">Página Principal</font>
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
					<button class="btn btn-info" type="button" style="margin-right: 2rem; color: #00538D;" onclick="consGen()"><b>Mostrar todos los tratamientos</b></button> 
					<button class="btn btn-info" type="button" style="margin-right: 2rem; color: #00538D;" onclick="modificar()"><b>Modificar</b></button>
					<button class="btn btn-info" type="button" style="margin-right: 2rem; color: #00538D;" onclick="eliminar()"><b>Eliminar</b></button>
			</div>
		</center>
	</div>

	<?php
	include ("registTratamiento.php");
	include ("modificarTratamiento.php");
	include ("eliminarTratamiento.php");
	?>
	<script>
		function buscar(){
			var id = document.getElementById('idTrat').value;

		}
		function registrar(){
			document.getElementById('formularioTratamientos').style.display = 'inline';
			document.getElementById('consultaGeneral').style.display = 'none';
			document.getElementById('consultaIndi').style.display = 'none';
			document.getElementById('tablaConIndi').style.display = 'none';
			document.getElementById('eliminarTra').style.display = 'none';
			document.getElementById('tablaEliminar').style.display = 'none';
			document.getElementById('modificarTra').style.display = 'none';
			document.getElementById('formulariomodTra').style.display = 'none';
			
		}
		function consultar(){
			document.getElementById('formularioTratamientos').style.display = 'none';
			document.getElementById('consultaGeneral').style.display = 'none';
			document.getElementById('consultaIndi').style.display = 'inline';
			document.getElementById('tablaConIndi').style.display = 'inline';
			document.getElementById('eliminarTra').style.display = 'none';
			document.getElementById('tablaEliminar').style.display = 'none';
			document.getElementById('modificarTra').style.display = 'none';
			document.getElementById('formulariomodTra').style.display = 'none';

		}
		function consGen(){
			document.getElementById('formularioTratamientos').style.display = 'none';
			document.getElementById('consultaGeneral').style.display = 'inline';
			document.getElementById('consultaIndi').style.display = 'none';
			document.getElementById('tablaConIndi').style.display = 'none';
			document.getElementById('eliminarTra').style.display = 'none';
			document.getElementById('tablaEliminar').style.display = 'none';
			document.getElementById('modificarTra').style.display = 'none';
			document.getElementById('formulariomodTra').style.display = 'none';
		}
		function modificar(){
			document.getElementById('formularioTratamientos').style.display = 'none';
			document.getElementById('consultaGeneral').style.display = 'none';
			document.getElementById('consultaIndi').style.display = 'none';
			document.getElementById('tablaConIndi').style.display = 'none';
			document.getElementById('eliminarTra').style.display = 'none';
			document.getElementById('tablaEliminar').style.display = 'none';
			document.getElementById('modificarTra').style.display = 'inline';
			document.getElementById('formulariomodTra').style.display = 'inline';

		}
		function eliminar(){
			document.getElementById('formularioTratamientos').style.display = 'none';
			document.getElementById('consultaGeneral').style.display = 'none';
			document.getElementById('consultaIndi').style.display = 'none';
			document.getElementById('tablaConIndi').style.display = 'none';
			document.getElementById('eliminarTra').style.display = 'inline';
			document.getElementById('tablaEliminar').style.display = 'inline';
			document.getElementById('modificarTra').style.display = 'none';
			document.getElementById('formulariomodTra').style.display = 'none';

		}
	</script>

	<!-- ______________________________________FORMULARIO DE REGISTRO DE TRATAMIENTOS-->
	<div id ="formularioTratamientos" style="display: none;">
		<form id="miForm" method="post">
		<div class="container" style="background-color: #00538D; border-radius: 15px; padding-top: 5px; padding-bottom: 10px; padding-left: 15px; padding-right; opacity: 80%: 15px; margin-bottom: 20px; ">
			<header style="margin-top: 10px;"><center><font face="arvo" style="color: white;" size="5">REGISTRAR TRATAMIENTO</font></center></header>
			<hr style="background-color: white;"><br>
			<div class="row"><!--NOMBRE, ID DEL TRATAMIENTO-->
				<div class="col-md">
					<div class="input-group mb-3">
						<span class="input-group-text" id="basic-addon1" style="border-bottom-left-radius: 4px;border-top-left-radius: 4px;">ID del Tratamiento</span>
						<input type="text" name="idTrat" class="form-control" placeholder="Escriba el id del tratamiento" aria-label="idTratamiento" aria-decribedby="basic-addon1" maxlength="25" style="padding-right: 15px; border-top-right-radius: 4px; border-bottom-right-radius: 4px;">&nbsp;&nbsp;&nbsp;&nbsp; 
						<span class="input-group-text" id="basic-addon1">Nombre</span>
						<input type="text" name="nombre" class="form-control" placeholder="Escriba el nombre del tratamiento" aria-label="TratamientName" aria-decribedby="basic-addon1" maxlength="25" style="padding-right: 15px; border-top-right-radius: 4px; border-bottom-right-radius: 4px;">&nbsp;&nbsp;&nbsp;&nbsp; 
					</div>
				</div>
			</div>
			<div class="row"><!--No. SESIONES Y COSTO-->
				<div class="col-md">
					<div class="input-group mb-3">
						<span class="input-group-text" id="basic-addon1">Costo ($)</span>
						<input type="text" name="costoT" class="form-control" placeholder="Escriba el costo del tratamiento" aria-label="CostoT" aria-decribedby="basic-addon1" maxlength="25" style="padding-right: 15px; border-top-right-radius: 4px; border-bottom-right-radius: 4px;">&nbsp;&nbsp;&nbsp;&nbsp;
					</div>
				</div>
				<div class="col-md">
					<div class="input-group mb-3">
						<span class="input-group-text" id="basic-addon1">Número de Sesiones</span>
						<input type="text" name="numSes" class="form-control" placeholder="Escriba el número de sesiones" aria-label="numSes" aria-decribedby="basic-addon1" maxlength="25" style="padding-right: 15px; border-top-right-radius: 4px; border-bottom-right-radius: 4px;">&nbsp;&nbsp;&nbsp;&nbsp; 
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
                        <th class="col-md-4">Id Tratamiento</th>
                        <th class="col-md-4">Nombre</th>
                        <th class="col-md-4">Costo del tratamiento</th>
                        <th class="col-md-4">Número de sesiones</th>
                    </tr>
                </thead>
                <?php
                  $consulta = "SELECT * FROM tratamiento";
                  $resultado = mysqli_query($conex, $consulta);

                  while($row = mysqli_fetch_array($resultado)){
                      echo "<tr>";
                      echo "<td>".$row["Id_T"]."</td>";
                      echo "<td>".$row["Nom_T"]."</td>";
                      echo "<td>".$row["Costo_T"]."</td>";
                      echo "<td>".$row["Num_Ses"]."</td>";
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
							<span class="input-group-text" id="basic-addon1" style="margin-left: 20rem;">Tratamiento</span>
							<select type="text" name="idTratamiento" id="idTratamiento"  onchange="buscar()" class="form-control" style="padding-right: 15px; border-top-right-radius: 4px;">
									<option>---Selecciona un Tratamiento---</option>
									<?php
										include('dbConex.php');
										$getTratamiento1="SELECT Id_T, Nom_T FROM tratamiento ORDER BY Nom_T";
										$getTratamiento2 = mysqli_query($conex,$getTratamiento1);

										while($row=mysqli_fetch_array($getTratamiento2)){
											echo $idT = $row['Id_T'];
											echo $nombre = $row['Nom_T'];

									?>
									<option value="<?php echo $idT ?>"><?php echo $idT ?>, <?php echo $nombre ?></option>
									<?php
										}
									?>
							</select>
							<input type="submit" value="Consulta Individual" class="btn btn-warning" style="margin-right: 17rem;">
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
						<th class="col-md-1" style="background-color: #000A3F">Id Tratamiento</th>
						<th class="col-md-2" style="background-color: #000A3F">Nombre</th>
						<th class="col-md-2" style="background-color: #000A3F">Costo ($)</th>
						<th class="col-md-2" style="background-color: #000A3F">Número de sesiones</th>
					</tr>
				</thead>
				<?php
					@$idT = $_POST['idTratamiento'];
					if($idT){
						$consulta = "SELECT * FROM tratamiento Where Id_T ='$idT'";

						$resultado = mysqli_query($conex, $consulta);

						while($row = mysqli_fetch_array($resultado)){
							echo "<tr style='text-align: center; vertical-align: middle;'>";
							echo "<td>".$row["Id_T"]."</td>";
              				echo "<td>".$row["Nom_T"]."</td>";
              				echo "<td>".$row["Costo_T"]."</td>";
              				echo "<td>".$row["Num_Ses"]."</td>";
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
	<div  id="eliminarTra" style="display:  none;">
		<form id="miForm" method="post">
			<div class="container" style="background-color: #00538D; border-radius: 15px; padding-top: 5px; padding-bottom: 10px; padding-left: 15px; padding-right; opacity: 80%: 15px; margin-bottom: 20px;">
				<header style="margin-top: 10px;">
				<center><font face="arvo" style="color: white;" size="5">ELIMINAR TRATAMIENTO</font></center></header>
				<hr style="background-color: white;"><br>
				<div class="row">
					<div class="col-md">
						<div class="input-group mb-3">
							<span class="input-group-text" id="basic-addon1" style="margin-left: 20rem;">Paciente</span>
							<select type="text" name="idTratamientoE" id="idTratamientoE"  onchange="buscar()" class="form-control" style="padding-right: 15px; border-top-right-radius: 4px;">
									<option>---Selecciona un Tratamiento---</option>
									<?php
										include('dbConex.php');
										$getTratamiento1="SELECT Id_T, Nom_T FROM tratamiento ORDER BY Nom_T";
										$getTratamiento2 = mysqli_query($conex,$getTratamiento1);

										while($row=mysqli_fetch_array($getTratamiento2)){
											echo $idT = $row['Id_T'];
											echo $nombreT = $row['Nom_T'];

									?>
									<option value="<?php echo $idT ?>"><?php echo $idT ?>, <?php echo $nombreT ?></option>
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
						<th class="col-md-1" style="background-color: #000A3F">Id Tratamiento</th>
						<th class="col-md-2" style="background-color: #000A3F">Nombre</th>
						<th class="col-md-2" style="background-color: #000A3F">Costo ($)</th>
						<th class="col-md-2" style="background-color: #000A3F">Número de Sesiones</th>
					</tr>
				</thead>
				<?php
					@$idT = $_POST['idTratamientoE'];
					if($idT){
						$consulta = "SELECT * FROM tratamiento Where Id_T='$idT'";

						$resultado = mysqli_query($conex, $consulta);

						while($row = mysqli_fetch_array($resultado)){
							echo "<tr style='text-align: center; vertical-align: middle;'>";
							echo "<td>".$row["Id_T"]."</td>";
				            echo "<td>".$row["Nom_T"]."</td>";
				            echo "<td>".$row["Costo_T"]."</td>";
				            echo "<td>".$row["Num_Ses"]."</td>";
							echo "</tr>";
						}
						mysqli_free_result($resultado);
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
	<div  id="modificarTra" style="display:  none;">
		<form id="miForm" method="post">
			<div class="container" style="background-color: #00538D; border-radius: 15px; padding-top: 5px; padding-bottom: 10px; padding-left: 15px; padding-right; opacity: 80%: 15px; margin-bottom: 20px;">
				<header style="margin-top: 10px;">
				<center><font face="arvo" style="color: white;" size="5">MODIFICAR TRATAMIENTO</font></center></header>
				<hr style="background-color: white;"><br>
				<div class="row">
					<div class="col-md">
						<div class="input-group mb-3">
							<span class="input-group-text" id="basic-addon1" style="margin-left: 20rem;">Tratamiento</span>
							<select type="text" name="idTratamientoM" id="idTratamientoM"  onchange="buscar()" class="form-control" style="padding-right: 15px; border-top-right-radius: 4px;">
									<option>---Selecciona un Tratamiento---</option>
									<?php
										include('dbConex.php');
										$getTratamiento1="SELECT Id_T, Nom_T FROM tratamiento ORDER BY Nom_T";
										$getTratamiento2 = mysqli_query($conex,$getTratamiento1);

										while($row=mysqli_fetch_array($getTratamiento2)){
											echo $idT = $row['Id_T'];
											echo $nombreT = $row['Nom_T'];

									?>
									<option value="<?php echo $idT ?>"><?php echo $idT ?>, <?php echo $nombreT ?></option>
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
	<!-- ______________________________________FORMULARIO MODIFICAR___________________-->
	<div id ="formulariomodTra" style="display: none;">
		<form id="miForm" method="post">
		<div class="container" style="background-color: #00538D; border-radius: 15px; padding-top: 5px; padding-bottom: 10px; padding-left: 15px; padding-right; opacity: 80%: 15px; margin-bottom: 20px; ">
			<header style="margin-top: 10px;"><center><font face="arvo" style="color: white;" size="5"></font></center></header>
			<hr style="background-color: white;"><br>
			<div class="row"><!--NOMBRE, ID DEL TRATAMIENTO-->
				<div class="col-md">
					<div class="input-group mb-3">
						<span class="input-group-text" id="basic-addon1" style="border-bottom-left-radius: 4px;border-top-left-radius: 4px;">ID del Tratamiento</span>
						<input type="text" name="idTrat" class="form-control" placeholder="Escriba el id del tratamiento" aria-label="idTratamiento" aria-decribedby="basic-addon1" maxlength="25" style="padding-right: 15px; border-top-right-radius: 4px; border-bottom-right-radius: 4px;">&nbsp;&nbsp;&nbsp;&nbsp; 
						<span class="input-group-text" id="basic-addon1">Nombre</span>
						<input type="text" name="nombre" class="form-control" placeholder="Escriba el nombre del tratamiento" aria-label="TratamientName" aria-decribedby="basic-addon1" maxlength="25" style="padding-right: 15px; border-top-right-radius: 4px; border-bottom-right-radius: 4px;">&nbsp;&nbsp;&nbsp;&nbsp; 
					</div>
				</div>
			</div>
			<div class="row"><!--No. SESIONES Y COSTO-->
				<div class="col-md">
					<div class="input-group mb-3">
						<span class="input-group-text" id="basic-addon1">Costo ($)</span>
						<input type="text" name="costoT" class="form-control" placeholder="Escriba el costo del tratamiento" aria-label="CostoT" aria-decribedby="basic-addon1" maxlength="25" style="padding-right: 15px; border-top-right-radius: 4px; border-bottom-right-radius: 4px;">&nbsp;&nbsp;&nbsp;&nbsp;
					</div>
				</div>
				<div class="col-md">
					<div class="input-group mb-3">
						<span class="input-group-text" id="basic-addon1">Número de Sesiones</span>
						<input type="text" name="numSes" class="form-control" placeholder="Escriba el número de sesiones" aria-label="numSes" aria-decribedby="basic-addon1" maxlength="25" style="padding-right: 15px; border-top-right-radius: 4px; border-bottom-right-radius: 4px;">&nbsp;&nbsp;&nbsp;&nbsp; 
					</div>
				</div>
			</div>
			<div class="row"><!--BOTON REGISTRAR-->
				<hr style="background-color: white">
				<div class="col-xl">
					<center><button class="btn" type="submit" name="modificar" style="padding-top: 10px;padding-bottom: 10px;padding-left: 120px;padding-right: 120px; background-color: #89D4E4;font-weight: bold;"><font face="arvo" size="4">MODIFICAR</font></button></center>
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