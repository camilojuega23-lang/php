<h1>MODULO EDITAR</h1>
<?php
    $controlador = new ControladorUsuarios();
    //consulta el registro segun su id para mostrarlo en el formulario de editar.php
    if (isset($_GET["id"])){
        $registro = $controlador->consultar($_GET["id"]);
    }
    //si se presiona el boton de editar, se ejecuta el metodo editar del controlador para actualizar el registro en la base de datos
    if (isset($_POST["Editar"])){
        $controlador->editar($_GET["id"], $_POST["nombre"], $_POST["apellidos"], $_POST["direccion"], $_POST["celular"], $_POST["usuario"], $_POST["clave"]);
        header("location:index.php");
    }
?>
<form action="" method="post">
    <table border="1">
        <thead>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Direccion</th>
        <th>Celular</th>
        <th>Cedula</th>
        <th>Usuario</th>
        <th>Clave</th>
        <th>Accion</th>
        </thead>
        <tbody>
        <tr>
            <td>
                <!-- muestra el valor del registro en el formulario de editar.php para que el usuario pueda modificarlo y luego enviarlo al controlador para actualizarlo en la base de datos -->
                <input type="text" name="nombre" value="<?php echo $registro['nombre']; ?>">
            </td>
            <td>
                <input type="text" name="apellidos" value="<?php echo $registro['apellidos']; ?>">
            </td>
            <td>
                <input type="text" name="direccion" value="<?php echo $registro['direccion']; ?>">
            </td>
            <td>
                <input type="text" name="celular" value="<?php echo $registro['celular']; ?>">
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
