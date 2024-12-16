<?php
session_start();


if(!isset($_POST["login"]) || !isset($_POST["senha"])){
    //USUARIO NÃO INfORMOU LOGIN E SENHA
    header("Location:login.html");
    exit;

}
// chama função que verifica usuarios no bd

if ($_POST["login"]!="admin" || $_POST["senha"]!="12345"){

    header("Location:login.html?erro=2"); //passando um parametro
    exit;
}
$_SESSION["login"]="login";
header("Location:main.php");
exit;