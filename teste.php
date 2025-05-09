<?php

include_once  '../include/logado.php';
include_once  '../include/conexao.php';


$acao = $_REQUEST['acao'];

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

    echo $Nome.', '. $DataNascimento.', '. $Email.', '. $Ramal.', '. $Salario.', '. $Sexo.', '. $CPF.', '. $RG.', '. $Cargo.', '. $Setor


?>