<?php

$test = "name";
echo $test;
echo "<br>";

$$test = "Michelle";
echo $name;
echo "<br>";

$x = 10; 
$y = & $x; // ambas possuem o mesmo valor
echo "$x global";
echo "<br>";
echo $y;

function test() {
    $x = 5;
    echo "$x local ";
    
}
echo "<br>";
test();
echo "<br>";


function testingGlobal(){
    global $x; //acesando valores globais no escopo local
    echo "$x global function";
}
testingGlobal();
echo "<br>";

function testingWithoutStatic() {
    $a = 0; // nao altera valor de a
    $a++;
    echo"$a <br>";
}

testingWithoutStatic();
testingWithoutStatic();
testingWithoutStatic();

function testingStatic() {
   static $a = 0; // altera valor de a
    $a++;
    echo"$a <br>";
}
testingStatic();
testingStatic();
testingStatic();

function soma($a,$b){
echo $a + $b;
echo "<br>";
}
soma(3,4);
soma(1,4);
soma(10,7);

echo 5/2;
echo "<br>";

echo 2 . 3; //gera uma string - concatenar
echo "<br>";

$nome = "Michelle";
$sobrenome = "Antunes";

$nomeCompleto = $nome . " " . $sobrenome;
echo $nomeCompleto;
echo"<br>";

$operation = "5"*12;
echo $operation . "<br>";
echo gettype($operation);
echo "<br>";
echo gettype(5.10); //double
echo "<br>";

echo 20 % 12; // gera o resto da divisão
echo " módulo <br>";
echo 20/12;
echo " divisão <br>";

echo 5**2;
echo "<br>";

?>

<?php
// auto incremento 
$test = 0;
$test2 = 0;

$test++;
$test2 = $test2 +1;

echo "x: " . $test . "<br>";
echo "y: " . $test2 . "<br>";

//auto decremento

$dec = 10;
$dec2 = 10;

$dec--;
$dec2 = $dec2 - 1;

echo "x: " . $dec . "<br>";
echo "y: " . $dec2 . "<br>";

//operadores de comparação:(retorna boolean)
// == igualdade
// === idêntico
// != diferença
// !== não idêntico
// maior e maior ou igual > e >=
// menor e menor ou igual < e <=
// && AND somente quando as duas são verdadeiras
// || OR
// ! NOT

//OPERADOR DE CAST - CONVERSÃO
$a = (int) "12"; //força a virar número inteiro

echo $a . "<br>";
echo $a + 10 . "<br>";  

// OEPRADOR DE ATRIBUIÇÃO

$d = 0;
$d += 10; // &d = $d + 10
echo $d . "<br>";

$e = 0;
$e -= 10; // &e = $e - 10
echo $e . "<br>";

$c = 0;
$c *= 10; // &c = $c * 10
echo $c . "<br>";

$f = 100;
$f /= 10; // &f = $f / 10
echo $f . "<br>";

//OPERADOR TERNÁRIO

echo 5 > 2 ?  "5 é maior que 2" :  "5 é menor que 2";