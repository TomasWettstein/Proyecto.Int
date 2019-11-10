<?php

class Pregunta {
    public $pregunta;


    public function __construct($pregunta)
    {
        $this-> pregunta = $pregunta;
    } 
    public function setPregunta($pregunta){
        $this->pregunta = $pregunta;
    }
    public function getPregunta(){
        return $this->pregunta;
    }
}