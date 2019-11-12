<?php require_once('loader.php');
include_once('head.php');
session_start();

if($_SESSION){
$user = $_SESSION['id'];
$consulta = BaseDato :: consultar('pregunta, respuestacorrecta', 'pregunta, respuestacorrecta', "usuario_id = '$user' and respuestacorrecta.id = pregunta.respuestacorrecta_id");
if($_POST){
    BaseDato :: eliminar($_POST['pregunta'], $_POST['respuesta']);
}
}
?>

<body>
    <?php include_once('nav.php');?>
    <form action="crearPreguntas.php">
    <label for="">Por favor seleccione la pregunta que desea eliminar.</label>
    <br>
        <select name="" id="">
        <option value="">Seleccione una pregunta...</option>
            <?php foreach($consulta as $key => $value):?>
                <option value="<?= $value['pregunta'];?>"><?= $value['pregunta'];?></option>
            <?php endforeach;?>
        </select>
                <br>
        <label for="">Indique la respuesta que le corresponde a la pregunta.</label>
        <br>
        <select name="" id="">
        <option value="">Seleccione una respuesta...</option>
        <?php foreach($consulta as $key => $value):?>
                <option value="<?= $value['respuestacorrecta'];?>"><?= $value['respuestacorrecta'];?></option>
            <?php endforeach;?>        
        </select>
        <br>
        <input type="submit" value="Eliminar">
    </form>
</body>
</html>