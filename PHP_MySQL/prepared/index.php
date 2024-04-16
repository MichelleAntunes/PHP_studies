<?php

$conn = new mysqli("localhost", "root", null, "cursephp", 4306);

//RESGATANDO DADOS 

// $nome = "Microfone";
// $descricao = "Fábricado na china";

// $stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (?,?)"); //bind_param

// $stmt->bind_param("ss", $nome, $descricao); // s = string, i=integer, d = double

// $stmt->execute();

//SELECIONANDO DADOS 

// $id = 1;

// $stmt = $conn->prepare("SELECT * FROM itens WHERE id > ?"); // primeiro passo

// $stmt->bind_param("i", $id); // segundo passo

// $stmt->execute(); // terceiro 

// $result =  $stmt->get_result(); // quarto passo com resultado

// $data = $result->fetch_all();

// print_r($data);

// $conn->close();

//RESGATANDO DADOS APENAS UMA LINHA

// $id = 1;

// $stmt = $conn->prepare("SELECT * FROM itens WHERE id = ?"); // primeiro passo

// $stmt->bind_param("i", $id); // segundo passo

// $stmt->execute(); // terceiro 

// $result =  $stmt->get_result(); // quarto passo com resultado

// $item = $result->fetch_row();

// print_r($item);

// $conn->close();

//ATUALIZANDO DADOS 

// $id = 6;

// $stmt = $conn->prepare("UPDATE itens SET nome = ?, descricao  = ? WHERE id = ?"); 

// $nome = "Tablet";
// $descricao = "Tablete semi-novo";

// $stmt->bind_param("ssi", $nome, $descricao, $id);

// $stmt->execute();

// if ($stmt->error) {
//     echo "Erro: " . $stmt->error;
// };

//DELETANDO DADOS 
// $id = 6;

// $stmt = $conn->prepare("DELETE FROM itens WHERE id = ?"); 


// $stmt->bind_param("i",  $id);

// $stmt->execute();

// if ($stmt->error) {
//     echo "Erro: " . $stmt->error;
// };