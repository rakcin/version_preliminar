<?php
include_once "conexion_v.php";
$sql= "SELECT * FROM venta";

echo '<a href="Gestion_ventas.html" class="btn btn-warning" tabindex="-1" role="button" aria-disabled="true" >NUEVO</a><table class="table table-striped" style="width: 400px;
height: 450px;">
    <thead>
        <tr>
            <th>id_venta</th>
            <th>valor_total</th>
            <th>fecha_venta</th>
            <th>nom_cliente</th>
            <th>num_cotizacions</th>
            
        </tr>
        </thead>';
        
         
        if ($rtaV = $conn -> query($sql)){
            while($row = $rtaV -> fetch_assoc()){
                $id_venta = $row["id_venta"];
                $valor_total = $row["valor_total"];
                $fecha_venta = $row["fecha_venta"];
                $nom_cliente = $row["nom_cliente"];
                $num_cotizacion = $row["num_cotizacion"];
                
        
            echo "<tbody>
             <tr class='table-active'>
                    <td>$id_venta</td>
                    <td>$valor_total</td> 
                    <td>$fecha_venta</td> 
                    <td>$nom_cliente</td>
                    <td>$num_cotizacion</td>
                    
                    
                    
                  </tr>";    
            }
            $rtaV -> free();
        
        
        }?>
        </div>
       <footer>
    </footer>

        </body>
        </html>
                
                    
                    