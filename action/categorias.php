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
        $Descricao = $_POST['Descricao'];

        // montar o sql dinamico
        $sql = "INSERT INTO categorias (Nome, Descricao) VALUES (?, ?);";

        // executar o sql mysqli_query
        $stmt = $conn->prepare($sql);

        $stmt->bind_param("ss", $Nome, $Descricao);
        $stmt->execute();
        $stmt->close();

        // redirecionar para pagina de listagemn
        header('Location: ../lista-categorias.php');
        exit();
        
        break;
    
    default:
        # code...
        break;
}
?>