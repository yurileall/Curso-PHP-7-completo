<div class="titulo">Atribuções</div>

<?php
 $title = 'Atribuições';

 $numero = 10;
 echo '<br>' . $numero;
 $numero = $numero - 3;
 echo '<br>' . $numero;
 $mumero = $numero + 1.5;
 echo '<br>' . $numero;
 $numero--; // $numero = $numero - 1;
 --$numero; // $numero = $numero - 1;
 echo '<br>' .$numero;
 $numero++; // $numero = $numero + 1;
 ++$numero; // $numero = $numero + 1;
 echo '<br>' . $numero;
 $numero = 20;
 echo '<br>' . $numero;
 $numero -= 5;
 echo '<br>' . $numero;
 $numero += 5;
 echo '<br>' . $numero;
 $numero += 10;
 echo '<br>' . $numero;
 $numero /= 2;
 echo '<br>' . $numero;
 $numero %= 6;
 echo '<br>' . $numero;
 $numero **= 4;
 echo '<br>' . $numero; 
 $numero .= 4; // apenas concatenação!
 echo '<br>' . $numero; 

 $texto = 'Esee é um texto';
 echo '<br>' . $texto;
 $texto = $texto . ' qualquer ';
 echo '<br>' . $texto;
 $texto .= " de verdade ";
 echo '<br>' . $texto;

 //$variavelInexistente = 'valor existente';
 //echo '<br>' . $variavelInexistente;
 $valor = $variavelInexistente ?? 'valor defult';
 echo '<br>' . $valor;