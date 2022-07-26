<div class="titulo">Menbros Estáticos</div>

<?php
Class A {
    public $naoStatic = 'Variável de instância';
    public static $static = 'Variável de classe (estática)';

    public function mostrarA() {
        echo "Não estática = {$this->naoStatic}<br>";
        // Tentativa 1
        // echo "Estática = {$this->static}<br>";
        // Tentativa 2
        // echo "Estática = {self::$static}<br>";
        echo "Estática =" . self::$static . '<br>';
    }

    public static function mostrarStaticA() {
        // echo "Não estática = {$this->naoStatic}<br>";
        // echo "Estática = {$static}<br>";
        echo "Estática =" . self::$static . '<br>';
    }

}

$objetoA = new A();
$objetoA->mostrarA();
$objetoA->mostrarA(); // não é a forma ideal

echo '<br>';
echo A::$static, '<br>'; // acessar dirtamente pela classe
A::mostrarStaticA(); // acessar dirtamente pela classe

A::$static= 'Alterado membro de classe';
echo A::$static, '<br>'; // acessar dirtamente pela classe