<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio02</title>
</head>
<body>
    <h1>exercicio02</h1>
    <hr>

    <?php
    $dados = [
        "usuario" => "chapolin",
        "senha" => "123teste",
        "idade" => 30,
        "cidade" => "São Paulo",
        "telefone" => ["11-2135-0300","11-91234-5678"],
    ];
?>

<ol>
    <li>usuario: <?=$dados["usuario"]?></li>
    <li>idade: <?=$dados["idade"]?></li>
    <li>cidade: <?=$dados["cidade"]?></li>
    <li>telefone: <?=$dados["telefone"][1]?></li>
    
</ol>

<pre><?=var_dump($dados)?></pre>

<ol>
    <li>Nome de usuario:
        <?=$dados ["usuario"]?>
    </li>
    
</ol>
    
</body>
</html>