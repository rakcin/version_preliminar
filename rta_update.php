<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="misestilos99.css">
</head>
<body> 
<header class="header" style="background: url(./img/textura-de-madera_1920x1200_xtrafondos.com.jpg) no-repeat center top;">

<div class="container">
    <div class="header__inner">
    <div ><img src="img/pasted image 0.png" alt="" width="150" height="150"  style="border-radius:50%" >

    </div>
   <div>  <center><H1>Gestion de Inventarios</H1></center></div>
    <div>
        <h5 style="margin-left: 280%; width: 100%;">Linea Geometrica S.A.S</h5>
        <a style="margin-left: 280%; width: 50%;" href="login.html">Cerrar sesion</a></li>
    </div>

</div>
   
</div>


</header> 

<nav>
<ul><center>
                <a href="rtaVenta.php" class="btn" tabindex="-1" role="button" aria-disabled="true" style="background-color:  #bb8220;">Gestion Ventas</a>
                
                <a href="rta_inv.php" class="btn" tabindex="-1" role="button" aria-disabled="true" style="background-color:  #bb8220;">Gestion inventarios</a>
                
                <a href="rta_ga.php"class="btn" tabindex="-1" role="button" aria-disabled="true" style="background-color:  #bb8220;">Gestion garantias</a>
                <a href="rtaweb.php"class="btn" tabindex="-1" role="button" aria-disabled="true" style="background-color:  #bb8220;">Usuarios</a>
                
            </center>
</ul>
</nav>
<footer  style="background: url(./img/textura-de-madera_1920x1200_xtrafondos.com.jpg) no-repeat center top;">
    
    <h1>Actualizacion Exitosa</h1>
    <a style="margin-left: 460%; width: 50%;" href="rta_inv.php">Regresar</a></li>
<?php

include_once "conexion.php";
include_once "act_inv.php";

        
?>
</body>
</html>
        
       
    </footer>

        </body>
        </html>