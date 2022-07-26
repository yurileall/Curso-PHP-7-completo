<?php
require_once('pessoa.php');

class Usuario extends Pessoa {
    public $login;

    function __constuct($nome, $idade, $login) {
       parent::__constuct($nome, $idade);
        $this-> login = $login;
        
    }

    public function apresentar() {
       $login = "@{$this->login}:<br>";
        return $login . parent::apresentar();
    }

}
