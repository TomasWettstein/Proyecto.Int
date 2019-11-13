<?php 
    require_once('loader.php');
    include_once('head.php');
    include_once('nav.php');
    $datoGet = $_GET['pregunta'];
    $pregunta = BaseDato :: consultar("pregunta, respuesta_id", "preguntas", "preguntas.id = '$datoGet'");
    
    if($_POST){
        BaseDato :: editarPregunta($_POST['nuevaPregunta'],$datoGet);
        foreach($pregunta as $key => $value){
            BaseDato :: editarRespuesta($_POST['nuevaRespuesta'], $_POST['respuestaFalsa1'], $_POST['respuestaFalsa2'],$value['respuesta_id']);
            header('Location:creaPreguntas.php');
        }
    }
?>

<body>
    <?php foreach($pregunta as $key => $value):?>
    <h1><?= $value['pregunta'];?></h1>
    <?php endforeach;?>

    <form action="" method="post">
        <label for="">Escriba la nueva pregunta</label>
        <br>
        <input type="text" name="nuevaPregunta">
        <br>
        <br>
        <label for="">Escriba la nueva respuesta</label>
        <br>
        <input type="text" name="nuevaRespuesta">
        <br>
        <br>
        <label for="">Escriba la nueva respuesta falsa</label>
        <br>
        <input type="text" name="respuestaFalsa1">
        <br>
        <label for="">Escriba la nueva respuesta falsa</label>
        <br>
        <input type="text" name="respuestaFalsa2">
        <br>
        <br>
        <input type="submit" value="Actualizar">
    </form>
</body>