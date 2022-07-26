<div class="titulo">Herança</div>

<?php
class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
        echo"Pessoa Criada! <br>";
    }

    function __destruct(){
        echo "Pessoa diz: Tchau!!";
    }

    public function apresentar(){
        echo "{$this->nome}, {$this->idade} anos<br>";
    }
}

class Usuario extends Pessoa {
    public $login;

    function __constuct($nome, $idade, $login) {
        $this-> nome = $nome;
        $this-> idade = $idade;
        $this-> login = $login;
        echo "Usuário criado!<br>";
    }

    function __destruct(){
        echo "Usuário diz: Tchau!!";
    }

    public function apresentar() {
        echo "@{$this->login}:<br>";
        parent::apresentar();
    }

}

$usuario = new Usuario('Gustavo Mendonça' , 21, 'gust_mend');
$usuario->apresentar();