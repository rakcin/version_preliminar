<?php
header('Content-type: application/xls ');
header('Content-Disposition: attachment; filename=directorio.xls');



?><?php

include_once "conexion.php";
$sql= "SELECT * FROM inventarios";
echo '<a href="Gestion_inventarios.html" class="btn btn-warning" tabindex="-1" role="button" aria-disabled="true" >NUEVO</a><table class="table table-striped" style="width: 400px;
height: 450px;">
        <tr>
            <th>idpro</th>
            <th>nombre_pro</th>
            <th>descripcion</th>
            <th>nombre_prov</th>
            <th>cantidad</th>
            <th>ult_fech_ing</th>
            <th>ult_cant_ing</th>
            <th>ult_fech_sal</th>
            <th>ult_cant_sal</th>
            <th></th>
            <th></th>
           
        </tr>';
        
if ($rta = $conn -> query($sql)){
    while($row = $rta -> fetch_assoc()){
        $idpro = $row["idpro"];
        $nombre_pro = $row["nombre_pro"];
        $descripcion = $row["descripcion"];
        $nombre_prov = $row["nombre_prov"];
        $cantidad = $row["cantidad"];
        $ult_fech_ing = $row["ult_fech_ing"];
        $ult_cant_ing = $row["ult_cant_ing"];
        $ult_fech_sal = $row["ult_fech_sal"];
        $ult_cant_sal = $row["ult_cant_sal"];

    echo "<tr>
            <td>$idpro</td>
            <td>$nombre_pro</td> 
            <td>$descripcion</td> 
            <td>$nombre_prov</td> 
            <td>$cantidad</td>
            <td>$ult_fech_ing</td>
            <td>$ult_cant_ing</td>
            <td>$ult_fech_sal</td>
            <td>$ult_cant_sal </td>
            <td> <a href='actualizarInv.php'class='btn btn-warning'>editar</a></td>
            <td> <a href='deleteform.php'class='btn btn-danger'>eliminar</a></td>

          </tr>";    
    }
    $rta -> free();


}?>