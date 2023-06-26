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

        <div class="container">
            <div class="header__inner">
            <div ><img src="img/pasted image 0.png" alt="" width="150" height="150"  style="border-radius:50%" >
        
            </div>
           <div>  <center><H1>Gestion de inventarios</H1></center></div>
            <div>
                <h5 style="margin-left: 250%; width: 100%;">Linea Geometrica S.A.S</h5>
                <a style="margin-left: 250%; width: 50%;" href="login.html">Cerrar sesion</a></li>
            </div>
        
        </div>
           
        </div>
        
        
    </header> 
    
    <nav>
    <center>
                <a href="rtaVenta.php" class="btn" tabindex="-1" role="button" aria-disabled="true" style="background-color:  #bb8220;">Gestion Ventas</a>
                
                <a href="rta_inv.php" class="btn" tabindex="-1" role="button" aria-disabled="true" style="background-color:  #bb8220;">Gestion inventarios</a>
                
                <a href="rta_ga.php"class="btn" tabindex="-1" role="button" aria-disabled="true" style="background-color:  #bb8220;">Gestion garantias</a>
    </center>
    </nav>


    
    <footer style="background: url(./img/textura-de-madera_1920x1200_xtrafondos.com.jpg) no-repeat center top;">
     
<br>
<br>


<form method="POST" action="rta_act.php" style="width: 100%; height: 200%; background-color:#E0C184;" >

<div class="form-group">
<label for="id_garantia">Id Garantia </label>
<input type="text"  class="form-control" name="id_garantia" id="id_garantia">
</div>

<div class="form-group">
<label for="estado_pro">Estado del Producto</label>
<input type="text" class="form-control" name="estado_pro" id="estado_pro">
</div>

<div class="form-group">
<label for="nombre_cli">Nombre del Cliente</label>
<input type="text" class="form-control" name="nombre_cli" id="nombre_cli">
</div>

<div class="form-group">
<label for="fecha_entrega">Fecha de Entrega</label>
<input type="date" class="form-control" name="fecha_entrega" id="fecha_entrega">
</div>

<div class="form-group">
<label for="fecha_compra">Fecha de Compra</label>
<input type="date" class="form-control" name="fecha_compra" id="fecha_compra">
</div>

<div class="form-group">
<label for="descripcion_daño">Descripcion del Daño</label>
<input type="text" class="form-control" name="descripcion_daño" id="descripcion_daño">
</div>


<center>
  <input style="background-color:#F54B3F;"type="submit" value="Actualizar" class = "btn btn_info">
  
</center>

</form>
        

        <br>
         <br>
        <br>
        <br>
         
         
    </footer>
    
</body>
</html>