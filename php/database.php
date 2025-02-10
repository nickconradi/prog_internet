<?php
/* Função que conecta com o banco de dados e retorna a conexão com o banco ou false */

function conectDb() {
    $user = "root";
    $pass = "aluno";
    $database = "crud";
    $host = "localhost";

    try {
        $db = new PDO("mysql:host=$host;dbname=$database", $user, $pass);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    } catch (PDOException $e) {
        echo "Erro ao conectar ao banco: " . $e->getMessage();
        return false;
    }
}

function check_conn($conn_id): void {
    if ($conn_id) {
        echo "Conexão concluída";
    } else {
        echo "Erro ao conectar";
    }
}
?>
