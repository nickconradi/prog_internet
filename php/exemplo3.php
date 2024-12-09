
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="nome">Nome</label>
        <input id="nome" name="nome">

        <label for="sobrenome">Sobrenome</label>
        <input id="sobrenome" name="sobrenome">

        <input type="submit" value="concatena">
    </form>
    <?php

   if (isset($_GET['nome']) && isset($_GET['sobrenome'])) {
        echo $_GET["nome"].$_GET["sobrenome"];
    }
?>
</body>
</html>