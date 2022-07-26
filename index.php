


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recursos\CSS\estilo.css">
    <link rel="stylesheet" href="recursos\CSS\exercicio.css">
 
  
    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>índice dos Exercícios</h2>
    </header>   

<nav class="navegacao">
    <span class="usuario">Usuário: </span>
    <a href="logout.php" class="vermelho">Sair</a>

</nav>   

    <main class="principal">
        <div class="conteudo">
          <?php require_once('menu.php'); ?>
        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS * <?= date("Y") ?>
    </footer>


</body>
</html>