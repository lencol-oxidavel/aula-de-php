<?php

include_once  '../include/logado.php';
include_once  '../include/conexao.php';


$acao = $_REQUEST['acao'];

    // teste para produtos
    $Nome = $_POST['Nome'];
    $Preco = $_POST['Preco'];
    $Peso = ['Peso'];
    $Descricao = ['Descricao'];
    $Categoria = ['Categoria'];
    $Referencia = ['Referencia'];

    echo $Nome.', '.$Preco.', '.$Peso.', '.$Descricao.', '.$NCategoria.', '.$Referencia.', '.


    // teste para funcionarios
    // $Nome = $_POST['Nome'];
    // $DataNascimento = $_POST['DataNascimento'];
    // $Email = $_POST['Email'];
    // $Ramal = $_POST['Ramal'];
    // $Salario = $_POST['Salario'];
    // $Sexo = $_POST['Sexo'];
    // $CPF = $_POST['CPF'];
    // $RG = $_POST['RG'];
    // $Cargo = $_POST['Cargo'];
    // $Setor = $_POST['Setor'];

    // echo $Nome.', '. $DataNascimento.', '. $Email.', '. $Ramal.', '. $Salario.', '. $Sexo.', '. $CPF.', '. $RG.', '. $Cargo.', '. $Setor


?>