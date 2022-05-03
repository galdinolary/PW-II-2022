<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Atividade - Function (Laryssa Carvalho, 3°IPIIEM)</h2>
</body>
</html>

<?php

//Valores
$arg1 = 50;
$arg2 = 10;

//SOMA
function Soma($arg1, $arg2){
    $resultado  = $arg1 + $arg2;

    return $resultado;
}
$A =  Soma(70, 50);
echo "O resultado da Soma: 70 + 50 = $A";

echo "<br>";

//SUBTRAÇÃO
function Subtração($arg1, $arg2){
    $resultado  = $arg1-$arg2;
    
    return $resultado;
}
$B =  Subtração(70, 50);
echo "O resultado da Subtração: 70 - 50 = $B";

echo "<br>";

//DIVISÃO
function Divisão($arg1, $arg2){
    $resultado  = $arg1/$arg2;
    
    return $resultado;
}
$C =  Divisão(70, 50);
echo "O resultado da Divisão: 70 / 50 = $C";

echo "<br>";

//MULTIPLICAÇÃO
function Multiplicação($arg1, $arg2){
    $resultado  = $arg1*$arg2;
    
    return $resultado;
}
$D =  Multiplicação(70, 50);
echo "O resultado da Multiplicação: 70 x 50 = $D";

echo "<br>";


?>