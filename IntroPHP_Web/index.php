<!-- <?php

print_r($_SERVER);
echo "<br>";

echo $_SERVER["DOCUMENT_ROOT"]; // exemplo de acesso


?> -->

<!--  usando GET e POST  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="processamento.php" method="GET">

   
<div>
    <input type="text" name= "nome" placeholder="Preencha seu nome"></div>
<div>    <input type="submit" value="Enviar"></div>
</form>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="cadastro.php" method="POST">
    <div>
        <input type="text" name="marca" placeholder="Marca do carro">
    </div>
    <div>
        <input type="text" name="preco" placeholder="Preco do carro">
    </div>
    <div>
        <input type="checkbox" name="opcionais[]" value="Teto Solar">Teto Solar
    </div>
    <div>
        <input type="checkbox" name="opcionais[]" value="Blindado">Blindado
    </div>
    <div>    <input type="submit" value="Enviar"></div>
</body>
</html>