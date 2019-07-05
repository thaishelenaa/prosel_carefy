<?php

function inserePaciente($conexao, $name, $hospital){
  $query = "INSERT INTO patients (name, hospital) VALUES ('{$name}', '{$hospital}')";
  return mysqli_query($conexao, $query);
}

function listaPacientes($conexao){
  $pacientes = array();
  $result = mysqli_query($conexao, "SELECT * FROM patients");
  while ($paciente = mysqli_fetch_assoc($result)){
    array_push($pacientes, $paciente);
  }
  return $pacientes;
}

function removePaciente($conexao, $id){
  $query ="DELETE FROM patients WHERE id= {$id}";
  return mysqli_query ($conexao, $query);
}

?>
