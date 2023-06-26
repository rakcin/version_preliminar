<?php
header('Content-type: application/xls ');
header('Content-Disposition: attachment; filename=directorio.xls');



?>
<?php
include_once "conexion.php";
$sql= "SELECT * FROM ventas";

echo '<a href="Gestion_ventas.html" class="btn btn-warning" tabindex="-1" role="button" aria-disabled="true" >NUEVO</a><table class="table table-striped" style="width: 400px;
height: 450px;">
    
        <tr>
            <th>id_venta</th>
            <th>valor_total</th>
            <th>fecha_venta</th>
            <th>nombre_cliente</th>
            <th>numero_de_cotizacion</th>
            <th></th>
            <th></th>
           
            
        </tr>';
        
         
        if ($rtaV = $conn -> query($sql)){
            while($row = $rtaV -> fetch_assoc()){
                $id_venta = $row["id_venta"];
                $valor_total = $row["valor_total"];
                $fecha_venta = $row["fecha_venta"];
                $nom_cliente = $row["nom_cliente"];
                $num_cotizacion = $row["num_cotizacion"];
                
        
            echo "
             <tr >
                    <td>$id_venta</td>
                    <td>$valor_total</td> 
                    <td>$fecha_venta</td> 
                    <td>$nom_cliente</td>
                    <td>$num_cotizacion</td>
                    <td> <a href='actualizarvent.php'class='btn btn-warning'>editar</a></td>
                    <td>  <a href='deleteFv.php'class='btn btn-danger'>eliminar</a></td>
                    
                    
                    
                    
                  </tr>";    
            }
            $rtaV -> free();
        
        
        }?>