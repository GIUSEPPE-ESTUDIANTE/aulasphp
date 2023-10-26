<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis e constantes</title>

    <style>
        p{ font-family: verdana; }
        .destaque {
            background-color: yellow;
            color: red;

        }
    </style>
</head>
<body>
    <h1>Variaveis e constantes</h1>
    <hr>
    
    <?php
    //variaveis
    $curso = "Programar web";
    $ano = 2023;
    $ara = "back end";

    // Estamos no programador web em 2023

    // Formas de saida COMPLETAS VIA PHP

    //saida interpolada
    echo "<p>estamos no <span class=\"destaque\"$curso</span> em $ano</p>";
    echo "<p>estamos no <span class=\"destaque\"$curso</span> em $ano</p>";


    // Não dá certo, as variaveis são tratadas como texto
    echo '<p>estamos no $curso em $ano </p>';

    // Saida com CONCATENAÇÃO
    echo '<p>estamos no '.$curso.' em' .$ano. '</p>';
    echo "<p>estamos no ".$curso." em" .$ano. "</p>";
    
?>

<!-- Forma de saida ABREVIADA/SIMPLICADA -->
<p>Estamos no <span class>"destaque"<?=$curso?> </span>em <?=$ano?> </p>

<hr>

<?php
// Constantes (recomenda-se dar nome em MAIUSCULAS)

//  Forma antiga, tradicional
define("AUTOR", "Giuseppe costa strapaicci");

// Forma moderna, atual
const EMPRESA = "ABC tecnologia";
const ANO_FUNDACAO = 2000;
?>

<!-- Saídas -->
<p>Autor do site: <?=AUTOR?> </p>
<p>Nome da empresa: <?=EMPRESA?> </p>
<p>Fundada em: <?=ANO_FUNDACAO?> </p>
<hr>
    
   


   
    </body>
</html>