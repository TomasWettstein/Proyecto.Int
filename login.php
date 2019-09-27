<?php
$titulo = "Login";
require_once('controladores/funciones.php');
include_once('head.php');
if ($_POST) {
    $errores = validarLogin($_POST);
    if (!$errores) {
        header('Location: juegos.php');
        exit;
    }
}
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
                        <h2 class="texto--login">Usuario</h2>
                    </label>
                    <input class="in--login" name="userName" type="text" id="usuario" placeholder="Ingrese nombre de usuario">
                    <?php if (isset($errores['userName'])) : ?>
                        <ul class="errores" type="none">
                            <li> <?= $errores['userName'] ?> </li>
                        </ul>
                    <?php endif ?>
                </div>

                <div class="form--caja">
                    <label class="texto" for="Password">
                        <h2 class="texto--login">Contraseña</h2>
                    </label>
                    <input class="in--login" name="password" type="password" id="password" placeholder="Intruduzca una contraseña">
                    <?php if (isset($errores['password'])) : ?>
                        <ul class="errores" type="none">
                            <li> <?= $errores['password'] ?> </li>
                        </ul>
                    <?php endif ?>
                </div>

                <button type="submit" class="boton--login"> Ingresa </button>
            </form>


            <p class="p--usuario"> ¿No estas registrado? </p>
           <center> <button onclick="location.href='registro.php'" type="submit" class="b--login"> Registrate </button> </center>

        </section>

        <?php
        include_once("footer.php");

        ?>