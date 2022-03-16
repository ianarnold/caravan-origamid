<!DOCTYPE html>
<head>
    <title>Caravan - Inscreva-se</title>
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
                    <a href="inscricao.php" class="btn btn-outline-primary ml-md-2 active">
                        Inscreva-se
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- FIM HEADER AREA -->

    <!-- FORMULARIO INSCRIÇÃO-->
    <section class="container">
        <div class="my-5 text-center">
            <span class="h6 d-block">PROGRAME A VIAGEM DO SEU SONHO</span>
            <h2 class="display-4 text-primary">INSCREVA-SE</h2>
        </div>
        <div class="row">
            <form action="#" class="col-lg-6">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputNome">Nome</label>
                        <input
                            type="text"
                            id="inputNome"
                            class="form-control"
                            placeholder="Nome completo *">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputCPF">CPF</label>
                        <input
                            type="text"
                            id="inputCPF"
                            class="form-control"
                            placeholder="xxx.xxx.xxx-xx *">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail">Email</label>
                        <input type="email" id="inputEmail" class="form-control" placeholder="Email *">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputSenha">Senha</label>
                        <input
                            type="password"
                            id="inputSenha"
                            class="form-control"
                            placeholder="Senha *">
                    </div>
                    <div class="form-group col-12">
                        <label for="inputEndereco">Endereço</label>
                        <input
                            type="text"
                            id="inputEndereco"
                            class="form-control"
                            placeholder="Nome da rua, Nº - Bairro *">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputCidade">Cidade</label>
                        <input type="text" id="inputCidade" class="form-control" placeholder="Cidade *">
                    </div>
                    <div class="form-group col-md-3 col-6">
                        <label for="inputEstado">Estado</label>
                        <select name="inputEstado" id="inputEstado" class="form-control">
                            <option selected="selected" disabled="disabled">Escolha...</option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3 col-6">
                        <label for="inputCEP">CEP</label>
                        <input type="text" id="inputCEP" class="form-control" placeholder="xxxxx-xxx *">
                    </div>
                </div>
                <div class="bg-light rounded box-shadow p-3 form-group">
                    <h2 class="h6 text-primary">FORMA DE PAGAMENTO</h2>
                    <nav class="nav btn-group mb-3" id="formaPagamento" role="tablist">
                        <button
                            type="button"
                            class="btn btn-secondary active btn-sm"
                            id="nav-cartao-tab"
                            data-toggle="tab"
                            href="#nav-cartao"
                            role="tab"
                            aria-controls="nav-cartao"
                            aria-selected="true">Cartão de crédito</button>
                        <button
                            type="button"
                            class="btn btn-secondary btn-sm"
                            id="nav-boleto-tab"
                            data-toggle="tab"
                            href="#nav-boleto"
                            role="tab"
                            aria-controls="nav-boleto"
                            aria-selected="false">Boleto Bancário</button>
                    </nav>
                    <div class="tab-content" id="formaPagamentoConteudo">
                        <div
                            class="tab-pane fade show active"
                            id="nav-cartao"
                            role="tabpanel"
                            aria-labelledby="nav-cartao-tab">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputNomeCartao">Nome no Cartão</label>
                                    <input
                                        type="text"
                                        id="inputNomeCartao"
                                        class="form-control"
                                        placeholder="Nome impresso no Cartão *">
                                </div>
                                <div class="form-group col-md-3 col-6">
                                    <label for="inputExpiraMes">Mês</label>
                                    <select name="inputExpiraMes" id="inputExpiraMes" class="form-control">
                                        <option selected="selected" disabled="disabled">Expira em...</option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                        <option value="5">05</option>
                                        <option value="6">06</option>
                                        <option value="7">07</option>
                                        <option value="8">08</option>
                                        <option value="9">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3 col-6">
                                    <label for="inputExpiraAno">Ano</label>
                                    <select name="inputExpiraAno" id="inputExpiraAno" class="form-control">
                                        <option selected="selected" disabled="disabled">Expira em...</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                        <option value="2026">2026</option>
                                        <option value="2027">2027</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputNumeroCartao">Nº do cartão</label>
                                    <input
                                        type="text"
                                        id="inputNumeroCartao"
                                        class="form-control"
                                        placeholder="0000 0000 0000 000 *">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputCodigoCartao">Código de Segurança</label>
                                    <input
                                        type="text"
                                        id="inputCodigoCartao"
                                        class="form-control"
                                        placeholder="XXX *">
                                </div>
                            </div>
                        </div>
                        <div
                            class="tab-pane fade"
                            id="nav-boleto"
                            role="tabpanel"
                            aria-labelledby="nav-boleto-tab">
                            <p class="lead">Clique em contratar plano que enviaremos um boleto para o seu e-mail.</p>
                        </div>
                    </div>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        Concordo com os termos e
                        <a href="#">Termos e condições</a>
                    </label>
                </div>
                <button type="submit" class="btn btn-primary btn-lg mt-2">Contratar Plano</button>
            </form>
            <div class="col-lg-5 mx-auto order-first order-lg-1 mb-5">
                <h2 class="h6 text-primary">PLANO ESCOLHIDO</h2>  
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
                                <option value="0" selected="selected" disabled="disabled">Selecione a cidade...</option>
                                <option value="1">California</option>
                                <option value="2">Paris</option>
                                <option value="3">Dublin</option>
                            </select>
                        </div>
                    </form>
                    <div class="row mt-4">
                        <div class="col">
                            <span class="h4">R$5.000</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FIM FORMULARIO INSCRIÇÃO-->

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