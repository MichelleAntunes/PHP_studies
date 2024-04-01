<?php

function soma($a, $b){
 echo $a + $b .  "<br>";
}

soma(10,2);

// função php

echo strtoupper("testando função <br>");

echo strtolower("Testando função 2 <br>");

$x = ["Nome", "Nome 2", "Nome 3", "Nome 4"];
$test = implode(", ", $x); // imprimi uma array, colocando entre cada string uma virgula.

echo $test . "<br>";

//Ex. 34

function evenOrOdd ($x) {
    if ($x %2=== 0) {
        echo "O número $x é par. <br>";
    } else {
        echo "O número $x é ímpar. <br>";
    }
};
echo "<br>";
evenOrOdd(10);
evenOrOdd(15);

//Ex. 35

function numberSquared ($x) {
    $numberSquared = $x ** 2;
    echo "<br>";
    return $numberSquared;
   
};

echo numberSquared(10);

echo numberSquared(2);

//Ex. 36
$number = [];

for ($i = 0; $i <= 30; $i++) {
    array_push($number, $i);
};
function numberArray ($arr){
    $arrayReturn = [];
  for ($j = 0; $j < count($arr); $j++) {
    if($arr[$j] > 7){
        array_push($arrayReturn, $arr[$j]); // primeiro parametro o local onde quero inserir, segundo parametro a informação que quero inserir. 
    };
  };
return $arrayReturn;
};

$newArray = numberArray($number);
print_r($newArray);
echo "<br>";
//Exe. de Programação

function sumEvenNumbers($number){
$soma = 0;
for ($i = 1; $i <=$number; $i++) {
    if ( $i %2 === 0 ){
        $soma += $i ;
    }
    
}
return $soma;
}

function test ($a = "test"){
    echo "O valor de A é: $a <br>";
}

test();
test("asd");

function defineCorCarro ($cor = "Vermelha"){ //valor definido caso n seja passado outro
    echo "<br>";
    return "A cor do carro é:  $cor";
    
}

echo defineCorCarro();
echo defineCorCarro("Branco");
echo "<br>";

function argumentos($a, $b){
    print_r(func_get_args());
    echo "<br>"; 
    echo func_num_args() . "<br>";
    return ($a . $b);
}

argumentos("primeiro nome", "segundo nome");

//Ex. de Programação

function countVowels($string) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;
    for ($i = 0; $i < strlen($string); $i++) {
        $char = strtolower($string[$i]);
        if (in_array($char, $vowels)) {
            $count++;
        }
    }
    return $count;
}
 
// Chama a função e imprime o resultado

echo "Quantidade de vogais: " . countVowels("Olá, mundo!");

//Ex. 38

function supermercado ($compras){

return implode(", ", $compras);

};
echo "<br>";
echo supermercado(["arroz", "feijão", "carne"]);

echo "<br>";
function isPrime($num){
 
    if($num < 2){
 
        return false;
        
    }
 
    for ($i = 2; $i <= sqrt($num); $i++){
 
        if ($num % $i == 0){
 
            return false;
 
        }
    }
 
     return true;
 
}
 
   $resultado = IsPrime(10);
 
    echo $resultado;

    function sumDigits($n) {
        $sum = 0;
        while ($n > 0) {
            $digit = $n % 10;
            $sum += $digit;
            $n = floor($n / 10);
        }
        return $sum;
    }