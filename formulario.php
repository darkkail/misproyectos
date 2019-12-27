 <!DOCTYPE HTML>
 <?php
 include("conexion_prueba.php")
 ?>
 <meta charset="UTF-8">
 <html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content ="IE-edge">
	<meta name="viewport" content ="width=device-width, inial-scale=1">
<!--select uw_c_rut, uw_c_clave from usuarios_web-->	
	<title>DATOS DE SOCIOS</title>
	<!-- CSS Y BOOTSTRAP-->
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="col -md-8 col -md -offset-2">
			<h1>Acceso de Socios</h1>
			
			<form method="POST" action="formulario.php">
				<div class= "form-group">
				<label>Rut:</label>
				<input type="text" name="RUT" size='15' class="form-control"  placeholder="Ingrese Rut"></br>
				</div>
				<div class= "form-group">
				<label>Contraseña:</label>
				<input type="password" name="passw" size='15' class="form-control"  placeholder="Ingrese clave"></br>
				</div>
				<div class= "form-group">
				<input type="submit" name="insert" class="btn btn-warning" value="INSERTAR"></br>
				</div>
			</form>
		</div>
<br/><br/><br/>		
<?php

if(isset ($_POST['insert'])){
	$rut = $_POST['RUT'];
	$pass = $_POST['passw'];
	
	$insertar = "INSERT INTO usuarios_web(uw_c_rut, uw_c_clave ) VALUES ('$rut', '$pass')";
	
	$ejectuar = sqlsrv_query($conexion, $insertar);
	
	if($ejectuar){
		if($row =sqlsrv_fetch_array($ejectuar)){
				echo "<h3>Ya registrado </h3>";
		
		}else{
			echo "<h3>Ingreso Correcto</h3>";
		}
		
	}else{
		echo "<h3>NO FUNCIONA</h3>";
	}
}

?>

			<div class="col md-8 col-md-offset -2">
			<!--div class="table-responsive  table table-bordered"-->
			<table class="table table-bordered">
				<tr>
					<td>uw_s_id</td>
					<td>uw_c_rut</td>
					<td>uw_c_clave</td>
					<td>uw_f_condicion</td>
					<td>uw_n_intentos</td>
					<td>uw_b_estado</td>
				</tr>	
				
				<?php
					$sql = "SELECT * FROM usuarios_web"; 
					
					$ejectuar = sqlsrv_query($conexion, $sql);	
					$i = 0;
					
					while($fila = sqlsrv_fetch_array($ejectuar)){
						$id = $fila['uw_s_id'];				//se pasan los datos a los campos de la BBDD, deben ser iguales
						$rut = $fila['uw_c_rut'];
						$pass = $fila['uw_c_clave'];
						$condicion = $fila['uw_f_condicion'];
						$intentos = $fila['uw_n_intentos'];
						$estado = $fila['uw_b_estado'];
						$i++; 
				
					
				
				
				
				?>
				
				<tr align="center">
					<td><?php echo $id; ?></td>
					<td><?php echo $rut; ?></td>
					<td><?php echo $pass; ?></td>
					<td><?php echo $condicion; ?></td>
					<td><?php echo $intentos; ?></td>
					<td><?php echo $estado; ?></td>
					<td><a href="formulario.php?editar=<?php echo $id; ?>">Editar</a></td>
					<td><a href="formulario.php?borrar=<?php echo $id; ?>">Borrar</a></td>
					<td></td>
				</tr>	
					<?php } ?>
			</table>


		
	</body>
 </html>
 
 