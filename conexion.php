<?php
//CONEXION CON LA BASE DE DATOS DE PRUEBA. 

$conec = mysqli_connect("localhost", "root", "","bd_prueba_pagos" );

if(!$conec){
    echo 'NO CONECTADO';
    
}else{
    echo'conectado correctamente';
}
    


    


?>


