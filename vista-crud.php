<?php
session_start();
$titulo = "Crud-usuarios";
include_once('head.php');
?>
<body>
<section class="container">
        <header>
            <?php
            include_once('nav.php');
            ?>
        </header>
<article class="crud-admin ">
        <table class="table text-light table-bordered ">
            <thead class="bg-transparent">
                <tr>
                    <th scope="col" class="p-crud">Pregunta</th>
                    <th scope="col" class="r-crud">Respuesta correcta</th>
                    <th scope="col" class="i-crud">Respuesta incorrecta</th>
                    <th scope="col" class="in-crud">Respuesta incorrecta</th>
                    <th scope="col" class="e-crud-admin">Editar</th>
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
</body>