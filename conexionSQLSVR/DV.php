<?php 
/*VALIDACION DE RUT */
$rut=$_REQUEST["$rut"];
$dv=$_REQUEST["$dv"];
/*Con las lineas anteriores le asignanos a las variables
 $rut y $dv, lo ingresado por formulario
 en la página anterior, solo utilizaremos el rut. 
 El digito verificador, lo usaremos al final*/
 $rutin=strrev($rut);
/* Invertimos el rut con la funcion “strrev” */ 
$cant=strlen($rutin);
/*se cuenta la cantidad de numeros que tiene el rut*/
$c=0;
/*contador iniciado en 0*/
while($c<$cant)
{
$r[$c]=substr($rutin,$c,1);
$c++;
}
/*Hacemos un ciclo en el que se creara un array o arreglo que se llamara
 $r, en el cual se le asignara a cada valor del array,
 el valor correspodiente del rut, Por ej: para el rut 12346578, 
 quede invertido sería 87654321, el valor de $r[0] es 8, de $r[5] es 3 y asi sucesiva y respectivamente.*/
 $ca=count($r);
 /*Se cuentan la cantidad de valores que tiene el arreglo con la funcion "count"*/
 /*A continuación se crean  3 cosas. Un multiplicador con el nombre $m y que su valor inicial es 2, 
 ya que por formula es el primero que necesitamos, creamos tambien un segundo contador con el nombre $c2 y valor inicial cero 
 y por ultimo creamos un acumulador de nombre $suma en el cual se guardara el total luego de multiplicar y sumar como manda la formula */
 $m=2;
 $c2=0;
 $suma=0;
 /*Hacemos un nuevo ciclo en el cual a $suma se le suma (valga la redundancia) su propio valor 
 (que inicialmente es cero) más el resultado de la multiplicación entre el valor del array 
 correspondiente por el multiplicador correspondiente, basandonos en la formula */
 while($c2<$ca)
 {
	 $suma=$suma+($r[$c2]*$m);
	 if($m==7)
	 {
		$m=2; 
	 }else{
		 $m++;
	 }
	 $c2++;
 }
 $resto=$suma%11;
 /*se calcula el resto de la division con el simbolo %*/
 $digito=11-$resto;
 /*se calcula el digito que corresponde al RUT, restando 11 al obtenido anteriormente*/
 if($digito==10)
 {
	 $digito=K;
 }else{
	 if($digito==11)
	 {
		 $digito=0;
	 }
 }
  /*Creamos dos condiciones, la primero dice que si el valor de $digito es 11, lo reemplazamos por un cero (el cero va entre comillas. 
 De no hacerlo así, el programa considerará “nada” como cero, es decir si la persona no ingresa Digito Verificado y este corresponde a un cero, 
 lo tomará como valido, las comillas, al considerarlo texto, evitan eso). 
 El segundo dice que si el valor de $digito es 10, lo reemplazamos por una K, de no cumplirse ninguno de las condiciones, el valor de $digito no cambiará. */
 if($dv==$digito)
 {
	 echo "VALIDO";
 }else{
	 echo "NO VALIDO";
 }
/*Por ultimo comprobamos si el resultado que obtuvimos es el mismo que ingreso la persona,
 de ser así se muestra el mensaje “Valido”, de no ser así se muestra el mensaje “No Valido” */ 
?>
