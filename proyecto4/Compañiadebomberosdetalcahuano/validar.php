<?php
$rut=$_POST['rut'];
$passw=$_POST['passw'];
session_start();
$_SESSION['rut']=$rut;

$conexion = new PDO("mysql:host=".servidor."; dbname=".nombre_bd, usuario, password, $opciones);

$consulta="SELECT*FROM cuentas where rut='$rut' and passw='$passw'",
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:menu.php");
    
}else{
    ?>
    <?php
    include("index.php");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);   