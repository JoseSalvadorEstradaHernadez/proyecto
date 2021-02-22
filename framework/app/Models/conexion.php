<?php
namespace UPT;
class conexion
{
    public $host = "localhost";
    public $usuario = "root";
    public $contrasenia = "";
    public $base = "escuela";
    public $con;
    public function __construct()
    {
        $con = mysqli_connect($this->host,$this->usuario,$this->contrasenia,$this->base);
    }
}