<?php

include_once ("modelos/Producto.php");
class ControladorProducto
{
    private $producto;

    function __construct()
    {
        $this->producto = new Producto();

    }

    public function listarProducto()
    {
        $listar = $this->producto->listarProducto();
        return $listar;
    }

    public function consultarProducto($id_producto)
    {
        $this->producto->setProducto("id_producto", $id_producto);
        return $this->producto->consultarProducto();
    }

    public function crearProducto($nombre,$descripcion,$precio,$stock)
    {
        $this->producto->setProducto("nombre", $nombre);
        $this->producto->setProducto("descripcion", $descripcion);
        $this->producto->setProducto("precio", $precio);
        $this->producto->setProducto("stock", $stock);

        return $this->producto->crearProducto();

    }

    public function editarProducto($id_producto,$nombre,$descripcion,$precio,$stock)
    {
        $this->producto->setProducto("nombre", $nombre);
        $this->producto->setProducto("descripcion", $descripcion);
        $this->producto->setProducto("precio", $precio);
        $this->producto->setProducto("stock", $stock);

        return $this->producto->crearProducto();
    }

    public function eliminarProducto($id_producto)
    {
        $this->producto->setProducto("id_producto", $id_producto);
        $this->producto->eliminarProducto();
    }
}