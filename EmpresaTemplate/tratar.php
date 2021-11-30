<?php
    echo "tratar o formulario !!!!<br>";
    var_dump($_POST);//var_dump despeja um array
    $user = $_POST['user'];
    echo '<br>USER::: '.($user);
    $senha = $_POST['pass'];
    echo '<br>SENHA::: '.($senha);

    $nomes = array();


    $nomes = array('Hugo','Emanuel','Teixeira','Resende'); //array 
    $nomes [0] = 'Rita';
    $nomes [1] = 'Maria';
    var_dump ($nomes);

    $nomesB = array(//array associativo, chave são strings
        'a' => "Ze",
        'b' => "Rita",
        'c' => "To"
    );

    echo $nomesB['c'];



?>