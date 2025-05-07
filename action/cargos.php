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
    
    default:
        # code...
        break;
}
?> 