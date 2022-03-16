<!DOCTYPE html>
<head>
    <title>Caravan - Planos</title>
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
                    <a href="planos.php" class="nav-link active">
                        Planos
                    </a>
                </li>
                <li class="nav-item">
                    <a href="contato.php" class="nav-link">
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

    <!-- PLANOS AREA -->
    <section class="container">
        <div class="text-center my-5">
            <span class="h6 d-block">
                SUA VIAGEM, SEU PLANO
            </span>
            <h1 class="display-4 text-primary">Escolha o Plano</h1>
        </div>
        <div class="row">
            <div class="col-md mb-5">
                <div class="bg-light rounded p-4 box-shadow">
                    <h2>Gold</h2>
                    <ul class="lista-plano list-unstyled">
                        <li>➜ 30 dias de viagem</li>
                        <li>➜ 3 destinos diferentes</li>
                        <li>➜ Tudo pago pela empresa</li>
                        <li>➜ Ingressos para festas</li>
                    </ul>
                    <form action="#">
                        <div class="form-group">
                            <select name="inputCidades" id="inputCidades" class="form-control bg-light">
                                <option value="0" selected disabled>Selecione a cidade...</option>
                                <option value="1">California</option>
                                <option value="2">Paris</option>
                                <option value="3">Dublin</option>
                            </select>
                        </div>
                    </form>
                    <div class="row align-items-center mt-4">
                        <div class="col">
                            <a href="inscricao.php" class="btn btn-primary btn-lg btn-block">Comprar Plano</a>
                        </div>
                        <div class="col">
                            <span class="h4">R$5.000</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md mb-5">
                <div class="bg-light rounded p-4 box-shadow">
                    <h2>Platinum
                        <span class="badge badge-success">Novo</span>
                    </h2>
                    <ul class="lista-plano list-unstyled">
                        <li>➜ 60 dias de viagem</li>
                        <li>➜ 6 destinos diferentes</li>
                        <li>➜ Tudo pago pela empresa</li>
                        <li>➜ Ingressos para festas</li>
                    </ul>
                    <form action="#">
                        <div class="form-group">
                            <select name="inputCidades" id="inputCidades" class="form-control bg-light">
                                <option value="0" selected disabled>Selecione a cidade...</option>
                                <option value="1">Araçapuca da Terra</option>
                                <option value="2">Cubatão</option>
                                <option value="3">Bangú</option>
                                <option value="4">Osasco</option>
                                <option value="5">Botucatu</option>
                                <option value="6">Pindamonhangaba</option>
                            </select>
                        </div>
                    </form>
                    <div class="row align-items-center mt-4">
                        <div class="col">
                            <a href="inscricao.php" class="btn btn-primary btn-lg btn-block">Comprar Plano</a>
                        </div>
                        <div class="col">
                            <span class="h4">R$7.500</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FIM PLANOS AREA -->

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