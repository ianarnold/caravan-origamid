<!DOCTYPE php>
<head>
    <title>Caravan</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <!-- MODAL AREA -->
    <div
        class="modal fade"
        id="modalLogin"
        tabindex="-1"
        role="dialog"
        aria-labelledby="modalLoginTitulo"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLoginTitulo">Entre na sua conta</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="emailUser">Email</label>
                            <input
                                type="email"
                                class="form-control"
                                id="emailUser"
                                placeholder="Digite seu email...">
                        </div>
                        <div class="form-group">
                            <label for="passwordUser">Senha</label>
                            <input
                                type="password"
                                class="form-control"
                                id="passwordUser"
                                placeholder="Digite sua senha...">
                        </div>
                        <button type="submit" class="btn btn-primary">Entrar na conta</button>
                        <small class="form-text text-muted">Esqueceu a senha? <a href="#">Clique aqui.</a></small>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- FIM MODAL AREA -->

    <!-- HEADER AREA -->
    <nav
        class="navbar fixed-top navbar-expand-md navbar-light bg-light py-3 box-shadow">
        <a href="index.php" class="navbar-brand">
            <img src="assets/img/caravan.svg" alt="Logo Caravan">
        </a>
        <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        id="navbarDropdown"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false">
                        Locais
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="pages/locais/california.php">California</a>
                        <a class="dropdown-item" href="pages/locais/paris.php">Paris</a>
                        <a class="dropdown-item" href="pages/locais/dublin.php">Dublin</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="pages/planos.php" class="nav-link">
                        Planos
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/contato.php" class="nav-link">
                        Contato
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="modal" data-target="#modalLogin">
                        Login
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/inscricao.php" class="btn btn-outline-primary ml-md-2">
                        Inscreva-se
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- FIM HEADER AREA -->

    <!-- CARROSEL AREA -->
    <section class="container-fluid">
        <div class="row bg-dark text-white">
            <div class="col-lg-7 p-0">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="assets/img/california.jpg" alt="California">
                            <div class="carousel-caption">
                                <h3 class="display-4">California</h3>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/img/dublin.jpg" alt="Dublin">
                            <div class="carousel-caption">
                                <h3 class="display-4">Dublin</h3>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/img/paris.jpg" alt="Paris">
                            <div class="carousel-caption">
                                <h3 class="display-4">Paris</h3>
                            </div>
                        </div>
                    </div>
                    <a
                        class="carousel-control-prev"
                        href="#carouselExampleIndicators"
                        role="button"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a
                        class="carousel-control-next"
                        href="#carouselExampleIndicators"
                        role="button"
                        data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Próximo</span>
                    </a>
                </div>
            </div>

            <div class="col-lg-5 p-4 align-self-center">
                <h1 class="display-4">Realize a viagem do seu sonho</h1>
                <p class="lead">O melhor local para viajar é com a Caravan, mais de 5.000 excursões concluídas.</p>
                <form action="#">
                    <div class="input-group input-group-lg">
                        <input type="text" class="form-control" placeholder="Email">
                        <span class="input-group-append">
                            <button class="btn btn-primary" type="button">Inscreva-se</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- FIM CARROSEL AREA -->

    <!-- VANTAGENS AREA -->
    <section class="py-5 bg-light text-center">
        <div class="container">
            <div class="my-5">
                <span class="h6 d-block">TUDO DE MELHOR PRA VOCÊ</span>
                <h2 class="display-4 text-primary">Aproveite as vantagens</h2>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="d-flex justify-content-center icone">
                        <img src="assets/img/icones/passaporte.svg" alt="Passaporte">
                    </div>
                    <h3>Documentos</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris in mattis
                        purus. Phasellus ullamcorper elementum ipsum.</p>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="d-flex justify-content-center icone">
                        <img src="assets/img/icones/passagens.svg" alt="passagens">
                    </div>
                    <h3>Passagens</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris in mattis
                        purus. Phasellus ullamcorper elementum ipsum.</p>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="d-flex justify-content-center icone">
                        <img src="assets/img/icones/translado.svg" alt="translado">
                    </div>
                    <h3>Translado</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris in mattis
                        purus. Phasellus ullamcorper elementum ipsum.</p>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="d-flex justify-content-center icone">
                        <img src="assets/img/icones/praias.svg" alt="praias">
                    </div>
                    <h3>Praias</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris in mattis
                        purus. Phasellus ullamcorper elementum ipsum.</p>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="d-flex justify-content-center icone">
                        <img src="assets/img/icones/bagagens.svg" alt="bagagens">
                    </div>
                    <h3>Bagagens</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris in mattis
                        purus. Phasellus ullamcorper elementum ipsum.</p>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="d-flex justify-content-center icone">
                        <img src="assets/img/icones/turismo.svg" alt="turismo">
                    </div>
                    <h3>Turismo</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris in mattis
                        purus. Phasellus ullamcorper elementum ipsum.</p>
                </div>
            </div>
            <a href="pages/planos.php" class="btn btn-primary btn-lg mt-4">Comprar Plano</a>
        </div>
    </section>
    <!-- FIM VANTAGENS AREA -->

    <!-- TESTIMONIAL AREA -->
    <section class="img-quote p-md-5">
        <blockquote class="blockquote text-center text-white p-md-5 p-3">
            <p class="display-4">
                <em>
                    "A feliciduaide não está na estruaida que leiva a algum luigaire. A feliciduaide
                    é a proaipria estreida."
                </em>
            </p>
            <footer class="blockquote-footer text-white">Príncipe Ouro Negro</footer>
        </blockquote>
    </section>
    <!-- FIM TESTIMONIAL AREA -->

    <!-- DUVIDAS AREA -->
    <section class="container">
        <div class="my-5 text-center">
            <span class="h6 d-block">AINDA ESTÁ COM DÚVIDAS?</span>
            <h2 class="display-4 text-primary">Perguntas Frequentes</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 " id="perguntasFrequentes" data-children=".pergunta">
                <div class="pergunta py-2">
                    <a
                        class="lead"
                        data-toggle="collapse"
                        data-parent="#perguntasFrequentes"
                        href="#pergunta1"
                        aria-expanded="true"
                        aria-controls="pergunta1">➜ É possível cancelar a viagem?</a>
                    <div class="collapse show" id="pergunta1" role="tabpanel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris in mattis
                            purus. Phasellus ullamcorper elementum ipsum.</p>
                    </div>
                </div>
                <div class="pergunta py-2">
                    <a
                        class="lead"
                        data-toggle="collapse"
                        data-parent="#perguntasFrequentes"
                        href="#pergunta2"
                        aria-expanded="true"
                        aria-controls="pergunta2">➜ Qual a garantia que tenho se perde o voo?</a>
                    <div class="collapse" id="pergunta2" role="tabpanel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris in mattis
                            purus. Phasellus ullamcorper elementum ipsum.</p>
                    </div>
                </div>
                <div class="pergunta py-2">
                    <a
                        class="lead"
                        data-toggle="collapse"
                        data-parent="#perguntasFrequentes"
                        href="#pergunta3"
                        aria-expanded="true"
                        aria-controls="pergunta3">➜ Qual a principal forma de viagem?</a>
                    <div class="collapse" id="pergunta3" role="tabpanel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris in mattis
                            purus. Phasellus ullamcorper elementum ipsum.</p>
                    </div>
                </div>
                <div class="pergunta py-2">
                    <a
                        class="lead"
                        data-toggle="collapse"
                        data-parent="#perguntasFrequentes"
                        href="#pergunta4"
                        aria-expanded="true"
                        aria-controls="pergunta4">➜ Qual o melhor destino de viagem?</a>
                    <div class="collapse" id="pergunta4" role="tabpanel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris in mattis
                            purus. Phasellus ullamcorper elementum ipsum.</p>
                    </div>
                </div>
                <div class="pergunta py-2">
                    <a
                        class="lead"
                        data-toggle="collapse"
                        data-parent="#perguntasFrequentes"
                        href="#pergunta5"
                        aria-expanded="true"
                        aria-controls="pergunta5">➜ Vocês dão descontos para grupos grandes?</a>
                    <div class="collapse" id="pergunta5" role="tabpanel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris in mattis
                            purus. Phasellus ullamcorper elementum ipsum.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center my-4">
            <p class="small m-0">FALE CONOSCO PARA MAIS DÚVIDAS</p>
            <a href="pages/contato.php" class="btn btn-primary btn-lg">Entre em Contato</a>
        </div>
    </section>
    <!-- FIM DUVIDAS AREA -->

    <!-- FOOTER AREA -->
    <footer class="bg-dark text-white mt-5">
        <div class="container py-4">
            <div class="row">
                <div class="col-md-3 col-6">
                    <h4 class="h6">PÁGINAS</h4>
                    <ul class="list-unstyled">
                        <li>
                            <a href="pages/planos.php">Planos</a>
                        </li>
                        <li>
                            <a href="pages/contato.php">Contato</a>
                        </li>
                        <li>
                            <a href="pages/inscricao.php">Inscreva-se</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-3 col-6">
                    <h4 class="h6">LOCAIS</h4>
                    <ul class="list-unstyled">
                        <li>
                            <a href="pages/locais/california.php">California</a>
                        </li>
                        <li>
                            <a href="pages/locais/paris.php">Paris</a>
                        </li>
                        <li>
                            <a href="pages/locais/dublin.php">Dublin</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 col-6">
                    <h4 class="h6">DADOS DE CONTATO</h4>
                    <ul class="list-unstyled text-secondary">
                        <li>arnoldian2003@gmail.com</li>
                        <li>(13) 4002-8922</li>
                        <li>(13) 99715-2603</li>
                    </ul>
                </div>

                <div class="col-md-2 col-6">
                    <h4 class="h6">REDES SOCIAIS</h4>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#" class="btn btn-outline-secondary btn-block mb-2 btn-sm botaoSocial">Facebook</a>
                        </li>
                        <li>
                            <a href="#" class="btn btn-outline-secondary btn-block mb-2 btn-sm botaoSocial">Instagram</a>
                        </li>
                        <li>
                            <a href="#" class="btn btn-outline-secondary btn-block mb-2 btn-sm botaoSocial">Twitter</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <div class="bg-primary text-center py-3">
        <p class="text-white mb-0">Caravan 2017. Alguns direitos reservados.</p>
    </div>
    <!-- FIM FOOTER AREA -->

    <script type="text/javascript" src="assets/js/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/app.js"></script>
</body>
</php>