<?php
	if (isset($_GET['editar'])){
		$editar_id = $_GET['editar'];					
		
			//echo "<pre>" .print_r($conexion, true);
			$sql = "SELECT * FROM usuarios_web WHERE uw_s_id='$editar_id'"; 
			//echo $sql; 
			$ejectuar = sqlsrv_query($conexion, $sql);			
			//print_r($ejecutar);
			$fila = sqlsrv_fetch_array($ejectuar, SQLSRV_FETCH_ASSOC);
			
			$pass = $fila['uw_c_clave'];
	}


?>

</br>

<div class="col -md-8 col -md -offset-2">
			
			
			<form method="POST" action="">
				<!--div class= "form-group">
				<label>Rut:</label>
				<input type="text" name="RUT" size='15' class="form-control"  placeholder="Ingrese Rut"></br>
				</div-->
				<div class= "form-group">
				<label>Contraseña:</label>
				<input type="password" name="passw" size='15' class="form-control"  value = "<?php echo $pass; ?>" ></br>
				</div>
				<div class= "form-group">
				<input type="submit" name="actualizar" class="btn btn-warning" value="ACTUALIZA"></br>
				</div>
			</form>
		</div>
		
		
		
<?php


if (isset($_POST['actualizar'])){
		
		$actualizar_pass = $_POST['passw']; // se debe actualizar lo que que se envia por el campo password
		//la actualización se realiza en base a los camppos del formulario.
		$sql = "UPDATE usuarios_web SET uw_c_clave = $actualizar_pass WHERE uw_s_id = '$editar_id'";
		
		$ejecutar =  sqlsrv_query($conexion, $sql);
		
		if($ejectuar) {
			
			echo "<script>alert('Datos actualizados')</script>";
			echo "<script>windows.open('formulario.php', '_self')</script>"; //permite abrir una ventana de aviso, dentro de la misma ventana.
			print_r("$ejecutar");
		}
	}


?>		