<?php
include_once('head.php');
?>

<body>
    <section class="container">
        <header>
            <?php
            include_once('nav.php');
            ?>
        </header>
        <section class="registro">
            <form action="#" method="POST" class="formulario">
                <div class="form">
                    <label for="text">
                        <h2 class="texto">Usuario</h2>
                    </label>
                    <br>
                    <input class="input" type="text" id="usuario" placeholder="Ingrese nombre de usuario">
                </div>
                <div class="form">
                    <label for="email">
                        <h2 class="texto">Email</h2>
                    </label><br>
                    <input class="input" type="email" id="email" placeholder="Introducir Email">
                </div>
                <div class="form">
                    <label class="texto" for="Password">
                        <h2 class="texto">Contraseña</h2>
                    </label><br>
                    <input class="input" type="password" id="password" placeholder="Intruduzca una contraseña">
                </div>
                <div class="form">
                    <label for="Password">
                        <h2 class="texto">Repetir contraseña</h2>
                    </label><br>
                    <input class="input" type="password" class="form-control" id="password" placeholder="Repita la contraseña">
                </div>

                <center><button class="boton" type="submit">
                        <h4>Registrarse</h4>
                    </button></center>
            </form>
            <center><button class="b--login" type="submit">
                    <h4>Login</h4>
                </button></center>


        </section>

        <?php
        include_once("footer.php");

        ?>

</body>

</html>