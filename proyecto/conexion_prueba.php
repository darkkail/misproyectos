<?php
$serverName = "192.168.0.118";
$connectionInfo = array("Database"=>"Crono", "UID"=>"sa", "pwd"=> "maximiza");
$conexion = sqlsrv_connect($serverName, $connectionInfo);

	if($conexion){
		echo "CONECTADO";
	}else{
		echo "!!!!!!!FATAL ERROR¡¡¡¡¡¡";
	}

?>
