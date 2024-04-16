<?php

$conn = new mysqli("localhost", "root", null, "cursephp", 4306);


// $sql = "SELECT * FROM itens";

// $result = $conn->query($sql);
 
// print_r($result );

//deletar e criar tabelas

// $q = "CREATE TABLE test (nome VARCHAR (100), sobrenome VARCHAR (100))";

// $conn->query($q);

// $d = "DROP TABLE test";

// $conn->query($d);
 
// if (!$conn->query($d)) {
//     echo "Erro ao excluir tabela: " . $conn->error;
// }

// $table = 'itens';
// $nome = 'Celular';
// $descricao = 'usado';

// $q = "INSERT INTO $table (nome, descricao) VALUES ('$nome', '$descricao')";


// $conn->query($q);

// $conn->close();


$q = "SELECT * FROM itens";

$result = $conn->query($q);

$conn->close();

//um resultado
$item = $result->fetch_assoc();

print_r($item);

// todos os resultados 
$itens = $result->fetch_all();

print_r($itens);