<h1>MODULO DE INICIO</h1>
<?php

    $controlador = new ControladorUsuarios();
    $resultado = $controlador->index();

?>
<div class="tabla">
    <table border="1">
        <!-- ENCABEZADOS -->
        <tr>
            <th>ID Usuario</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Cédula</th>
            <th>Usuario</th>
            <th>Password</th>
            <th>Acciones</th>
        </tr>

        <!-- USUARIO 1 -->
        <tr>
            <td>1</td>
            <td>Juan</td>
            <td>Diaz</td>
            <td>123456</td>
            <td>Camilo</td>
            <td>123456</td>
            <td>
                <a href="?cargar=consultar">Consultar</a>
                <a href="?cargar=editar">Editar</a>
                <a href="?cargar=eliminar">Eliminar</a>
            </td>
        </tr>

        <!-- USUARIO 2 -->
        <tr>
            <td>2</td>
            <td>Maria</td>
            <td>Lopez</td>
            <td>987654</td>
            <td>MariaL</td>
            <td>abc123</td>
            <td>
                <a href="?cargar=consultar">Consultar</a>
                <a href="?cargar=editar">Editar</a>
                <a href="?cargar=eliminar">Eliminar</a>
            </td>
        </tr>

    </table>
</div>

