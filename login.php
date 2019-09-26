<?php
$titulo = "Login";
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
            <form action="home.php" method="POST" class="login--form">
                <div class="form--caja">
                    <label for="text">
                        <h2 class="texto--login">Usuario</h2>
                    </label>
                    <input class="in--login" type="text" id="usuario" placeholder="Ingrese nombre de usuario">
                </div>

                <div class="form--caja">
                    <label class="texto" for="Password">
                        <h2 class="texto--login">Contraseña</h2>
                    </label>
                    <input class="in--login" type="password" id="password" placeholder="Intruduzca una contraseña">
                </div>
                <a href="juegos.php" class="boton--login"> Ingresa </a>
            </form>
            <p class="p--usuario"> ¿No estas registrado? </p>
            <center><button onclick="location.href='registro.php'" class="b--login" type="submit"><p class="p--registrarse">Ingresa</p></button></center>

    </section>
    
<?php
include_once("footer.php");

?>