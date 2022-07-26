<div class="titulo">Desafio Data</div>

<?php
class DataMesAno {
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function apresentar() {
        echo "{$this->dia}/{$this->mes}/{$this->ano} <br>";
    }
}

$calendario1 = new DataMesAno();
$calendario1->dia = 01;
$calendario1->mes = 01;
$calendario1->ano = 1970;
$calendario1->apresentar();


$calendario2 = new DataMesAno();
$calendario2->dia = 9;
$calendario2->mes = 02;
$calendario2->ano = 2002;
$calendario2->apresentar();

