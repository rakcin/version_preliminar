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
<form method="POST" action="rta_actR.php" style="width: 100%; height: 200%; background-color:#E0C184;" >

            <div class="col-md-12">
                <label for="numDoc"> numDoc</label>
                <input type="text"  class="form-control" name="numDoc" id="numDoc">
            </div>
          
            <div class="form-group">
                <label for="nombres">nombres </label>
                <input type="text"  class="form-control" name="nombres" id="nombres" >
            </div>
          
             <div class="form-group">
                <label for="apellidos">apellidos </label>
                <input type="text"  class="form-control" name="apellidos" id="apellidos">
            </div>
          
            <div class="form-group">
                <label for="numCon">numCon </label>
                <input type="text" class="form-control" name="numCon"  id="numCon">
            </div>
  
            <div class="form-group">
              <label for="direccion">direccion </label>
              <input type="text"  class="form-control" name="direccion" id="direccion">
          </div>
          <div class="form-group">
                <label for="email">email </label>
                <input type="text" class="form-control" name="email"  id="email">
            </div>
  
            <div class="form-group">
              <label for="contraseña">contraseña </label>
              <input type="text"  class="form-control" name="contraseña" id="contraseña">
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
