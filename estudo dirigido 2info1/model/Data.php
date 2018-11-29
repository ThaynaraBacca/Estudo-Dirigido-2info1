<?php

class Data {

    public $dia;
    public $mes;
    public $ano;

    public function retorna(){

        $tudo[];

        $tudo[] = $this->dia;
        $tudo[] = $this->mes;
        $tudo[] = $this->ano;

        return $tudo;
    }
    
    public function getData(){
        return "{$this->dia}/{$this->mes}/{$this->ano}";
    }

}