<h1>Agregar nuevo usuario</h1>
<form action="?cargar=crear" method="post">
    <label for="">Cedula</label><br>
    <input type="text" name="cedula"  required><br><br>

    <label for="">Nombres</label><br>
    <input type="text" name="nombre" required><br><br>

    <label for="">Apellido</label><br>
    <input type="text" name="apellidos" required><br><br>

    <label for="">Direccion</label><br>
    <input type="text" name="direccion" required><br><br>

    <label for="">Celular</label><br>
    <input type="text" name="celular" required><br><br>

    <label for="">Usuario</label><br>
    <input type="text" name="usuario" required><br><br>

    <label for="">Clave</label><br>
    <input type="text" name="clave" required><br><br>

    <input type="submit" name="enviar" value="Registrar">
</form>

<?php
    $controlador = new ControladorUsuarios();
    if(isset($_POST['enviar'])){

        //metodo para crear el usuario
        $resultado = $controlador->crear($_POST['cedula'],$_POST['nombre'],$_POST['apellidos'],$_POST['direccion'],$_POST['celular'],$_POST['usuario'],$_POST['clave']);

        if($resultado){
            echo "Registro agregado con exito";
        }
        else{
            echo "Cedula ya existente";
        }
    }
