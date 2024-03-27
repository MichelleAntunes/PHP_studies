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
