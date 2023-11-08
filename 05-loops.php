<?php require "recursos.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
    <style>
    ol li:nth-child(odd) { color: blue;}
    ol li:nth-child(even) { color: red;}
    </style>
</head>

<body>
<!-- Usando o foreach para acessar os dados
do array criado em outro arquivo (acessível
devido ao incluide) -->
<?php foreach ($linguagens as $linguagem){ ?>
        <p><i><?=$linguagem?></i></p>
<?php } ?> 


<p> <?=ESCOLA?> - <?=$anoLetivo?></p>
    <h1>Loops</h1>
    <hr>
    <h2>Tradicionais</h2>

    <h3>while</h3>
    <?php
    $i = 1;
    while ($i <= 3) {
    ?>
        <p> Senac Penha - I vale <?= $i ?> </p>
    <?php
        $i++;
    }
    ?>

    <h3>do/while</h3>
    <ul>

    <?php
        $j = 1;
    do {
    ?>
        <li>item: <?= $j ?></li>
    <?php
        $j++;
    } while ($j <= 5)
    ?>
    </ul>
    <hr>
    
    
    <h3>for</h3>
    <?php
    $alunos = ["jean", "Giuseppe", "Arthur", "Pedro", "Paola"];

    $quantidade = count($alunos);

    for( $i = 0; $i < $quantidade; $i++ ){
     ?>
     <p> Aluno: <?=$alunos[$i]?> </p>
     <?php
    }
    ?>

    <h3>foreach</h3>
    <?php foreach( $alunos as $alunos){ ?>
        <p> </p>

   <?php } ?>

   <hr>

   <h3>Exercicio 03</h3>

   <?php
   $mes = ["janeiro", "feveirero", "março", "abril", "maio", "junho","julho",
   "agosto", "setembro", "outubro", "novembro", "dezembro"];

   $listames= count($mes);

   for ($i= 0; $i < $listames; $i++ ) { 
    ?>
    <p> cada mês: <?=$mes[$i]?></p>
    <?php
   }
   ?>

   <ol>
    <?php foreach($mes as $cadames){?>
        <li> <?=$cadames?> </li>
    
   <?php } ?>
   </ol>















    </ul>
</body>

</html>