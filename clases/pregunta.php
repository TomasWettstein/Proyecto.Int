<?php

class Pregunta{
    public $pregunta;

    public function __construct($nombre_pregunta){
        $this-> pregunta = $nombre_pregunta;
    }

    //Getter

    public function getPregunta(){
        return $this-> pregunta;
    }
}