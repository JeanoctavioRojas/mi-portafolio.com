<?php
$nombre=$_POST['nombre'];
$contrasena=$_POST['contrasena'];
session_start();
$_SESSION['nombre' ]=$nombre;

$conexion=mysqli_connect("localhost", "root","","usuarioapi");

$consulta="SELECT*FROM api_usuario where nombre='$nombre' and  contrasena='$contrasena'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:index.html");

}else{
    ?>
    <?php
    include("inicio.php");
    ?>
    <h1 class="bad"> ERROR EN LA AUTENTICACION</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
