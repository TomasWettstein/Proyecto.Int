<?php
$titulo = "Contacto";
include_once('head.php');
?>

<body>

    <body>
        <section class="container">
            <header>
                <?php
                include_once('nav.php');
                ?>
            </header>
            <section class="sec--contacto">
                <p class="p--contacto">Nosotros
                </p>
                <div class="caja--contacto">
                    <p class="p--caja">Somos un grupo formado en Digital House, en el curso presencial de desarrollo web full stack, turno tarde. <br>
                        Información del Scrum Team: <br> Agustina = Scrum Master <br> Mauricio = Parte del scrum team <br> Tomas Wettstein = Parte del scrum team. <br> Desde ya pueden dirigirse al pie de nuestra página y contactarnos atraves de la redes sociales, Facebook, Twitter o Instagram</p>



                </div>
                <div class="caja--contactenos">
                    <button onclick="location.href='nosotros.php'" class="b_contactenos"> Contactenos </button>

                </div>
                <div class="c--iconos">
                    <article class="art--redes">
                        <ul>
                            <li><a href="#" target="_blank"><img src="img\Iconos y cosas varias/c-facebook" alt=""></a></li>
                            <li><a href="#" target="_blank"><img src="img\Iconos y cosas varias/c-twitter" alt=""></a></li>
                            <li><a href="#" target="_blank"><img src="img\Iconos y cosas varias/c-insta" alt=""></a></li>
                            <li><a href="#" target="_blank"><img src="img\Iconos y cosas varias/c-mensaje" alt=""></a></li>
                        </ul>
                    </article>
                </div>
            </section>
            <?php
            include_once("footer.php");
            ?>

    </body>

    </html>