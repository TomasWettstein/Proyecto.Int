<?php
$titulo = "Usuario";
require_once('controladores/funciones.php');

if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];
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
        <h1 class="titulo--ranking"> Ranking </h1>
        <article class="cajamadre--ranking">
            <div class="caja1--ranking">
                <ul type="none">
                    <li class="ranking--usuario">
                        <p class="nombres--ranking user1"> Usuario <span class="numeros--ranking"> 1898 pts</span> </p>
                    </li>

                    <li class="ranking--usuario">
                        <p class="nombres--ranking user2"> Usuario <span class="numeros--ranking"> 1898 pts</span> </p>
                    </li>
                    <li class="ranking--usuario">
                        <p class="nombres--ranking user3"> Usuario <span class="numeros--ranking"> 1898 pts</span> </p>
                    </li>
                </ul>
            </div>
            <div class="caja2--usuario">
                <img src="img/user.jpg" width="200px" height="200px" class="img--usuario">
                <p class="nombre--usuario"> <?= (isset($_SESSION['userName'])) ? $_SESSION['userName']  : "Usuario" ; ?> </p>
                <p class="puntos--usuario"> 87</p>
                <p class="puesto--usuario"> Puesto 6</p>
            </div>
        </article>

        <?php
        include_once('footer.php');
        ?>