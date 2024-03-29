<?php
session_start();
require_once('../loader.php');
require_once('../helpers.php');
$BaseDato = BaseDato :: conectar();
$titulo = "Registro";
if($_POST) {
    $usuario = new Usuario($_POST['userName'], $_POST['email'], $_POST['password'], $_FILES);
    $errores = $validarUsuario->validarRegistro($usuario, $_POST['passwordRepeat']);
    
    if (!$errores) {
        //$buscarUsuario = $usuarioJson->buscar($usuario->getEmail()); // traemos el email de usuario y usamos el metodo buscar (que compara emails) de usuarioJson para ver si existe y que lo guarde en usuarioEncontrado
       
        $ext = pathinfo($_FILES['archivo']['name'], PATHINFO_EXTENSION);
        $usuario->avatar = '../avatars/' . $_POST['userName']. "." . $ext;

        BaseDato :: registarUsuario($usuario);

        move_uploaded_file($_FILES['archivo']['tmp_name'],'../avatars/' . $_POST['userName']. "." . $ext);

        Login :: loguearUsuario($usuario);

        // loguearUsuario($_POST['email']);
        header('Location: juegos.php');
        exit;
    }
}
include_once('../partials/head.php');
?>

<body>
    <section class="container">
        <header>
            <?php
            include_once('../partials/nav.php');
            ?>
        </header>
        <section class="sec--regis">
            <p class = "p--registro">Registro</p>
          
        <form  action="" method="POST" class="form--regis" enctype="multipart/form-data">
             <div class="form">
                 <label  for="text"><p class="sub--texto">Usuario</p></label>
                  <input class="in--regis" type="text" id="usuario" name="userName"  placeholder="Ingrese nombre de usuario" value="<?= isset($errores['userName']) ? '' : old('userName');?>">
                  <?php if (isset($errores['userName'])) : ?>
                        <ul class="errores" type="none">
                            <li> <?= $errores['userName'] ?> </li>
                        </ul>
                    <?php endif ?>
            </div>
            <div class="form">
                 <label for="file"><p class="sub--texto"> Avatar </p></label>
                 <input type="file" name="archivo" class="input--avatar">
                 <?php if (isset($errores['file'])) : ?>
                        <ul class="errores" type="none">
                            <li> <?= $errores['file'] ?> </li>
                        </ul>
                    <?php endif ?>
           
            </div>
            <div class="form">
                <label  for="email"><p class="sub--texto">Email</p></label>
                <input class="in--regis" name="email"  type="email"  id="email" placeholder= "Introducir Email" value="<?= isset($errores['email']) ? '' : old('email');?>">
                <?php if (isset($errores['email'])) : ?>
                        <ul class="errores" type="none">
                            <li> <?= $errores['email'] ?> </li>
                        </ul>
                    <?php endif ?>
             </div>
             <div class="form">
                 <label  for="password"><p class="sub--texto">Contraseña</p></label>
                 <input class="in--regis" name="password"  type="password" id= "password" placeholder="Intruduzca una contraseña">
                 <?php if (isset($errores['password'])) : ?>
                        <ul class="errores" type="none">
                            <li> <?= $errores['password'] ?> </li>
                        </ul>
                    <?php endif ?>
            </div>
            <div class="form">
                <label   for="password"><p class="sub--texto">Repetir contraseña</p></label>
                <input class="in--regis" name="passwordRepeat" type="password" class="form-control" id= "passwordRepeat" placeholder="Repita la contraseña">
                <?php if (isset($errores['passwordRepeat'])) : ?>
                        <ul class="errores" type="none">
                            <li> <?= $errores['passwordRepeat'] ?> </li>
                        </ul>
                    <?php endif ?>     
            </div>
            <button type="submit" class="boton--login"> Registrate </button>


        </section>

        <p class="p--usuario"> Ya tenes cuenta? </p>
       <a class = "b--ingresa" href="login.php">Ingresa</a>

        <?php
        include_once("../partials/footer.php");

        ?>

</body>

</html>