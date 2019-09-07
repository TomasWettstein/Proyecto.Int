<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css ">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <title>Maqueta</title>
</head>

<body>
    <section class="container">
        <header>
            <?php
            include_once('nav.php')
            ?>
        </header>
        <h1 class="titulo"> Ranking </h1>
        <article class="cajamadre">
            <div class="caja2">
                <ul type="none">
                    <li class="ranking--usuario">
                        <p class="nombres user1"> Usuario <span class="numeros"> 1898 pts</span> </p>
                    </li>

                    <li class="ranking--usuario">
                        <p class="nombres user2"> Usuario <span class="numeros"> 1898 pts</span> </p>
                    </li>
                    <li class="ranking--usuario">
                        <p class="nombres user3"> Usuario <span class="numeros"> 1898 pts</span> </p>
                    </li>
                </ul>
            </div>

            <div class="caja3">
                <img src="img/user-circle-solid.svg" alt="usuario" width="150px" height="150px">
                <p class="usuario"> Usuario </p>
                <p class="puntos"> Cantidd de puntos</p>
                <p class="puesto"> Puesto</p>
            </div>

        </article>
        <footer>

        </footer>
    </section>
</body>

</html>