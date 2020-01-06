<!DOCTYPE HTML>

<?php

include ("conexion_prueba.php");
?>

<meta charset="UTF-8">
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content ="width=device-width, inial-scale=1">
	<title>INGRESO DE SOCIOS</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	
</head>
<body>
<div class="col -md-8 col -md -offset-2">
			<h1>Acceso de Socios</h1>
			
			<form method="POST" action="login.php">
				<div class= "form-group">
				<label>Rut:</label>
				<input type="text" name="RUT" class="form-control"  placeholder="Ingrese Rut"></br>
				</div>
				<div class= "form-group">
				<label>Contraseña:</label>
				<input type="password" name="passw" class="form-control"  placeholder="Ingrese clave"></br>
				</div>
				<div class= "form-group">
				<input type="submit" name="login" class="btn btn-warning" value="Ingresar"></br>
				<td>
				<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
				<div class ="container">
					<div class ="row">
						<div class="col -md-8 col -md -offset-2">
							<a href="registro.php" class="btn btn-primary btn-sm ml-auto">Registarse </a>
											<!--input type="submit"  name="Registro" class="btn btn-warning" td align="center"  onClick="parent.location='registro.php'" value="Registrarse"></br-->

				</td>
				</div>
			</form>
		</div>
<br/><br/><br/>	

<?php

		if(isset($_POST['login'])){
			$rut =$_POST['RUT'];
			$clave =$_POST['passw'];

			$acceso = "SELECT * FROM usuarios_web WHERE login = '$rut' AND passw ='$clave'";

			$ejecuta_sql =sqlsrv_query ($conexion, $acceso);

			if($ejecuta_sql){

				if ($row = sqlsrv_fetch_array($ejecuta_sql)) {
					header('location:"cuentas.php"');
				}else{
					echo "Necesita Registrarse";
				}
				msql_free_result($ejecuta_sql);
				msql_close($conexion);
			}


		}
?>

</body>
</html>
