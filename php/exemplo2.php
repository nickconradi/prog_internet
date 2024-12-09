<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    somar dois números e imprimir
    o resultado em um paragrafo;
    <form action="" method="get">
        <label for="inputa">A</label>
        <input id="inputa" name="a" type="number">

        <label for="inputa">B</label>
        <input id="inputa" name="b" type="number">

        <input type="submit" value="Soma">
    </form>
    <?php
    
   if (!isset($_REQUEST["a"]) || !isset($_REQUEST["b"])){
        die();
        echo "<script>
                alert('informe a e b');
                </script>
        ";
        die();
   }
    $a=$_REQUEST["a"];
    $b=$_REQUEST["b"];
    echo "<p> Soma=" .$a+$b."</p>";
    ?>
    <p> SOMA: <?php echo$a+$b ?></p>
</body>
</html>