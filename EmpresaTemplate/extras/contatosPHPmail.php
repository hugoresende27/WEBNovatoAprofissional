

<?php
        //VALIDAÇÃO DO FROMULÁRIO, código em php escrito antes do form
        //$email = $_POST['txtEmail'];//Notice: Undefined index: txtEmail
        //echo var_dump($_SERVER);
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){//superglobal server, array com info de headers, paths, scripts, etc
            //die("foi submetido o formulário");//vai mostrar header, msg do die e acaba ali, já não carrega layout de rodapé
            $erro = '';

            //verifica se existem todos os campos
            if (!isset($_POST['txtEmail']) || 
                !isset($_POST['txtAssunto']) ||
                !isset($_POST['txtMsg'])) {
                    $erro = "Pelo menos 1 dos campos não existe";
                }

            $email = $_POST['txtEmail'];
            $assunto = $_POST['txtAssunto'];
            $msg = $_POST['txtMsg'];

            //ver se os campos estão preenchido
            if (empty($erro)){
                
                //ver se o email é válido (php valid email)
                
                if (!filter_var($email, FILTER_VALIDATE_EMAIL) ){//https://www.php.net/manual/en/function.filter-var.php
                        $erro = "Email inválido";
                }
            }
          
            //envio de email //https://www.php.net/manual/en/function.mail.php
            /*
            assinatura da função do manual:
            mail(
                string $to,
                string $subject,
                string $message,
                array|string $additional_headers = [],
                string $additional_params = ""
            ): bool (return de booleano)
            */
            if (empty($erro)){ //só vou enviar o email se não existir um erro, empty $erro
                $resultado = mail($email, $assunto, $msg);
                if ($resultado) {//$resultado == true
                    echo "Sucesso"; 
                } else {
                    echo "Erro";
                }
            }
           
        }                               

?>



<h1>CONTATOS</h1>

<form action="?p=contatos" method="post">  <!--ESTE FORM EM action vai ser submetido à mesma página, ?p=contatos = index.php?p=contatos-->

    <input type="email" name="txtEmail" placeholder="Email" ><br>
    <input type="text" name="txtAssunto" placeholder="assunto..." ><br>
    <textarea name="txtMsg" cols="60" rows="3"></textarea><br>
    <input type="submit" value="Enviar Mensagem"><!-- ao fazer submit recarrega o formulário vazio, porque ?=contatos-->


</form>

<?php if (!empty($erro)):     //verifica se $erro está existe e está vazio ou false se existir e não estiver vazio  ?>        
    <div style="color: red;"> <?php echo $erro ?> </div>
<?php endif; ?>