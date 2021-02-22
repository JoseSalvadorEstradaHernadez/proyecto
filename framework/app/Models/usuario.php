<?php


namespace UPT;


class usuario extends  conexion
{
    public  $id;
    public  $nombre;
    public  $apellidoPaterno;
    public  $aapellidoMaterno;
    public  $correo;
    public  $edad;
    public  $contrasenia;

    public function __construct()
    {
        echo "lo lograste";
    }
}