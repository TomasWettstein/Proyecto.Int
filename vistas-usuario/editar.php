<?php
require_once('../loader.php');
$titulo = "Editar preguntas";
include_once('../partials/head.php');
include_once('../partials/nav.php');
$datoGet = $_GET['pregunta'];
$pregunta = BaseDato::consultar("pregunta, respuesta_id", "preguntas", "preguntas.id = '$datoGet'");

if ($_POST) {
    BaseDato::editarPregunta($_POST['nuevaPregunta'], $datoGet);
    foreach ($pregunta as $key => $value) {
        BaseDato::editarRespuesta($_POST['nuevaRespuesta'], $_POST['respuestaFalsa1'], $_POST['respuestaFalsa2'], $value['respuesta_id']);
        header('Location:creaPreguntas.php');
    }
}
?>

<body>
    <section class="container">
        <header>
            <?php
            include_once('../partials/nav.php');
            ?>
        </header>
        <article class="button-title">
            <div class="cajita-button">
                <a href="creaPreguntas.php" class="button-volver">
                    <i class="fas fa-chevron-circle-left"></i>
                </a>
            </div>

            <div>
                <h2 class="titulo-editar">
                    La pregunta que elegiste para editar es:
                </h2>
            </div>
        </article>
        <div class="pregunta-elegida">
            <?php foreach ($pregunta as $key => $value) : ?>
                <h3> " <?= $value['pregunta']; ?> "</h3>
            <?php endforeach; ?>
        </div>
        <article class="form-editar">
            <form action="" method="post">
                <div class="div-form-editar">
                    <label for="">Escriba la nueva pregunta:</label>
                    <br>
                    <input type="text" name="nuevaPregunta" class="input-editar">
                </div>

                <div class="div-form-editar">
                    <label for="">Escriba la nueva respuesta correcta:</label>
                    <br>
                    <input type="text" name="nuevaRespuesta" class="input-editar">
                </div>

                <div class="div-form-editar">
                    <label for="">Escriba la nueva respuesta falsa:</label>
                    <br>
                    <input type="text" name="respuestaFalsa1" class="input-editar">
                </div>
                <div class="div-form-editar">
                    <label for="">Escriba la nueva respuesta falsa:</label>
                    <br>
                    <input type="text" name="respuestaFalsa2" class="input-editar">
                </div>

                <div>
                    <input type="submit" value="Actualizar" class="div-button-editar">
                </div>
            </form>
        </article>
    </section>
</body>
<?php
include_once('../partials/footer.php');
?>