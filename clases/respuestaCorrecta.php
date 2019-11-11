<?php 
class respuestaCorrecta{

    public $respuestaCorrecta;

    public function __construct($answ){
        $this-> respuestaCorrecta = $answ;
    }

    //Getters

    public function getRespuestaCorrecta(){
        return $this-> respuestaCorrecta;
    }
}