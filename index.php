<?php
include("conexao.php");
$sql = "SELECT * FROM produtos ORDER BY id Desc";
$resultado = mysqli_query($conexao, $sql);
?>