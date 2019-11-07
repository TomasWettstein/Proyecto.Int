<?php
class BaseJson extends BaseDato{
  

   public function crearId(){
       $usuarioJson = file_get_contents('usuario.json');
       $usuarios = json_decode($usuarioJson, true);
       if (!$usuarios) {
           return 1;
       } else {
           $ultimoUsuario = array_pop($usuarios['usuarios']);
           $ultimoId = $ultimoUsuario['id'];
           $siguienteId = $ultimoId + 1;
           return $siguienteId;
       }
   }

    public function guardar($usuario){
            $usuarioJson = file_get_contents('usuario.json');
            $usuarios = json_decode($usuarioJson, true);
            $usuarios['usuarios'][] = $usuario;
            $usuarioJson = json_encode($usuarios, JSON_PRETTY_PRINT);
            file_put_contents('usuario.json', $usuarioJson);
        }

    public function buscar($email){
            $archivoJson = file_get_contents('usuario.json');
            $array = json_decode($archivoJson, true);
            $usuarios = $array['usuarios'];
            // var_dump($usuarios);
            // exit;
            foreach ($usuarios as $value) {
                if ($value['email'] === $email) {
                    // var_dump($value['email']);
                    // exit;
                    return $value;
                }
            }
            return null;
        }
     public function verificar($email){
            return $this->buscar($email) !== null;
        }
    }

