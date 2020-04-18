<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 01 - PHP</title>
</head>
<body>
    <?php
        // para criar uma variavel np PHP basta utilizar $ e o nome da vriavel que deseja em seguida
        $titulo = "Primeira Aula de PHP";
    ?>

    <h1>
        <?php
            echo $titulo
        ?>
    </h1>

    <hr>

    <h1> Condicionais </h1>

    <p> IF / ELSE </p>
    <p> Crie uma condição que valide se uma pessoa pode votar ou não</p>

    <?php
        function podeVotar($idadeEleitor){
            if ($idadeEleitor >= 16 && $idadeEleitor < 18 || $idadeEleitor > 70) {
                echo "Voto Facultativo";
            } else if ($idadeEleitor >= 18 && $idadeEleitor <= 70){
                echo "Voto Obrigatório"
            } else {
                echo "Não vota";
            }
        }
    ?>

    R: Foi criado no código a função podeVotar e foi informado como parametro o valor 17, como retorno da função tivemos: <br> <?php echo podeVotar(17) ?>

<hr>

<p> SWITCH CASE </p>

<p>Valide se um numero é 0 e retorne que é igual a 0, se é 1 e retorne que é igual a 1, ou se é 2 e retorne que é igual a 2. Caso contratio retorne que o numero é maior que 2. Utilizando switch case </p>
<?php
    $i = 1;

    switch ($i) {
        case 0:
            echo "i igual 0";
            break;
        case 1:
            echo "i igual 1";
            break;
        case 2:
            echo "i igual 2";
            break;
        default:
            echo "qualquer numero maior que 2";
            break;
    }  
    ?>

    
</body>
</html>