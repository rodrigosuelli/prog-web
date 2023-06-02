<?php
include("./conecta.php");
$codigo = $_REQUEST['codigo'];
$descricao = $_REQUEST['descricao'];
$qtd = $_REQUEST['qtd'];
$inserir = "insert into produtos(codigo, descricao, qtd) values($codigo, '$descricao', $qtd)";
$resultado = mysqli_query($link, $inserir) or die("Erro no insert");
header("location:index.php"); // redirect to index.php (Insere o produto no bd e volta para a pagina index.php)
