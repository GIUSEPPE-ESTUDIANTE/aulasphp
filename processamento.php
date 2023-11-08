<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processando dados</title>
</head>
<body>
    <h1>Processando os dados vindos ao formulario</h1>
    <hr>

    <?php
    //Recebendo os dados via metodo do formulário post
    //usando o array superglobal $_POST[]

    $nome  = $_POST ["nome"];
    $email = $_POST ["email"];
    $nascimento  = $_POST ["nascimento"];
    $mensagem = $_POST ["mensagem"];

    if( empty($nome) || empty($email)){
    ?>
    <p>Você deve preencher nome e e-mail vagabundo!</p>
    <?php
    }else {
    ?>
    <h2>Dados recebidos</h2>
    <ul>
         <li>Nome:   <?=$nome?></li>
         <li>E-mail: <?=$email?> </li>
         <li>Data de nascimento: <?= $nascimento?>  </li>
         <li>mensagem: <?= $mensagem ?> </li>


    </ul>
<?php } ?>
</body>
</html>