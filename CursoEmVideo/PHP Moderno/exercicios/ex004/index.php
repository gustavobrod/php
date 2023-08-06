<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
       $numA = 300;
       echo "O valor da variável é $numA" . "<br/>";

       $numB = 0x1A;
       echo "O valor da variável é $numB" . "<br/>";

       $numC = 0b1011;
       echo "O valor da variável é $numC" . "<br/>";

       //0x = Hexadecimal / 0b = Binário / 0 = Octal 
       $numD = 010;
       echo "O valor da variável é $numD" . "<br/>";

       $numE = 3e2; //3 x 10^2
       echo "O valor da variável é $numE" . "<br/>";

       $numF = (int) 3e2; //3 x 10^2 -> coerção 
       echo "O valor da variável é $numF" . "<br/>";

       $casado = true; //Quando valor é false, não exibe resultado na tela, false = vazio
       echo "O valor para casado é $casado" . "<br/>";

       //Vetor array
       $vet = [6, 2.0, "Maria", 6, true];

       class Pessoa {
        private string $nome;
       }

       $p = new Pessoa;

        

       //var_dump exibe o tipo primitivo 
       var_dump($numA, $numB, $numC, $numD, $numE, $numF . "<br/>");
       var_dump($vet, $p);
    
    ?>
</body>
</html>