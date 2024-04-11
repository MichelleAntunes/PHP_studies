<?php

session_start();

 $_SESSION['nome'] = 'Mateus';
print_r($_SESSION);

$nome = $_SESSION['nome'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Olá Session</h1>
    <p>Seja bem vindo <?= ($nome) ?></p>
</body>
</html>