<?php require_once 'controladores/funciones.php';
?>

<nav class="rounded-pill navbar">
    <button class="navbar-toggler bg-info btn-lg d-lg-none" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
        Menú
    </button>
    <div class="collapse navbar-collapse d-lg-flex justify-content-end" id="navbarNav">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item col-lg-2">
                <a href="juegos.php"><img class="d-lg-block w-50 d-none" src="img\Iconos-Cosas-Varias\Logo mini.png" alt="logo"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link rounded-pill " href="creaPreguntas.php"> Crea</a>
            </li>
            <li class="nav-item">
                <a class="nav-link rounded-pill" href="usuario.php">Perfil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link rounded-pill " href="faq.php">F.A.Q</a>
            </li>
            <li class="nav-item">
                <a class="nav-link rounded-pill" href="nosotros.php">Nosotros</a>
            </li>

                <?php if(isset($_SESSION['userName'])):?>
             
            <li class="nav-item">
            <a id = "logout" href="logout.php" class="nav-link rounded-pill">Logout</a>
            </li>

                <?php else:?>

                <li class="nav-item">
                <a class="nav-link rounded-pill" href="login.php">Inicia Sesión</a>
            </li>
            <?php endif; ?>
    </div>

    </ul>

</nav>