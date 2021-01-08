<?php

//Meu código PHP vem aqui.
echo "GEBSONNN SEU EMOOOOO!";

$pg = isset($_GET['pg']);

if ($pg) {
    //Verdadeiro
    switch ($_GET['pg']) {

        case 'inicio':
            include_once 'paginas/includes/header.php';
            include_once 'paginas/inicio.php';
            include_once 'paginas/includes/footer.php';
            break;

        case 'produtos':
            include_once 'paginas/includes/header.php';
            include_once 'paginas/produtos.php';
            include_once 'paginas/includes/footer.php';
            break;

        case 'contato':
            include_once 'paginas/includes/header.php';
            include_once 'paginas/contato.php';
            include_once 'paginas/includes/footer.php';
            break;
        
        case 'login':
            include_once 'paginas/login.php';
            break;

        case 'login2':
            include_once 'paginas/login2.php';
            break;
        
        case 'login3':
            include_once 'paginas/login3.php';
            break;

        default:
            // Página de Erro.
            echo 'Página não encontrada <br> Digite esse negócio direito';
            break;
    } // Fim Switch
} else {
    //Falso Quando não encontra a GET
    include_once 'paginas/includes/header.php';
    include_once 'paginas/inicio.php';
    include_once 'paginas/includes/footer.php';
}



