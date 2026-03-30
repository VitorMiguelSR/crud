<?php

use const Dom\INDEX_SIZE_ERR;
include("conexao.php");
$sql = "SELECT * FROM produtos ORDER BY id Desc";
$resultado = mysqli_query($conexao, $sql);

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <title>INDEX</title>
</head>
<body>
    <h1>Cadastro</h1>
    <form action="salvar.php" method="post">
        <label>Nome:</label>
        <input type="text" name="Nome" required>
        <label>Preço:</label>
        <input type="number" name="Preço" required>
        <label>Categoria:</label>
        <input type="text" name="Categoria" required>
        <label>Quantidades:</label>
        <input type="number" name="Quantidades" required> 
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
?>