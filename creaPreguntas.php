<?php
$titulo = "Crea tus preguntas";
include_once('head.php');

?>

<body>
    <section class="container">
        <header>
            <?php
            include_once('nav.php');
            ?>
        </header>
        <article>
            <p class="titulo--crea"> Creá tus propias preguntas! </p>
            <form action="#" method="post" class="contenedor--form">
                <div class="cajas--form">
                    <h3 class="subtitulos--crea1"> Escribi tu pregunta: </h3>
                    <input type="text" name="pregunta" class="preguntainput--crea">
                </div>
                <div class="cajas--form">
                    <h3 class="subtitulos--crea2"> Escribi la respuesta: </h3>
                    <input type="text" name="respuesta" placeholder="Escribi una respuesta" class="respuesta--crea">
                    <br>
                    <input type="text" name="respuesta" placeholder="Escribi la respuesta correcta" class="respuesta--crea">
                    <br>
                    <input type="text" name="respuesta" placeholder="Escribi una respuesta" class="respuesta--crea">
                </div>
                <div class="cajas--form">
                    <h3 class="subtitulos--crea3">Selecciona el tema:</h3>
                    <label for="tema" class="tematica--crea"><p> Muerte subita</p></label>
                    <input type="radio" name="#">
                    <br>
                    <label for="tema" class="tematica--crea"> <p> Lorem, ipsum</p> </label>
                    <input type="radio" name="#">
                    <br>
                    <label for="tema" class="tematica--crea"> <p>Lorem, ipsum</p> </label>
                    <input type="radio" name="#">
                </div>
            </form>

            <button class="boton--crea"> Guardar </button>
        </article>
    </section>
    <?php
    include_once('footer.php');
    ?>
</body>