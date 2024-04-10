<?php

$d = date('d/m/y');

echo $d; 

echo "<br>";

$dUpper = date('D/M/Y'); // em maiusculo, recebemos a abreviados do dia, mes e ano. 

echo $dUpper; 
echo "<br>";


// pode misturar nos paramentos, minusculos com maiusculo, virgula com traço com barra.

$cincoDias = strtotime("5 days");
echo $cincoDias . "<br>";
$dataAtualMaisCincoDias = date("d/m/y", $cincoDias);
echo $dataAtualMaisCincoDias . "<br>";

$TwoMonths = strtotime("2 months");
$dataAtualMaisTwoMonths = date("d/m/y", $TwoMonths);
echo $dataAtualMaisTwoMonths . "<br>";

 $date = mktime(01,15,00,03,12,2000); //hora, minuto, segundo, mes, dia e ano
echo date("d/m/y", $date) . "<br>";

$dateMi = mktime(4, 30, 0, 9, 7, 1993);
echo date("d/m/y", $dateMi) . "<br>";

$dataAtual = new DateTime("");
echo "<br>";
print_r($dataAtual);
echo "<br>";

// metodos para Date Time
echo $dataAtual->format("d/m/y");
echo "<br>";
echo $dataAtual->format("d - m- y");
echo "<br>";
 $dataAtual->modify("+5 days"); // primeiro modifica, depois usa o format para imprimir
 echo $dataAtual->format("d.m.y");

 //setDate e setTima
 echo "<br>";echo "<br>";
 print_r($dataAtual);
 echo "<br>";echo "<br>";
 $dataAtual->setDate(1999,12,01);
 print_r($dataAtual);

 echo "<br>";echo "<br>";echo "<br>";echo "<br>";
 print_r($dataAtual);
 echo "<br>";echo "<br>";
 $dataAtual->setTime(12,5,10);
 print_r($dataAtual);

 // diferenca entre datas

 $dataA = new DateTime("");
 $dataB = new DateTime("");
 $dataB->setDate(2025,05,11);

 print_r($dataA);
 
 echo "<br>";echo "<br>";
 print_r($dataB);
 
 echo "<br>";echo "<br>";

 $diferenca = $dataA->diff($dataB);
 echo "<br>";echo "<br>";
 print_r($diferenca);
 echo "<br>";
 echo $diferenca->format("%a days");
 echo "<br>";

 if($dataA > $dataB){
    echo"Data a é maior que data b <br>";	
 } else{
    echo"Data a não é maior que data b <br>";	
 }
 echo "<br>";


 $dataHojeBerlin = new DateTime("");
echo "<br>";
print_r($dataHojeBerlin);

date_default_timezone_set('America/Sao_Paulo');

$dataHojeBerlin = new DateTime("");
echo "<br>";
print_r($dataHojeBerlin);