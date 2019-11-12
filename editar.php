<?php 
    require_once('loader.php');
    include_once('head.php');
    include_once('nav.php');
    $datoGet = $_GET['pregunta'];
    $pregunta = BaseDato :: consultar("pregunta, respuestacorrecta_id", "pregunta", "pregunta.id = '$datoGet'");
    if($_POST){
        BaseDato :: editarPregunta($_POST['nuevaPregunta'], $datoGet);
        foreach($pregunta as $key => $value){
            BaseDato :: editarRespuesta($_POST['nuevaRespuesta'], $value['respuestacorrecta_id']);
        }
    }
?>

<body>
    <?php foreach($pregunta as $key => $value):?>
    <h1><?= $value['pregunta'];?></h1>
    <?php endforeach;?>

    <form action="#" method="post">
        <label for="">Escriba la nueva pregunta</label>
        <br>
        <input type="text" name="nuevaPregunta">
        <br>
        <br>
        <label for="">Escriba la nueva respuesta</label>
        <br>
        <input type="text" name="nuevaRespuesta">
        <br>
        <input type="submit" value="Actualizar">
    </form>
</body>