<?php
require 'app/Models/conexion.php';
require 'app/Models/usuario.php';

use UPT\usuario;
use UPT\conexion;
class UsuarioController
{

    public function  saludar()
    {
        echo "que hay amigo ";
    }
    public function  suma()
    {
        $cosa=$_GET["objeto"];

        $n1=$_POST["n1"];
        $n2=$_POST["n2"];
        echo $cosa.$n1." y ".$n2." es igual...";
        $suma=$n1+$n2;
        echo $suma;
    }
    /*public function crea()
    {
        $usuario= new usuario();
        var_dump($usuario);
    }
    public function nombres()
    {
        $ValorNombre =$_GET["object"];
        $caracteristicas = $_GET["caracter"];
        $CNombre= explode(",",$caracteristicas);
        $PseparadaLst=str_split($ValorNombre);
        $newNom=[];
        foreach($PseparadaLst as $letras)
        {
            foreach($CNombre as $caract)
            {
                if($letras != $caract)
                {
                    array_push($newNom,$letras);
                }
            }
        }
        for ($x=0;$x<= count($newNom);$x++)
        {
            echo rand(count($newNom));

        }
        print_r($newNom);
    }*/
    function login()
    {
    require "app/Views/login.php";

    }
    function verficarCredenciales()
    {
        if((!isset($_POST["correo"]) ||(!isset($_POST["pass"]))))
        {
            echo "Datos incorrectos";
            return false;
        }
        $correo=$_POST["correo"];
        $password=$_POST["pass"];
        echo $correo;
        echo "<br>$password";
    }
}