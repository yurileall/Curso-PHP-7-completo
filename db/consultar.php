<div class="titulo">Consultar Registros</div>

<?php

require_once "conexao.php";

$sql = "SELECT * FROM cadastro";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

$registros = [];

if($resultado->num_rows > 0) {
    while($row = $resultado->fetch_assoc()) {
        $registro[] = $row;
    }
} elseif($conexao->error) {
    echo "Erro: " . $conexao->error;
}

print_r($registros);

$conexao->close();
?>

<table class="table">
      <thead>
        <th>Código</th>
        <th>Nome</th>
        <th>Nascimento</th>
        <th>E-mail</th>
      </thead>
      <tbody>
          <?php foreach($registros as $registro): ?>
               <tr>
                  <td> <?= $registro ['id']?> </td>
                  <td> 
                  <?= $registro ['nome']?> </td>
                  <td> 
                  <?= 
                      date('d/m/y' , strotime($registro['nascimento']))
                  ?>
                   </td>
                  <td> <?= $registro ['email']?> </td>
               </tr>
      </tbody>
</table>

<style>
   table > * {
       font-size: 1.2rem;
   }
</style> 