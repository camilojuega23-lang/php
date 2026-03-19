<h1>MODULO EDITAR PRODUCTO</h1>
<?php
$controlador = new ControladorProducto();
if (isset($_GET["id"])){
    $registro = $controlador->consultarProducto($_GET["id"]);
}
//si se presiona el boton de editar, se ejecuta el metodo editar del controlador para actualizar el registro en la base de datos
if (isset($_POST["Editar"])){
    $controlador->editarProducto($_GET["id"], $_POST["nombre"], $_POST["descripcion"], $_POST["precio"], $_POST["stock"]);
    header("location:index.php?cargar=inicioProducto");
}
?>
<form action="" method="post">
    <table border="1">
        <thead>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Accion</th>
        </thead>
        <tbody>
        <tr>
            <td>
                <input type="text" name="nombre" value="<?php echo $registro['nombre']; ?>">
            </td>
            <td>
                <input type="text" name="descripcion" value="<?php echo $registro['descripcion']; ?>">
            </td>
            <td>
                <input type="text" name="precio" value="<?php echo $registro['precio']; ?>">
            </td>
            <td>
                <input type="text" name="stock" value="<?php echo $registro['stock']; ?>">
            </td>
            </td>
            <td>
                <input type="submit" name="Editar" value="Actualizar producto">
            </td>
        </tr>
        </tbody>
    </table>
</form>
