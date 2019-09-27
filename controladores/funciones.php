<?php
session_start();
//Funcion para validar registro
function validarRegistro($datos){
    $errores = [];
    $userName = trim($datos['userName']);
    if (empty($userName)) {
        $errores['userName'] = "El nombre de usuario no puede estar vacio";
    }
    $email = trim($datos['email']);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errores['email'] = "Email invalido";
    }
$password = trim($datos['password']);
if (empty($password)) {
    $errores['password'] = "La contraseña no puede estar vacia.";
} elseif (!is_numeric($password) && !is_string($password)) {
    $errores['password'] = "La contraseña deve tener letras y numeros";
} elseif (strlen($password) < 6) {
    $errores['password'] = "El password como mínimo debe tener 6 caracteres...";
}
$passwordRepeat = trim($datos['passwordRepeat']);
if ($password != $passwordRepeat) {
    $errores['passwordRepeat'] = "Las contraseñas deben ser iguales";
}
if($_FILES['avatar']['error']!=0){
    $errores['file'] = 'Debe subir un archivo';
}
return $errores;

}
function nextId(){
    $usuarioJson = file_get_contents("usuario.json");
    $usuarios = json_decode($usuarioJson,true);
    if(!$usuarios){
        return 1;
    }else {
        $ultimoUsuario = array_pop($usuarios['usuarios']);
        $ultimoId = $ultimoUsuario['id'];
        $siguienteId = $ultimoId + 1;
        return $siguienteId;
    }

}
function crearRegistro($datos){
    $usuario = [
        'id' => nextId(),
        'userName' => $datos['userName'],
        'email' => $datos['email'],
        'password' => password_hash($datos['password'],PASSWORD_DEFAULT),
        'perfil' => 1
    ];
    return $usuario;

}
function guardarUsuario($usuario){
    $usuarioJson = file_get_contents("usuario.json");
    $usuarios = json_decode($usuarioJson,true);
    $usuarios['usuarios'][] = $usuario;
    $usuarioJson = json_encode($usuarios,JSON_PRETTY_PRINT);
    file_put_contents('usuario.json', $usuarioJson);
}


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

function buscarPorEmail($email){
    $archivoJson = file_get_contents('usuario.json');
    $array = json_decode($archivoJson, true);
    $usuarios = $array['usuarios'];
    foreach ($usuarios as $value) {
         if($value['email'] === $email);
         return $usuarios;
    }
    return null;
}


?>