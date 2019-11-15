<?php
require_once('../loader.php');
$titulo = "Eliminar preguntas";
include_once('../partials/head.php');
session_start();
$datoGet = $_GET['pregunta'];
$pregunta = BaseDato::consultar("pregunta, respuesta_id", "preguntas", "preguntas.id = '$datoGet'");
foreach ($pregunta as $key => $value) {
    $preguntaID = $value['respuesta_id'];
    $respuestas = BaseDato::consultar("correcta, falsa1, falsa2", "respuestas", "id = '$preguntaID'");
}

if (isset($_POST['si'])) {
    BaseDato::eliminarPregunta($datoGet);
    BaseDato::eliminarRespuesta($preguntaID);
    header('Location: creaPreguntas.php');
}
?>

<body>
    <section class="container">
        <header>
            <?php
            include_once('../partials/nav.php');
            ?>
        </header>
        <?php include_once('../partials/nav.php'); ?>
        <article class="button-title">
            <div class="cajita-button">
                <a href="creaPreguntas.php" class="button-volver">
                    <i class="fas fa-chevron-circle-left"></i>
                </a>
            </div>
            <?php foreach ($pregunta as $key => $value) : ?>
                <div class="titulo-editar">
                    <h3>Seguro que deseas eliminar la siguiente pregunta:
                </div>
                <div class="pregunta-eliminar">
                    <h4>
                        " <?= $value['pregunta']; ?> "
                    </h4>
                <?php endforeach; ?>
                <?php foreach ($respuestas as $key => $value) : ?>
                    <h3 class="eliminar-preguntas">
                        Respuestas:
                    </h3>
                    <h4>
                        <?= " Respuesta correcta: " . $value['correcta'] . ", <br> Respuesta falsa 1:" . $value['falsa1'] . " <br> Respuesta falsa 2: " . $value['falsa2']; ?></h4>
                <?php endforeach; ?>
                </div>
                <form action="" method="POST">
                    <input type="submit" value="Sí, eliminar" class="button-eliminar">
                </form>
    </section>
</body>

</html>
<?php
include_once('../partials/footer.php');
?>