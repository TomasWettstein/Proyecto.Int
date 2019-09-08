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
            include_once('nav.php');
            ?>
        </header>
        <section class="registro">
        <form class="formulario">
             <div class="form">
                 <label  for="text"><h2 class="texto">Usuario</h2></label>
                 <br>
                  <input class="input" type="text" id="usuario"  placeholder="Ingrese nombre de usuario">
            </div>
            <div class="form">
                <label  for="email"><h2 class="texto">Email</h2></label><br>
                <input class="input"  type="email"  id="email" placeholder= "Introducir Email">
             </div>
             <div class="form">
                 <label class="texto" for="Password"><h2 class="texto">Contraseña</h2></label><br>
                 <input class="input"  type="password" id= "password" placeholder="Intruduzca una contraseña">
            </div>
            <div class="form">
                <label   for="Password"><h2 class="texto">Repetir contraseña</h2></label><br>
                <input class="input"  type="password" class="form-control" id= "password" placeholder="Repita la contraseña">
            </div>

           <center><button class="boton" type="submit"><h4>Registrarse</h4></button></center> 
         </form>
         <center><button class="boton" type="submit"><h4>Login</h4></button></center> 

          
         </section>

         <footer>

         </footer>

</body>

</html>