<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Pessoas</title>
</head>
<body>

    <?php
        include_once("database.php");
        include_once("pessoa_da.php");
        $lista_pessoa = recupera_lista_usuarios();
        // array[0]{i:1, nome:"Nicole", email:"nicole@gmail.com"}
        var_dump($lista_pessoa);
    ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
        </tr>
        <?php // Usando o foreach para simplificar o loop
        foreach ($lista_pessoa as $pessoa) {
        ?>
        <tr>
            <td><a href="editar.php?pessoa_id=<?php echo $pessoa['id']; ?>"><?php echo $pessoa['id']; ?></a></td>
            <td><?php echo $pessoa['nome']; ?></td>
            <td><?php echo $pessoa['email']; ?></td>
        </tr>
        <?php } ?>
    </table>
    
</body>
</html>
