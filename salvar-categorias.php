<?php 
// include dos arquivos
include_once './include/logado.php';
include_once './include/conexao.php';
include_once './include/header.php';

$dado = null;
if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    $sql = "SELECT * FROM categorias WHERE CategoriaID = $id";
    $resultado = mysqli_query($conn, $sql);
    if ($resultado && mysqli_num_rows($resultado) > 0) {
        $dado = mysqli_fetch_assoc($resultado);
    }
}
?>
  <main>

    <div id="categorias" class="tela">
        <form class="crud-form" method="post" action="./action/categorias.php">
          <h2><?php echo $dado ? 'Editar Categoria' : 'Cadastrar Categorias'?></h2>
          <input type="hidden" name="acao" value="<?php echo $dado ? 'editar' : 'salvar'?>">
          <?php if ($dado): ?>
            <input type="hidden" name="CategoriaID" value="<?php echo $dado['CategoriaID']; ?>">
          <?php endif; ?>
          <input type="text" name="Nome" placeholder="Nome da Categoria" value="<?php echo $dado ? $dado['Nome'] : ''?>" required>
          <textarea placeholder="Descrição" name="Descricao" required><?php echo $dado ? $dado['Descricao'] : ''?></textarea>
          <button type="submit">Salvar</button>
        </form>
      </div>


   
  </main>

  <?php 
  // include dos arquivos
  include_once './include/footer.php';
  ?>
