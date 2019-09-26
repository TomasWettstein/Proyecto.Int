<?php

function validarLogin($datos){
    $errores = [];
    $userName = trim($datos['userName']);
    if (empty($userName)) {
        $errores['userName'] = 'El usuario no puede estar vacio';
    }
    $password = trim($datos['password']);
    if (strlen($password)== 0) {
        $errores['password'] = 'La contraseña no puede estar vacia';
    }else {
            $usuario = buscarPorEmail($datos['email']);
            
            if (!password_verify($datos['password'], $usuario['password'])) {
                $errores['password'] = 'La contraseña es incorrecta';
            }
        }
    return $errores;
}


?>