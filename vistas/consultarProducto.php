<?php
    $controlador = new ControladorProducto();

    if (isset($_GET["id"])){
        $registroP = $controlador->consultarProducto($_GET["id"]);

    }
?>
<h1>MODULO CONSULTAR PRODUCTO</h1>
<p>ID: <?php echo $registroP["id_producto"]; ?></p>
<p>Nombre: <?php echo $registroP["nombre"]; ?></p>
<p>Apellido: <?php echo $registroP["descripcion"]; ?></p>
<p>Direccion: <?php echo $registroP["precio"]; ?></p>
<p>Celular: <?php echo $registroP["stock"]; ?></p>