<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
    <h1>Manipulação de strings com PHP</h1>
    <?php 
        // echo "PHP \u{1F418}"; // mostra um emoji de elefante
        // $nome = "Susana";
        // echo "Olá $nome!";
        // echo 'Olá $nome!';

        // const ESTADO = "RJ";
        // echo "Moro no " . ESTADO;

        // const CANAL = "Curso em Vídeo \u{1F499}";
        // echo "Eu adoro o " . CANAL;

        // echo "Estamos no ano " . date('Y');

        // $nome = "Rodrigo";
        // $sobrenome = "Nogueira";
        // $apelido = "Minotauro";
        // echo "$nome \t \"$apelido\" \t $sobrenome";

        // Sintaxe HEREDOC
        // $curso = "PHP";
        // $ano = date('Y');
        // echo <<< FRASE
        //     Estou estudando 
        //         $curso em $ano
        // FRASE;

        $canal = "Curso em Vídeo";
        $ano = date('y');
        echo <<< TESTE
            Olá galera do $canal!
                Tudo bem com vocês?
               Como está sendo esse ano de $ano? 
            Abraços! \u{1F596}   
        TESTE;

        // Sintaxe NOWDOC
        // $canal = "Curso em Vídeo";
        // $ano = date('y');
        // echo <<< 'TESTE'
        //     Olá galera do $canal!
        //         Tudo bem com vocês?
        //        Como está sendo esse ano de $ano? 
        //     Abraços! \u{1F596}   
        // TESTE;
    ?>
    
</body>
</html>