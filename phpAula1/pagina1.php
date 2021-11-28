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
    <?php
        include ('navegacao.php');
    ?>
    <div class="pagina1">
        <p>COnteudo PAGINA 1 A TESTAS</p>
    </div>
    <?php 
        require ('footer.php');
    ?>

    <h1><strong>Final teste</h1><!--com require final teste não aparece, com include aparece mas warning aparece na mesma -->
</body>
</html>