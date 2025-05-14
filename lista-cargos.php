<?php 
// include dos arquivos
include_once './include/logado.php';
include_once './include/conexao.php';
include_once './include/header.php';
$sql = 'SELECT * FROM cargos';
$resultado = mysqli_query($conn, $sql);

?>
  <main>

    <div class="container">
        <h1>Lista de Cargos</h1>
        <a href="./salvar-cargos.php" class="btn btn-add">Incluir</a>
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Teto Salárial</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            <?php
            while($dado = mysqli_fetch_assoc($resultado)){
            ?>
              <tr>
                <td><?php echo $dado['CargoID']?></td>
                <td><?php echo $dado['Nome']?></td>
                <td><?php echo 'R$ '.$dado['TetoSalarial']?></td>
                <td>
                  <a href="./salvar-cargos.php?id=<?php echo $dado['CargoID']?>" class="btn btn-edit">Editar</a>
                  <a href="./action/cargos.php?acao=excluir&id=<?php echo $dado['CargoID']?>" class="btn btn-delete">Excluir</a>
                </td>
              </tr>
            <?php
              }
            ?>
            
          </tbody>
        </table>
      </div> 
  </main>
  
  <?php 
  // include dos arquivox
  include_once './include/footer.php';
  ?>