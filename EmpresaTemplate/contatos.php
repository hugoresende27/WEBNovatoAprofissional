<?php
 //   if (empty($_POST) == false) {//se o post contem dados , empty == falso
 //      //echo 'tem dados!';
   //     print_r($_POST);
  //  }
?>

<h1>CONTATOS</h1>
<!--
<form action="" method="get">  form é um conjunto de inputs que vai ser tratado na action, e o method pode ser get ou posto
                        action para onde vão ser enviados os dados do formulário

    <input type="text" name="nome">
    <input type="text" name="apelido">
    <input type="email" name="email"> email em HTML5 pede uma formatação com %@%
    <input type="password" name="pass">
    <input type="number" name="num">
    <input type="range" name="range">
    <input type="search" name="search">
    <input type="date" name="datas">

</form>
//////////////////////////////////////////////////////////////////////
METODO GET todos os valores de input vão aparecer na query string
METODO POST usado mais frequentemente


<form action="" method="post">
    <input type="text" name="userName">
    <input type="password" name="userPass">
    <input type="submit" value="Entrar">
</form>
-->

<form action="tratar.php" method="post">
    <input type="text" name="user" value="hugo">
    <input type="password" name="pass" value="senha">
    <input type="submit" value="Entrar">

</form>