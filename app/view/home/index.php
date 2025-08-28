<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>home</h1>
    <p>esta é a pagina inicial</p>
    <!-- <p>O meu nome é: <?php // echo $viewData['nome']?></p> -->
    <p>O meu nome é: <?= $nome;?></p> <!--Utilizando a função extract();-->
    <p>E minha idade é: <?= $idade;?></p> 
    <p>Meu email é: <?= $email;?></p>
    <!-- <p>E minha idade é: <?php //echo $viewData['idade']?></p> --> <!--Utilizando a função extract();-->
</body>
</html>