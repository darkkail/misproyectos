<?php
$serverName = "SVR-CRONO";
$connectionInfo = array("Database"=>"Crono", "UID"=>"sa", "pwd"=> "maximiza");
$conexion = sqlsrv_connect($serverName, $connectionInfo);

	if($conexion){
		echo "!!!!!!!FELICITACIONES AL FIN SE HA CONECTADO¡¡¡¡¡¡¡¡";
	}else{
		echo "!!!!!!!FATAL ERROR¡¡¡¡¡¡";
	}

?>