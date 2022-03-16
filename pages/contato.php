<!DOCTYPE html>
<head>
    <title>Caravan - Contato</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/style.css">
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
                        <small class="form-text text-muted">Esqueceu a senha?
                            <a href="#">Clique aqui.</a>
                        </small>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- FIM MODAL AREA -->

    <!-- HEADER AREA -->
    <nav
        class="navbar fixed-top navbar-expand-md navbar-light bg-light py-3 box-shadow">
        <a href="../index.php" class="navbar-brand">
            <img src="../assets/img/caravan.svg" alt="Logo Caravan">
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
                        <a class="dropdown-item" href="locais/california.php">California</a>
                        <a class="dropdown-item" href="locais/paris.php">Paris</a>
                        <a class="dropdown-item" href="locais/dublin.php">Dublin</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="planos.php" class="nav-link">
                        Planos
                    </a>
                </li>
                <li class="nav-item">
                    <a href="contato.php" class="nav-link active">
                        Contato
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="modal" data-target="#modalLogin">
                        Login
                    </a>
                </li>
                <li class="nav-item">
                    <a href="inscricao.php" class="btn btn-outline-primary ml-md-2">
                        Inscreva-se
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- FIM HEADER AREA -->

    <!-- FORMULARIO CONTATO -->
    <section class="container">
        <div class="my-5 text-center">
            <span class="h6 d-block">POSSUI ALGUMA DÚVIDA?</span>
            <h1 class="display-4 text-primary">Fale Conosco</h1>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <form action="#" class="bg-light rounded p-4 box-shadow">
                    <div class="form-group">
                        <label for="clienteNome">Nome</label>
                        <input
                            type="text"
                            class="form-control"
                            id="clienteNome"
                            placeholder="Digite seu Nome...">
                    </div>
                    <div class="form-group">
                        <label for="clienteEmail">Email</label>
                        <input
                            type="email"
                            class="form-control"
                            id="clienteEmail"
                            placeholder="Digite seu Email...">
                    </div>
                    <div class="form-group">
                        <label for="clienteMensagem">Mensagem</label>
                        <textarea id="clienteMensagem" class="form-control" rows="8"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar mensagem</button>
                </form>
            </div>
            <div class="col-lg-6">
                <div class="bg-light rounded p-4 box-shadow">
                    <h2 class="h6">NOSSO ENDEREÇO</h2>
                    <a href="#">
                        <img
                            class="img-fluid box-shadow rounded mb-4"
                            src="../assets/img/mapa.png"
                            alt="Mapa do endereço">
                    </a>
                    <div class="text-center">
                        <h2 class="h6">DADOS DE CONTATO</h2>
                        <ul class="list-unstyled text-secondary">
                            <li>arnoldian2003@gmail.com</li>
                            <li>(13) 4002-8922</li>
                            <li>(13) 99715-2603</li>
                        </ul>
                        <h2 class="h6">REDES SOCIAIS</h2>
                        <ul class="list-unstyled offset-3">
                            <li>
                                <a href="#" class="btn btn-outline-secondary btn-block mb-2 botaoSocialContato">Facebook</a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-outline-secondary btn-block mb-2 botaoSocialContato">Instagram</a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-outline-secondary btn-block mb-2 botaoSocialContato">Twitter</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- FIM FORMULARIO CONTATO -->

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
                                <a href="../planos.php">Planos</a>
                            </li>
                            <li>
                                <a href="../contato.php">Contato</a>
                            </li>
                            <li>
                                <a href="../inscricao.php">Inscreva-se</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-6">
                        <h4 class="h6">LOCAIS</h4>
                        <ul class="list-unstyled">
                            <li>
                                <a href="locais/california.php">California</a>
                            </li>
                            <li>
                                <a href="locais/paris.php">Paris</a>
                            </li>
                            <li>
                                <a href="locais/dublin.php">Dublin</a>
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

        <script type="text/javascript" src="../assets/js/jquery-3.2.1.slim.min.js"></script>
        <script type="text/javascript" src="../assets/js/popper.min.js"></script>
        <script type="text/javascript" src="../assets/js/bootstrap.js"></script>
        <script type="text/javascript" src="../assets/js/app.js"></script>
    </body>
</html>