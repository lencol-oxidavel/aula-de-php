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
        $Funcionarios = $_POST['Funcionarios'];
        $Produtos = $_POST['Produtos'];
        $DataProducao = date("Y/m/d");
        $DataEntrega = $_POST['DataEntrega'];
        $Quantidade = $_POST['Quantidade'];
        // montar o sql dinamico
        $sql = "INSERT INTO producao (FuncionarioID, ProdutoID, DataProducao, DataEntrega) VALUES (?, ?, ?, ?)";
        // executar o sql mysqli_query
        $stmt = $conn->prepare($sql);
        // redirecionar para pagina de listagem
        for ($x = 0; $x < $Quantidade; $x++) {
        $stmt->bind_param('iiss', $Funcionarios, $Produtos, $DataProducao, $DataEntrega);
        $stmt->execute();
        }
        $stmt->close();
        
        header("Location: ../lista-producao.php");
        exit();
        break;
    
    default:
        # code...
        break;
}
?>