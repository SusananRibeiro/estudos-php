<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php 
        date_default_timezone_set("America/Sao_Paulo"); // GMT-03, configurar a área padrão da data, mudar a time zone para o da máquina.
        echo "Hoje é dia " . date("d/M/Y"); //"D" maiúsculo é o dia da semana, "d" minúsculo é o dia do mês
        echo " e a hora atual é " . date("G:i:s T"); // "G" é a hora, "i" é o minuto e "s" é o segundo
    ?>
    
</body>
</html>