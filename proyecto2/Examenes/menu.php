
<?php
    session_start();
    $rut = $_SESSION['login'];
    //echo ($rut);
?>
<!DOCTYPE html>
<html>
<head>
	<title>eleccion</title>
    <link rel="stylesheet" type="text/css" href="estilos.css"> 
	
</head>
<body>
    <form>
        <ul class="pruebadatos">
    <a class="amenu" href="ver_lista_exa.php"><li class="limenu">Ver examen por rut (lista)</li></a>
    <p>      </p>
        </ul>
    </form>
    
    
    
</body>
</html>