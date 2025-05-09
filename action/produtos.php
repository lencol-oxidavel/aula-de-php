<?php
// include dos arquivos
include_once   '../include/logado.php';
include_once   '../include/conexao.php';

// captura a acao dos dados
$acao = $_REQUEST['acao'];

// validacao
switch ($acao) {
    case 'salvar':
        // capturar os dado
        $Nome = $_POST['Nome'];
        $Preco = $_POST['Preco'];
        $Peso = ['Peso'];
        $Descricao = ['Descricao'];
        $Categoria = ['Categoria'];
        $Referencia = ['Referencia'];

        // montar o sql dinamico 
        $sql = "INSERT INTO produtos (Nome, Preco, Peso, Descricao, CategoriaID, Referencia) VALUES (?, ?, ?, ?, ?, ?);";

        // executar o sql mysqli_query
        $stmt = $conn->prepare($sql);

        // redirecionar para pagina de listagemn
        break;
    
    default:
        # code...
        break;
}
?>