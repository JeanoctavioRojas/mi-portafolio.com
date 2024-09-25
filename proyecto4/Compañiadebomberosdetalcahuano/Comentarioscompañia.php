<!DOCTYPE html>
<html lang="es">

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>compañia de bomberos de talcahuano</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arima:wght@700&family=Mulish:wght@400;700&display=swap"
        rel="stylesheet">
        
    <link rel="stylesheet" href="css/normalize.css" type="text/css" />
    <link rel="stylesheet" href="css/estilos.css" type="text/css" /> 
    
</head>
<script>
  $(document).ready(
    function(){
      cargarNavbar2();
     $("#error").hide();
      $("#formulario").submit(
        function(){
        var mensaje ="";  
          if($("#Textarea").val().trim().length <20){
            mensaje = "El comentario debe tener un mínimo de 20 caracteres";
          }
          if($("#email").val().trim().length==0){
            mensaje = "Rellenar el espacio en blanco";
          }
          if($("#apellido").val().trim().length==0){
            mensaje = "El apellido esta en blanco";
          }
          if($("#nombre").val().trim().length==0){
            mensaje = "El nombre esta en blanco";
          }

          if(mensaje != ""){
            $("#error").html(mensaje); 
            $("#error").show();
            event.preventDefault();
          }
      });
      

    });
</script>
<body>

    <header class="encabezado">
        <div class="contenedor-navegacion">
            <div class="contenido-navegacion contenedor">
                <div class="logo">
                    <h2 class="holita"><span>com</span><span>pa</span><span>ñia</span> <span>de</span> <span >bom</span><span class="rojo">be</span><span class="verde">ros </span><span>de</span>
                        <span>tal</span><span>ca</span><span >hua</span><span>no</span></h2>
                </div>
                <nav class="navegacion ocultar">
                    <a href="#">Inicio</a>
                    <a href="#">Comentarios</a>
                    <a href="#"></a>
                    <a href="#"></a>
                    <a href="#"></a>
                </nav>
                <div class="hamburguesa">
                    <span></span><span></span><span></span>
                </div>
            </div>
        </div>
        
    </header>
<br>

<div class="asd">
<h2>Comentarios</h2>
  </div>
         
                
              
        
     
    <div class="hola">
    <div class="container12">
  <div class="row">
    <form id="formulario">
    <div class="form-group mb-3">
      <label for="nombre" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresar tu nombre">
    </div>
    
    <div class="form-group mb-3">
      <label for="apellido" class="form-label">Apellidos</label>
      <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingresa tu apellido">
    </div>

    <div class="form-group mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Ingresa tu email">
    </div>

    <div class="form-group mb-3">
      <label for="Textarea" class="form-label">Comentario</label>
      <textarea class="form-control" id="Textarea" rows="4" placeholder="Aquí escriba su comentario"></textarea>
    </div>

    <div>
      <input type="submit" class="btn btn-primary my-3" id="enviar" value="Enviar"></input>
      <input type="reset" class="btn btn-primary my-3" id="limpiar" value="Limpiar"></input>
    </div> 
    
  </form>   
  </div>
</div>
  </div>


 
    <script src="js/app.js"></script>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>

</html>