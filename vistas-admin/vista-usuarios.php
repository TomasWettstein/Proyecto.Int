<?php
session_start();
$titulo = "Usuarios";
include_once('head.php');
require_once('loader.php');
$users = $usuarios->mostrar();
?>

<body>
    <section class="container">
        <?php
        include_once('nav.php');
        ?>
    </section>

    <div class="card col-5 offset-md-4 mt-5" style="width: 18rem;">
    <!-- <img src="..." class="card-img-top" alt="..."> -->
    <div class="card-body">
    <ul class="usuarios-admin">
        <?php foreach ($users as $value) : ?>
            <li class="list-group-item"> <?= $value['userName']; ?></li>
        <? endforeach; ?>
    </ul>
    </div>
    <div class="card-body">
    <ul class="usuarios-admin">
        <?php foreach ($users as $value) : ?>
            <li class="list-group-item"> <?= $value['email']; ?></li>
        <? endforeach; ?>
    </ul>
    </div>
    </div>
<!-- 
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"> A </li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Vestibulum at eros</li>
        </ul>
        <div class="card-body">
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
    </div> -->



</body>