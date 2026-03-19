<?php
$controlador = new ControladorProducto();
if (isset($_GET["id"])){
    $registro = $controlador->consultarProducto($_GET["id"]);
}
if (isset($_POST["eliminar"])){
    $controlador->eliminarProducto($_GET["id"]);
    header("location:index.php?cargar=inicioProducto");
}
?>
<h1>MODULO ELIMINAR PRODUCTO</h1>

<form action="" method="post">
    <table border="1">
        <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Accion</th>
        </thead>
        <tbody>
        <tr>
            <td><?php echo $registro['id_producto']?></td>
            <td><?php echo $registro['nombre']?></td>
            <td><?php echo $registro['descripcion']?></td>
            <td><?php echo $registro['precio']?></td>
            <td><?php echo $registro['stock']?></td>
            <td>
                <input type="submit" name="eliminar" value="Eliminar">
            </td>
        </tr>
        </tbody>
    </table>
</form>