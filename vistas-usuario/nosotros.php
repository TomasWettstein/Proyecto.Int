<?php
session_start();
$titulo = "Nosotros";
include_once('../partials/head.php');
?>



    <body>
        <section class="container">
            <header>
                <?php
                include_once('../partials/nav.php');
                ?>
            </header>
            <section class="sec--contacto">
                <p class="p--contacto">
                    Nosotros
                </p>
                <div class="caja--contacto">
                   <center> <img src="../img/Iconos-Cosas-Varias/Titulo recto.png" width="200px" class="img--contacto"></center>
                    <p class="p--caja">
                       <br> Es un juego creado por un grupo de estudiantes de Digital House.<br>
                        Lo forman: Agustina quien es Scrum master junto con Mauricio y Tomas que son parte del Scrum Team.
                       <br> Esperamos que puedan acceder a nuestro juegos con facilidad y que puedan disfrutarlos, si necesitan contactarse 
                        con nosotross pueden presionar el boton de abajo o tambien pueden seguirnos en nuestras redes sociales.
                    </p>
                </div>
                <div class="caja--contactenos">
                    <button onclick="location.href='contacto.php'" class="b_contactenos"> Contactenos </button>
                </div>

                -->
            </section>
            
            <?php
            include_once("../partials/footer.php");
            ?>

    </body>

    </html>