<?php 
// include dos arquivox
include_once './include/logado.php';
include_once './include/conexao.php';
include_once './include/header.php';
?>
  <main>

    <div id="categorias" class="tela">
        <form class="crud-form" method="post" action="./action/categorias.php">
          <h2>Cadastro de Categorias</h2>
          <input type="hidden" name="acao" value="salvar">
          <input type="text" name="Nome" placeholder="Nome da Categoria" required>
          <textarea placeholder="Descrição" name="Descricao" required></textarea>
          <button type="submit">Salvar</button>
        </form>
      </div>


   
  </main>

  <?php 
  // include dos arquivox
  include_once './include/footer.php';
  ?>
