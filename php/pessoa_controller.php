<?php
include_once("database.php");
include_once("pessoa_da.php");

if(isset($_POST["acao"]) && $_POST["acao"] == "cadastrar");
    if(isset($_POST["nome"]) && isset($_POST["email"])){
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    insere_usuarios($nome,$email);
    header("Location:listar.php");
} else{
    echo "Erro";
    
}

?>