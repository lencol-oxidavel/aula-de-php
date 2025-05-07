<?php 
// include dos arquivox
include_once './include/logado.php';
include_once './include/conexao.php';
include_once './include/header.php';

$sql1 = "SELECT Nome FROM setor";
$sql2 = "SELECT Nome FROM cargos";

// query do setor
$resultado1 = mysqli_query($conn, $sql1);
// query do cargos
$resultado2 = mysqli_query($conn, $sql2);
?>


  
  <main>

    <div id="funcionarios" class="tela">
        <form class="crud-form" action="./action/funcionarios.php" method="post">
          <h2>Cadastro de Funcionários</h2>
          <input type="hidden" name="acao" value="salvar">
          <input type="text" name="Nome" placeholder="Nome" required>
          <input type="date" name="DataNascimento" placeholder="Data de Nascimento" required>
          <input type="email" name="Email" placeholder="Email" required>
          <input type="number" name="Salario" placeholder="Salário" required>
          <select name="Sexo" required>
            <option value="" disabled selected>Sexo</option>
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
          </select>
          <input type="text" name="CPF" placeholder="CPF" required>
          <input type="text" name="RG" placeholder="RG" required>
          <select name="Cargo" required>
            <option value="" disabled selected>Cargo</option>
            
            <?php while($dado2 = mysqli_fetch_assoc($resultado2)){ ?>
            <option value="<?php echo $dado2['Nome']?>"><?php echo $dado2['Nome']?></option>
            <?php } ?>

          </select>
          <select name="Setor" required>
            <option value="" disabled selected>Setor</option>
            <?php while($dado1 = mysqli_fetch_assoc($resultado1)){ ?>
            <option value="<?php echo $dado1['Nome']?>"><?php echo $dado1['Nome']?></option>
            <?php } ?>
          </select>
          <button type="submit">Salvar</button>
        </form>
      </div>


   
  </main>

  <?php 
  // include dos arquivox
  include_once './include/footer.php';
  ?>
