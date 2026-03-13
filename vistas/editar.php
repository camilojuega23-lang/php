<h1>MODULO EDITAR</h1>
<?php
    $controlador = new ControladorUsuarios();
    if (isset($_GET["id"])){
        $registro = $controlador->consultar($_GET["id"]);
    }
    if (isset($_POST["Editar"])){
        $controlador->editar($_GET["id"], $_POST["nombre"], $_POST["apellidos"], $_POST["usuario"], $_POST["clave"]);
        header("location:index.php");
    }
?>
<form action="" method="post">
    <table border="1">
        <thead>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Cedula</th>
        <th>Usuario</th>
        <th>Clave</th>
        <th>Accion</th>
        </thead>
        <tbody>
        <tr>
            <td>
                <input type="text" name="nombre" value="<?php echo $registro['nombre']; ?>">
            </td>
            <td>
                <input type="text" name="apellidos" value="<?php echo $registro['apellidos']; ?>">
            </td>
            <td><?php echo $registro['cedula']; ?></td>
            <td>
                <input type="text" name="usuario" value="<?php echo $registro['usuario']; ?>">
            </td>
            <td>
                <input type="text" name="clave" value="<?php echo $registro['clave']; ?>">
            </td>
            <td>
                <input type="submit" name="Editar" value="Actualizar usuario">
            </td>
        </tr>
        </tbody>
    </table>
</form>
