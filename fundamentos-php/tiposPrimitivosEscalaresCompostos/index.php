<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
    <h1>Tipos primitivos do PHP</h1>
    <?php 
    // 0x = hexadecimal, 0b =  binário e 0 = octal
        // $num  = 0x1A; // 26 --> 0x = hexadecimal
        // $num  = 0b1011; // 11 --> 0b =  binário
        // $num  = 010; // 8 --> 0 = octal
        // echo "O valor da variável é $num";

        // $variavel = 300;
        // var_dump($variavel); // para testar o tipo primitivo, saber qual tipo é a variavel.

        // $num = 3e2; // 3 x 10(2)
        // echo "O valor é $num";

        // $num = (int) 5e3; // "(int)" ou "(integer)" faz a coerção
        // var_dump($num);

        // $num = "950";
        // var_dump($num);
        // $num = (int) "950";
        // var_dump($num);
        // $num = (float) "950";
        // var_dump($num);

        // $sobrenome = "Silva";
        // $idade = 34;
        // $peso = 85.9;
        // $casado = true;
        // echo "Meu sobrenome é $sobrenome tenho $idade anos, com o peso $peso e sou casado $casado";   

        // ARRAY - Tipo Composto
        // $vetor = [6, 2, 9, 3, 5];
        // var_dump($vetor);

        // $vetor = [6, 2.5, "Maria", 3, false];
        // var_dump($vetor);

        // Objeto - Tipo Composto
        class Pessoa {
            private string $nome;
        }
        $pessoa = new Pessoa;
        var_dump($pessoa);
    ?>
    
</body>
</html>