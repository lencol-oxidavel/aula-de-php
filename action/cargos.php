<?php
// include dos arquivos
include_once '../include/logado.php';
include_once '../include/conexao.php';

// captura a acao dos dados
$acao = $_REQUEST['acao'];

// validacao
switch ($acao) {
    case 'salvar':
        // capturar os dado
        $Nome = $_POST['Nome'];
        $TetoSalarial = $_POST['TetoSalarial'];

        // montar o sql dinamico 
        $sql = "INSERT INTO cargos (Nome, TetoSalarial) VALUES (?, ?);";
            
        // executar o sql mysqli_query
        $stmt = $conn->prepare($sql);

        // sd = String e Double, que são os tipos respectivos de $Nome e $TetoSalarial
        $stmt->bind_param('sd', $Nome, $TetoSalarial);
        $stmt->execute();
        $stmt->close();

        // redirecionar para pagina de listagemn
        header('Location: ../lista-cargos.php');
        exit();
    break;
    case 'editar':
        // capturar os dado
        $Nome = $_POST['Nome'];
        $TetoSalarial = $_POST['TetoSalarial'];
        $CargoID = $_POST['CargoID'];
        // montar o sql dinamico 
        $sql = "UPDATE cargos
        SET Nome = ?, TetoSalarial = ?
        WHERE CargoID = ?;";

        // executar o sql mysqli_query
        $stmt = $conn->prepare($sql);

        $stmt->bind_param('sdi', $Nome, $TetoSalarial, $CargoID);
        $stmt->execute();
        $stmt->close();

        // redirecionar para pagina de listagem
        header('Location: ../lista-cargos.php');
        exit();
    break;
    
    case 'excluir':
        // capturar os dado
        $CargoID = $_GET['id'];

        // montar o sql dinamico 
        $sql = "DELETE FROM cargos
        WHERE CargoID = ?";

        // executar o sql mysqli_query
        $stmt = $conn->prepare($sql);

        $stmt->bind_param('i', $CargoID);
        $stmt->execute();
        $stmt->close();
        // redirecionar para pagina de listagem
        header('Location: ../lista-cargos.php');
        exit();
    break;  
    default:
        # code...
        break;
}
?> 