<?php
require_once('controladores/funciones.php');
$titulo = "Registro";
include_once('head.php');
if($_POST) {
    $errores = validarRegistro($_POST);
    if (!$errores) {
        $registro = crearRegistro($_POST, $avatar);
        guardarUsuario($registro);

        $ext = pathinfo($_FILES['archivo']['name'], PATHINFO_EXTENSION);
        move_uploaded_file($_FILES['archivo']['tmp_name'],'avatars/' . $_POST['userName']. "." . $ext);
        header('Location:login.php');
        exit;
    }
}
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
            <?php if (isset($errores)) : ?>
                        <ul>
                            <?php foreach ($errores as $value) : ?>
                                <li><?= $value; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
        <form  action="" method="POST" class="form--regis" enctype="multipart/form-data">
             <div class="form">
                 <label  for="text"><p class="sub--texto">Usuario</p></label>
                  <input class="in--regis" type="text" id="usuario" name="userName"  placeholder="Ingrese nombre de usuario" value="">
            </div>
            <div class="form">
                 <label for="file"><p class="sub--texto"> Avatar </p></label>
                 <input type="file" name="archivo" class="input--avatar">
           
            </div>
            <div class="form">
                <label  for="email"><p class="sub--texto">Email</p></label>
                <input class="in--regis" name="email"  type="email"  id="email" placeholder= "Introducir Email" value="">
             </div>
             <div class="form">
                 <label  for="password"><p class="sub--texto">Contraseña</p></label>
                 <input class="in--regis" name="password"  type="password" id= "password" placeholder="Intruduzca una contraseña">
            </div>
            <div class="form">
                <label   for="password"><p class="sub--texto">Repetir contraseña</p></label>
                <input class="in--regis" name="passwordRepeat" type="password" class="form-control" id= "passwordRepeat" placeholder="Repita la contraseña">
            </div>
            <button type="submit" class="boton--login"> Registrate </button>


        </section>

        <p class="p--usuario"> Ya tenes cuenta? </p>
       <a class = "b--ingresa" href="login.php">Ingresa</a>

        <?php
        include_once("footer.php");

        ?>

</body>

</html>