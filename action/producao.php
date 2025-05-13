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
        // montar o sql dinamico 
        // executar o sql mysqli_query
        // redirecionar para pagina de listagemn
        
        header("Locate: ../lista-producao.php")
        exit();
        break;
    
    default:
        # code...
        break;
}
?>