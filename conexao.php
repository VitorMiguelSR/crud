<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "crud_produtos";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if(!$conexao){
    die("Sai pra lá mano");
}
?>