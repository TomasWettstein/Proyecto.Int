<?php
abstract class BaseDato {

    abstract public function crearId();
    abstract public function guardar($usuario);
    abstract public function buscar($email);
    abstract public function verificar($email);

    public static function conectar(){
        $host = "127.0.0.1";
        $port = "3306";
        $dbname = "juego_db";
        $charset = "utf8mb4";
        $user_name = "root";
        $user_pas = "Avast159";
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

        $sql = "INSERT INTO usuarios (nombre, email, perfil ,contraseña, puntos, avatar) VALUES (:nombre, :email, 0, :password,0 ,:foto)";

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

        $db = BaseDato :: conectar();

        $respuesta = $answeRight-> getRespuestaCorrecta();

        $usuario = $usuario_id;

        $pregunta = $pregunta-> getPregunta();

        $sql = "insert into preguntas (pregunta, respuesta_id,usuario_id) values (:pregunta, (select id from respuestas where correcta = :respuesta), :usuario);";

        $registrar = $db-> prepare($sql);

        $registrar-> bindValue(':pregunta', $pregunta, PDO::PARAM_STR);

        $registrar-> bindValue(':respuesta', $respuesta, PDO::PARAM_STR);

        $registrar-> bindValue(':usuario', $usuario, PDO::PARAM_STR);


        $registrar-> execute();
    }

    public static function registrarRespuestas($respuestaCorrecta, $respuestaIncorrecta){
        $respuesta = $respuestaCorrecta-> getRespuestaCorrecta();

        $respuesta2 = $respuestaIncorrecta-> getRespuestaIncorrecta1();

        $respuesta3 = $respuestaIncorrecta-> getRespuestaIncorrecta2();

        $db = BaseDato :: conectar();

        $sql = "INSERT INTO respuestas (correcta, falsa1, falsa2) VALUES (:respuestaCorrecta, :respuestaFalsa1, :respuestaFalsa2)";

        $registrar = $db-> prepare($sql);

        $registrar-> bindValue(':respuestaCorrecta', $respuesta, PDO::PARAM_STR);

        $registrar-> bindValue(':respuestaFalsa1', $respuesta2, PDO::PARAM_STR);

        $registrar-> bindValue(':respuestaFalsa2', $respuesta3, PDO::PARAM_STR);

        $registrar-> execute();
    }

    public static function eliminarPregunta($dato){
        $db = BaseDato :: conectar();

        $sql = "delete from preguntas where pregunta = '$dato'";

        $eliminar = $db-> prepare($sql);

        $eliminar-> execute();
    }

    public static function eliminarRespuesta($dato){
        $db = BaseDato :: conectar();

        $sql = "delete from respuestas where id = '$dato'";

        $eliminar = $db-> prepare($sql);

        $eliminar-> execute();
    }

    public static function editarPregunta($dato, $id){
        $db = BaseDato :: conectar();

        $sql = "UPDATE preguntas SET pregunta = :dato where id = :id";

        $actualizar = $db-> prepare($sql);

        $actualizar-> bindValue(':dato', $dato, PDO::PARAM_STR);

        $actualizar-> bindValue(':id', $id, PDO::PARAM_STR);

        $actualizar-> execute();

    }

    public static function editarRespuesta($dato, $dato2, $dato3,$id){
        $db = BaseDato :: conectar();

        $sql = "update respuestas set correcta = :dato, falsa1 = :datoFalso, falsa2 = :datoFalso2 where id = :id";

        $actualizar = $db-> prepare($sql);

        $actualizar-> bindValue(':dato', $dato, PDO::PARAM_STR);
        
        $actualizar-> bindValue(':datoFalso', $dato2, PDO::PARAM_STR);
        
        $actualizar-> bindValue(':datoFalso2', $dato3, PDO::PARAM_STR);

        $actualizar-> bindValue(':id', $id, PDO::PARAM_STR);

        $actualizar-> execute();

    }
}

?>