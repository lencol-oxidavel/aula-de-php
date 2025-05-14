<?php 
// include dos arquivos
include_once './include/logado.php';
include_once './include/conexao.php';
include_once './include/header.php';
?>
  
  <main>

    <div id="setores" class="tela">
        <form class="crud-form" action="./action/setores.php" method="post">
          <h2>Cadastro de Setores</h2>
          <input type="hidden" name="acao" value="salvar" >
          <input type="text" name="Setor" placeholder="Nome do Setor" required>
          <input type="text" name="Andar" placeholder="Andar" required>
          <input type="text" name="Cor" placeholder="Cor" required>
          <button type="submit">Salvar</button>
        </form>
      </div>
   
  </main>

  <?php 
  // include dos arquivos
  include_once './include/footer.php';
  ?>