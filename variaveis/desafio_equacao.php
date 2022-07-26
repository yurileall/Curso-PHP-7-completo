<div class="titulo">Equação</div>

<?php

//$var = ([6 * (3 + 2)] ** 2 / 3 * 2 - ((1 - 5) * ( 2 - 7) / 2) ** 2) ** 3 / 10 ** 3;
//echo $var;

//echo '<br>';

//$var2 = (150 - 100) ** 3 / 10 ** 3;
//echo $var2;

$numA = (6 * (3 + 2)) ** 2;
$denA = 3 * 2;

$numB = (1 - 5) * (2 - 7);
$denB = 2;

$superiorA = $numA / $denA;
$superiorB = ($numB / $denB) ** 2;

$superior = ($superiorA - $superiorB) ** 3;
$inferior = 10 ** 3;

$final = $superior / $inferior;
echo 'O resultado final é ' . $final . '.';
