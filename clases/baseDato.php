<?php
abstract class BaseDato {
abstract public function crearId();
abstract public function guardar($usuario);
abstract public function buscar($email);
abstract public function verificar($email);
}

?>