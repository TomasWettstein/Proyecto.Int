<?php
// session_start();
//Funcion para validar registro----------
function validarRegistro($datos){
    $errores = [];
    $userName = trim($datos['userName']);
    if (empty($userName)) {
        $errores['userName'] = "El nombre de usuario no puede estar vacio";
    }
    $email = trim($datos['email']);
    if (empty($email)) {
        $errores['email'] = "El email no puede estar vacio";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores['email'] = "Email invalido";
    } elseif (existeUsuario('email')){
        $errores['email'] = "El email ya esta registrado";
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
    if ($_FILES['archivo']['error'] != 0) {
        $errores['file'] = 'Debe subir un archivo';
    }
    return $errores;
}
// Funcion para agregarle un ID a cada usuario-----------
function nextId()
{
    $usuarioJson = file_get_contents("usuario.json");
    $usuarios = json_decode($usuarioJson, true);
    if (!$usuarios) {
        return 1;
    } else {
        $ultimoUsuario = array_pop($usuarios['usuarios']);
        $ultimoId = $ultimoUsuario['id'];
        $siguienteId = $ultimoId + 1;
        return $siguienteId;
    }
}
// Funcion para crear un usuario-------------
function crearRegistro($datos){
    $usuario = [
        'id' => nextId(),
        'userName' => $datos['userName'],
        'email' => $datos['email'],
        'password' => password_hash($datos['password'], PASSWORD_DEFAULT),
        'perfil' => 1,
        'avatar' => $datos['avatar']
    ];
    return $usuario;
}
// Funcion para guardarlo en formato json---------
function guardarUsuario($usuario)
{
    $usuarioJson = file_get_contents("usuario.json");
    $usuarios = json_decode($usuarioJson, true);
    $usuarios['usuarios'][] = $usuario;
    $usuarioJson = json_encode($usuarios, JSON_PRETTY_PRINT);
    file_put_contents('usuario.json', $usuarioJson);
}

// Funcion para validar el login-------------------
function validarLogin($datos)
{
    $errores = [];
    $email = trim($datos['email']);
    $password = trim($datos['password']);

    if (strlen($email) == 0) {
        $errores['email'] = "El email no puede estar vacio";
    } elseif (!existeUsuario($datos['email'])){
        $errores['email'] = "El usuario no se encuentra registrado";
    }
    if (strlen($password) == 0) {
        $errores['password'] = 'La contraseña no puede estar vacia';
    } else {
        $usuario = buscarPorEmail($datos['email']);

        if (!password_verify($datos['password'], $usuario['password'])) {
            $errores['password'] = 'La contraseña es incorrecta';
        }
    }
    return $errores;
}
// Funcion para buscar si existe el usuario en el json ------------
function buscarPorEmail($email) {
    $archivoJson = file_get_contents('usuario.json');
    $array = json_decode($archivoJson, true);
    $usuarios = $array['usuarios'];
    foreach ($usuarios as $value) {
        if ($value['email'] === $email) {
            return $value;
        }
    }
    return null;
}
// Funcion para verificar cuando se registra si ya existe el email ------------
function existeUsuario($email){
    return buscarPorEmail($email) !== null;
}
// Funcion para loguear al usuario ------------
function loguearUsuario($email){
    $_SESSION = buscarPorEmail($email);
}
// Crear cookies------------
function crearCookies($datoPost){

    if(isset($datoPost['recordarme'])){
        setcookie('userName', $datoPost['userName'], time() + 60);
        setcookie('email', $datoPost['email'], time() + 60);
        setcookie('password', $datoPost['password'], time() + 60);
    }   
}
// Funcion para cerrar sesion------------ 
// function logout(){
//     session_destroy();
// }

?>