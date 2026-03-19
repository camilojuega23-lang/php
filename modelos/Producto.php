<?php

include_once ("modelos/connection.php");
class Producto
{
    private $id_producto;
    private $nombre;
    private $descripcion;
    private $precio;
    private $stock;

    private $con;

    public function __construct()
    {
        $this->con = new Conexion();

    }

    public function setProducto($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    public function listarProducto()
    {
        $query = "SELECT * FROM productos";
        $resultado = $this->con->consultaRetorno($query);
        return $resultado;
    }
    public function consultarProducto()
    {
        $query = "SELECT * FROM productos WHERE id_producto = '$this->id_producto'";
        $resultado = $this->con->consultaRetorno($query);
        $registro = mysqli_fetch_array($resultado);

        return $registro;
    }

    public function crearProducto()
    {
        $query = "SELECT * FROM productos WHERE nombre = '$this->nombre'";
        $resultado = $this->con->consultaRetorno($query);
        $filas = mysqli_num_rows($resultado);
        if($filas == 0){
            $query2 = "INSERT INTO productos (nombre,descripcion,precio,stock) VALUES ('$this->nombre','$this->descripcion','$this->precio','$this->stock')";
            $this->con->consultaSimple($query2);
            return true;
        }
        else{
            return false;
        }
    }

    public function editarProducto()
    {
        $query = "UPDATE productos SET nombre='$this->nombre', descripcion = '$this->descripcion', precio = '$this->precio', stock = '$this->stock' WHERE id_producto = '$this->id_producto'";
        $this->con->consultaSimple($query);
    }

    public function eliminarProducto()
    {
        $query = "DELETE FROM productos WHERE id_producto = '$this->id_producto'";
        $this->con->consultaSimple($query);
    }
}