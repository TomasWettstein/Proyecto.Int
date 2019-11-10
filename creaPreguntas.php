<?php
session_start();
$titulo = "Crea tus preguntas";
include_once('head.php');
require_once('loader.php');

if($_POST){
    $pregunta = new Pregunta($_POST['pregunta']);
    BaseDato :: registrarPregunta($pregunta);
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
            <form action="" method="post" class="contenedor--form">
                <div class="cajas--form">
                    <h3 class="subtitulos--crea1"> Escribi tu pregunta: </h3>
                    <input type="text" name="pregunta" class="preguntainput--crea">
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