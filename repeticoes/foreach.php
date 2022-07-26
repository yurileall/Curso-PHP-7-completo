<div class="titulo">Foreach</div>

<?php
$array = [
    1=> 'Domingo',
     'Segunda', 
     'Terça',
     'Quarta', 
     'Quinta',
     'Sexta',
     'Sábado'
 ];

foreach($array as $valor) {
    echo "$valor <br>";
}

foreach ($array as $indice => $valor) {
    echo "$indice =>$valor <br>";
}

$matrix = [
    ['a ', 'e ', 'i ', 'o ', 'u '],
    ['b ', 'c ', 'd ']
];

foreach ($matrix as $linhas) {
    // echo "$linhas <br>"
    foreach($linhas as $letras) {
        echo "$letras";
    }
    echo "<br>";
}

$numeros = [1, 2, 3, 4, 5];
foreach ($numeros as &$dobrar) {
    $dobrar *= 2;
    echo "$dobrar <br>";
}
print_r($numeros);
 

 const VALOR_LIMITE = 5;
 $contador = 0;

 while($contador < VALOR_LIMITE) {
     echo "while $contador <br>";
     $contador++;
 }

 $contador = 10;
do {
     echo "do-while $contador <br>";
   $contador ++; 
 } while($contador < VALOR_LIMITE);

 $contador = 0;
 while (true) {
     echo "while(true) $contador <br>";
     $contador++;
     if($contador >= VALOR_LIMITE) break;
 }