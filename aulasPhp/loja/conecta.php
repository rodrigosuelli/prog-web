<?php
$link = mysqli_connect("localhost", "root", "") or die("Não foi possivel conectar ao mysql");
mysqli_select_db($link, "loja");
