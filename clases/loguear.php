<?php
class Login{
    private $sesion;

    public function __construct($usuarioJson){
        $this->sesion = $usuarioJson;
    }

    public function loguearUsuario($usuario){
        $_SESSION["usuario"] =  $this->sesion->buscar($usuario);
    }
}
?>