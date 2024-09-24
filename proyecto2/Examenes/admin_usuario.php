<html>
<head>
<meta charset="UTF-8">
<title>Registrar</title>
<link rel="stylesheet" type="text/css" href="estilos.css">
</head>

<body>
    
    <form action="" method="POST">
    <h2>Ingresar cuenta</h2>
        <ul>
            <li>
                <label for="rut">Rut</label>
                <input type="text" name="rut" placeholder="ingrese rut de la nueva cuenta">
            </li>
            <li>
                <label for="contrasena">contraseña</label>
                <input type="text" name="contrasena" placeholder="ingrese contrasena de la nueva cuenta">
            </li>
            <li>
            <label for="privg">privilegios</label>
            <br>
                <select name="privg" id="privg">
                    <option value="2">Normal</option>
                    <option value="1">Admin</option>
                </select>
            </li>
        </ul>
        <input type="submit" id="enviar1" name="submit" value="Subir">
    <form>

    <?php
    if(isset($_POST['submit'])){
        $rut = $_POST["rut"];
        $contrasena   = $_POST["contrasena"];
        $privg = $_POST["privg"];
        
        
        include_once 'conexion_pdo.php';
        $objeto = new Conexion();
        $conexion = $objeto->Conectar();

        

        $data = [
            'rut' => $rut,
            'passw' => $contrasena,
            'permiso' => $privg,
        ];
    
        $consulta = "INSERT INTO cuenta (rut, passw, permiso) VALUES (:rut, :passw, :permiso)";
        $stmt= $conexion->prepare($consulta);
        $stmt->execute($data);

        echo "Cuenta Creada";



    }else{
        echo "Completar datos";
    }
    

    


    

    
?>

</body>
</html>