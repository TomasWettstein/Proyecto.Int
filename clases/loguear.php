<?php
class Login{
    private $sesion;
/*
    public function __construct($usuarioJson){
        $this->sesion = $usuarioJson;
    }
*/
    public static function loguearUsuario($usuario){
        $user = $_POST['email'];
        $consulta = BaseDato :: consultar("*", "usuario", "email = '$user'");
        foreach($consulta as $key => $value){
            $_SESSION['id'] = $value['id'];
            $_SESSION['usuario'] = $value['nombre'];
            $_SESSION['avatar'] = $value['avatar'];
            $_SESSION['puntos'] = $value['puntos'];
            $_SESSION['perfil'] = $value['perfil'];
        }
        return $_SESSION;
    }
}

?>