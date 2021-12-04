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

<!-- <form action="tratar.php" method="post" name="meuForm" onsubmit="return validar()"> PARA JAVASCRIPT -->
<form action="tratar.php" method="post">

    <!-- ////////////////////VALIDAÇÃO DE FORMULÁRIOS POR HTML/////////////////////////////////// -->
    <!-- <input type="text" name="user"  pattern=".{3,5}" title="Username entre 3 a 5 caracteres" required> -->
    <input type="text" name="user"><br>
    <small>(Entre 3 e 10 caracteres)</small><br>
    <input type="password" name="pass" ><br>
    <input type="submit" value="Entrar">

</form>
<div>
    <small style="color: red; margin-left:20px;" id="erro"> </small>
</div>

<script>
    ////////////////////////////VALIDAÇÃO DE FORMULÁRIOS PELO JAVASCRIPT////////////////////////////////

    function validar(){
        let txt = document.forms['meuForm']['user'].value//vai guardar em txt o campo name="user" de name="meuForm"
        let pass = document.forms['meuForm']['pass'].value

        let msgErro =""
        let avancar = true

        if (txt == ''){
            msgErro = 'o campo user é de preenchimento obrigatório'
            avancar = false
        }
        else if (pass == ''){
            msgErro = 'o campo pass é de preenchimento obrigatório'
            avancar = false
        }

        if (avancar == false){
            document.getElementById('erro').innerHTML = msgErro
        }

        return avancar //vai ser true se tudo preenchido

        // if (txt == '' || pass == '') {
        //     //alert('O utilizador e password têm de estar preenchido!')
        //     document.getElementById('erro').innerHTML = "Preencha todos os campos!"

        //     return false//return false para não submeter o form no caso de user ou pass estar vazio
        // }

        // if (pass == ''){
        //     alert('Password em branco!')
        //     return false
        // }

    }
</script>