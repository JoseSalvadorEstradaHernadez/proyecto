<?php
/*
 * //-- variables por metodo GET
 *
 * control
 * action
 *
*/
if((!isset ($_GET["controller"])) || (!isset($_GET["action"]))){
echo "peticion invalida";
}
$controller=$_GET["controller"]."controller";
//echo $controller;
//UsuarioController
require 'app/controllers/'.$controller.'.php';
$action=$_GET["action"];
$objeto=new $controller();
$objeto->{$action}();
