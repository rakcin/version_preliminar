<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    
</head>
<body> 
<header>
<br>
<br>
<div class="container text-center">
            <div class="row align-items-end">
                <div class="row align-items-center">
                    <div class="col-3">
                        <img src="img/pasted image 0.png" alt="" width="100" height="100" style="border-radius:50%" >
                        
                    </div> 
                    <div class="col-6"> 
                        <H1>Gestion de ventas</H1>
                    </div>
                    <div class="col-2"> 
                        <h5 >Linea Geometrica S.A.S</h5>
                        <a href="login.php" class="btn"tabindex="-1" role="button" aria-disabled="true" style="background-color:  #bb8220;"> Cerrar Sesion</a>
                    </div>

                </div>
            </div>

</div>
<br>
<br>

</header> 

<nav style="background-color: #bb8220;">
<ul>
            <center> 
                <a href="rtaVenta.php" class="btn" tabindex="-1" role="button" aria-disabled="true" style="background-color:  #bb8220;">Gestion Ventas</a>
                
                <a href="rta_inv.php" class="btn" tabindex="-1" role="button" aria-disabled="true" style="background-color:  #bb8220;">Gestion inventarios</a>
                
                <a href="rta_ga.php"class="btn" tabindex="-1" role="button" aria-disabled="true" style="background-color:  #bb8220;">Gestion garantias</a>
                <a href="rtaweb.php"class="btn" tabindex="-1" role="button" aria-disabled="true" style="background-color:  #bb8220;">Usuarios</a>
                
            </center>
    
</ul>
</nav>

<center>
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
<a  href='excelga.php' type="button" class="btn btn-success">excel</a>
</body>
</html>
        
       
   </center>

        </body>
        </html>