<?php
    $controlador = new ControladorUsuarios();
    if (isset($_GET["id"])){
        $registro = $controlador->consultar($_GET["id"]);
    }
    if (isset($_POST["eliminar"])){
        $controlador->eliminar($_GET["id"]);
        header("location:index.php");
    }
?>
<h1>MODULO ELIMINAR</h1>

<form action="" method="post">
    <table border="1">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Cedula</th>
            <th>Usuario</th>
            <th>Clave</th>
            <th>Accion</th>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $registro['id_usuario']?></td>
                <td><?php echo $registro['nombre']?></td>
                <td><?php echo $registro['apellidos']?></td>
                <td><?php echo $registro['cedula']?></td>
                <td><?php echo $registro['usuario']?></td>
                <td><?php echo $registro['clave']?></td>
                <td>
                    <input type="submit" name="eliminar" value="Eliminar">
                </td>
            </tr>
        </tbody>
    </table>
</form>