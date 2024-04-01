<?php

 include "test.php"; // se não existir ocorre um warning. Única diferença entre require e include
 echo "Após include";
require "require.php"; // se não existir, ocorre um erro fatal. Única diferença entre require e includes

//Usar barra caso o arquivo esteja dentro de uma pasta. E __DIR__ + dois pontos para voltar pasta


//require_once e include_once limita o codigo a ser replicado apenas uma vez.
 ?>


<!-- Short Tag -->
 <? echo "Test"; ?>

 <!-- Exibição de Conteúdo -->
 <?= "Test - 2"; ?>

 <?php
include "backend.php";
 ?>

 <h1> Seja bem-vindo ao nosso site</h1>
 <p><?= $nome; ?> veja as nossas ofertas
 </p>
 <h2>Confira nossos principais produtos:</h2>
 <ul>
    <?php foreach ($produtos as $produto): ?>
        <li><?= $produto; ?></li>
        <?php endforeach; ?>
 </ul>