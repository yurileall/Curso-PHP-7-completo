<div class="titulo">Include Função</div>

<?php
echo 'Carregando: include_função';

function carregarArquivo() {
    include('include_arquivo.php');

    echo $variavel . '<br>';
    echo soma(2, 5) . '!<br>';
}

echo 'Novamente no arquivo include_função<br>';
// echo soma(1, 8) . '!<br>';
carregarArquivo();

//echo "Variável = '{$variavel}'.";
// var_dump($variavel);
echo   soma(3, 8);