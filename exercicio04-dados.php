<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exercício 04 (Dados)</title>
</head>
<body>
<h1>Exercício 04 (dados/processamento)</h1>
<hr>

<!-- Faça a partir daqui a programação
necessária para obter os dados vindos do formulário
e mostrá-los usando elementos HTML (da forma que você quiser). -->


<?php
$preco = $_POST ["preco"];
$produto = $_POST ["produto"];
$fabricante = $_POST ["fabricante"];
$descricao = $_POST ["descricao"];
   ?>
   <p><?=$produto?></p>
<p><?=$preco?></p>
<p>R$ <?=number_format($preco, 2, ",",".")?></p>
<p><?=$descricao?></p>
</ul>

</body>
</html>