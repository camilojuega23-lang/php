<?php

include_once ("modelos/usuarios.php");
class ControladorUsuarios
{
    private $usuario;

    public function __construct(){
        $this->usuario = new Usuarios();
    }
    public function listar(){
        $listar=$this->usuario->listar();
        return $listar;
    }

    //nuevo metodo para la creacion del registro del html hacia la base de datos
    public function crear($cedula,$nombre,$apellidos,$direccion,$celular,$usuario,$clave){
        $this->usuario->set("cedula",$cedula);
        $this->usuario->set("nombre",$nombre);
        $this->usuario->set("apellidos",$apellidos);
        $this->usuario->set("direccion",$direccion);
        $this->usuario->set("celular",$celular);
        $this->usuario->set("usuario",$usuario);
        $this->usuario->set("clave",$clave);

        $resultado = $this->usuario->crear();
        return $resultado;
    }

    public function consultar($id){
        $this->usuario->set("id",$id);
        return $this->usuario->consultar();
    }

    public function eliminar($id){
        $this->usuario->set("id",$id);
        $this->usuario->eliminar();
    }

    //metodo para editar un usuario, recibe los datos del formulario de editar.php y los envia al modelo para actualizar el registro
    public function editar($id, $nombre, $apellidos, $direccion, $celular, $usuario, $clave){
        $this->usuario->set("id",$id);
        $this->usuario->set("nombre",$nombre);
        $this->usuario->set("apellidos",$apellidos);
        $this->usuario->set("direccion",$direccion);
        $this->usuario->set("celular",$celular);
        $this->usuario->set("usuario",$usuario);
        $this->usuario->set("clave",$clave);
        $this->usuario->editar();
    }
}