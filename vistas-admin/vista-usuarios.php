<?php
session_start();
$titulo = "Usuarios";
include_once('head.php');
require_once('loader.php');
<<<<<<< HEAD:vista-usuarios.php
$usuarios = BaseDato :: consultar("*", "usuarios");
=======
$users = $usuarios->mostrar();
>>>>>>> 05a69c5f04263d03af3c2ca1d9cc15c017f61a28:vistas-admin/vista-usuarios.php
?>
<?php include_once('nav.php');?>
<body>
<table class="table table-dark">
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
  <?php foreach ($usuarios as $key => $value):?>
    <tr>
      <td><?= $value['id'];?></td>
      <td><?= $value['nombre'];?></td>
      <td><?= $value['email'];?></td>
      <td><?= $value['perfil'];?></td>
      <td><?= $value['avatar'];?></td>
      <td> 
      <a href="editar.php?pregunta=<?= $value['id'];?>"><i class="fas fa-edit"></i></a>
      <a href="eliminar.php?pregunta=<?= $value['id'];?>"><i class="fas fa-trash"></i></a>
      </td>
    </tr>
    <?php  endforeach;?>
  </tbody>
</table>
</body>