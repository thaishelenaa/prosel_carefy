<?php
include("cabecalho.php");
include("conecta-db.php");
include("funcoes-paciente.php");?>
<?php
if (array_key_exists("removido", $_GET) && $_GET["removido"]==true) {
?>
  <p class="alert-success"> Paciente removido!</p>
<?php
}
?>

<table class="table table-striped table-bordered">
  <?php
      $pacientes = listaPacientes($conexao);
      foreach ($pacientes as $paciente):
  ?>
  <tr>
    <td><?= $paciente ['name'] ?></td>
    <td><?= $paciente ['hospital']?></td>
    <td>
      <a href="remove-paciente.php?id=<?=$paciente ['id']?>" class="text-danger"> remover paciente</a>
    </td>
  </tr>
  <?php
    endforeach
   ?>
</table>

<?php include("rodape.php");?>
