<div class="titulo">Variáveis</div>

<?php
 $numeroA=13;
 echo $numeroA, '<br>';
 var_dump($numeroA);

 echo "<br>";
 $a=3;
 $b=16;
 $somadosnumeros= $a + $b;
 echo $somadosnumeros;

 echo "<br>";
 echo isset($somadosnumeros);

 unset($somadosnumeros);
 echo '<br>';
 var_dump($somadosnumeros);

 $variavel = 10;
 echo '<br>' . $variavel;

 $variavel = "Agora sou uma string!";
 echo '<br>' . $variavel;

 // Nomes de variável
 $var = 'valida';
 $var2 = 'valida';
 $VAR3 = 'valida';
 $_var_4 = 'valida';
 $vâr5 = 'valida'; // evitar!
 //$6var = 'invaliada'; //
 //$%var7 = 'invalida'; //
 //$var8% = 'invalida'; //

 echo '<br>';
 var_dump($_SERVER["HTTP_HOST"]);