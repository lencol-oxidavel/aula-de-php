<?php 
// include dos arquivos
include_once './include/logado.php';
include_once './include/conexao.php';
include_once './include/header.php';

$sql1 = "SELECT FuncionarioID, Nome FROM funcionarios";
$sql2 = "SELECT ProdutoID, Nome FROM produtos";

$resultado1 = mysqli_query($conn, $sql1);
$resultado2 = mysqli_query($conn, $sql2);

?>
  <main>
    

    <div id="producao" class="tela">
        <form class="crud-form" action="./action/producao.php" method="post">
          <h2>Cadastro de Produção de Produtos</h2>
          <input type="hidden" name="acao" value="salvar">
          <select name="Funcionarios" required>
            <option value="" disabled selected>Funcionário</option>
            <?php while($dado1 = mysqli_fetch_assoc($resultado1)){ ?>
            <option value="<?php echo $dado1['FuncionarioID']?>"><?php echo $dado1['Nome']?></option>
            <?php } ?>
          </select>
          <select name="Produtos" required>
            <option value="" disabled selected>Produto</option>

            <?php while($dado2 = mysqli_fetch_assoc($resultado2)){?>
            <option value="<?php echo $dado2['ProdutoID'];?>"><?php echo $dado2['Nome']?></option>
            <?php } ?>

          </select>
          <label for="">Data da entrega</label>
          <input type="date" name="DataEntrega" placeholder="Data da Entrega" required>
          <input type="number" name="Quantidade" placeholder="Quantidade Produzida" required>
          <button type="submit">Salvar</button>
        </form>
      </div>
   
  </main>
  <?php 
  // include dos arquivos
  include_once './include/footer.php';
  ?>