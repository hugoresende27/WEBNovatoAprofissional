<?php
/*
incluir todos os ficheiros trnasversais às páginas

    *html_header (layout)
    *topo ou nav (layout)
        (conteudo = inicio | empresa | servicos | contatos)
    *footer (layout)
    *html_footer (layout)

*/

    include ('layout/html_header.php');
    include ('layout/nav.php');

    //$pag = "inicio";
    $pag = $_GET['p']; //superglobal GET, vai buscar todas as var na query string ?p=
    //include ($pag. '.php');     //concatenar todas as $pag a .php
// SISTEMA DE ROTEAMENTO 
//COM ESTRUTURA IF'S

    // if ($pag == "inicio"){
    //     include ('inicio.php');
    // } elseif ($pag == "empresa"){
    //     include ('empresa.php');
    // } elseif ($pag == "servicos"){
    //     include ('servicos.php');
    // } elseif ($pag == "contatos"){
    //     include ('contatos.php');
    // } else {        //no caso de não existir a pagina no query, prevenção de erros
    //     include ('inicio.php');
    // }

//COM ESTRUTURA SWITCH CASE

    switch($pag){
        case 'inicio':
            include ('inicio.php');
            break;
        case 'empresa':
            include ('empresa.php');
            break;
        case 'servicos':
            include ('servicos.php');
            break;
        case 'contatos':
            include ('contatos.php');
            break;
        default:
            include ('inicio.php');
            break;
    }
    
    include ('layout/footer.php');
    include ('layout/html_footer.php')


?>