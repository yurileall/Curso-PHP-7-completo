<div class="titulo">Sessão</div>

<?php
session_start();

print_r($_SESSION);
echo '<br>';

if(!$_SESSION['nome']) {
    $_SESSION['nome'] = 'Gabriel';
}

if(!$_SESSION['email']) {
    $_SESSION['email'] = 'gabriel@azmail.com';
}

print_r($_SESSION);

?>

<?php
//<p> 
  //  <a href='C:/xampp/htdocs/curso-php/sessao/basico_sessao_alterar.php'> 
  //    Alterar Sessão   
  //  </a>
//</p>
?>

<p> 
    <a href='http://localhost/curso-php/exercicio.php?dir=sessao&file=basico_sessao_alterar'> 
       Alterar Sessão   
    </a>
</p>



