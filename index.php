<?php
    include_once ("controladores/controladorusuarios.php");
    include_once ("controladores/enrutador.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>CRUD CON PHP Y POO EN MVC</h2>
    <nav>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="?cargar=crear">Registrar</a></li>
        </ul>
    </nav>
    <?php
        $enrutador = new Enrutador();
        if($enrutador->validarVista($_GET['cargar'])){
            $enrutador->cargarVista($_GET['cargar']);
        }
        
    ?>
</body>
</html>



