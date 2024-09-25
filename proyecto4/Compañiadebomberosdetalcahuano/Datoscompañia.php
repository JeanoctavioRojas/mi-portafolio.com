<?php
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT * FROM vehiculosss";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>












<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit-no">
    <link rel="shortcut icon" href="#" />
    <title>llenado ph</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" />

   
    <link rel="stylesheet" href="style.css" type="text/css" />

   
</head>
<body>
    <header>
        <center><h1>VEHICULOS DE EMERGENCIA</h1></center>
</header>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            
</div>
</div>
</div>

<br>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table id="tablaPersonas" class="table table-striped table-bordered table-condensed">
                <thead class="text-center">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>año</th>
                        <th>nombre</th>
                        <th>description</th>
                        <th>msrp</th>
                        <th>created</th>
                        <th>modified</th>
                        <th>ultimafuncion</th>
                        <th>estado</th>
                    </tr>
            </thead>
            <tbody>
            <?php
                foreach($data as $dat) {
                ?>
                
                <tr>
                    <td><?php echo $dat['id'] ?></td>
                    <td><?php echo $dat['make_model_id'] ?></td>
                    <td><?php echo $dat['year'] ?></td>
                    <td><?php echo $dat['name'] ?></td>
                    <td><?php echo $dat['description'] ?></td>
                    <td><?php echo $dat['msrp'] ?></td>
                    <td><?php echo $dat['created'] ?></td>
                    <td><?php echo $dat['modified'] ?></td>
                    <td><?php echo $dat['Ultimafuncion'] ?></td>
                    <td><?php echo $dat['estado'] ?></td>
                </tr>
                <?php
                    }
                ?>
        </tbody>
        </table>
    </div>
</div>
</div>

    
</body>
</html>