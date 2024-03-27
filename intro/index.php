<?php
echo "Hello World! <br>" ;
// phpinfo();
echo "Teste <br>";
EchO "teste <br>";
$nome = "michelle ";
echo $nome;
echo "<br>";
echo $NOME; //case sensitive ERRO
echo "<br>";

if ( 5>2) {
    echo "Dentro do if";
}

?>

<?php
//predefined functions
echo "<br>";
if (is_int(5)) {
echo "5 é um número inteiro";
}
echo "<br>";
if (is_float(5.2)) {
echo "5.2 é um número float ";
}
echo "<br>";
if (is_string("5.2")) {
echo "'5.2' é uma string ";
}
echo "<br>";
if (is_bool(5 > 2)) {
    echo "'5>2 é true";
}

$a = [1,2,3];
echo "<br>";

print_r($a); //to print array with index
echo "<br>";
echo $a[0];

$arr = ['nome' => 'Michelle', 'idade' => 30];
echo "<br>";
print_r($arr);
echo "<br>";
print_r($arr['nome']);


?>

<?php
class People {
    function speaking() {
        echo "Hello World!";
    }
}

$michelle = new People();

$michelle->name = "Michelle";

echo $michelle->name;

echo "<br>";

$michelle->speaking();
