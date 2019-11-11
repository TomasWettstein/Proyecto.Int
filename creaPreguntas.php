<?php
session_start();
$titulo = "Crea tus preguntas";
include_once('head.php');
require_once('loader.php');
if($_POST){
    $pregunta = new Pregunta($_POST['pregunta']);
    $errores = $validarPregunta->validarPregunta($pregunta);
    
    if(!$errores){
        $respuestasIncorrectas = new respuestaIncorrecta($_POST['respuesta1'], $_POST['respuesta2']);
        $respuestaCorrecta = new respuestaCorrecta($_POST['respuestaCorrecta']);
        BaseDato :: registrarPregunta($pregunta);
        BaseDato :: registrarRespuestaCorrecta($respuestaCorrecta);
        BaseDato :: registrarRespuestaIncorrecta($respuestasIncorrectas);
        $mensajeGracias = "<h2>Muchas gracias por colaborar con Dubium :)</h2>";
        var_dump($pregunta);
    }
}
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
            <div class="mensajeGracias">
            <?php if(isset($mensajeGracias)) :?>
            <?= $mensajeGracias;?>
            <?php endif;?>
            </div>
            <form action="" method="post" class="contenedor--form">
                <div class="cajas--form">
                    <h3 class="subtitulos--crea1"> Escribi tu pregunta: </h3>
                    <input type="text" name="pregunta" class="preguntainput--crea">
                    <?php if(isset($errores['pregunta'])): ?>
                    <ul class = "errores" type = "none">
                    <li> <?= $errores['pregunta'] ?> </li>
                    </ul>
                    <?php endif ?>
                </div>
                <div class="cajas--form">
                    <h3 class="subtitulos--crea2"> Escribi la respuesta: </h3>
                    <input type="text" name="respuesta1" placeholder="Escribi una respuesta" class="respuesta--crea">
                    <br>
                    <input type="text" name="respuestaCorrecta" placeholder="Escribi la respuesta correcta" class="respuesta--crea">
                    <br>
                    <input type="text" name="respuesta2" placeholder="Escribi una respuesta" class="respuesta--crea">
                </div>
                <div class="cajas--form">
                    <h3 class="subtitulos--crea3">Selecciona el tema:</h3>
                    <label for="tema" class="tematica--crea">
                        <p> Muerte subita</p>
                    </label>
                    <input type="radio" name="#">
                </div>
                <input type="submit" value="Guardar">
            </form>
            <button class="boton--crea" type="submit"> Guardar </button>
        </article>
        <p class="subtitulo--crea"> Mis preguntas</p>

        <article class="crud ">
        <table class="table text-light table-bordered ">
            <thead class="bg-transparent">
                <tr>
                    <th scope="col" class="p-crud">Pregunta</th>
                    <th scope="col" class="r-crud">Respuesta correcta</th>
                    <th scope="col" class="i-crud">Respuesta incorrecta</th>
                    <th scope="col" class="in-crud">Respuesta incorrecta</th>
                    <th scope="col" class="e-crud">Editar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"> Cual es la capital de Brasil?</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td><button class="btn btn-primary" type="submit"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-primary" type="submit"><i class="fas fa-trash"></i></button></td>
                </tr>
                <tr>
                    <th scope="row">Por que los conejos saltan?</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td><button class="btn btn-primary" type="submit"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-primary" type="submit"><i class="fas fa-trash"></i></button></td>
                </tr>
                <tr>
                    <th scope="row"> El huevo o la gallina?</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td><button class="btn btn-primary" type="submit"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-primary" type="submit"><i class="fas fa-trash"></i></button></td>
                </tr>
            </tbody>
        </table>
</article>

    </section>
    <?php
    include_once('footer.php');
    ?>
</body>