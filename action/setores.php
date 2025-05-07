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
            $Setor = $_POST['Setor'];
            $Andar = $_POST['Andar'];
            $Cor = $_POST['Cor'];

            // montar o sql dinamico
            $sql = "INSERT INTO setor (Nome, Andar, Cor) VALUES (?, ?, ?);";

            // executar o sql mysqli_query
            $stmt = $conn->prepare($sql);

            $stmt->bind_param('sss', $Setor, $Andar, $Cor);
            $stmt->execute();
            $stmt->close();

            // redirecionar para pagina de listagemn
            header('Location: ../lista-setores.php');
            exit();
        break;
    
    default:
        # code...
        break;
}
?>