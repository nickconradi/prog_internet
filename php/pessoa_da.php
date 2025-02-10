// Função para editar um usuário
function editar_usuario($id, $nome, $email) {
    $db = conectDb();
    $sql = "UPDATE usuario SET nome = ?, email = ? WHERE idusuario = ?";
    $stmt = $db->prepare($sql);
    
    // Bind dos parâmetros
    $stmt->bindValue(1, $nome, PDO::PARAM_STR);
    $stmt->bindValue(2, $email, PDO::PARAM_STR);
    $stmt->bindValue(3, $id, PDO::PARAM_INT);
    
    try {
        $stmt->execute();
        echo "Usuário editado com sucesso!";
    } catch (PDOException $e) {
        echo "Erro ao editar usuário: " . $e->getMessage();
    }
    
    $db = null;
}
