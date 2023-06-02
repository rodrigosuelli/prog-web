<?php
include("./conecta.php");
$codigo = $_REQUEST['codigo'];
$descricao = $_REQUEST['descricao'];
$qtd = $_REQUEST['qtd'];
$deletar = "delete from produtos where codigo=$codigo";
$resultado = mysqli_query($link, $deletar) or die("Erro no update");
header("location:index.php"); // redirect to index.php (altera o produto no bd e volta para a pagina index.php)
