<?php
class Validador{
    
    function validarRegistro($usuario, $passRep)
    {
        $errores = [];

        $verificar = BaseDato :: consultar("*", "usuario");

        $userName = trim($usuario->getUserName());

        if (empty($userName)) {
            $errores['userName'] = "El nombre de usuario no puede estar vacio";
        } foreach($verificar as $key => $value){
            if($value['nombre'] == $userName){
                $errores['userName'] = "El usuario ya se encuentra registrado";
            }
        }

        $email = trim($usuario->getEmail());
        if (empty($email)) {
            $errores['email'] = "El email no puede estar vacio";
        } elseif (!filter_var($usuario->getEmail(), FILTER_VALIDATE_EMAIL)) {
            $errores['email'] = "Email invalido";
        } foreach($verificar as $key => $value){
            if($email == $value['email']){
                $errores['email'] = "El email ya esta registrado";
            }
        }

        $password = trim($usuario->getPassword());
        if (empty($password)) {
            $errores['password'] = "La contraseña no puede estar vacia.";
        } elseif (!is_numeric($password) && !is_string($password)) {
            $errores['password'] = "La contraseña deve tener letras y numeros";
        } elseif (strlen($password) < 6) {
            $errores['password'] = "El password como mínimo debe tener 6 caracteres...";
        }
         $passwordRepeat = trim($passRep);
        if ($password != $passwordRepeat) {
            $errores['passwordRepeat'] = "Las contraseñas deben ser iguales";
        }
        
        if ($usuario->getAvatar() == 0) {
            $errores['file'] = 'Debe subir un archivo';
        }
        return $errores;
    }

    function validarLogin($usuario){
        $BaseDato = BaseDato :: conectar();
        $user = $usuario-> getEmail();
        //$pass = $_POST['password'];
        $consulta = BaseDato :: consultar("*", "usuarios", "email = '$user'");

        $errores = [];
        $email = trim($usuario->getEmail());
        $password = trim($usuario->getPassword());

        if (strlen($email) == 0) {
            $errores['email'] = "El email no puede estar vacio";
        }
        elseif (empty($consulta)) {
            $errores['email'] = "El usuario no se encuentra registrado";
        }

        if (strlen($usuario-> getPassword()) == 0) {
            $errores['password'] = 'La contraseña no puede estar vacia';
        }

        foreach($consulta as $key => $value){
            if ($value['contraseña'] != $usuario-> getPassword()) {
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

