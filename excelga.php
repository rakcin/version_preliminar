<?php
header('Content-type: application/xls ');
header('Content-Disposition: attachment; filename=directorio.xls');



?>
<?php

include_once "conexion.php";
$sql= "SELECT * FROM garantias";


echo '<a href="form_gara.html" class="btn btn-warning" tabindex="-1" role="button" aria-disabled="true" >NUEVO</a><table class="table table-striped" style="width: 400px;
height: 450px;">
        <tr>
            <th>id_garantia</th>
            <th>estado_pro</th>
            <th>nombre_cli</th>
            <th>fecha_entrega</th>
            <th>fecha_compra</th>
            <th>descripcion_daño</th>
            <th></th>
            <th></th>
           
        </tr>';
        
if ($rta = $conn -> query($sql)){
    while($row = $rta -> fetch_assoc()){
        $id_garantia= $row["id_garantia"];
        $estado_pro = $row["estado_pro"];
        $nombre_cli = $row["estado_pro"];
        $fecha_entrega = $row["fecha_entrega"];
        $fecha_compra = $row["fecha_compra"];
        $descripcion_daño = $row["descripcion_daño"];
        
    echo "<tr>
            <td>$id_garantia</td>
            <td>$estado_pro</td> 
            <td>$nombre_cli</td> 
            <td>$fecha_entrega</td> 
            <td>$fecha_compra</td>
            <td>$descripcion_daño</td>
           
            <td> <a href='actualizarga.php'class='btn btn-warning'>editar</a></td>
            <td> <a href='deletefg.php'class='btn btn-danger'>eliminar</a></td>
            
          </tr>";    
    }
    $rta -> free();


}?>