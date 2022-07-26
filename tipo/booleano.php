<div class="titulo">Tipo Booleano</div>

<?php
echo TRUE;
echo '<br>';
echo FALSE;

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(false);
echo '<br>' . var_dump('false');
echo '<br>' . is_bool(false);
echo '<br>' . is_bool('true');

// fazer as regras de conversões
echo '<p>Regras:</p>';
echo '<br>' . var_dump((bool) 0); // apenas o zero é falso
echo '<br>' . var_dump((bool) 20); 
echo '<br>' . var_dump((bool) -1); 
echo '<br>' . var_dump((bool) 0.0); 
echo '<br>' . var_dump((bool) 00000001); 
echo '<br>' . var_dump((bool) ''); // FALSE
echo '<br>' . var_dump((bool) '0'); // FALSE
echo '<br>' . var_dump((bool) ' '); // TRUE
echo '<br>' . var_dump((bool) '00'); //TRUE



