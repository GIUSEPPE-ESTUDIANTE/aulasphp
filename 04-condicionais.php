<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>
    <style>
        .repor{ color: red;}
        .urgente {color: blueviolet;}
        .normal {color: green;}
    </style>
</head>
<body>
    <h1>Condicionais (if, else, elself)</h1>
    <hr>

    <h2>Simples</h2>

    <?php
    $numero = 10;

    if($numero > 20){
        echo "<P>$numero é maior que 20.</p>";           
    }
    
    ?>
    <!-- if (se), else (senão) -->

    <h2> Composta (if/else)</h2>
    <?php
    //Controle de Estoque
    $produto = "Ultrabook";
    $qtdEmEstoque = 0; // o que temos no momento
    $qtdcritica = 2; // mínimo necessario
    ?>

    <h3>Produto: <?=$produto?></h3>
    <h4>Estoque: <?=$qtdEmEstoque?></h4>

    <!-- Se a quatidade em estoque 
for abaixo da quantidade critica, então
o sistema deve avisar e pedir para repor -->
<?php
if($qtdEmEstoque < $qtdcritica ){
    echo "<p class='repor'> É necessario comprar/repor!</p>";

    //condicional SIMPLES/ANINHADA
    if($qtdEmEstoque === 0){
        echo "<p class='urgente'>URGENTE</p>";
    }
} else {
/* // Caso conteario, simplesmente monstrar
que o estoque esta normal */
    echo "<p class= 'normal'>Estoque normal</p>";
}
$a = 5;
$b = "5";
// == IGUALDADE DE VALORES
var_dump($a == $b);

// === IGUALDADE DE VALORES E TIPO DE DADOS
var_dump($a === $b); //false
?>


<h2>Encadeada (if, else e elself)</h2>
<?php
// Verificando o produto para dar uma garantia
if($produto == "Utrabook"){
    $garantia == 5;
} elseif($produto == "Geladeira"){
    $garantia = 3;
} elseif($produto == "TV"){
    $garantia = 2;
} else {
    $garantia = 2;
}

?>
<p>O produto <?=$produto?> possui Garantia:
de <?=$garantia?> ano<?php if($garantia>1) echo "s"?>.</p>

<h3>Encadeada usando switch/case</h3>
<?php
switch($produto){
    case "Ultrabook": $garantia = 5; break;
    case "Geladeira": $garantia = 3; break;
    case "TV": $garantia = 2; break;
    default: $garantia = 1; break;
}
?>











</body>
</html>