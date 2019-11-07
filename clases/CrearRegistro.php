<?php
class Registro {
    //en vez de heredar, usar el objeto como atributo
    private $db;
    
    public function __construct($usuarioJson) {
        $this->db = $usuarioJson;
    }

    public function crearRegistro($usuario){
        $usuario = [
            'id' => $this->db->crearId(),
            'userName' => $usuario->getUserName(),
            'email' => $usuario->getEmail(),
            'password' => $this->encriptarPassword($usuario->getPassword()),
            'perfil' => 0,
            'avatar' => $usuario->getAvatar(),
            'puntaje' => 0
        ];
        return $usuario;
    }

    private function encriptarPassword($password) {
        return password_hash($password, PASSWORD_DEFAULT);
    }
}


?>