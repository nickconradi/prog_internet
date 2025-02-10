<?php
include_once("database.php");

function insere_usuarios($nome, $email)
{
    $db = conectDb();
    $sql = "INSERT INTO usuario (nome, email) VALUES (?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(1, $nome, PDO::PARAM_STR);
    $stmt->bindValue(2, $email, PDO::PARAM_STR);

    try{
        $stmt->execute();
        echo "Usuáios inserido com sucesso!";
    } catch (PODException $e){
        echo "Erro ao inserir usuário: " . $e->getMessage();
    }

    $db = null;
}

/* função retorna */
function recupera_lista_usuarios(){
    $db = conectDb();
    $sql = "SELECT * FROM usuario  ";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return($resultado);
}
function getUsuario($id){
    $database=conectDb();
    $sql="select * from usuario where idusuario=?";
    $stmt= $database->prepare($sql);
    $stmt->bindValue(1,$id);
    $stmt->execute();
    $resultado= $stmt->fetchALL(PDO::FETCH_ASSOC);
return($resultado);}


?>