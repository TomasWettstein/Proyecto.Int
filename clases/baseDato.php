<?php
abstract class BaseDato {

    abstract public function crearId();
    abstract public function guardar($usuario);
    abstract public function buscar($email);
    abstract public function verificar($email);

    public static function conectar(){
        $host = "127.0.0.01";
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

    public static function solucion(){
        $db = BaseDato :: conectar();

        $sql1 = "SET FOREIGN_KEY_CHECKS=0";

        $solucion = $db-> prepare($sql1);

        $solucion-> execute();
        
    }

    public static function registrarPregunta($pregunta, $usuario_id, $answeRight){

        $respuesta = $answeRight-> getRespuestaCorrecta();

        $usuario = $usuario_id;

        $pregunta = $pregunta-> getPregunta();

        $db = BaseDato :: conectar();

        $sql1 = "SET FOREIGN_KEY_CHECKS=0";

        $solucion = $db-> prepare($sql1);

        $solucion-> execute();

        $sql = "INSERT INTO pregunta (pregunta, usuario_id, respuestacorrecta_id, respuestaincorrecta_id) 
        VALUES (:pregunta, '$usuario', (select id from respuestacorrecta where respuestacorrecta = '$respuesta') ,0)";

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

    public static function eliminar($pregunta, $respuesta){
        $dato = $pregunta;
        
        $dato2 = $respuesta;

        $sql = "delete from pregunta where pregunta = :dato";
        
        $eliminar = $db-> prepare($sql);

        $eliminar-> bindValue(':dato', $dato, PDO::PARAM_STR);

        $eliminar-> execute();

        $sql2 = "delete from respuestacorrecta where respuestacorrecta.id = :dato2";

        $eliminar2 = $db-> prepare($sql2);

        $eliminar2-> bindValue(':dato', $dato2, PDO::PARAM_STR);

        $eliminar2-> execute();
    }

    public static function editarPregunta($dato, $id){
        $db = BaseDato :: conectar();

        $sql = "UPDATE pregunta SET pregunta = :dato where id = :id";

        $actualizar = $db-> prepare($sql);

        $actualizar-> bindValue(':dato', $dato, PDO::PARAM_STR);

        $actualizar-> bindValue(':id', $id, PDO::PARAM_STR);

        $actualizar-> execute();

    }

    public static function editarRespuesta($dato, $id){
        $db = BaseDato :: conectar();

        $sql = "UPDATE respuestacorrecta SET respuestacorrecta = :dato where id = :id";

        $actualizar = $db-> prepare($sql);

        $actualizar-> bindValue(':dato', $dato, PDO::PARAM_STR);

        $actualizar-> bindValue(':id', $id, PDO::PARAM_STR);

        $actualizar-> execute();

    }
}

?>