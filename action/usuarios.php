<?php
// include dos arquivos
include_once   '../include/logado.php';
include_once   '../include/conexao.php';

// captura a acao dos dados
$acao = $_GET['acao'];

// validacao
switch ($acao) {
    case 'value':
        // capturar os dado
        // montar o sql dinamico 
        // executar o sql mysqli_query
        // redirecionar para pagina de listagem
        break;
    
    default:
        # code...
        break;
}
?>