<?php require_once('loader.php');
include_once('head.php');
session_start();
$datoGet = $_GET['pregunta'];
$pregunta = BaseDato :: consultar("pregunta, respuesta_id", "preguntas", "preguntas.id = '$datoGet'");
foreach($pregunta as $key => $value){
    $preguntaID = $value['respuesta_id'];
    $respuestas = BaseDato :: consultar("correcta, falsa1, falsa2", "respuestas", "id = '$preguntaID'");
}

if(isset($_POST['si'])){
    BaseDato :: eliminarPregunta($datoGet);
    BaseDato :: eliminarRespuesta($preguntaID);
    header('Location: creaPreguntas.php');
}
?>

<body>
    <?php include_once('nav.php');?>
    <?php foreach($pregunta as $key => $value):?>
    <h1>Seguro que deseas eliminar la siguiente pregunta:
    <br><?= $value['pregunta'];?></h1>
    <?php endforeach;?>
    <br>
    <?php foreach($respuestas as $key => $value):?>
    <h2>Con las siguientes respuestas:
    <br> <?= " Respuesta correcta: ".$value['correcta']. ", respuesta falsa 1: " . $value['falsa1']. ", respuesta falsa 2: ". $value['falsa2'] ;?></h2>
    <?php endforeach;?>
    <form action="" method="POST">
        <label for="">Si</label>
        <input type="radio" name="si" id="">
        <br>
        <label for="">No</label>
        <input type="radio" name="no" id="">
        <br>
        <input type="submit" value="Borrar">
    </form>
</body>
</html>