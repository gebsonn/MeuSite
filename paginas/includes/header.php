<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Contato</title>

        <!--Bootstrap-->
        <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css" />

        <!--Plugins-->
        <!--Icomoon-->
        <link rel="stylesheet" href="plugins/icomoon/icomoon.css">

        <!--Meu CSS-->
        <link rel="stylesheet" href="assets/css/stilo.css">

    </head>
    <body>
        <header class="container">
            <!--Slide-->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="assets/img/1.jpeg" alt="Primeiro Slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="assets/img/2.jpeg" alt="Segundo Slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="assets/img/3.jpeg" alt="Terceiro Slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="assets/img/4.jpeg" alt="Terceiro Slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="assets/img/5.jpeg" alt="Terceiro Slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Proximo</span>
                </a>
            </div>
            <!--Fim Slide-->

            <!--Navegação-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegaÃ§Ã£o">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active"><a class="nav-link" href="?pg=inicio"> Inicio </a></li>
                        <li class="nav-item active"><a class="nav-link" href="?pg=produtos"> Produtos </a></li>
                        <li class="nav-item active"><a class="nav-link" href="?pg=contato"> Contato </a></li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                    </form>
                    <ul class="navbar-nav ">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                AREA ADMINISTRATIVA
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="?pg=login"> ADM 1 </a>
                                <a class="dropdown-item" href="?pg=login2"> ADM 2 </a>
                                <a class="dropdown-item" href="?pg=login3"> ADM 3 </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item alert-danger" href="#"><span class="btn-outline-successn"></span> Sair</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!--Fim NavegaÃ§Ã£o-->

        </header>