<?php

class Enrutador
{
    public function cargarVista($vista){

        switch ($vista) {
            case 'crear':
                include_once("vistas/crear.php");
                break;
            case 'editar':
                include_once("vistas/editar.php");
                break;
            case 'eliminar':
                include_once("vistas/eliminar.php");
                break;
            case 'consultar':
                include_once("vistas/consultar.php");
                break;
            case 'inicio':
                include_once("vistas/inicio.php");
                break;
            default:
                include_once("vistas/error404.php");
        }
    }

    public function validarVista($variable){
        if (empty($variable)) {
            include_once("vistas/inicio.php");
        }
        else{
            return true;
        }
    }
}