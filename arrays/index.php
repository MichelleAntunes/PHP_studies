<?php

$arr = range(10,45);


for ($i = 0; $i < count($arr) ; $i++) {
   
    $soma = $arr[$i] +6;

   
        if( $soma > 30){
        echo "Número é muito alto! Soma: $soma <br>";
       
    } else{
        echo " Soma: $soma <br>";

    }
    
}  

//Array multidimensional

$array = [
    [1,2,3],
    [3,4,5,6]
];

print_r($array);    
echo "<br>";

echo $array[0] [1] . "<br>"; //acessando o primeiro array e o segundo elemento desse array 
echo count($array) . "<br>"; //conta a quantidade de array
echo count($array[0]) . "<br>"; //conta a quantidade de elementos do primeiro array

//Ex. 46

$arrExercicio = [
    [1,2,3,4],
    [3,4,5,6],
    [6,7,8,9],
    
];
for ($i = 0; $i < count($arrExercicio) ; $i++)  {

    //imprimindo array 
   
echo "Elementos do Array externo " . ($i +1) . "<br>"; 

//imprimindo o array interno

for ($j = 0; $j < count($arrExercicio[$i]) ; $j++) {
    echo $arrExercicio[$i][$j] . "<br>";
}
}

// funçao list

$pessoas = ["Michelle", 30, "Programadora", "Castanho Claro"] ;
echo "<br>";
print_r($pessoas) . "<br>";
 list ($nome, $idade, $profissao, $corDosOlhos) = $pessoas;
 echo " $nome" . "<br>";
 echo " $idade" . "<br>";
 echo " $profissao" . "<br>";
 echo " $corDosOlhos" . "<br>";

 // array slice

 $arraySlice = [1,2,3,4,5,6];
 $slice1 = array_slice($arraySlice,1,3);
 print_r($slice1) . '<br>';

// dividindo array

$arr_chunk = range(1,20);

print_r(array_chunk($arr_chunk, 4));

// chaves e valores de array

$carro = [
    'marca'=> 'BMW',
    'motor'=> '2.4',
    'teto_solar'=> true,
    'cambio'=> 'Manual',
    'portas'=> 4
];

$chaves = array_keys($carro);
print_r($chaves);
echo '<br>';
$valores = array_values($carro);
print_r($valores);
echo '<br>';

// verificando se a chave de um array existe

if (array_key_exists('nome', $carro)) {
    echo ' A chave nome existe no array carro';

 } else {
    echo ' A chave nome nao  existe no array carro <br>';};

    if (isset($carro['nome'] )) {
        echo ' A chave nome existe no array carro';
    
     } else {
        echo ' A chave nome nao  existe no array carro <br>';};

        // removendo elementos de um array array splice
        $arraySplice = [1,2,3,4,5,6];
 $splice1 = array_splice($arraySplice,1,3);
 print_r($splice1) . '<br>';


 // usando extract para imprimir uma variavel rapidamente

 $carroExtract = [
    'marca'=> 'BMW',
    'motor'=> '2.4',
    'teto_solar'=> true,
    'cambio'=> 'Manual',
    'portas'=> 4
];

echo"<br>";
extract($carroExtract);
echo "$marca <br>";
echo "$motor <br>";
echo "$cambio <br>";

$nome = "Mateus";

$pessoas = [
    'nome'=> 'Michelle',
    'idade'=> 30,
    
];

echo "$nome <br>";

extract($pessoas); //sobreescrevendo a informação acima

echo "$nome <br>";

// utilizando compact para criar array a partir de variaveis

$marca = "BMW";
$motor = "3.00";
$tetoSolar = true;
$portas = 5;

$carro = compact("marca", "motor", "tetoSolar", "portas");

print_r($carro);

// Ex. 49

echo "<br>";

$raca = "maltes";
$idade = 10;
$cor = "branco";

$nicolle = compact("raca", "idade", "cor");
print_r($nicolle);
echo "<br>";

foreach ($nicolle as $caracteristica => $value) {

echo " $caracteristica: $value <br>";
};

//TÉCNICA FOREACH

$pessoa = [
    'nome'=> 'Michelle',
    'idade'=> 30,
    'profissao'=> 'programadora',    
];

foreach ($pessoa as $key => $value) {

echo "$key => $value <br>";

};

foreach ($pessoa as $value) { //acessando somente a chave

    echo "$value <br>";
    
    };

  //Ex. 50
  ?>

  <?php
  $pessoaExercicio = [
    'Michelle'=> 30,
    'Bruno'=> 31,
    'Paula'=> 25,
    'Henrique'=> 27,
];

?>

<table>

<tr>
    <th>Nome</th>
    <th>Idade</th>
</tr>
<?php foreach ($pessoaExercicio as $key => $value): ?> 

<tr>
    <td><?= $nome; ?> </td>
    <td><?= $idade; ?> </td>
</tr>
   <?php endforeach; ?>
</table>

<?php

//Reduce em array

$arrReduce = [1,2,3,4,5];

function somaReduce ($a, $b){
    return $a + $b;
};

$result = array_reduce($arrReduce, "somaReduce");

echo "$result <br>";

function subtracaoReduce ($a, $b){
    return $a - $b;
};

$result = array_reduce($arrReduce, "subtracaoReduce");

echo "$result <br>";


//Buscando em array

$bucandoArray = [5,2,14,0,178,4];


if (in_array("nome", $bucandoArray)) {

    echo "Existem nome no Array";}
else if(in_array(5, $bucandoArray)) {
    echo "Não existe Nome no Array, mas existe o número 5";
};

//Organizando em array
$buscandoArray1 = [5, 2, 14, 0, 178, 4];
sort($buscandoArray1); //ordem crescente
print_r($buscandoArray1);
echo "<br>";

rsort($buscandoArray1);  //ordem decrescente
print_r($buscandoArray1);
echo "<br>";


$buscandoArray2 = [
    'Michelle'=> 30,
    'Bruno'=> 31,
    'Paula'=> 25,
    'Henrique'=> 27,
];
print_r($buscandoArray2);
echo "<br>";
asort($buscandoArray2); 
print_r($buscandoArray2);
echo "<br>";

ksort($buscandoArray2);  
print_r($buscandoArray2);
echo "<br>";

// Ex. 51

$arrayExercicio51 = [
    'Michelle'=> 10,
    'Bruno'=> 9,
    'Paula'=> 8,
    'Henrique'=> 5,
];
?>
<ol>
<li>
    <?php 
    ksort($arrayExercicio51);
    print_r($arrayExercicio51);
    echo "<br>";
    ?>
</li>
</ol>
<?php

$arrayExercicio51_2 = [
    'Michelle'=> 10,
    'Bruno'=> 9,
    'Paula'=> 8,
    'Henrique'=> 5,
];
arsort($arrayExercicio51);
?>
<ol> <?php  foreach( $arrayExercicio51_2 as $key => $value ): ?>    
<li> <?=   $key   ?> <?=   $value   ?>
</li>
<?php endforeach; ?>
</ol>

<?php

echo "<br>";
$arrayReverse = [1,2,3,4,5,6];
echo "<br>";
print_r($arrayReverse);
echo "<br>";
echo "Imprimindo array reverse <br>";

$arrayReverseResult = array_reverse($arrayReverse);
print_r($arrayReverseResult);

// Ordem aleatoria de Array

echo "<br>";
$aleatorio = [1,2,3,4,5,6];
echo "<br>";
print_r($aleatorio);
echo "<br>";
echo "Imprimindo array aleatorio <br>";

shuffle($aleatorio);
print_r($aleatorio);

echo "<br>";echo "<br>";echo "<br>";echo "<br>";
shuffle($aleatorio);
print_r($aleatorio);

//somando array


echo "<br>";echo "<br>";echo "<br>";echo " Imprimindo soma do array<br>";

$somaArrayAleatorio = array_sum($aleatorio);
print_r($somaArrayAleatorio  );

echo "<br>";


//unindo array

echo " Imprimindo a uncão de dois arrays<br>";
echo "<br>";

$arrUnirro = [1,2,3,4,5,6];
echo "<br>";    
$arrUnir2 = [1,2,3,4,5,6];
$uncao = array_merge($arrUnir2, $arrUnirro);
print_r($uncao);
echo "<br>";


//diferença entre array

$arrDiferenca1 = [1,2,3,4,5,6];
$arrDiferenca2 = [7,8,9,10];
echo "Imprimindo diferença entre array<br>";


$arrayDiferenca = array_diff($arrDiferenca1, $arrDiferenca2); //diferença do 1 para o 2
print_r($arrayDiferenca);
echo "<br>";



$arrayDiferencaOutra = array_diff($arrDiferenca2, $arrDiferenca1); //diferença do 2 para o 1
print_r($arrayDiferencaOutra);

echo "<br>";

//Ex. Programação 1
$exoma =  [1,2];
function somaElementos ($exoma) {
    echo "Retorna a soma<br>";

    return array_sum($exoma);
}

somaElementos($exoma);

//Ex. Programação 2

$exoma2 =  [1, 2];

function maiorElemento($aexoma2) {
    echo "Retorna o maior elemento <br>";
    rsort($aexoma2); 
    return $aexoma2[0]; 
}

echo maiorElemento($exoma2);

//Ex. Programação 3

$econtrarParesNumeros = [1, 2, 3, 4, 5, 6];

function encontrarPares($econtrarPares) {
    $numerosPares = [];

    for ($i = 0; $i < count($econtrarPares); $i++) {
        if ($econtrarPares[$i] % 2 == 0) {
            $numerosPares[] = $econtrarPares[$i];
        }
    }

    return $numerosPares;
}

print_r(encontrarPares($econtrarParesNumeros)); 

//Ex. Programação 4

$ordenarNumeros = [5,2,9,10,22,256,1502,7];
function ordenarNumeros($numeros){
    echo "Retorna array em ordem<br>";

sort($numeros);
return $numeros;
};


print_r(ordenarNumeros($ordenarNumeros));