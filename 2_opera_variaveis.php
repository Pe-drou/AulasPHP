<?php
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];

if(isset($numero1) && isset($numero2)){
    $numero1 = (int)$numero1;
    $numero2 = (int)$numero2;

    $soma = $numero1 + $numero2;
    $subtracao = $numero1 - $numero2;
    $multiplicacao = $numero1 * $numero2;
    $divisao = $numero1 / $numero2;

    echo "soma: $soma <br>";
    echo "subtração: $subtracao <br>";
    echo "multiplicação: $multiplicacao <br>";
    echo "divisão: $divisao";
} else {
    echo "ATENÇÃO! Por favor, forneça os valores de numero1 e numero2";
}
?>