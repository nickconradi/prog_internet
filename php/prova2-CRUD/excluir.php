<?php
include_once "PessoaController.php";

//verificao usuário 
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    //cria instancia pra classe
    $pessoaController = new PessoaController();

    //exclui pessoa que o id foi selecionado, se pessoa for rexcluida volta ao index
    if ($pessoaController->excluirPessoa($id)) {
        header("Location: index.php");
    } else {
        echo "Erro ao excluir usuário.";
        echo "<br><a href='index.php'>Voltar</a>";
    }
}
?>
