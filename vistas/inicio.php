<h1>MODULO DE INICIO</h1>
<?php

    $controlador = new ControladorUsuarios();
    $resultado = $controlador->listar();

?>
<table border="1">
    <!-- ENCABEZADOS -->
    <tr>
        <th>ID Usuario</th>
        <th>Cédula</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Direccion</th>
        <th>Celular</th>
        <th>Usuario</th>
        <th>Password</th>
        <th>Acciones</th>
    </tr>

<?php
    while ($fila = mysqli_fetch_array($resultado)) {
        echo "<tr>";
        echo "<td>" . $fila['id_usuario'] . "</td>";
        echo "<td>" . $fila['cedula'] . "</td>";
        echo "<td>" . $fila['nombre'] . "</td>";
        echo "<td>" . $fila['apellidos'] . "</td>";
        echo "<td>" . $fila['direccion'] . "</td>";
        echo "<td>" . $fila['celular'] . "</td>";
        echo "<td>" . $fila['usuario'] . "</td>";
        echo "<td>" . $fila['clave'] . "</td>";
        echo "<td><a href='?cargar=consultar&id=" . $fila['id_usuario'] . "'>Consultar</a> | <a href='?cargar=editar&id=" . $fila['id_usuario'] . "'>Editar</a> | <a href='?cargar=eliminar&id=" . $fila['id_usuario'] . "'>Eliminar</a></td>";
        echo "</tr>";
    }
?>


</table>
