
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-widht, initial-s">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php
        include_once("database.php");
        include_once("pessoa_da.php");
        $lista_pessoa=recupera_lista_usuarios();
        //array[0]{i:1, nome:"Nicole", email:"nicole@gmail.com"}
        var_dump($lista_pessoa);
        ?>
    <table>
        <tr>
            <th>ID</th>
            <th>nome</th>
            <th>email</th>
        </tr>
        <?php //sem foreach
        for($i=0; $i<count($lista_pessoa); $i++){
            ?>
        <tr>
            <td><a href="editar.php?idusuario=<?php echo $lista_pessoa["id"]?>">
            <?php echo $lista_pessoa["id"]?>
            </a>

         </td>
        <td><?php echo $lista_pessoa[$i]["nome"]?></td>
        <td><?php echo $lista_pessoa[$i]["email"]?></td> 
        </tr>
        <?php}?>

    </table>
    
    </pre>
</body>
</html>

