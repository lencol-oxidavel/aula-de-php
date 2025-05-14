<?php 
// include dos arquivos
include_once './include/logado.php';
include_once './include/conexao.php';
include_once './include/header.php';

$dado = null;
if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    $sql = "SELECT * FROM cargos WHERE CargoID = $id";
    $resultado = mysqli_query($conn, $sql);
    if ($resultado && mysqli_num_rows($resultado) > 0) {
        $dado = mysqli_fetch_assoc($resultado);
    }
}
 
?>
  <main>

  

       <!-- Telas CRUD -->
   <div id="cargos" class="tela">
    <form class="crud-form" action="./action/cargos.php" method="post">
      <h2><?php echo $dado ? 'Editar Cargo' : 'Cadastro de Cargos'; ?></h2>
      <input type="hidden" name="acao" value="<?php echo $dado ? 'editar' : 'salvar'?>">
      <?php if ($dado): ?>
        <input type="hidden" name="CargoID" value="<?php echo $dado['CargoID']; ?>">
      <?php endif; ?>
      <input type="text" name="Nome" placeholder="Nome do Cargo" value="<?php echo $dado ? $dado['Nome'] : ''?>" required>
      <input type="number" name="TetoSalarial" placeholder="Teto Salarial" value="<?php echo $dado ? $dado['TetoSalarial'] : ''?>" required>
      <button type="submit">Salvar</button>
    </form>
  </div>



   
  </main>

  <?php 
  // include dos arquivos
  include_once './include/footer.php';
  ?>
