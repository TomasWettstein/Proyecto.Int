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
        <section class="sec--regis">
            <p class = "p--registro">Registro</p>
        <form  action="#" method="POST" class="form--regis">
             <div class="form">
                 <label  for="text"><p class="sub--texto">Usuario</p></label>
                 
                  <input class="in--regis" type="text" id="usuario"  placeholder="Ingrese nombre de usuario">
            </div>
            <div class="form">
                <label  for="email"><p class="sub--texto">Email</p></label>
                <input class="in--regis"  type="email"  id="email" placeholder= "Introducir Email">
             </div>
             <div class="form">
                 <label  for="Password"><p class="sub--texto">Contraseña</p></label>
                 <input class="in--regis"  type="password" id= "password" placeholder="Intruduzca una contraseña">
            </div>
            <div class="form">
                <label   for="Password"><p class="sub--texto">Repetir contraseña</p></label>
                <input class="in--regis"  type="password" class="form-control" id= "password" placeholder="Repita la contraseña">
            </div>

           <center><button class="boton" type="submit"><p class = "p--boton"> Registrarse</p></button></center> 
         </form>
         <center><button class="b--login" type="submit"><p>Login</p></button></center> 

          
         </section>

         <?php 
         include_once ("footer.php");

         ?>

</body>

</html>