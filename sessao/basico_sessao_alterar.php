<?php
session_start();
print_r($_SESSION);
?>

 <?php
 $_SESSION['email'] = 'gabrielfilho@emaillaz.com.br';
 ?>

<p>
   <b>Nome: </b> <?= $_SESSION['nome'] ?><br>
   <b>Email: </b> <?= $_SESSION['email'] ?>

 </p>


 <?php
 //<p>
 //  <a href='basico_sessao.php'>Voltar</a>
 //</p>
 ?>

 <p>
    <a href='http://localhost/curso-php/exercicio.php?dir=sessao&file=basico_sessao'>Voltar</a>
  </p>

 <p>
    <a href='http://localhost/curso-php/exercicio.php?dir=sessao&file=basico_sessao_alterar'>Limpar Sessão</a>
  </p>

  