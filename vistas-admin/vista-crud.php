<?php
session_start();
require_once('../loader.php');
$titulo = "Crud-usuarios";
include_once('../partials/head.php');
$preguntas = BaseDato::consultar("*", "preguntas, respuestas", "respuesta_id = respuestas.id");
?>

<body>
    <section class="container">
        <header>
            <?php
            include_once('../partials/nav.php');
            ?>
        <div class="cajita-button">
            <a href="../vistas-usuario/creaPreguntas.php" class="button-volver">
                <i class="fas fa-chevron-circle-left"></i>
            </a>
        </div>
        </header>
        <article class="crud-admin ">
            <h3 class="titulo-admin">
                Registro de preguntas
            </h3>
            <table class="table text-light table-bordered crud-admin ">
                <thead class="bg-transparent">
                    <tr>
                        <th scope="col" class="p-crud">Pregunta</th>
                        <th scope="col" class="r-crud">Respuesta correcta</th>
                        <th scope="col" class="i-crud">Respuesta incorrecta</th>
                        <th scope="col" class="in-crud">Respuesta incorrecta</th>
                        <th scope="col" class="in-crud">Usuario</th>
                        <th scope="col" class="e-crud-admin">Editar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($preguntas as $key => $value) : ?>
                        <tr>
                            <th scope="row"><?= $value['pregunta']; ?></th>
                            <td><?= $value['correcta'] ?></td>
                            <td><?= $value['falsa1']; ?></td>
                            <td><?= $value['falsa2']; ?></td>
                            <td><?= $value['usuario_id']; ?></td>
                            <td><button class="btn btn-primary" type="submit"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-primary" type="submit"><i class="fas fa-trash"></i></button></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </article>
    </section>
</body>