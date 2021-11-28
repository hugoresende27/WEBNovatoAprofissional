<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo.css">
    <title>Aula 1 PHP webDeveloper</title>
</head>
<body>
<div class="main">
    <h1>Ola HTML :: Hard coded em HTML</h1>
    
    <?php 
        
        echo "<h1>Ola php</h1> conteudo dinámico apresentado com recurso a PHP<br>PHP (recursive acronym for PHP: Hypertext Preprocessor ";
        ?>
</div>
<div class="main">
<?php
        echo "<br>********************<br>";
        echo strlen ("hugo");
        echo strlen ("123456789");
    ?>
</div>

    <?php 
        include ('navegacao.php');
    ?>

    <p>COnteudo index</p>
    <ol>
        <li>conteudo 1</li>
        <li>conteudo 2</li>
        <li>conteudo 3</li>
        <li>conteudo 4</li>
    </ol>

    <?php 
        require ('footer.php');
    ?>

    <h1><strong>Final teste</h1><!--com require final teste não aparece, com include aparece mas warning aparece na mesma -->
</body>
</html>