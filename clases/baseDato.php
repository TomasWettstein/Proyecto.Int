<?php
abstract class BaseDato {

    abstract public function crearId();
    abstract public function guardar($usuario);
    abstract public function buscar($email);
    abstract public function verificar($email);

    public static function conectar(){
        $host = "127.0.0.1";
        $port = "8889";
        $dbname = "Dubium";
        $charset = "utf8mb4";
        $user_name = "root";
        $user_pas = "root";
        $dsn = "mysql:host=$host;dbname=$dbname;port=$port;charset=$charset";

        $db = new PDO($dsn,$user_name,$user_pas);

        return $db;
    }

    public static function consultar(string $select, string $from, $where=null){
        $db = BaseDato :: conectar();
        if(!isset($where)){
            $sql = "SELECT $select FROM $from";
            $query = $db-> prepare($sql);
            $query-> execute();
             return $consulta = $query-> fetchAll(PDO :: FETCH_ASSOC);
        }else{
            $sql = "SELECT $select FROM $from WHERE $where";
            $query = $db-> prepare($sql);
            $query-> execute();
             return $consulta = $query-> fetchAll(PDO :: FETCH_ASSOC);
        }
    }

    public static function registarUsuario($usuario){

        $nombre = $usuario-> getUserName();
        $email = $usuario-> getEmail();
        $password = $usuario-> getPassword();
        $avatar = $usuario-> getAvatar();
     
        $db = BaseDato :: conectar();

        $sql = "INSERT INTO usuario (nombre, email, perfil ,contraseña, puntos, avatar) VALUES (:nombre, :email, 0, :password,0 ,:foto)";

        $ingresar = $db-> prepare($sql);

        $ingresar-> bindValue(':nombre', $nombre, PDO::PARAM_STR);
        $ingresar-> bindValue(':email', $email, PDO::PARAM_STR);
        $ingresar-> bindValue(':password', $password, PDO::PARAM_STR);
        $ingresar-> bindValue(':foto', $avatar, PDO::PARAM_STR);

        $ingresar-> execute();
    }

    public static function registrarPregunta($pregunta){

        $pregunta = $pregunta-> getPregunta();

        $db = BaseDato :: conectar();

        $sql = "INSERT INTO pregunta (pregunta, usuario_id, respuestacorrecta_id, respuestaincorrecta_id) VALUES (:pregunta, 0,0,0)";

        $registrar = $db-> prepare($sql);

        $registrar-> bindValue(':pregunta', $pregunta, PDO::PARAM_STR);

        $registrar-> execute();
    }

    public static function registrarRespuestaCorrecta($respuestaCorrecta){
        $respuesta = $respuestaCorrecta-> getRespuestaCorrecta();

        $db = BaseDato :: conectar();

        $sql = "INSERT INTO respuestacorrecta (respuestacorrecta) VALUES (:respuesta)";

        $registrar = $db-> prepare($sql);

        $registrar-> bindValue(':respuesta', $respuesta, PDO::PARAM_STR);

        $registrar-> execute();
    }

    public static function registrarRespuestaIncorrecta($respuesta){
        $answe = $respuesta->  getRespuestaIncorrecta1();
        $answ2 = $respuesta-> getRespuestaIncorrecta2();

        $db = BaseDato :: conectar();
        
        $sql = "INSERT INTO respuestaincorrecta (respuestaincorrecta) VALUES (:respuesta)";

        $sql2 = "INSERT INTO respuestaincorrecta (respuestaincorrecta) VALUES (:respuesta2)";
        
        $registrar = $db-> prepare($sql);
        
        $registrar-> bindValue(':respuesta', $answe, PDO::PARAM_STR);

        $registrar-> execute();

        $registrar2 = $db->prepare($sql2);

        $registrar2-> bindValue(':respuesta2', $answ2, PDO::PARAM_STR);

        $registrar2-> execute();
    }
}

?>