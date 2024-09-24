
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
<body class="menuadmin">
<form class="formadmin">
    <ul>
    <a href="ver_lista_exa.php"><li class="limenuadmin">Ver examen por Rut (list)</li></a>
    <a href="admin_index.php"><li class="limenuadmin">Admin</li></a>
    <ul>
    </form>
</body>
</html>