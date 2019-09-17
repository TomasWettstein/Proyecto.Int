<?php $titulo = "F.a.Q";
require_once 'head.php'; ?>

<body>
    <section class="container">
        <header>
            <?php
            include_once 'nav.php';
            ?>
        </header>
        <p class="titulo--frecuentes">Preguntas Frecuentes</p>

        <article class='FAQ--grilla'>

            <div class="Primer--div">
                <p class="p--dubium"> 
                    Dubium 
                <p>
                <p class="primera--info"> 
                    Hola, somos el equipo de DUBIUM un juego que se trata de responder preguntas y derrotar a tus amigos en un duelo de conocimineto.
               </p>
            </div>

            <div class="Segundo--div">
                <p class="p-info">
                    Info del juego
                </p>
                <p class="segunda--info">
                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, quas.
                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, ipsa.
                </p>
            </div>

            <article>
                <h2 class="FAQ--3erInfo">
                    <strong class="FAQ--tema">Temas</strong>
                </h2>
                <p class="FAQ--Info">
                    Este modo de juego se basa en elegir entre las diferentes categorias que existen en DUBIUM y responder una determina cantidad de preguntas de dicha categoria previamente elegida. El puntaje se basa en la cantidad de preguntas respondidas.
                </p>
            </article>

            <article>
                <h2 class="FAQ--4toInfo">
                    <strong class="FAQ--ahorcado">Ahorcado</strong>
                </h2>
                <p class="FAQ--Info">
                    Este modo de juego se basa en el clasico juego ahorcado. Se imprime una pregunta y la respuesta se ve representada con la forma del ahorcado.
                </p>
            </article>

            <article>
                <h2 class="FAQ--5toinfo">
                    <strong class="FAQ--muerte">Muerte súbita</strong>
                </h2>
                <p class="FAQ--Info">
                    Este modo de juego a diferencia del modo Tema son preguntas al azar acerca de cualquier categoria, el modo de juego se termina cuando se responde mal una pregunta. El puntaje se basa en la cantidad de respuestas acertadas.
                </p>
            </article>

            </div>

    </section>

    <footer class="FAQ--footer">
        <?php require_once 'footer.php'; ?>
    </footer>
</body>

</html>