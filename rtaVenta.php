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
        <a  href='excelventa.php' type="button" class="btn btn-success">excel</a>
        
         
        </div>
        
    

        </body>
        </html>
                