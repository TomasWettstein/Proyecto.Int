<?php 
 include_once('head.php');
?>

<body>
    <section class="container">
        <header>
            <?php
            include_once('nav.php');
            ?>
        </header>
        <section class="login">
        <form class="formulario">
             <div class="form">
                 <label  for="text"><h2 class="texto">Usuario</h2></label>
                 <br>
                  <input class="input" type="text" id="usuario"  placeholder="Ingrese nombre de usuario">
            </div>
            
             <div class="form">
                 <label class="texto" for="Password"><h2 class="texto">Contraseña</h2></label><br>
                 <input class="input"  type="password" id= "password" placeholder="Intruduzca una contraseña">
            </div>
            <center><button class="boton"><h4>Login</h4></button></center>

        </section>
        