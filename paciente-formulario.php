<?php include("cabecalho.php");?>

  <br><br><h2>Inserir novo paciente</h2>
  <form action="adiciona-paciente.php">
    <table class="table">
      <tr>
        <td>Nome:</td>
          <td><input class="form-control" type="text" name="name"> <br/></td>
      </tr>
      <tr>
        <td>Hospital:</td>
          <td><input class="form-control" type="text" name="hospital"><br/></td>
      </tr>
      <tr>
        <td><button class="btn btn-primary" type="submit"> Cadastrar </button></td>
      </tr>
    </table>
  </form>
<?php include("rodape.php");?>
