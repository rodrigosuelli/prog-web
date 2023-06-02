<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="incluir.php" method="post">
    <h1>Controle de Produtos</h1>

    <table border="1">
      <tr>
        <th colspan="4">Inserir produto</th>
      </tr>
      <tr>
        <td>CODIGO:
          <input type="text" name="codigo" id="codigo" size="10">
        </td>
        <td>DESCRICAO:
          <input type="text" name="descricao" id="descricao" size="30">
        </td>
        <td>QUANTIDADE:
          <input type="number" name="qtd" id="qtd" size="10">
        </td>
        <td>
          <input type="submit" value="Incluir">
        </td>
      </tr>
    </table>
  </form>

  <br>
  <br>

  <table border=1>
    <tr>
      <th colspan="5">Listagem de produtos cadastrados</th>
    </tr>
    <tr>
      <th>CODIGO</th>
      <th>DESCRICAO</th>
      <th>QTD</th>
      <th colspan="2">ACOES</th>
    </tr>

    <?php
    include("./conecta.php");
    $consulta = "Select * from produtos";
    $resultado = mysqli_query($link, $consulta) or die("Erro no select");

    while ($registro = mysqli_fetch_array($resultado)) : ?>
      <tr>
        <td><?php echo $registro['codigo']; ?></td>
        <td><?php echo $registro['descricao']; ?></td>
        <td><?php echo $registro['qtd']; ?></td>
        <td><a href='./alterar.html'>Alterar</a></td>
        <td><a href='./deletar.html'>Deletar</a></td>
      </tr>
    <?php endwhile ?>

  </table>
</body>

</html>
