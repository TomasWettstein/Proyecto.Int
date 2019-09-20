<?php $titulo = "Home";
require_once 'head.php'; ?>

<body>
    <section class="container">
        <header class="HOME--encabezado">
            <?php require_once 'nav.php';?>
        </header>

        <article class = HOME--titulo>
            <h2>Pon a prueba tus conocimientos.</h2>
            <img src="img\Iconos-Cosas-Varias\Titulo Recto.png" alt="Dubium logo">    
        </article>

        <article class="HOME--juegos">
            <ul>
                <li>
                    <a href="#"> <img src="img\Iconos-Cosas-Varias\botonTemas.png" alt="Modo de juego: Temas"> </a>
                </li>
                <li>
                    <a href="#"> <img src="img\Iconos-Cosas-Varias\botonAhorcado.png" alt="Modo de juego: Ahorcado"> </a>
                </li>
                <li>
                    <a href="#"> <img src="img\Iconos-Cosas-Varias\botonSubita.png" alt="Modo de juego: Muerte súbita"> </a>
                </li>
            </ul>
        </article>
    
    </section>

    <footer class = "HOME--footer">
            <?php require_once 'footer.php'; ?>
    </footer>

</body>