<?php

$idade = 29;
// as duas formas são exatamente iguais. 
echo"Eu tenho $idade anos <br>"; 
echo "Eu tenho {$idade} anos";

//Ex. 39

$arr = [
    "porta" => 100, 
    "maçaneta" => 5, 
    "motor" => 2000, 
    "retrovisor" => 8
];
echo "<br>";
function itensCaros($arr){
    $arrItensCaros = [];
   foreach ($arr as $item => $preco) {
if ($preco > 10)  {
    array_push($arrItensCaros, $item);
} }
return $arrItensCaros;
};

$novoArr = itensCaros($arr);
print_r($novoArr);

//função print tem a mesma finalidade que echo, pode imprimir uma string que foi passada como argumento.
echo "<br>";
print("testando");

// printf tem a funcionalidade semelhante a print porém podemos imprimir valores de forma dinâmica utilzando o símbolo %.
// %s - string
// %d - number
// %f - float (número não inteiro) %.2f = duas casas após a vírgula.

echo "<br>";
printf("Número %d", 1); 

echo "<br>";
$n = "Antunes";
printf("O primeiro nome é %s e o segundo é %s.", "Michelle", $n); 
echo "<br>";
//PERCORRENDO UMA STRING

$str = "Uma string grande";
 for ( $i = 0; $i < strlen($str); $i++ ) {
    echo "$str[$i] <br>";
 };

 echo "<br>";
 $str_ex = "O rato roeu a roupa do rei de Roma";
 $countA = 0;

 for ( $i = 0; $i < strlen($str_ex); $i++ ) {
  
    if( $str_ex[$i] == "a") {
        $countA++;
       
    }
    
 };

echo "O número de a na frase é de: $countA <br>";

//LIMPANDO STRINGS
//trim - limpa espaços antes e depois da string
// rtrim - limpa espaços da direita da string
// ltrim - limpa espaços da esquerda da string
$str1 = "      Michelle   ";
echo "<br> Essa é a string 1: $str1. <br>";
$strLimpa = trim($str1);
echo "<br> Essa é a string Limpa 1: $strLimpa. <br>";

echo ucfirst($str_ex);
echo "<br>";
echo ucwords($str_ex);

$frase = "este item está em";
$promocao = "promoção";
echo "<br>";
echo ucfirst($frase . strtoupper($promocao));

// STRIPS TAGS

$textoHtml = "<p> Testando parágrafo</p><div>Uma div aqui </div>";
echo $textoHtml;
$salvarTextoPuro = strip_tags($textoHtml);
echo $salvarTextoPuro;

// RESGATANDO UMA PARTE DA STRING

 $strResgate = "Essa é a minha string";
 $minha = substr($strResgate, 10, 5);  //strinh pai, indice inicial, comprimento da palavra
 // se nao passar o último parametro, ele pegará até o fim
 // se o ultimo parametro for negativo, removerá esse comprimento a partir do último indice
 echo "<br> $minha"; 
 $invertida = strrev($minha);
 echo "<br> $invertida";
 $repetida = str_repeat($minha, 5);
 echo "<br> $repetida";
 echo "<br>";

 $stringToArray = "Testando o explode";
 $converter = explode(" ", $stringToArray);
 print_r($converter);
 echo "<br>";

 $arrayToString = ["O", "PHP", "é", "muito", "legal"];
 $arrayToString = implode(", ", $arrayToString);
 echo "<br>";
 echo $arrayToString ;
//ENCONTRAR UMA PALAVRA DENTRO DA STRING
 $encontrarPalavraString = "Estou testando o strpos, para encontrar uma palavra nessa string.";
 $testeEcontrar = strpos($encontrarPalavraString,"strpos");
 echo "<br>";
 echo $testeEcontrar;
 echo "<br>";

 //ENCONTRAR A ÚLTIMA OCORRENCIA DE UM TEXTO NA STRING

 $testeEcontrarUltima = strrpos($encontrarPalavraString,"string");
 echo "<br>";
 echo $testeEcontrarUltima;
 echo "<br>";

 //ENCONTRAR O RESTO DA STRING A PARTIR DE UMA PALAVRA

 $testRestoString = strstr($encontrarPalavraString, "testando");
 echo $testRestoString;
 echo "<br>";

 //DECOMPONDO URLs

 $url = "https://www.google.com";
 $arrayUrl  = parse_url($url);
 print_r($arrayUrl);
 echo "<br>";

