<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Teste
 *
 * @author msait
 */
class Teste {
    public $carro;
    public $lutador;
    
    function __construct($carro, $lutador) {
        $this->carro = $carro;
        $this->lutador = $lutador;
    }
    function getCarro() {
        return $this->carro;
    }

    function getLutador() {
        return $this->lutador;
    }

    function setCarro($carro) {
        $this->carro = $carro;
    }

    function setLutador($lutador) {
        $this->lutador = $lutador;
    }


}
