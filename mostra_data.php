<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="windth=device-width, intinial-scale=1.0">
    <title>Dados do Servidor</title>
</head>
<body>
    <h1>Mostra data e a hora</h1>
    <?php 
        date_default_timezone_set("America/Sao_Paulo");
        echo "Hoje é dia ". date("d/M/Y");
        echo "e a hora atual é " . date("G:i:s");
    ?>
</body>
</html>