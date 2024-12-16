<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items:center;
            min-height: 100lvh;
        }
        fieldset{
            display: flex;
            flex-direction: column;
        
        }
    </style>
</head>
<body>

    <fieldset>
        <legend>login</legend>
        <?php
        if (isset($_GET["erro"]) && $_GET["erro"]==1){
            ?>
            <h2>usuario não logado </h2>
            <?php
            }
            ?>
        <form action="autenticacao.php" method="post" >

        <label fot="login">login</label>
        <input type="text" id="login" name="login">

        <label for="senha">senha</label>
        <input type="password" id="senha" name="senha">

        <input type="submit" value="Entrar">

     </form>
    </fieldset>
    
</body>
</html>