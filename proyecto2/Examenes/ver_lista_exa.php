<?php
    session_start();
    $rut = $_SESSION['login'];
    //echo ($rut);

    include_once 'conexion_pdo.php';
    $objeto = new Conexion();
    $conexion = $objeto->Conectar();

    $consulta = "SELECT * FROM examen WHERE cliente_rut = '$rut'";
    $resultado = $conexion->prepare($consulta);
    $resultado->execute();
    $examen=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>


<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!--    Datatables  -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>  
        <title></title>
        <style>
            table.dataTable thead {
                background: linear-gradient(to right, #0575E6, #00F260);
                color:white;
            }
            body {
                background-color: #444455;
            }
           
        </style>  
        
    </head>
    <body>
        <h1 class="text-center">Exámenes</h1>
        
        <h3 class="text-center">Listado de exámenes</h3>
        
        <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <table id="tablaExamen" class="table-striped table-bordered" style="width:100%">
                    <thead class="text-center">
                        <th>id</th>
                        <th>examen_url</th>
                        <th>cliente_rut</th>
                        <th>info</th>
                        
                    </thead>
                    <tbody>
                        <?php
                            foreach($examen as $examen){
                        ?>
                        <tr>
                            <td><?php echo $examen['id']?></td>
                            <td><?php echo $examen['examen_url']?></td>
                            <td><?php echo $examen['cliente_rut']?></td>
                            <td><?php echo $examen['info']?></td>
                            <td><a href="ver_examen.php?url_exa=<?php echo $examen['examen_url']; ?>">Ver examen</a></td>

                        </tr>
                        <?php
                            }
                        ?>
                        <br>
                        
                    </tbody>
                </table>
            </div>
        </div> 
        </div>
    
        

        
        
        
    </body>
</html>