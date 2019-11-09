<?php
class Validador{
    
    function validarRegistro($usuario, $usuarioJson)
    {
        $errores = [];
        $userName = trim($usuario->getUserName());
        if (empty($userName)) {
            $errores['userName'] = "El nombre de usuario no puede estar vacio";
        }
        $email = trim($usuario->getEmail());
        if (empty($email)) {
            $errores['email'] = "El email no puede estar vacio";
        } elseif (!filter_var($usuario->getEmail(), FILTER_VALIDATE_EMAIL)) {
            $errores['email'] = "Email invalido";
        } elseif ($usuarioJson->verificar($usuario->getEmail())){
        $errores['email'] = "El email ya esta registrado";
        }
        $password = trim($usuario->getPassword());
        if (empty($password)) {
            $errores['password'] = "La contraseña no puede estar vacia.";
        } elseif (!is_numeric($password) && !is_string($password)) {
            $errores['password'] = "La contraseña deve tener letras y numeros";
        } elseif (strlen($password) < 6) {
            $errores['password'] = "El password como mínimo debe tener 6 caracteres...";
        }
        $passwordRepeat = trim($usuario->getPasswordRepeat());
        if ($password != $passwordRepeat) {
            $errores['passwordRepeat'] = "Las contraseñas deben ser iguales";
        }
        if ($usuario->getAvatar() == 0) {
            $errores['file'] = 'Debe subir un archivo';
        }
        return $errores;
    }

    function validarLogin($usuario, $usuarioJson)
    {
        $errores = [];
        $email = trim($usuario->getEmail());
        $password = trim($usuario->getPassword());

        if (strlen($email) == 0) {
            $errores['email'] = "El email no puede estar vacio";
        }
        elseif (!$usuarioJson->verificar($usuario->getEmail())) {
            $errores['email'] = "El usuario no se encuentra registrado";
        }

        if (strlen($password) == 0) {
            $errores['password'] = 'La contraseña no puede estar vacia';
        } else {
            $usuarios = $usuarioJson->buscar($email);
            // var_dump($usuarios);exit;

            if (!password_verify($usuario->getPassword(), $usuarios['password'])) {
                $errores['password'] = 'La contraseña es incorrecta';
            }
        }
        return $errores;
    }
    function validarPregunta ($pregunta){
        $errores = [];
        $pregunta = trim($pregunta->getPregunta());
        if(empty($pregunta)){
            $errores['pregunta'] = "No puede dejar el campo vacio...";
        }
        return $errores;
        

    }



}

