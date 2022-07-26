<div class="titulo">Primeira Classe</div>

<?php
class Cliente {
    //Atributo
    public $nome = 'Anônimo';
    public $idade = 18;

    public function apresentar() {
        echo "Nome: {$this->nome} <br> Idade: {$this->idade}<br>";
    }
}

$c1 = new Cliente();
$c1->nome = 'Ana Silva';
$c1->idade = '27';
$c1->apresentar();

echo '<br>';

$c2 = new Cliente();
$c2->nome = 'Cleide';
$c2->idade = '36';
$c2->apresentar();

