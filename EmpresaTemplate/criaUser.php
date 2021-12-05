<?php

    include ('gestor.php');

    $gest = new Gestor();

    $user = "admin";
    $senha = "1234";

    $params = array (
        ':user' => $user,
        ':senha' => password_hash($senha,PASSWORD_DEFAULT)
    );

    // echo '<pre>';
    // print_r($params);

    $gest->EXE_NON_QUERY(
        "INSERT INTO users VALUES (0,:user,:senha)"

    ,$params);

    echo "terminado";