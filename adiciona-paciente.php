<?php
include("cabecalho.php");
include("conecta-db.php");
include("funcoes-paciente.php");

    $name = $_GET['name'];
    $hospital = $_GET['hospital'];

    if (inserePaciente($conexao, $name, $hospital)){
      ?>
      <p class="text-success"> Paciente <?= $name?>, <?= $hospital?> adicionado com sucesso!</p>
    <?php } else {
      $msg = mysqli_error($conexao);
       ?>
       <p class="text-danger"> Paciente <?= $name?>, <?= $hospital?> não pode ser adicionado: <?= $msg ?></p>
      <?php
      }
    ?>

<?php include("rodape.php");?>
