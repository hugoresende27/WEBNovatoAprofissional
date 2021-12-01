<?php
/*
////////////////////VALIDAÇÃO DE FORMULÁRIOS POR PHP///////////////////////////////////
    - verificar se os campos existem
    - verificar se todos os campos estão preenchidos
    - validar de acordo com o tipo de campo

*/
//- verificar se os campos existem
    if (!isset($_POST['user']) || !isset($_POST['pass'])) //determina se uma var está declarada e é diferente de nula, retorna true ou false
    {
        die('Erro! Não existem os campos necessários');
    }

//- verificar se todos os campos estão preenchidos
    // if (empty($_POST['user']) || empty($_POST['pass']))//verifica se  empty user ou empty pass
    // {
    //     die('Um dos campos não está preenchido!');
    // }
    if (empty($_POST['user'])){
        die("User vazio!");
    }
    if (empty($_POST['pass'])){
        die("Pass vazia!");
    }

    $user = $_POST['user'];
    $pass =$_POST['pass'];
    //verificar comprimento dos inputs, se tem entre 5 e 10 caracteres //muito usado o perg_match, string $pattern
    if (strlen($user) <= 3 || strlen(($user) >= 10)){
        die("Erro - user precisa de ter mais do 5 caracteres e menos do que 10");
    }
    if (strlen($pass) <= 3 || strlen(($pass) >= 16)){
        die("Erro - senha precisa de ter mais do 3 caracteres e menos do que 16");
    }

    //verifica se o user e pass existem (normalmente esta info está guardada numa BD, neste exemplo vai ser hardcoded)
    $u = 'huguito';
    $p = "0000";

    if ($user == $u && $pass = $p){
        die("login com sucesso");
    } else {
        die ("Login inválido!");
    }

  // var_dump($_POST);//var_dump despeja um array
  $user = $_POST['user']; //vai buscar input name = 'user' através da SUPERGLOBAL $_POST
  echo '<br>USER::: '.($user);
  $senha = $_POST['pass'];//vai buscar input name = 'pass'
  echo '<br>SENHA::: '.($senha);


/* 
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

*/

?>