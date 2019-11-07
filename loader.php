<?php
// session_start();
require_once("clases/usuario.php");
require_once("clases/baseDato.php");
require_once("clases/baseJson.php");
require_once("clases/validador.php");
require_once("clases/CrearRegistro.php");
require_once("clases/loguear.php");
require_once("clases/mostrar-admin.php");


$usuarios = new Usuarios();
$usuarioJson = new BaseJson();
$crearRegistro = new Registro($usuarioJson);
$validarUsuario = new Validador();
$login = new Login($usuarioJson);
?>