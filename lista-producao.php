<?php 
// include dos arquivox
include_once './include/logado.php';
include_once './include/conexao.php';
include_once './include/header.php';

$sql 'SELECT pt.ProdutoID as ProdutoID, pt.Nome as NomePT, '
?>
  <main>

    <div class="container">
        <h1>Lista de Produções</h1>
        <a href="./salvar-producao.php" class="btn btn-add">Incluir</a> 
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Produto</th>
              <th>Quantidade</th>
              <th>Data</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            <?php?>
              <tr>
                <td><?php?></td>
                <td><?php?></td>
                <td><?php?></td>
                <td><?php?></td>
                <td>
                  <a href="#" class="btn btn-edit">Editar</a>
                  <a href="#" class="btn btn-delete">Excluir</a>
                </td>
              </tr>
            <?php?>
            
          </tbody>
        </table>
      </div>


   
  </main>

  <?php 
  // include dos arquivox
  include_once './include/footer.php';
  ?>