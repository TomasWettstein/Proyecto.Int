<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css\style.css">
    <title>F.a.Q</title>
</head>
<body>
    <section class="container">
        <header>
            <?php 
                include_once 'nav.php';
            ?>
        </header>

        <article class="FAQ--titulo">
            <h1>PREGUNTAS <br> FRECUENTES</h1>
        </article>

        <div class = 'FAQ--grilla'>

        <article>
            <h2 class="FAQ--1erPregunta">
                <strong class='FAQ--du'>DU</strong><strong class = 'FAQ--bi'>BI</strong><strong class = 'FAQ--um'>UM</strong>
            </h2>
            <p class="FAQ--Info">
                Hola, somos el equipo de DUBIUM un juego que se trata de responder preguntas y derrotar a tus amigos en un duelo de conocimineto.
            </p>
        </article> 

        <article>
            <h2 class="FAQ--2doInfo">
                <strong class = 'FAQ--reglas'>Info</strong>
                <strong class = 'FAQ--del'>del</strong> <strong class = 'FAQ--juego'>juego</strong>
            </h2>
            <p class = 'FAQ--Info'>
                El juego se base en tres modos de juego diferentes, el modo 'Temas' un modo para jugar por categorias que el jugador elija. El modo 'Ahorcado' que se tiene que responder una pregunta con el estilo del juego clasico ahoracado. Y por ultimo el modo 'Muerte súbita' que se mezclan preguntas de cada categoria y solo se tiene una vida para responder la mayor cantidad de preguntas posibles.
            </p>
        </article>

        <article>
            <h2 class="FAQ--3erInfo">
                <strong class = "FAQ--tema">Temas</strong>
            </h2>
            <p class = "FAQ--Info">
                Este modo de juego se basa en elegir entre las diferentes categorias que existen en DUBIUM y responder una determina cantidad de preguntas de dicha categoria previamente elegida. El puntaje se basa en la cantidad de preguntas respondidas.
            </p>
        </article>

        <article>
            <h2 class = "FAQ--4toInfo">
                <strong class = "FAQ--ahorcado">Ahorcado</strong>
            </h2>
            <p class = "FAQ--Info">
                Este modo de juego se basa en el clasico juego ahorcado. Se imprime una pregunta y la respuesta se ve representada con la forma del ahorcado.
            </p>
        </article>

        <article>
            <h2 class="FAQ--5toinfo">
                <strong class = "FAQ--muerte">Muerte súbita</strong>
            </h2>
            <p class = "FAQ--Info">
                Este modo de juego a diferencia del modo Tema son preguntas al azar acerca de cualquier categoria, el modo de juego se termina cuando se responde mal una pregunta. El puntaje se basa en la cantidad de respuestas acertadas.
            </p>
        </article>

        </div>
        
        </section>
        <footer>
            <?php include_once 'footer.php';?>
        </footer>
</body>
</html>