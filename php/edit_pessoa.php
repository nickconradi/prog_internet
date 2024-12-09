<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once("database.php");
    include_once("pessoa_da.php");
    if(isset($_GET["pessoa_id"])){
        $id=$_GET["pessoa_id"];
        $pessoa=getUsuario($id);
    }
    else {
        exit();
    }
    ?>
    <h2>Edição Pessoa</h2>
    <fieldset>
        <legend>Edição de pessoa</legend>
        <form action="pessoaControle.php" method="post">
        <label for="nome"> Nome </label>
        <input type="text" name="nome" id="nome"  value="<?php echo  $pessoa[nome] ?>">
        <label for="email"> Email </label>
        <input type="email"  name="email"id="email">
        <input type="text" name="acao" value="editar" hidden>
        <input type="submit" value="Adicionar">
        </form>
    </fieldset>

</body>
</html>