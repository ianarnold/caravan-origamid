<!DOCTYPE html>
<head>
    <title>Caravan - California</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
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
        <a href="../../index.php" class="navbar-brand">
            <img src="../../assets/img/caravan.svg" alt="Logo Caravan">
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
                        class="nav-link dropdown-toggle active"
                        href="#"
                        id="navbarDropdown"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false">
                        Locais
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="california.php">California</a>
                        <a class="dropdown-item" href="paris.php">Paris</a>
                        <a class="dropdown-item" href="dublin.php">Dublin</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="../planos.php" class="nav-link">
                        Planos
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../contato.php" class="nav-link">
                        Contato
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="modal" data-target="#modalLogin">
                        Login
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../inscricao.php" class="btn btn-outline-primary ml-md-2">
                        Inscreva-se
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- FIM HEADER AREA -->

    <!-- GALERIA AREA -->
    <section class="container">
        <div class="text-center my-5">
            <span class="h6 d-block">
                O MELHOR DESTINO DA SUA VIAGEM
            </span>
            <h1 class="display-4 text-primary">Descubra California</h1>
        </div>
        <div class="row">
            <div class="col-md">
                <img
                    src="../../assets/img/local/foto-4.jpg"
                    alt="Foto 4"
                    class="img-fluid mb-4">
                <img
                    src="../../assets/img/local/foto-3.jpg"
                    alt="Foto 3"
                    class="img-fluid mb-4">
                <img
                    src="../../assets/img/local/foto-6.jpg"
                    alt="Foto 6"
                    class="img-fluid mb-4">
            </div>
            <div class="col-md">
                <img
                    src="../../assets/img/local/foto-7.jpg"
                    alt="Foto 7"
                    class="img-fluid imagemVertical mb-4">
                <img
                    src="../../assets/img/local/foto-1.jpg"
                    alt="Foto 1"
                    class="img-fluid mb-4">
            </div>
            <div class="col-md">
                <img
                    src="../../assets/img/local/foto-2.jpg"
                    alt="Foto 2"
                    class="img-fluid mb-4">
                <img
                    src="../../assets/img/local/foto-5.jpg"
                    alt="Foto 5"
                    class="img-fluid imagemVertical mb-4">
            </div>
        </div>
    </section>
    <!-- FIM GALERIA AREA -->

    <!-- TICKETS AREA -->
    <section class="container">
        <div class="text-center my-5">
            <span class="h6 d-block">
                DESCUBRA O QUE ACONTECE NA CIDADE
            </span>
            <h1 class="display-4 text-primary">Próximos eventos</h1>
        </div>
        <table class="table table-hover text-center table-responsive-md">
            <thead>
                <tr>
                    <th scope="col">Data</th>
                    <th scope="col">Evento</th>
                    <th scope="col">Local</th>
                    <th scope="col">Ticket</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">23/10</th>
                    <td>Cleyton Rasta</td>
                    <td>Tumiaru</td>
                    <td>
                        <a href="#" class="btn btn-outline-secondary btn-sm">Comprar Ticket</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">23/10</th>
                    <td>Cleyton Rasta</td>
                    <td>Tumiaru</td>
                    <td>
                        <a href="#" class="btn btn-outline-secondary btn-sm">Comprar Ticket</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">23/10</th>
                    <td>Cleyton Rasta</td>
                    <td>Tumiaru</td>
                    <td>
                        <a href="#" class="btn btn-outline-secondary btn-sm">Comprar Ticket</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">23/10</th>
                    <td>Cleyton Rasta</td>
                    <td>Tumiaru</td>
                    <td>
                        <a href="#" class="btn btn-outline-secondary btn-sm">Comprar Ticket</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">23/10</th>
                    <td>Cleyton Rasta</td>
                    <td>Tumiaru</td>
                    <td>
                        <a href="#" class="btn btn-outline-secondary btn-sm">Comprar Ticket</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">23/10</th>
                    <td>Cleyton Rasta</td>
                    <td>Tumiaru</td>
                    <td>
                        <a href="#" class="btn btn-outline-secondary btn-sm">Comprar Ticket</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </section>
    <!-- FIM TICKETS AREA -->

    <!-- FOOTER AREA -->
    <footer class="bg-dark text-white">
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
                            <a href="california.php">California</a>
                        </li>
                        <li>
                            <a href="paris.php">Paris</a>
                        </li>
                        <li>
                            <a href="dublin.php">Dublin</a>
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

    <script type="text/javascript" src="../../assets/js/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="../../assets/js/popper.min.js"></script>
    <script type="text/javascript" src="../../assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="../../assets/js/app.js"></script>
</body>
</html>