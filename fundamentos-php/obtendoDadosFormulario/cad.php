<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resulatdo do processamento</h1>
    </header>
    <main>
        <?php 
            var_dump($_GET); // "$_GET" é um array super global, já vem no PHP, não é preciso declarar.
            // var_dump($_POST); // "$_POST" é um array super global, já vem no PHP, não é preciso declarar.
            // var_dump($_REQUEST); // "$_REQUEST" é um array super global, já vem no PHP, não é preciso declarar. Vai funcionar tanto usando o método do HTML GET, como no POST. É uma junção do $_GET, $_POST e $_COOKIES

            $nome = $_GET["nome"]; // ""nome"" é o nome do elemento do HTML
 
        ?>
    </main>
</body>
</html>