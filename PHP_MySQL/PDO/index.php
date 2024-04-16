<?php

$host = "localhost";
$db = "cursephp";
$user = "root";
$pass = "";

// Estabelecendo a conexão
$conn = new PDO("mysql:host=$host;port=4306;dbname=$db", $user, $pass);

// INSERINDO DADOS COM PDO

// $stmt = $conn->prepare("INSERT INTO itens(nome, descricao) VALUES (:nome, :descricao)");

// $nome = "Foto";
// $descricao = "Foto tirada ontem";

// $stmt->bindValue(":nome", $nome);
// $stmt->bindValue(":descricao", $descricao);

// $stmt->execute();

// ATUALIZANDO DADOS COM PDO
// $id = 2;
// $nome = "Cadeira";
// $descricao = "Jogo de quatro cadeiras novas.";


// $stmt = $conn->prepare("UPDATE itens SET nome = :nome, descricao = :descricao WHERE id = :id");

// $stmt->bindParam(":id", $id);
// $stmt->bindParam(":nome", $nome);
// $stmt->bindParam(":descricao", $descricao);

// $stmt->execute();

// SELECIONANDO DADOS COM PDO
$id = 2;


$stmt = $conn->prepare("SELECT * FROM itens WHERE id > :id");

$stmt->bindParam(":id", $id);

$stmt->execute();

$data = $stmt->fetch(PDO::FETCH_ASSOC); // para não voltar duplicado


print_r($data);

echo"<br>";

$data2 = $stmt->fetchall(PDO::FETCH_ASSOC);

print_r($data2);

