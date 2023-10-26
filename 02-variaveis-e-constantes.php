<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
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
    echo "<p>estamos no $curso em $ano</p>";

    // Não dá certo, as variaveis são tratadas como texto
    echo '<p>estamos no $curso em $ano </p>';

    // Saida com CONCATENAÇÃO
    echo '<p>estamos no '.$curso.' em' .$ano. '</p>';
    echo "<p>estamos no ".$curso." em" .$ano. "</p>";
    
?>

<!-- Forma de saida ABREVIADA/SIMPLICADA -->
<p>Estamos no <?=$curso?> em <?=$ano?> </p>
    
   


   
    </body>
</html>