<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inicio</title>
	<link rel="stylesheet" type="text/css" href="../estilos/estilos.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body style="background:url(./img/textura-de-madera_1920x1200_xtrafondos.com.jpg);">



  
<main> 
	

<form  action="modulos.php" method = "POST" target=""  style="width: 400px;
height: 450px;
background: #efd5a8;
color: #000000;
top: 55%;
left: 50%;
position: absolute;
transform: translate(-50%, -50%);
box-sizing: border-box;
padding: 70px 40px;" class="finicio row g-1 needs-validation" novalidate >
  
  <div >
    <img style="width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);" src="./img/pasted image 0.png">
  </div>


		<h4>Iniciar sesión</h4>

  


    

      <div class="col-md-12">
        <label for="validationCustom02" class="form-label">Usuario:</label></label>
        <input type="text" class="form-control" name="nombres" id="validationCustom02" placeholder="usuario"value="" required>
      
        <div class="valid-feedback">
          Correo digitado corectamente
        </div>
          <div class="invalid-feedback">
            Por favor digite su correo
        </div>
    
    
      </div>

      <div class="col-md-12">
        <label for="validationCustom02" class="form-label">Contraseña:</label>
        <input type="password" class="form-control" name="contraseña" id="validationCustom02" placeholder="Contraseña"value="" required>
      
        <div class="valid-feedback">
          Contraseña digitada
        </div>
          <div class="invalid-feedback">
            Por favor digite su contraseña
        </div>
    </div>
    






  <center><a href=""><div class="col-6">
    <button class="btn btn-primary" type="submit">Iniciar sesión</button>
  </div></center>
  <a href="RecuperarContraseña.html">Olvidaste tu Contraseña?</a><br>
  <a href="registro.html">No tienes cuenta?</a><br>
  <a href="pagina404.html">Ayuda?</a><br>
  <a href="inicio.html">inicio</a><br>

</form>




</main>



<script type="text/javascript">

(() => {
  'use strict'

  
  const forms = document.querySelectorAll('.needs-validation')

 
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
</script>

</body>
</html>
