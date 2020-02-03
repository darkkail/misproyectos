<?php

include ('conexion.php');

$consulta_pago = ("SELECT * FROM creditos ORDER BY Rut");
$result = mysqli_query($conec,$consulta_pago);

?>

<link href = "css/bootstrap.min.css" rel="stylesheet">"

<body>
    <div class="container">
        <div class ="col-md-6 col-md-offset-3">              
    <form method = "POST" action ="pagos.php">    
     <table class ="table">
        <tr>
        <td>Rut:</td>
        <td>monto:</td>
        </tr>
        <?php
            while ($row = mysqli_fetch_assoc($result)!=NULL){
                ?>
                <tr>
                <!--td><input type="checkbox" name="rrut[<?php/* echo $consulta['Rut']; */?>" checked value="1"></td-->
                <td><input type="checkbox" name="chk[]" checked value="<?php "SELECT SUM monto FROM creditos WHERE 'Rut' in chk[]"?>"></td>            
                
                <td><input type="number" step="any" name="monto"></td>
            </tr>
            <?php
            }        
        ?>
        <tr>
            <td colspan="2">
            <div class = "form-group">
            <<input name="" id="" class="btn btn-primary" type="button" value="Aceptar">  
    </table>
   </form>
   
       </div>
    </div>


</body>
