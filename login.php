<?php
session_start();
include('conecta-db.php');

if (empty($_POST['email']) || empty($_POST['password'])){
  header("Location: index.php");
  exit();
}

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$password = mysqli_real_escape_string($conexao, $_POST['password']);

$query = "SELECT * FROM users WHERE email = '{$email}' and password = md5('{$password}')";

$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);

if ($row == 1) {
  $_SESSION['email'] = $email;
  header('Location: pagina-inicial.php');
  exit();
} else{
  $_SESSION['nao_autenticado'] = true;
  header('Location: index.php');
  exit();
}
?>
