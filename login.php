<?php
session_start();
$titulo = "Login";
require_once('helpers.php');
require_once('loader.php');
if ($_POST) {
    $usuario = new Usuario($_POST['userName'], $_POST['email'], $_POST['password'], $_POST['passwordRepeat'],$_FILES);
    $errores = $validarUsuario->validarLogin($usuario, $usuarioJson);
    if (!$errores) {
        $login->loguearUsuario($_POST['email']);
        // crearCookies($_POST);
        // var_dump($_SESSION);exit;
        header('Location: juegos.php');
        exit;
    }
}
include_once('head.php');
?>

<body>
    <section class="container">
        <header>
            <?php
            include_once('nav.php');
            ?>
        </header>
        <p class="titulo--login"> Inicia Sesión </p>

        <section class="login">
            <form action="" method="POST" class="login--form">
               
                <div class="form--caja">
                    <label for="text">
                        <h2 class="texto--login">Email</h2>
                    </label>
                    <input class="in--login" name="email" type="text" id="usuario" placeholder="Ingrese su email" value="<?= isset($_COOKIE['email']) ? $_COOKIE['email'] : "";?>">
                    <?php if (isset($errores['email'])) : ?>
                        <ul class="errores" type="none">
                            <li> <?= $errores['email'] ?> </li>
                        </ul>
                    <?php endif; ?>
                </div>
                <div class="form--caja">
                    <label class="texto" for="Password">
                        <h2 class="texto--login">Contraseña</h2>
                    </label>
                    <input class="in--login" name="password" type="password" id="password" placeholder="Intruduzca una contraseña" value="<?= isset($_COOKIE['password']) ? $_COOKIE['password'] : "";?>">
                    <?php if (isset($errores['password'])) : ?>     
                        <ul class="errores" type="none">
                            <li> <?= $errores['password'] ?> </li>
                        </ul>
                    <?php endif ?>
                </div>
                <button type="submit" class="boton--login"> Ingresa </button>
                <div class="form--caja">
                   <span> <label for="" id="recordarme" class="label--recordarme">Recordarme</label>
                    <input type="checkbox" name="recordarme" id="recordarme" class="input--recordarme"> </span>
                </div>
            </form>
            <p class="p--usuario"> ¿No estas registrado? </p>
            <center> <button onclick="location.href='registro.php'" type="submit" class="b--registrarse"> Registrate </button> </center>

        </section>

        <?php
        include_once("footer.php");

        ?>