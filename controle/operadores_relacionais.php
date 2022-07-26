<div class="titulo">Operadores Relacionais</div>

<?php
echo "<br>" . var_dump(1 == 1); // true
echo "<br>" . var_dump(1 > 1);  // false
echo "<br>" . var_dump(1 >= 1); // true
echo "<br>" . var_dump(4 < 23); // true
echo "<br>" . var_dump(1 <= 7); // true
echo "<br>" . var_dump(1 != 1); // false
echo "<br>" . var_dump(1 <> 1); // false

echo "<br>" . var_dump(111 == '111'); // true
echo "<br>" . var_dump(111 === '111');// false
echo "<br>" . var_dump(111 != '111'); // false
echo "<br>" . var_dump(111 !== '111');// true

echo "<p class='divisao'>Relacionais mo If/Else</p><hr>";
$idade = 75;
if($idade < 18) {
    echo "Menor de idade = $idade anos<br>";
} elseif($idade >= 18){
    echo "Adulto = $idade anos<br>";
} else {
    echo "Terceira idade = $idade anos";
}

echo "<p class='divisao'>Spaceship</p><hr>";
var_dump(500 <=> 3);
var_dump(50 <=> 50);
var_dump(5 <=> 50);

echo "<p class='divisao'>Valores pode ser V ou F</p><hr>";
var_dump(!!5);
var_dump(!!0);
var_dump(!!"");
var_dump(!!" ");



 