<?php
    $controlador = new ControladorUsuarios();

    if (isset($_GET["id"])){
        $registro = $controlador->consultar($_GET["id"]);
        
    }
?>
<h1>MODULO CONSULTAR</h1>
<p>ID: <?php echo $registro["id_usuario"]; ?></p>
<p>Cedula: <?php echo $registro["cedula"]; ?></p>
<p>Nombre: <?php echo $registro["nombre"]; ?></p>
<p>Apellido: <?php echo $registro["apellidos"]; ?></p>
<p>Direccion: <?php echo $registro["direccion"]; ?></p>
<p>Celular: <?php echo $registro["celular"]; ?></p>
<p>Usuario: <?php echo $registro["usuario"]; ?></p>
<p>Clave: <?php echo $registro["clave"]; ?></p>