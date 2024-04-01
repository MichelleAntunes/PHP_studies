<?php

$x = 0;

while($x < 10){

echo $x . "<br>";

$x++;

}

$y = 0;

while($y < 10){
echo " O y é $y <br>";
    if ( $y === 5){
echo "Terminando o loop <br>";
break;
    }
$y++;
}

$test = 4;

while($test <=30){
echo " O número de test é $test <br>";
    if ( $test === 24){
echo "Terminando o loop em 24 <br>";
break; // para de executar quando encontra a condição
    }
$test+=2;
}

$test_2 = 10;

while($test_2 > 0){
if ($test_2 == 5 || $test_2 == 7){
    echo "Pulou a execução $test_2 <br>";
    $test_2 --;
    continue; // não para de executar quando encontra a condição
}
echo "Executou o loop $test_2 <br>";
$test_2--;
}
echo "<br>";

$test_3 = 10;
while($test_3 > 0){
if ($test_3 == 30 || $test_3 == 40){
    echo "Pulou a execução $test_3 <br>";
    $test_3 += 10;
    continue; // não para de executar quando encontra a condição
}
if ($test_3 == 100){
    echo "Parou a execução $test_3 <br>";
        
    break;
}
    echo "Executou o loop $test_3 <br>";
    $test_3+=10;
}
    echo "<br>";

    
$arr = [10, 20,30,40,50,60,70,80,90,100];
$i = 0;     
while ($i < count($arr)){
     
    if ($arr[$i] == 30 || $arr[$i] == 40){
    echo "Pulou a execução $arr[$i] <br>";
    $i ++;
    continue; // não para de executar quando encontra a condição
}
       
    echo "elememento: $arr[$i] <br>";
    $i++;
}
    echo "<br>";

$j = 0;
    do {
        echo "Fazendo do equanto j é menor que 10. J = $j <br>";
$j ++;
    } while ($j < 10);
// contador, condição, incremento
echo "<br>";

    for ($var = 0; $var < 10 ; $var ++){
echo "Testando for $var <br>";
    }

    echo "<br>";

$array = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

for ( $count = 0; $count < count($array); $count++){
if ($array[$count] % 2 == 0){
    echo "Exercicio 30, apenas números pares. $array[$count] <br>";
}
    
}
$ex = [];
for ( $h = 1; $h <=10; $h ++ ){
array_push($ex, $h);
};
print_r($ex);
echo "<br>";

$nomes = ["Michelle", "Bruno","Andreia"];
foreach ($nomes as $nome){  
    echo "O nome no indice atual é $nome <br>";
 };