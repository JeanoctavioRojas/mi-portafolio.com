

<!DOCTYPE html>
<head>
    <title>admin ingresar examen</title>
    <style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			min-height: 100vh;
            
            background-color: blue;
            
		}
        ul {
            list-style: none;
            margin: 30px;

        }
        form {
            margin: 20px ;
            border: 4px solid black;
            background-color: lightblue;
        }
        li {
            margin: 10px;
        }
        input {
            margin-bottom: 5px;
            
        }
        #enviar {
            margin-left: 70px;
            width:30%;
            margin-bottom: 30px;
        }
	</style>
</head>
<body>
    
    <form action="" method="post" enctype="multipart/form-data">
    
    <ul>
        <li>
            <label for="my_image">Examen</label>
            <input type="file" name="mi_imagen">
        </li>
        <li>
            <label for="rut_ingresado">Ingrese rut</label>
            <input type="text" name="rut_ingresado">
        </li>
        <li>
            <label for="info_exa">informacion sobre el examen</label>
            <input type="text" name="info_exa">
        </li>
    </ul>
    
    <input type="submit" id="enviar" name="submit" value="Subir">
    

    <?php
    
        //informacion sobre el post que acavo de hacer, solo si estan lleno los campos
    if (isset($_POST['submit']) && isset($_FILES['mi_imagen'])){

        //include "db_conn.php";
        //echo "<pre>";
	    //print_r($_FILES['mi_imagen']);
        //print_r($_POST['rut_ingresado']);
        //echo "<br>";
        //print_r($_POST['info_exa']);
	    //echo "</pre>";

        //asignando variables temporales a la data del post
        
        
        $img_nombre = $_FILES['mi_imagen']['name'];
        //$img_tamano = $_FILES['my_image']['size'];
        $tmp_nombre = $_FILES['mi_imagen']['tmp_name'];
        $info_exa = $_REQUEST['info_exa'];
        $rut = $_REQUEST['rut_ingresado'];

        //funcion, extencion del archivo
        $img_ex = pathinfo($img_nombre, PATHINFO_EXTENSION);
		$img_ex_minus = strtolower($img_ex);
     
        //tipo de archivos permitidos
        $tipo_ext_permitidos = array("jpg", "jpeg", "png", "pdf"); 

			if (in_array($img_ex_minus, $tipo_ext_permitidos)) {
                
				$nuevo_nombre_imagen = uniqid("IMG-", true).'.'.$img_ex_minus;
				$path_img_subir= 'examenes/'.$nuevo_nombre_imagen;
				move_uploaded_file($tmp_nombre, $path_img_subir);

            
                echo "<p>Examen Ingresado</p>";
                //echo "<br>";
                //echo $sql;
                include_once 'conexion_pdo.php';

                $objeto = new Conexion();
                $conexion = $objeto->Conectar();


                $data = [
                    //'id' => $id_imagen,
                    'examen_url' => $nuevo_nombre_imagen,
                    'cliente_rut' => $rut,
                    'info' => $info_exa
                ];
                
                //ojo aqui id es autoincrement
                $consulta = "INSERT INTO examen (examen_url, cliente_rut, info) VALUES ( :examen_url, :cliente_rut, :info)";
                $stmt= $conexion->prepare($consulta);
                $stmt->execute($data);

                


                



            }else{
                $me = "No puedes ingresar archivos de este tipo";
		        header("Location: pantalla_error.php?error=$em");
            }
            

    }

    


    ?>
    </form>
</body>
</html>