<?php
require_once "validacion.php";


?>

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
                        <H1>Gestion de modulos</H1>
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
                
                    <button class="dropdown"  role="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" style="background-color:  #bb8220;">
                      Documentos
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <li><a class="dropdown-item" href="Sustentación Trimestre 4.pdf" download="Presentacion-4to">Descargar Presentacion-4to</a></li>
                      <li><a class="dropdown-item" href="caso de uso.pdf" download="casos de usos">Descargar Casos de usos</a></li>
                      
                    </ul>
                  
                
            </center>
    
</ul>
</nav>
    <br>
    <br>
    <br>

    <section >
        <div class="container text-center">
            <div class="row align-items-start">
                <div class="row align-items-center">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col"> 

                        <h1> BIENVENIDO ADMINISTRADOR </h1> 
                        
                        
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                
            </div>
           
        </div>
    </section>


    <br>

    <br>
    <br>















    <footer style="background-color: #bb8220;" >
        <div class="container text-center">
            <div class="row align-items-start">
                <div class="row align-items-center">
                    <div class="col-2"> 
                        
                       <h6> Copyright © 2023 SENA <br>
                        Desarrollado por MI Colombia <br></h6>
    
                    </div>
                    <div class="col-7">

                    </div>
                 
    
                    <div class="col-3">

                        <img  src="img/Imagen_linea-removebg-preview.png" alt="" width="50%" height="100%" >
                        <br>
                    </div>
                </div>
            </div> 
        </div> 
    </footer>
    
    
</body>
</html>