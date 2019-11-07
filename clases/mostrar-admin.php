<?php 
class Usuarios {

    public function mostrar(){
        $archivoJson = file_get_contents('usuario.json');
        $array = json_decode($archivoJson, true);
        $usuarios = $array['usuarios'];
        // var_dump($usuarios);
        // exit;
        return $usuarios;
    }
}


?>