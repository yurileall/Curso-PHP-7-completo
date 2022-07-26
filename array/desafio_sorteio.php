<div class="titulo">Desafio Sorteio</div>

<?php
$nomes = ["Elza", "Rapunzel", "Branca de neve", "Cinderela"];

$indice = array_rand($nomes);
echo "<div center><h1>{$nomes[$indice]}</h1></div>";

?>

<style>
    [center] {
        display: flex;
        justify-content: center;
    }

</style>
