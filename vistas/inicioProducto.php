<h1>MODULO DE INICIO PRODUCTO</h1>
<?php

    $controlador = new ControladorProducto();
    $resultado = $controlador->listarProducto();

?>
<table border="1">
    <!-- ENCABEZADOS -->
    <tr>
        <th>ID Producto</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Acciones</th>
    </tr>

    <?php
    while ($fila = mysqli_fetch_array($resultado)) {
        echo "<tr>";
        echo "<td>" . $fila['id_producto'] . "</td>";
        echo "<td>" . $fila['nombre'] . "</td>";
        echo "<td>" . $fila['descripcion'] . "</td>";
        echo "<td>" . $fila['precio'] . "</td>";
        echo "<td>" . $fila['stock'] . "</td>";
        echo "<td><a href='?cargar=consultarProducto&id=" . $fila['id_producto'] . "'>Consultar</a> | <a href='?cargar=editarProducto&id=" . $fila['id_producto'] . "'>Editar</a> | <a href='?cargar=eliminarProducto&id=" . $fila['id_producto'] . "'>Eliminar</a></td>";
        echo "</tr>";
    }
    ?>


</table>
