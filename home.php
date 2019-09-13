<?php $titulo = "Home";
require_once 'head.php'; ?>
<body>
    <section class="container">
        <header class="HOME--encabezado">
            <?php require_once 'nav.php';?>
        </header>

        <article class = HOME--titulo>
            <h2>Pon a prueba tus conocimientos.</h2>
            <p><img src="img\Iconos y cosas varias\Titulo Recto.png" alt="Logo de Dubium"></p>    
        </article>

        <article class="HOME--juegos">
            <ul>
                <li>
                    <a href="#"> <img src="img\Iconos y cosas varias\botonTemas.png" alt="Modo de juego: Temas"> </a>
                </li>
                <li>
                    <a href="#"> <img src="img\Iconos y cosas varias\botonAhorcado.png" alt="Modo de juego: Ahorcado"> </a>
                </li>
                <li>
                    <a href="#"> <img src="img\Iconos y cosas varias\botonSubita.png" alt="Modo de juego: Muerte súbita"> </a>
                </li>
            </ul>
        </article>
    
    </section>
    <footer class = "HOME--footer">
            <?php require_once 'footer.php'; ?>
        </footer>
</body>
</html>