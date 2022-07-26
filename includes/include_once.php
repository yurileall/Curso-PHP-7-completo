<div class="titulo">Include Once</div>

<?php
ini_set('display_errors', 1);

include('Include_once_arquivo.php');
require('Include_once_arquivo.php');

echo "variável = '{$variavel}'.<br>";
$variavel = 'Variável Aterada';
echo "variável = '{$variavel}'.<br>";

include('Include_once_arquivo.php');
echo "variável = '{$variavel}'.<br>";
$variavel = 'Variável Aterada';
echo "variável = '{$variavel}'.<br>";

include_once('include_once_arquivo.php');
echo "variável = '{$variavel}'.<br>";

require_once('include_once_arquivo.php');
echo "variável = '{$variavel}'.<br>";