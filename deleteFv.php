<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de modulos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="misestilos99.css">
</head>
<body>

    <header class="header" style="background: url(./img/textura-de-madera_1920x1200_xtrafondos.com.jpg) no-repeat center top;">

        <div class="container text-center">
            <div class="row align-items-end">
                <div class="row align-items-center">
                    <div class="col-3">
                        <img src="img/pasted image 0.png" alt="" width="100" height="100" style="border-radius:50%" >
                        
                    </div> 
                    <div class="col-6"> 
                        <H1>Gestion de Ventas</H1>
                    </div>
                    <div class="col-2"> 
                        <h5 >Linea Geometrica S.A.S</h5>
                        <a href="login.php" class="btn"tabindex="-1" role="button" aria-disabled="true" style="background-color:  #bb8220;"> Cerrar sesion</a>
                    </div>

                </div>
            </div>

</div>
        
    </header> 
    
    <nav style="background-color: #bb8220;">
        <ul>
                    <center> 
                        <a href="rtaVenta.php" class="btn" tabindex="-1" role="button" aria-disabled="true" style="background-color:  #bb8220;">Gestion Ventas</a>
                        
                        <a href="rta_inv.php" class="btn" tabindex="-1" role="button" aria-disabled="true" style="background-color:  #bb8220;">Gestion inventarios</a>
                        
                        <a href="rta_ga.php"class="btn" tabindex="-1" role="button" aria-disabled="true" style="background-color:  #bb8220;">Gestion garantias</a>
                   
                    </center>
            
        </ul>
        </nav>

    
    <footer style="background: url(./img/textura-de-madera_1920x1200_xtrafondos.com.jpg) no-repeat center top;">
     
        <br>
        <br>
        <br>
<br>


<form method="POST" action="rta_deletev.php" style="width: 100%; height: 200%; background-color:#E0C184;" >

<h3>Digite el campo que quiere eliminar</h3>

<div class="form-group">
<label for="id_venta">id_venta </label>
<input type="text"  class="form-control" name="id_venta" id="id_venta">
</div>

<center>
  <input style="background-color:#F54B3F;"type="submit" value="Eliminar" class = "btn btn_info">
  
</center>

</form>
        

        <br>
         <br>
        <br>
        <br>
        <br>
         <br>
        <br>
        <br>
         
        
         
         
    </footer>
    
</body>
</html>