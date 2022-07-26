<?php if ($_SESSION['erros']): ?>
                <div class="erros"> 
                    <?php foreach ($_SESSION['erros'] as $erro) : ?>
                        <p><?= $erro ?></p>
                    <?php endforeach ?>

 
 
 <?php
 // index.php
session_start();
if(!$_SESSION['usuario']) {
    header('Location: login.php')
}
?>

<?= $_SESSION ['usuario'] ?>

<?php
// exercicio.php
session_start();
if(!$_SESSION['usuario']) {
    header('Location: login.php')
}
?>

