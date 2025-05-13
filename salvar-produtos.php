<?php 
// include dos arquivox
include_once './include/logado.php';
include_once './include/conexao.php';
include_once './include/header.php';

$sql = "SELECT CategoriaID, Nome FROM categorias;";
$resultado = mysqli_query($conn, $sql);

?>
  
  <main>
    
    <div id="produtos" class="tela">
        <form class="crud-form" action="./action/produtos.php" method="post">
          <h2>Cadastro de Produtos</h2>
          <input type="hidden" name="acao" value="salvar">
          <input type="text" name="Nome" placeholder="Nome do Produto" required>
          <input type="number" name="Preco" placeholder="Preço" required>
          <input type="number" name="Peso" placeholder="Peso (g)" required>
          <textarea placeholder="Descrição" name="Descricao" required></textarea>
          <select name="Categoria" required>
            <option value="" disabled selected>Categoria</option>
            <?php while($dado = mysqli_fetch_assoc($resultado)) {?>
            <option value="<?php $dado['CategoriaID']?>"><?php echo $dado['Nome']?></option>
            <?php } ?>
          </select>
          <input type="text" name="Referencia" required>
          <button type="submit">Salvar</button>
        </form>
      </div>


   
  </main>

  <?php 
  // include dos arquivox
  include_once './include/footer.php';
  ?>