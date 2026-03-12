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
    public function crear($cedula,$nombre,$apellidos,$usuario,$clave){
        $this->usuario->set("cedula",$cedula);
        $this->usuario->set("nombre",$nombre);
        $this->usuario->set("apellidos",$apellidos);
        $this->usuario->set("usuario",$usuario);
        $this->usuario->set("clave",$clave);

        $resultado = $this->usuario->crear();
        return $resultado;

    }
}