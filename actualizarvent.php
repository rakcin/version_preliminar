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


<form method="POST" action="rta_acV.php" style="width: 100%; height: 200%; background-color:#E0C184;" >
<div class="form-group">
                <label for="id_venta"> id venta</label>
                <input type="text"  class="form-control" name="id_venta" id="id_venta">
            </div>
          
            <div class="form-group">
                <label for="valor_total">Valor valor_total </label>
                <input type="text"  class="form-control" name="valor_total" id="valor_total" >
            </div>
          
             <div class="form-group">
                <label for="fecha_venta">Fecha </label>
                <input type="date"  class="form-control" name="fecha_venta" id="fecha_venta">
            </div>
          
            <div class="form-group">
                <label for="nom_cliente">Nombre cliente </label>
                <input type="text" class="form-control" name="nom_cliente"  id="nom_cliente">
            </div>
  
            <div class="form-group">
              <label for="num_cotizacion">Numero cotizacion </label>
              <input type="text"  class="form-control" name="num_cotizacion" id="num_cotizacion">
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