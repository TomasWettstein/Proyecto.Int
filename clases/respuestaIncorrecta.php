<?php
class respuestaIncorrecta{
    public $respuesta1;
    public $respuesta2;

     public function __construct($answ1, $answ2){
        $this-> respuesta1 = $answ1;
        $this-> respuesta2 = $answ2;
    }

    //Getters

    public function getRespuestaIncorrecta1(){
        return $this-> respuesta1;
    }

    public function getRespuestaIncorrecta2(){
        return $this-> respuesta2;
    }
}