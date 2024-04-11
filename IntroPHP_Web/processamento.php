<?php

// print_r($_GET);

if(isset($_GET['nome'])){ //isset serve para nao mostrar o erro
    $nome = $_GET['nome'];
}else{
    $nome = "Padrão";
}

?>

<h1>
    O seu nome é <?= $nome ?>
</h1>