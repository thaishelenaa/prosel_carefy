<?php
include("cabecalho.php");
include("conecta-db.php");
include("funcoes-paciente.php");

$id = $_GET['id'];
removePaciente($conexao, $id);
header("Location: lista-paciente.php?removido=true");
die();
 ?>
