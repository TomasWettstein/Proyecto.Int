<?php
include_once('head.php');
?>

<body>
    <section class="container">
        <header>
            <?php
            include_once('nav.php')
            ?>
        </header>
        <h1 class="titulo--ranking"> Ranking </h1>
        <article class="cajamadre">
            <div class="caja2">
                <ul type="none">
                    <li class="ranking--usuario">
                        <p class="nombres--ranking user1"> Usuario <span class="numeros"> 1898 pts</span> </p>
                    </li>

                    <li class="ranking--usuario">
                        <p class="nombres--ranking user2"> Usuario <span class="numeros"> 1898 pts</span> </p>
                    </li>
                    <li class="ranking--usuario">
                        <p class="nombres--ranking user3"> Usuario <span class="numeros"> 1898 pts</span> </p>
                    </li>
                </ul>
            </div>

            <div class="caja3">
                <img src="img/user.jpg" width="200px" height="200px" class="img--usuario">
                <p class="nombre--usuario"> Chirimbolito </p>
                <p class="puntos"> 87</p>
                <p class="puesto"> Puesto 6</p>
            </div>
        </article>

        <?php 
         include_once('footer.php');
        ?>