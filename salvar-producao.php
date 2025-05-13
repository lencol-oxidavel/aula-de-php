<?php 
// include dos arquivox
include_once './include/logado.php';
include_once './include/conexao.php';
include_once './include/header.php';

$sql1 = "SELECT FuncionarioID, Nome FROM funcionarios";
$sql2 = "SELECT ProdutoID, Nome FROM Produtos";

$resultado1 = mysqli_query($conn, $sql1);
$resultado2 = mysqli_query($conn, $sql2);

?>
  <main>
    

    <div id="producao" class="tela">
        <form class="crud-form" method="post" action="./action/producao.php">
          <h2>Cadastro de Produção de Produtos</h2>
          <input type="hidden" type='acao' value="salvar">
          <select name="">
            <option value="" disabled selected>Funcionário</option>
            <?php while($dado1 = mysqli_fetch_assoc($resultado1)){?>
            <option value="<?php $dado1['FuncionarioID']?>"><?php $dado1['Nome']?></option>
            <?php } ?>
          </select>
          <select name="">
            <option value="" disabled selected>Produto</option>
            <?php while($dado2 = mysqli_fetch_assoc($resultado2)){?>
            <option value="<?php echo $dado2['ProdutoID'];?>"><?php $dado2['Nome']?></option>
            <?php } ?>
          </select>
          <label for="">Data da entrega</label>
          <input type="date" placeholder="Data da Entrega">
          <input type="number" placeholder="Quantidade Produzida">
          <button type="submit">Salvar</button>
        </form>
      </div>
   
  </main>
  <?php 
  // include dos arquivox
  include_once './include/footer.php';
  ?>