<?php

if( 5 < 2) {
    echo "5 é menor que dois";
} else {
    echo "5 é maior que dois  <br>";
}

if( 5 < 2) {
    if(10>2){
        echo "5 é menor que dois e 10 é maior que 2 <br>";
    }
} else {
    echo "5 é maior que dois <br>";
}
if( 1 < 2) {
    if(10>2){
        echo "1 é menor que dois e 10 é maior que 2 <br>";
    }
} else {
    echo "5 é maior que dois <br>";
}

if(( 1 < 2) && (10>2)) {
    echo "1 é menor que dois e 10 é maior que 2 <br>";
} else {
    echo "5 é maior que dois <br>";
}
if (10<5) {
    echo "10 é menor que 5 <br>";
} else if( 10>5 ){
    echo "10 é maior que 5 <br>";
}

$t = 6;
switch ($t) {
    case 0: 
        echo "X é igual a 0";
        break;
    case 1: 
         echo "X é igual a 1";
        break;
    case 2: 
        echo "X é igual a 2";
        break;
    case 3: 
         echo "X é igual a 3";
            break;
    case 4: 
        echo "X é igual a 4";
     break;
    case 5: 
        echo "X é igual a 5";
        break;    
        default:
        echo "X não é igual a 0,1,2,3, 4 ou 5";
}
echo "<br>";
function compararNumeros ($a,$b){
    if ($a === $b) {
    echo  "Os números são iguais.";
    } else if ( $a < $b) {
        echo "O segundo número é maior.";
    } else if ($a > $b) {
       echo "O primeiro número é maior.";
    }
}
compararNumeros(10,2);
echo "<br>";
function verificarAcesso ($a,$b){
    if ($a >= 18) {
    echo  "Acesso autorizado";
    } else if ( $a < 18) {
        echo "Acesso negado. Idade mínima requerida: 18 anos";
    } else if ($a >= 18 && !$b) {
       echo "Acesso negado. Autorização necessária";
    }
}
verificarAcesso(18,false);