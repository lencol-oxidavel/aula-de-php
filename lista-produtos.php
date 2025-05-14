<?php 
// include dos arquivos
include_once './include/logado.php';
include_once './include/conexao.php';
include_once './include/header.php';

$sql = 'SELECT p.ProdutoID AS ProdutoID, p.Nome AS Nome, cg.Nome AS Categoria, p.Preco AS Preco
FROM produtos as p
INNER JOIN categorias as cg ON cg.CategoriaID = p.CategoriaID';
$resultado = mysqli_query($conn, $sql);

?>

<main>

  <div class="container">
      <h1>Lista de Produtos</h1>
      <a href="./salvar-produtos.php" class="btn btn-add">Incluir</a> 
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Preço</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          <?php
          while($dado = mysqli_fetch_assoc($resultado) ) {
          ?>
            <tr>
              <td><?php echo  $dado['ProdutoID']?></td>
              <td><?php echo $dado['Nome']?></td>
              <td><?php echo $dado['Categoria']?></td>
              <td><?php echo 'R$ '. $dado['Preco']?></td>
              <td>
                <a href="#" class="btn btn-edit">Editar</a>
                <a href="#" class="btn btn-delete">Excluir</a>
              </td>
            </tr>
          <?php
          }
          ?>

        </tbody>
      </table>
    </div>

<?php 
  // include dos arquivox
  include_once './include/footer.php';
  ?>