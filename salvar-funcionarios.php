<?php 
// include dos arquivos
include_once './include/logado.php';
include_once './include/conexao.php';
include_once './include/header.php';

$sql1 = "SELECT SetorID, Nome FROM setor";
$sql2 = "SELECT CargoID, Nome FROM cargos";

// query do setor
$resultado1 = mysqli_query($conn, $sql1);
// query do cargos
$resultado2 = mysqli_query($conn, $sql2);

$dado = null;
if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    $sql = "SELECT * FROM funcionarios WHERE FuncionarioID = $id";
    $resultado = mysqli_query($conn, $sql);
    if ($resultado && mysqli_num_rows($resultado) > 0) {
        $dado = mysqli_fetch_assoc($resultado);
    }
}

?>


  
  <main>

    <div id="funcionarios" class="tela">
        <form class="crud-form" action="./action/funcionarios.php" method="post">
          <h2><?php echo $dado ? 'editar funcionarios' : 'Cadastrar Funcionarios'?></h2>
          <input type="hidden" name="acao" value="<?php echo $dado ? 'editar' : 'salvar'?>">
          <?php if ($dado): ?>
            <input type="hidden" name="FuncionarioID" value="<?php echo $dado['FuncionarioID']; ?>">
          <?php endif; ?>
          <input type="text" name="Nome" placeholder="Nome" value="<?php echo $dado ? $dado['Nome'] : ''?>" required>
          <input type="date" name="DataNascimento" placeholder="Data de Nascimento" value="<?php echo $dado ? $dado['DataNascimento'] : ''?>" required>
          <input type="email" name="Email" placeholder="Email" value="<?php echo $dado ? $dado['Email'] : ''?>" required>
          <input type="number" name="Salario" placeholder="Salário" value="<?php echo $dado ? $dado['Salario'] : ''?>" required>
          <input type="number" name="Ramal" placeholder="Ramal" value="<?php echo $dado ? $dado['Ramal'] : ''?>" required>
          <select name="Sexo"  required>
            <option value="" disabled selected>Sexo</option>
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
          </select>
          <input type="text" name="CPF" placeholder="CPF" value="<?php echo $dado ? $dado['CPF'] : ''?>" required>
          <input type="text" name="RG" placeholder="RG" value="<?php echo $dado ? $dado['RG'] : ''?>" required>
          <select name="Cargo" required>
            <option value="" disabled selected>Cargo</option>
            
            <?php while($dado2 = mysqli_fetch_assoc($resultado2)){ ?>
            <option value="<?php echo $dado2['CargoID']?>"><?php echo $dado2['Nome']?></option>
            <?php } ?>

          </select>
          <select name="Setor" required>
            <option value="" disabled selected>Setor</option>
            <?php while($dado1 = mysqli_fetch_assoc($resultado1)){ ?>
            <option value="<?php echo $dado1['SetorID']?>"><?php echo $dado1['Nome']?></option>
            <?php } ?>
          </select>
          <button type="submit">Salvar</button>
        </form>
      </div>


   
  </main>

  <?php 
  // include dos arquivos
  include_once './include/footer.php';
  ?>
