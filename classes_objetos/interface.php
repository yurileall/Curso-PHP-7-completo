<div class="titulo">Interface</div> 

<?php
interface Animal{
    function respirar();
}

interface Mamifero{
    function mamar();
}

interface Canino extends Animal, Mamifero {
    function latir(): string;
    function correr();
}

interface Felino{
}

class Cachorro implements Canino {
    function respirar() {
        return "Irei usar oxigênio!";
    }


    function latir(): string {
        return "Au Au";
    }

    function mamar() {
        return "Ingerir leite";
    }

    function correr() {
        return "Corre muito";
    }
}

$animal1 = new Cachorro();
echo $animal1-> respirar(), '<br>';
echo $animal1-> latir(), '<br>';
echo $animal1-> mamar(), '<br>';
echo $animal1-> correr(), '<br>';

echo  '<br>';
echo 'Fim!';


