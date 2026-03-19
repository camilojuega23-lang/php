<h1>Agregar nuevo producto</h1>
<form action="?cargar=crearProducto" method="post">

    <label for="">Nombre</label><br>
    <input type="text" name="nombre" required><br><br>

    <label for="">Descripcion</label><br>
    <input type="text" name="descripcion" required><br><br>

    <label for="">Precio</label><br>
    <input type="text" name="precio" required><br><br>

    <label for="">Stock</label><br>
    <input type="text" name="stock" required><br><br>

    <input type="submit" name="enviar" value="Registrar">
</form>

<?php
$controlador = new ControladorProducto();
if(isset($_POST['enviar'])){

    $resultado = $controlador->crearProducto($_POST['nombre'],$_POST['descripcion'],$_POST['precio'],$_POST['stock']);

    if($resultado){
        echo "Registro agregado con exito";
    }
    else{
        echo "Producto ya existente";
    }
}

