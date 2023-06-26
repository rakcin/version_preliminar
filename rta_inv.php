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
                        <H1>Gestion de inventarios</H1>
                    </div>
                    <div class="col-2"> 
                        <h5 >Linea Geometrica S.A.S</h5>
                        <a href="login.php" class="btn"tabindex="-1" role="button" aria-disabled="true" style="background-color:  #bb8220;"> Cerrar sesion</a>
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
<a  href='excelinv.php' type="button" class="btn btn-success">excel</a>
       
    </footer>

        </body>
        </html>
                
                    
                    