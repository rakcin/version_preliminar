<?php
header('Content-type: application/xls ');
header('Content-Disposition: attachment; filename=directorio.xls');



?>
<?php
include_once "conexion.php";
$sql= "SELECT * FROM registro";
echo '<a href="rtaweb.php" class="btn btn-warning" tabindex="-1" role="button" aria-disabled="true" >NUEVO</a><table class="table table-striped" style="width: 400px;
height: 450px;">
        <tr>
            <th>numDoc</th>
            <th>nombres</th>
            <th>apellidos</th>
            <th>numCon</th>
            <th>direccion</th>
            <th>email</th>
            <th>contraseña</th>
            <th></th>
            <th></th>
        </tr>';
        
if ($rta = $conn -> query($sql)){
    while($row = $rta -> fetch_assoc()){
        $numDoc = $row["numDoc"];
        $nombres = $row["nombres"];
        $apellidos = $row["apellidos"];
        $numCon = $row["numCon"];
        $direccion = $row["direccion"];
        $email = $row["email"];
        $contraseña = $row["contraseña"];

    echo "<tr>
            <td>$numDoc</td>
            <td>$nombres</td> 
            <td>$apellidos</td> 
            <td>$numCon</td>
            <td>$direccion</td>
            <td>$email</td>
            <td>$contraseña</td>
            <td> <a href='actuilizarR.php'class='btn btn-warning'>editar</a></td>
            <td>  <a href='deleteFR.php'class='btn btn-danger'>eliminar</a></td>
          </tr>";    
    }
    $rta -> free();


}?>