<?php
// include dos arquivos
include_once  '../include/logado.php';
include_once  '../include/conexao.php';

// captura a acao dos dados
$acao = $_REQUEST['acao'];

// validacao
switch ($acao) {
    case 'salvar':
        // capturar os dados
        $Nome = $_POST['Nome'];
        $DataNascimento = $_POST['DataNascimento'];
        $Email = $_POST['Email'];
        $Ramal = $_POST['Ramal'];
        $Salario = $_POST['Salario'];
        $Sexo = $_POST['Sexo'];
        $CPF = $_POST['CPF'];
        $RG = $_POST['RG'];
        $Cargo = $_POST['Cargo'];
        $Setor = $_POST['Setor'];

        // montar o sql dinamico
        $sql = "INSERT INTO funcionarios (Nome, DataNascimento, Email, Ramal, Salario, Sexo, CPF, RG, CargoID, SetorID) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";

        // executar o sql mysqli_query
        $stmt = $conn->prepare($sql);

        # bind parametros
        $stmt->bind_param("sssidsiiii", $Nome, $DataNascimento, $Email, $Ramal, $Salario, $Sexo, $CPF, $RG, $Cargo, $Setor);
        $stmt->execute();
        $stmt->close();

        // redirecionar para pagina de listagemn
        header('Location: ../lista-funcionarios.php');
        exit();
    break;
    case 'editar':
        // capturar os dados
        $FuncionarioID = $_POST['FuncionarioID'];
        $Nome = $_POST['Nome'];
        $DataNascimento = $_POST['DataNascimento'];
        $Email = $_POST['Email'];
        $Ramal = $_POST['Ramal'];
        $Salario = $_POST['Salario'];
        $Sexo = $_POST['Sexo'];
        $CPF = $_POST['CPF'];
        $RG = $_POST['RG'];
        $Cargo = $_POST['Cargo'];
        $Setor = $_POST['Setor'];

        // montar o sql dinamico
        $sql = "UPDATE funcionarios
        SET Nome = ?, DataNascimento = ?, Email = ?, Ramal = ?, Salario = ?, Sexo = ?, CPF = ?, RG = ?, CargoID = ?, SetorID = ?
        WHERE FuncionarioID = ?";

        // executar o sql mysqli_query
        $stmt = $conn->prepare($sql);

        # bind parametros
        $stmt->bind_param("sssidsiiiii", $Nome, $DataNascimento, $Email, $Ramal, $Salario, $Sexo, $CPF, $RG, $Cargo, $Setor, $FuncionarioID);
        $stmt->execute();
        $stmt->close();

        // redirecionar para pagina de listagemn
        header('Location: ../lista-funcionarios.php');
        exit();
    break;
    case 'excluir':
        // capturar os dados
        $FuncionarioID = $_GET['id'];

        // montar o sql dinamico
        $sql = "DELETE FROM funcionarios 
        WHERE FuncionarioID = ?";

        // executar o sql mysqli_query
        $stmt = $conn->prepare($sql);

        # bind parametros
        $stmt->bind_param("i", $FuncionarioID);
        $stmt->execute();
        $stmt->close();

        // redirecionar para pagina de listagemn
        header('Location: ../lista-funcionarios.php');
        exit();
    break;

    default:
        # code...
        break;
}
?>

