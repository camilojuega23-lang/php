<?php
include_once("connection.php");
class Usuarios
{
    //inicializacion de atributos
    private $id;
    private $cedula;
    private $nombre;
    private $apellidos;
    private $direccion;
    private $celular;
    private $usuario;
    private $clave;
    
    private $con;

    //metodo constructor
    public function __construct()
    {
        $this->con =new conexion();
    }

    public function listar(){
        $sql = "SELECT * FROM usuarios";
        $resultado = $this->con->consultaRetorno($sql);
        return $resultado;
    }

    //Funcion que reemplaza todos los getter y setters
    public function set($atributo,$valor){
        $this->$atributo = $valor;

    }

    public function crear(){
        //query
        $sql2 = "SELECT * FROM usuarios WHERE cedula='$this->cedula'";

        $resultado = $this->con->consultaRetorno($sql2);

        $filas = mysqli_num_rows($resultado);

        if($filas == 0)
        {
            $sql = "INSERT INTO usuarios (cedula,nombre,apellidos,usuario,clave) VALUES ('$this->cedula','$this->nombre', '$this->apellidos','$this->usuario','$this->clave')";
            $this->con->consultaSimple($sql);
            return true;
        }
        else
        {
            return false;
        }
    }
}

//$usuarios = new Usuarios();
//$usuarios->listar();