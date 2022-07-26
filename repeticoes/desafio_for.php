<div class="titulo">Desafio For</div>

<!--
#
##
###
####
1) Pode usar icremenro $1++
2) Não pode usar icremenro $1++
-->

<?php
$impressao = '';
for($cont = 1; $cont <= 5; $cont++) {
    $impressao .= '#';
    echo "$impressao <br>";
}

for(
    $impressao2 = '#';
    $impressao2 !== '######';
    $impressao2 .= '#' ) {
        echo "$impressao2 <br>";
} 