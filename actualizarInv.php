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


<form method="POST" action="rta_update.php" style="width: 100%; height: 200%; background-color:#E0C184;" >

<div class="form-group">
<label for="idpro">Idpro </label>
<input type="text"  class="form-control" name="idpro" id="idpro">
</div>

<div class="form-group">
<label for="ult_fech_ing">Ultima fecha de ingreso </label>
<input type="date"  class="form-control" name="ult_fech_ing" id="ult_fech_ing">
</div>

<div class="form-group">
<label for="ult_cant_ing">Ultima cantidad ingresada</label>
<input type="text"  class="form-control" name="ult_cant_ing" id="ult_cant_ing">
</div>

<div class="form-group">
<label for="ult_fech_sal">Ultima fecha de salida </label>
<input type="date" class="form-control" name="ult_fech_sal"  id="ult_fech_sal">
</div>

<div class="form-group">
<label for="ult_cant_sal">Ultima cantidad de salida</label>
<input type="text" class="form-control" name="ult_cant_sal"  id="ult_cant_sal">
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