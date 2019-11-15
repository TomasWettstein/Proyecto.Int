<?php
session_start();
$titulo = "Usuarios";
include_once('../partials/head.php');
require_once('../loader.php');
// $users = $usuarios->mostrar();
$usuario = BaseDato::consultar("*", "usuarios");
?>

<body>
  <section class="container">
    <?php include_once('../partials/nav.php'); ?>
    <div class="cajita-button">
      <a href="../vistas-usuario/creaPreguntas.php" class="button-volver">
        <i class="fas fa-chevron-circle-left"></i>
      </a>
    </div>
    <h3 class="titulo-admin">
      Vista de los usuario registrados
    </h3>
    <table class="table table-dark crud-admin">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Usuario</th>
          <th scope="col">Email</th>
          <th scope="col">Perfil</th>
          <th scope="col">Avatar</th>
          <th scope="col">Administrar</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($usuario as $key => $value) : ?>
          <tr>
            <td><?= $value['id']; ?></td>
            <td><?= $value['nombre']; ?></td>
            <td><?= $value['email']; ?></td>
            <td><?= $value['perfil']; ?></td>
            <td><?= $value['avatar']; ?></td>
            <td>
              <a href="../vistas-usuario/editar.php?pregunta=<?= $value['id']; ?>"><i class="fas fa-edit"></i></a>
              <a href="../vistas-usuario/eliminar.php?pregunta=<?= $value['id']; ?>"><i class="fas fa-trash"></i></a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </section>
</body>