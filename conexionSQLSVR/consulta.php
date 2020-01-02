<?php
//lectura de los datos de la tabla de la bbdd Cronos 

$consulta= "select uw_c_rut, uw_c_clave from usuarios_web"
$getResults= sqlsrv_query(include 'conexion_prueba.php',$consulta);
echo ("Leyendo los datos de la tabla". PHP_EOL);
if ($getResults==FALSE)
	die(FormatErrors(slqsrv_errors()));
while ($row=slqsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)){
	echo ($row['uw_c_rut'] . "" . $row['uw_c_clave'] . PHP_EOL);
	
}

sqlsrv_free_stmt($getResults);

sqlsrv_free_stmt($getResults);
function FormatErrors( $errors )
{
    /* Display errors. */
    echo "Error information: ";
    foreach ( $errors as $error )
    {
        echo "SQLSTATE: ".$error['SQLSTATE']."";
        echo "Code: ".$error['code']."";
        echo "Message: ".$error['message']."";
    }
}
?>